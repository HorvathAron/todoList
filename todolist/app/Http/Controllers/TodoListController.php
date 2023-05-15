<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\QueryRepositories\TodolistRepository;

class TodolistController extends Controller
{
    /**
     * Display a listing of the tasks.
     */
    function getAllToDo(Request $request)
    {
        //ToDo
    }

    /**
     * Show the form for creating a new task.
     */
    public function create(Request $request)
    {
        //ToDo
    }

    /**
     * Delete a specified task.
     */
    public function delete(Request $request)
    {
        //ToDo
    }

    /**
     * Update the specified task in storage.
     */
    public function update(Request $request)
    {
        //ToDo
    }
}
