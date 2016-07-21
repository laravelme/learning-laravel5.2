<?php

namespace App\Http\Controllers\be;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class BackendController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }
}
