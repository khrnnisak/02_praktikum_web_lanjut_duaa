<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }
    
    public function about() {
        return "Nama : Inda Khoirun Nisak <br>
            Nim : 2041720020";
    }
    
    public function article($id) {
        return "Ini adalah halaman artikel dengan id ".$id;
    }
    
}