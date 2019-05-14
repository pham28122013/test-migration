<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAdmin (){
        $admin = Admin::all();
        return response()->json($admin);
    }

}
