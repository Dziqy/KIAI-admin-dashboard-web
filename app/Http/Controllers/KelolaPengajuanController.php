<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Asatidz;
use App\Models\User;
use App\Models\Location;
use App\Models\Pengajuan;

class KelolaPengajuanController extends Controller
{
    public function index()
    {
        $this->authorize('admin');

        // $regencies = Regency::all();
        return view('dashboard.asatidz.kelola_pengajuan', [
            'pengajuan' => Pengajuan::all(),
            'notif_register' => User::latest()->where('status', 0)->count(),

        ]);
    }


    public function terima(Pengajuan $pengajuan)
    {
        $validatedData['name'] = $pengajuan->nama;
        $validatedData['deskripsi'] = $pengajuan->deskripsi;
        Asatidz::create($validatedData);
        Pengajuan::destroy($pengajuan->id);
        return redirect('/dashboard/kelola_pengajuan')->with('success', '1 asatidz telah di terima');
    }
    public function tolak(Pengajuan $pengajuan)
    {
        Pengajuan::destroy($pengajuan->id);
        return redirect('/dashboard/kelola_pengajuan')->with('success', '1 asatidz telah di tolak');
    }

}
