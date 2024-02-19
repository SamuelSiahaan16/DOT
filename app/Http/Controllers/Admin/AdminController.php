<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('page.admin.home');
    }

    public function add()
    {
        return view('page.admin.add');
    }

    public function kategori()
    {
        return view('page.admin.addcategory');
    }
}