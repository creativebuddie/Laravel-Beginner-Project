<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class adminContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
      return view('admin/dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminUsers.createUsers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->name=$request->input('name');
        $admin->email=$request->input('email');
        $admin->password=$request->input('password');
        $admin->dob=$request->input('dob');
        $admin->_token=$request->input('_token');
        $admin->status='active';
        $admin->save();

        return redirect('adminUsers/show')->with('success','Record Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        $admin = Admin::all();
        return view('admin.adminUsers.manageUsers', ['admin'=>$admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Admin $admin)
    {
      $edit = Admin::find($request->id);
      return view('admin.adminUsers.editUsers', ['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
      $dataArray = array(
      "name"=>$request->input('name'),
      "email"=>$request->input('email'),
      "dob"=>$request->input('dob')
      );
      $update = Admin::where('id', $request->id)->update($dataArray);
      return redirect('adminUsers/show')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Admin $admin)
    {
        $delete = Admin::where('id', $request->id)->delete();
        return redirect('adminUsers/show')->with('success', 'Delete Successfully');
    }
}
