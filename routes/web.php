<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;


// Main Page Route

Route::get('/', function(){
  return view('content.index');
});