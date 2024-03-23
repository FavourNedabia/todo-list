<?php

use App\Http\Controllers\Postcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", [Postcontroller::class,'index'])->name("index.task");
Route::post("/task/store", [Postcontroller::class,'store'])->name("store.task");
Route::get("/tasks/add", [Postcontroller::class,'add_task'])->name("add.task");
Route::get("/task/find", [Postcontroller::class,'find_task'])->name("find_task");
Route::get("/task/delete/{id}/confirm", [PostController::class, 'confirm_delete_task'])->name("confirm.delete.task");
Route::delete("/task/delete/{id}", [PostController::class, 'delete_task'])->name("delete.task");
Route::get("/task/update/{id}/confirm", [Postcontroller::class,'confirm_update_task'])->name("confirm.update.task");
Route::put("/task/update/{id}", [PostController::class, 'update_task'])->name("update.task");



