<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{

    public function home() {
        $name_list = [
            'Tanvir',
            'Tanjin',
            'Toriqul',
            'Issrat'
        ];

        return view('home', [
            'names' => $name_list
        ]);
    }

    public function blog(){
        return view('blog');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
