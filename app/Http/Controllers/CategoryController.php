<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Undocumented function
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        return view('pages.category');
    }
}
