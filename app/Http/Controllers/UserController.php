<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Models/User;

class UserController extends Controller
{
    public function index() {

        $users = User::all();
        return view('users.index', ['users' => $user]);
    }

    public function tambah() {
        return.view('user.tambah');
    }

    public function lihat() {
        return.view('user.lihat');
    }
}
