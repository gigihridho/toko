<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Exception;

use Midtrans\Snap;
use Midtrans\Config;

use App\Cart;
use App\Transaction;
use App\TransactionDetail;
use App\User;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function process(Request $request){
        $user = Auth::user();
        $user->update($request->except('total_price'));

        //proses checkout
        $code = 'STORE-' . mt_rand(0000,9999);
        $carts = Cart::with(['product','user'])
                ->where('users_id',Auth::user()->id)
                ->get();

        $transaction = Transaction::create([
            'users_id' => Auth::user()->id,
            'insurance_price' => 0,
            'shipping_price' => 0,
            'total_price' => $request->total_price,
            'transaction_status' => 'PENDING',
            'code' => $code
        ]);

        foreach ($carts as $cart) {
            $trx = 'TRX-' . mt_rand(00000,99999);

            TransactionDetail::create([
                'transactions_id' => $transaction->id,
                'products_id' => $cart->product->id,
                'price' => $cart->product->price,
                'shipping_status' => 'PENDING',
                'resi' => '',
                'code' => $trx
            ]);
        }

        Cart::where('users_id',Auth::user()->id)->delete();
        //konfig midtrans

        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        //buat array to send midtrans
        $midtrans = array(
            'transaction_details' => array(
                'order_id' => $code,
                'gross_amount' => (int) $request->total_price,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ),
            'enabled_payments' => array(
                'gopay', 'bni_va','bank_transfer'
            ),
            'vtweb' => []
        );
        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;

            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
          }
          catch (Exception $e) {
            echo $e->getMessage();
          }
    }

    public function callback(Request $request){

    }
}
