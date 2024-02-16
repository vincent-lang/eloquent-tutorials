<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    public function index()
    {
        $data = User::with('experience')->get();
        return view('user.index', compact('data'));
    }
}
