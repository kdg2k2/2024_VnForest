<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::orderByDesc('id')->get();
        return view('admin.user.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new User();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = $request->role;

        $data->save();
        return redirect('/admin/user')->with('success', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('admin.user.edit', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->username = $request->username;
        $data->email = $request->email;
        if ($request->password) {
            $data->password = Hash::make($request->password);
        }
        $data->role = $request->role;

        $data->save();
        return redirect('/admin/user')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect('/admin/user')->with('success', 'Xóa thành công');
    }

    public function editPass()
    {
        $data = User::findOrFail(Auth::user()->id);
        return view('admin.user.change_pass', [
            'data' => $data,
        ]);
    }

    public function updatePass(Request $request)
    {
        $data = User::findOrFail(Auth::user()->id);
        $data->username = $request->username;
        $data->email = $request->email;
        if ($request->password) {
            $data->password = Hash::make($request->password);
        }

        $data->save();
        return redirect('/admin/user/change_pass')->with('success', 'Cập nhật thành công');
    }
}
