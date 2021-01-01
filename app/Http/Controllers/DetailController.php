<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Undocumented function
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        return view('pages.detail');
    }
}
