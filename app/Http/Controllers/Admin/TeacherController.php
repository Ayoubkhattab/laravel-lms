<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        //        $users = User::all();
//        $users = DB::table('role_user')
//            ->where('role_id', '=',2)
//            ->get();
//
        $users = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->select('users.*')
            ->where('role_id', '2')
            ->get();
//                dd($users);
//        foreach($users as $user) {
//            echo $user->name . '<br>';
//            echo $user->email . '<br>';
//            echo  $user->created_at . '<br>';
//        }
        return view('admin.teachers', compact('users'));
    }

    public function create()
    {
        return view('admin.add_teacher');
    }
    // add teacher
    public function store(Request $request)
    {
        $newteacher = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),
        ]);

        $newteacher->attachRole('teacher');
        // return redirect('admin.dashboard');
        return redirect('/admin/teacher');
    }

    //    public function add_teacher()
//    {
//        $rols = '2';
//        return view('admin.add_teacher', compact('rols'));
//    }



    public function edit($id)
    {
        $teacher = User::findorfail($id);
        return view('admin.teacher_edit', compact('teacher'));
    }


    public function update_teacher(Request $request, $id)
    {
        $teacher = User::findorfail($id);
        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // dd($teacher);

        return redirect()->route('all_teachers');
    }


    public function delete_teacher($id)
    {
        User::findorfail($id)->delete();
        return redirect()->route('all_teachers');
    }



}
