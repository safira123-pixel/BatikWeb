<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index() {
        $data = array('title' => 'Worker_Dashboard');
        return view('worker.index', $data);
    }
}
