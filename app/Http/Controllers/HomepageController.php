<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $data = array('title' => 'Omah Batik 78');
        return view('homepage.index', $data);
    }

    public function login() {
        $data = array('title' => 'Login');
        return view('auth.login', $data);
    }

    public function register() {
        $data = array('title' => 'Registrasi');
        return view('auth.register', $data);
    }
    
    public function about() {
        $data = array('title' => 'Tentang Kami');
        return view('homepage.about', $data);
    }

}
