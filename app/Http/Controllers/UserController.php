<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //CRUD
    //CREATE -> create (formulari) -> store POST
    //RETRIVE -> LIST (index) i SHOW (mostra un item)
    //UPDATE -> edit (formulari) - update -> POST del formulari edició
    //DELETE -> destroy
    public function index()
    {
        return view('users',[
            'users' => User::all()
        ]);
    }
}
