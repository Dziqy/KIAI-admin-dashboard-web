<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kajian;
use App\Models\Asatidz;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardKajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('takmir');
        return view('dashboard.kajian.index', [
            'kajian' => kajian::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get(),
            'location' => Location::find(auth()->user()->id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('takmir');
        return view('dashboard.kajian.create',[
            'asatidz' => Asatidz::all()
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
            'judul' => 'required|max:255',
            'asatidz_id' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'waktu' => 'required|max:255',
            'jenis' => 'required|max:255',
            'poster' => 'required|image|file',
            'deskripsi' => 'max:255',
            'streaming' => 'max:255'
        ]);

        if($request->file('poster')){
            $validatedData['poster'] = $request->file('poster')->store('poster-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Kajian::create($validatedData);
        return redirect('/dashboard/kajian')->with('success', 'New kajian has been added');
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
    public function edit(Kajian $kajian)
    {
        $this->authorize('takmir');
        return view('dashboard.kajian.edit', [
            'kajian' => $kajian,
            'asatidz' => Asatidz::all()
        ]);
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
            'judul' => 'required|max:255',
            'asatidz_id' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'waktu' => 'required|max:255',
            'jenis' => 'required|max:255',
            'poster' => 'image|file',
            'deskripsi' => 'max:255',
            'streaming' => 'max:255'
        ]);

        if($request->file('poster')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['poster'] = $request->file('poster')->store('poster-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

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
    public function destroy(Kajian $kajian)
    {
        if($kajian->poster){
            Storage::delete($kajian->image);
        }

        Kajian::destroy($kajian->id);
        return redirect('/dashboard/kajian')->with('success', 'One Kajian has been deleted');
    }

    public function ada(Kajian $kajian)
    {
        $validatedData['status'] = 1;
        Kajian::where('id', $kajian->id)
            ->update($validatedData);
        return redirect('/dashboard/kajian')->with('success', '1 kajian di ubah menjadi ada');
    }
    public function libur(Kajian $kajian)
    {
        $validatedData['status'] = 0;
        Kajian::where('id', $kajian->id)
            ->update($validatedData);
        return redirect('/dashboard/kajian')->with('success', '1 kajian di ubah menjadi libur');
    }
}