<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // return view('modules.home.home', [
        // 'title' => 'Home',
        // 'description' => 'welcome to home page.',
        // ]);
        
        $data = array();
        $data['title'] = "Sample if else";
        $data['npm'] = 232310028;
        return view('modules.home.home')->with("data", $data);
    }
}
