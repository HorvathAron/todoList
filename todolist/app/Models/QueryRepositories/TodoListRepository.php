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
        $id = DB::table("todolist")->insertGetId([
            "content"=>$content,
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        return "Task has been created!";
    }

    public static function deleteTask($id)
    {
        DB::table('todolist')
            ->where('id', '=', $id)
            ->delete();
        return "Task has been deleted!";
    }

    public static function updateTask($content,$id)
    {
        //Todo
    }

}
