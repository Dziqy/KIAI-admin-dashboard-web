<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\Asatidz;
use App\Models\Location;
use App\Models\Pengajuan;



class DashboardPengajuanController extends Controller
{
    public function index()
    {
        $this->authorize('takmir');

        return view('dashboard.asatidz.form_pengajuan', [
            'asatidz' => Asatidz::all()
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'deskripsi'=> 'required|max:255'
        ]);
        $validatedData['user_id'] = auth()->user()->id;

        Pengajuan::create($validatedData);
        return redirect('/dashboard/asatidz/ajukan')->with('success', 'Pengajuan Asatidz Telah di Ajukan');

        // $validatedData = $request->validate([
        //     'judul' => 'required|max:255',
        //     'asatidz' => 'required|max:255',
        //     'tanggal' => 'required|max:255',
        //     'waktu' => 'required|max:255',
        //     'jenis' => 'required|max:255',
        //     'poster' => 'required|image|file',
        //     'deskripsi' => 'max:255',
        //     'streaming' => 'max:255'
        // ]);

        // if($request->file('poster')){
        //     $validatedData['poster'] = $request->file('poster')->store('poster-images');
        // }

        // $validatedData['user_id'] = auth()->user()->id;

        // Kajian::create($validatedData);
        // return redirect('/dashboard/kajian')->with('success', 'New kajian has been added');
    }
}
