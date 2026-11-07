<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kajian;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelolaUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.admin.kelola_users', [
            'users' => User::orderBy('status', 'ASC')->get(),
            'notif_register' => User::latest()->where('status', 0)->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kajian $kajian)
    {
        $validatedData = $request->validate([
            'name' => 'max:255',
            'email' => 'max:255',
            'phone' => 'max:255'
        ]);

        $validatedData['status'] = 0;
        Kajian::where('id', $kajian->id)
            ->update($validatedData);
        return redirect('/dashboard/kajian')->with('success', 'Kajian has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Location::latest()->where('user_id', $id)->delete();
        Kajian::latest()->where('user_id', $id)->delete();
        return redirect('/dashboard/kelola_users')->with('success', 'One Majelis has been deleted');
    }

    public function aktif(User $user)
    {
        $validatedData['status'] = 1;
        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/dashboard/kelola_users')->with('success', 'One user has been activated');
    }
    public function nonAktif(User $user)
    {
        $validatedData['status'] = 0;
        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/dashboard/kelola_users')->with('success', 'One user has been Unactivated');
    }

    public function admin(User $user)
    {
        $validatedData['role'] = 1;
        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/dashboard/kelola_users')->with('success', 'One user has been changed');
    }
    public function takmir(User $user)
    {
        $validatedData['role'] = 0;
        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/dashboard/kelola_users')->with('success', 'One user has been changed');
    }
}
