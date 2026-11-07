<?php

namespace App\Http\Controllers;

use App\Models\Kajian;
use App\Models\User;
use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelolaRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        // $regencies = Regency::all();
        return view('dashboard.admin.kelola_register', [
            'locations' => Location::all(),
            'notif_register' => User::latest()->where('status', 0)->count(),
            // 'total_kajian' => Kajian::count(),
            // 'pendaftar' => User::latest()->where('status', 0)->count(),
            // 'total_asatidz' => Asatidz::latest()->where('status', 1)->count(),
            // 'locations' => Location::all()                              ->count(),
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
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        // $marker = Location::all();
        // $mark = $marker->firstWhere('latitude')

        return view('dashboard.admin.show_majelis', compact('provinces', 'regencies', 'districts', 'villages'), [
            'profil' => Location::find($id),
            'location' => Location::all(),
            'notif_register' => User::latest()->where('status', 0)->count(),
        ]);
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
    public function update(Request $request, $id)
    {
        //
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
        return redirect('/dashboard/kelola_register')->with('success', 'One Majelis has been deleted');
    }


    public function aktif(User $user)
    {
        $validatedData['status'] = 1;
        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/dashboard/kelola_register')->with('success', 'One Majelis has been activated');
    }
}
