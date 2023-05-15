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
        if (!$request->has('content') || $request->content==null)
            return response(["message" => "Could not create task!"], Response::HTTP_NOT_FOUND);
        else
        {
            $response = ['Created' => TodoListRepository::createTask($request->content)];
            return response($response, Response::HTTP_CREATED);
        }
    }

    /**
     * Delete a specified task.
     */
    public function delete(Request $request)
    {
        if (!$request->has('id') || $request->id == null)
            return response(["message" => 'Error! No id was given!'], Response::HTTP_NOT_FOUND);
        else
        {
            $response = [TodoListRepository::deleteTask($request->id)];
            return response($response, Response::HTTP_OK);
        }
    }

    /**
     * Update the specified task in storage.
     */
    public function update(Request $request)
    {
        //ToDo
    }
}
