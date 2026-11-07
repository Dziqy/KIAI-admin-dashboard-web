<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Location;
use App\Models\Kajian;
use App\Models\Asatidz;
use App\Models\Jamaah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index', [
            'user' => User::find(auth()->user()->id),
            'jumlah_kajian' => Kajian::latest()->where('user_id', auth()->user()->id)->count(),
            'kajian_libur' => Kajian::latest()->where('user_id', auth()->user()->id)
                                            ->where('status', 0)
                                            ->count(),
            'total_majelis' => User::latest()->where('status', 1)->count(),
            'total_jamaah' => Jamaah::latest()->count(),
            'pendaftar' => User::latest()->where('status', 0)->count(),
            'total_asatidz' => Asatidz::latest()->count(),
            'locations' => Location::all(),
            'notif_register' => User::latest()->where('status', 0)->count(),
         ]);
    }
}

