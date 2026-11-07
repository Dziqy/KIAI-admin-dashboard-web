<?php

namespace App\Http\Controllers;

use App\Models\Asatidz;
use App\Models\User;
use Illuminate\Http\Request;

class KelolaAsatidzController extends Controller
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
        return view('dashboard.asatidz.kelola_asatidz', [
            'asatidz' => Asatidz::all(),
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
        $this->authorize('admin');
        return view('dashboard.asatidz.create_asatidz', [
            'notif_register' => User::latest()->where('status', 0)->count(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'deskripsi' => 'required|max:255',
        ]);

        Asatidz::create($validatedData);
        return redirect('/dashboard/kelola_asatidz')->with('success', 'new asatidz has been updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asatidz  $asatidz
     * @return \Illuminate\Http\Response
     */
    public function show(Asatidz $asatidz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asatidz  $asatidz
     * @return \Illuminate\Http\Response
     */
    public function edit(Asatidz $kelola_asatidz)
    {
        $this->authorize('admin');
        return view('dashboard.asatidz.edit_asatidz', [
            'asatidz' => $kelola_asatidz,
            'notif_register' => User::latest()->where('status', 0)->count(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asatidz  $asatidz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asatidz $kelola_asatidz)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'deskripsi' => 'required|max:255',
        ]);

        Asatidz::where('id', $kelola_asatidz->id)
            ->update($validatedData);
        return redirect('/dashboard/kelola_asatidz')->with('success', 'new asatidz has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asatidz  $asatidz
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Asatidz::destroy($id);
        return redirect('/dashboard/kelola_asatidz')->with('success', 'One Asatidz has been deleted');
    }
}
