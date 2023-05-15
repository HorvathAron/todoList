<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\QueryRepositories\TodoListRepository;

class TodoListController extends Controller
{
    /**
     * Display a listing of the tasks.
     */
    function getAllToDo(Request $request)
    {
        $response = [
            'Tasks' => TodoListRepository::GetAllTasks()
        ];

        return response($response, Response::HTTP_OK);
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
