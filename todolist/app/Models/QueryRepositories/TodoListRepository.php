<?php

namespace app\Models\QueryRepositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TodoListRepository
{
    public static function getAllTasks()
    {
        $tasks = DB::table('todolist')->get();
        return $tasks;
    }

    public static function createTask($content)
    {
        //Todo
    }

    public static function deleteTask($id)
    {
        //Todo
    }

    public static function updateTask($content,$id)
    {
        //Todo
    }

}
