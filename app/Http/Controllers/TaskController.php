<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //CRUD
    //CREATE -> create (formulari) -> store POST
    //RETRIVE -> LIST (index) i SHOW (mostra un item)
    //UPDATE -> edit (formulari) - update -> POST del formulari edició
    //DELETE -> destroy
    public function index()
    {
        return view('tasks',[
            'tasks' => Task::all()
        ]);
    }
}
