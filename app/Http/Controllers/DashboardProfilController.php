<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('takmir');
        
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        return view('dashboard.profil.index', compact('provinces', 'regencies', 'districts', 'villages'), [
            'profil' => Location::find(auth()->user()->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'nama' => 'required|max:255',
            'jenis' => 'required|max:255',
            'alamat' => 'required|max:255',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255'
        ];
        $location = Location::find(auth()->user()->id);

        $validatedData = $request->validate($rules);

        Location::where('id', $location->id)->update($validatedData);
        return redirect('/dashboard/profil')->with('success', 'Your Profil Majelis has been updated');
    }

}
