<?php

namespace App\Http\Controllers;

use App\Models\Permission;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(){
        $permission = Permission::all();
        return view ('teste', compact('permission'));
    }
}

