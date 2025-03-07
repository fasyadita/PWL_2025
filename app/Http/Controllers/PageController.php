<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PageController extends Controller {

    public function index(){
        return 'Selamat Datang Fasya';
    }

    public function about(){
        return 'Nama : Fasya Dita Nasahah || NIM : 2341760077';
    }

    Public function articles($Id){
        return 'Halaman Artikel dengan ID {$Id}';
    }
}