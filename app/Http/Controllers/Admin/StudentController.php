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
//                dd($users);
//        foreach($users as $user) {
//            echo $user->name . '<br>';
//            echo $user->email . '<br>';
//            echo  $user->created_at . '<br>';
//        }
        return view('admin.students', compact('users'));
    }


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


    public function edit($id)
    {
        $student = User::findorfail($id);
        return view('admin.student_edit', compact('student'));
    }


    public function update_student(Request $request, $id)
    {
        $student = User::findorfail($id);
        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // dd($teacher);

        return redirect()->route('all_students');
    }


    public function delete_student($id)
    {
        User::findorfail($id)->delete();
        return redirect()->route('all_students');
    }





















//    public function add_student()
//    {
////        return '1';
//        $rols = '3';
//        return view('admin.add_student', compact('rols'));
//    }

}
