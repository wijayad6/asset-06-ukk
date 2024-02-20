<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('dashboard_user',compact('buku'));
    }
}
