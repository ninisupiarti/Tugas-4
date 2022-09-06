<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showindex(){
        return view('frontview.index');
    }

    function showhome02(){
        return view('frontview.home-02');
    }

    function showhome03(){
        return view('frontview.home-03');
    }

    function showproductdetail(){
        return view('frontview.product-detail');
    }

    function showproduct(){
        return view('frontview.product');
    }

    function showshopingcart(){
        return view('frontview.shoping-cart');
    }

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showkategori(){
        return view('backview.kategori');
    }

    function showsupplier(){
        return view('backview.supplier');
    }

    function showcolegan(){
        return view('backview.colegan');
    }

    function showproduct2(){
        return view('backview.product2');
    }

    function showpromo(){
        return view('backview.promo');
    }

    function showuser(){
        return view('backview.user');
    }
}
