<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function dashboard(){

        $revisorRequests= User::where('is_revisor',NULL)->get();
        $writerRequests= User::where('is_writer',NULL)->get();

        return view('admin.dashboard',compact('revisorRequests', 'writerRequests'));
    }
}
