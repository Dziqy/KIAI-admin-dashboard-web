<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
Use Illuminate\Support\Facades\Storage;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.index', [
            // 'user' => User::latest()->where('id', auth()->user()->id)->get()
            // 'user' => User::firstWhere('id', auth()->user()->id)->get()
            'user' => User::find(auth()->user()->id),
            'notif_register' => User::latest()->where('status', 0)->count(),
        ]);
    }

    public function edit()
    {
        return view('dashboard.user.edit',[
            'user' => User::find(auth()->user()->id),
            'notif_register' => User::latest()->where('status', 0)->count(),
        ]);
    }

    public function update(Request $request){
        $rules = [
            'name' => 'required|max:255'
        ];
        $user = User::find(auth()->user()->id);
        if($request->phone != $user->phone){
            $rules['phone'] = 'required|unique:users';
        }
        if($request->email != $user->email){
            $rules['email'] = 'required|unique:users';
        }

        $validatedData = $request->validate($rules);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/dashboard/user')->with('success', 'Your personal info has been updated');
    }

    
}
