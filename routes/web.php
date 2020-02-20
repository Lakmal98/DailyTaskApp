<?php

Route::get('/', function () {

	$data = App\Task::all();
    return view('tasks')->with('tasks', $data);
});

Route::post('/saveTask', 'TaskController@store');

Route::get('/markascompleted/{id}', 'TaskController@UpdateTaskAsCompleted');

Route::get('/markasuncompleted/{id}', 'TaskController@UpdateTaskAsUncompleted');

Route::get('/deletetask/{id}', 'TaskController@deletetask');

Route::get('/updatetask/{id}', 'TaskController@updatetaskview');

Route::post('/updateTasks', 'TaskController@updatetask');