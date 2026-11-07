<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

use App\Models\User;
use App\Models\Indoregion;
use App\Models\Location;

class RegisterController extends Controller
{
    public function index(){
        // Get semua data
        $provinces = Province::all();
        // $regencies = Regency::all();
        // $districts = District::all();
        // $villages = Village::all();

        // return view('register.index', compact('provinces', 'regencies', 'districts', 'villages'));
        return view('register.index', compact('provinces'));
    }

    public function getkabupaten(request $request){
        $id_provinsi = $request->id_provinsi;

        $regencies = Regency::where('province_id', $id_provinsi)->get();

        foreach($regencies as $kabupaten){
            echo "<option value='$kabupaten->id'>$kabupaten->name</option>";
        };
    }

    public function getkecamatan(request $request){
        $id_kabupaten = $request->id_kabupaten;

        $districts = District::where('regency_id', $id_kabupaten)->get();

        foreach($districts as $kecamatan){
            echo "<option value='$kecamatan->id'>$kecamatan->name</option>";
        };
    }

    public function getdesa(request $request){
        $id_kecamatan = $request->id_kecamatan;

        $villages = Village::where('district_id', $id_kecamatan)->get();

        foreach($villages as $desa){
            echo "<option value='$desa->id'>$desa->name</option>";
        };
    }

    public function store(Request $request){
        // return $request->all();
        $takmir = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:255',
            'confirm' => 'same:password'
        ]);
        
        $takmir['password'] = Hash::make($takmir['password']);

        User::create($takmir);
        // dd("registrasi berhasil");

        // $regional = $request->validate([
        //     'province_id' => 'required',
        //     'regency_id' => 'required',
        //     'district_id' => 'required',
        //     'village_id' => 'required'
        // ]);
        // Indoregion::create($regional);

        $lokasi = $request->validate([
            'nama' => 'required|max:255',
            'jenis' => 'required|max:255',
            'alamat' => 'required|max:255',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required'
        ]);
        $user = User::with(['location'])->firstWhere('email', $takmir['email']);
        $lokasi['user_id'] = $user->id;

        Location::create($lokasi);
        
        
        $request->session()->flash('success', 'Registrasi berhasil, Silahkan Login!');
        return redirect('/login');
    }

}
