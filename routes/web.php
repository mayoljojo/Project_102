<?php
//namespace App\Task;
 


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
	//$tasks = DB::table('tasks')->get();
	$tasks = App\Task::all();

    return view('tasks\tasks', compact('tasks'));
}); 

Route::get('/tasks/{id}', function ($id) {
	$task = DB::table('tasks')->find($id);
    return view('tasks.show', compact('task'));
}); 
