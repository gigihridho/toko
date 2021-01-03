@extends('layouts.dashboard')

@section('title')
    Store Dashboard Trasaction Detail
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">#STORE0999</h2>
            <p class="dashboard-subtitle">Transactions Details</p>
        </div>
        <div class="dashboard content" id="transactionDetails">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="/images/products-details-dashboard.png" class="w-100 mb-3" alt="">
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">Customer Name</div>
                                            <div class="products-subtitle">Anisa</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">Product Name</div>
                                            <div class="products-subtitle">Zhupa zhup</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">Date of Transaction</div>
                                            <div class="products-subtitle">29 January 2020</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">Payment Status</div>
                                            <div class="products-subtitle text-danger">Pending</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">Total Amount</div>
                                            <div class="products-subtitle">$300.000</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">Mobile</div>
                                            <div class="products-subtitle">086547767</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <h5>Shipping Information</h5>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">Address I</div>
                                            <div class="products-subtitle">Perum Bumi Graha</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">Address II</div>
                                            <div class="products-subtitle">Blok B.8</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">Province</div>
                                            <div class="products-subtitle">Central Java</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">City</div>
                                            <div class="products-subtitle">Surakarta</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">Postal Code</div>
                                            <div class="products-subtitle">57554</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="products-title">Country</div>
                                            <div class="products-subtitle">Indonesia</div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="products-title">Shipping Status</div>
                                            <select name="status" id="status" class="form-control" v-model="status">
                                                <option value="UNPAID">Unpaid</option>
                                                <option value="PENDING">Pending</option>
                                                <option value="SHIPPING">Shipping</option>
                                                <option value="SUCCESS">Success</option>
                                            </select>
                                        </div>
                                        <template v-if="status == 'SHIPPING'">
                                            <div class="col-md-3">
                                                <div class="products-title">Input Resi</div>
                                                <input type="text" class="form-control" name="resi" v-model="resi">
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-success btn-block mt-4">
                                                    Update Resi
                                                </button>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-success btn-lg mt-4">
                                    Save Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        var transactionDetails = new Vue({
            el: '#transactionDetails',
            data: {
                status: "SHIPPING",
                resi: "BD0123452352",
            },
        });
    </script>
@endpush
