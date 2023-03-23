<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {

        $users = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->select('users.*')
            ->where('role_id', '3')
            ->get();
//        dd($users);
//        foreach($users as $user) {
//            echo $user->name . '<br>';
//            echo $user->email . '<br>';
//            echo  $user->created_at . '<br>';
//        }
        return view('admin.students', compact('users'));
    }




//    public function index()
//    {
//
//        return view('admin.students');
//    }

    public function create()
    {
        return view('admin.add_student');
    }

    public function store(Request $request)
    {
        $newstudent = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),
        ]);

        $newstudent->attachRole('user');
        // return redirect('admin.dashboard');
        return redirect('/admin/students');
    }

//    public function add_student()
//    {
////        return '1';
//        $rols = '3';
//        return view('admin.add_student', compact('rols'));
//    }

}
