<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(){
        return view('admin.index');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function readStudents(){
        return view('admin.students');
    }

    public function createStudent(){

    }

    public function saveStudent(){

    }

    public function editStudent(){

    }

    public function updateStudent(){

    }
}
