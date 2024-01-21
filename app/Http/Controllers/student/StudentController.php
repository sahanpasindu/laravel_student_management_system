<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
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
        return view('student.index');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
