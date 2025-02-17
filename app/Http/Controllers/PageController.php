<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    } 

    public function about() {
        return 'Nama : Nova Eliza Maharani - NIM : 2341720252';
    }

    public function articles($Id) {
        return "Halaman Artikel dengan Id {$Id}";
    } 
}
