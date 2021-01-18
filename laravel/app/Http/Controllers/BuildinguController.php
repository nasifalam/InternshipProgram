<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buildingu;
use App\Models\User;

class BuildinguController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('building-u.index', [
            'admins' => $users
        ]);

    }
}