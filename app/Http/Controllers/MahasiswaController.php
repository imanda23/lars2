<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\DosenWali;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::all();
        return view('welcome', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doswal = Dosenwali::all();
        return view('add', compact('doswal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        Mahasiswa::insert([
            'nama' => $request->Nama,
            'nim' => $request->Nim,
            'jenis_kelamin' => $request->Jenis_kelamin,
            'dosenwali_id' => $request->doswal,
            
        ]);

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mahasiswa::find($id);
        $doswal = Dosenwali::all();
        return view('edit', compact('data','doswal'));
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
        $data = Mahasiswa::find($id);
        
        $data->update([
            'nama' => $request->Nama,
            'nim' => $request->Nim,
            'jenis_kelamin' => $request->Jenis_kelamin,
            'dosenwali_id' => $request->doswal,
            
            
        ]);

        $data->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mahasiswa::find($id)->delete();
        return redirect('/');
    }
}
