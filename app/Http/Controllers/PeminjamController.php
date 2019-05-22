<?php

namespace App\Http\Controllers;

use App\Peminjam;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function __construct()

    {
         $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjams =  Peminjam::paginate(10);

        return view ('peminjam.indexpeminjam', ['peminjams' => $peminjams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('peminjam.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjam = new peminjam;
        $peminjam->nim = $request['nim'];
        $peminjam->nama = $request['nama'];
        $peminjam->jurusan = $request['jurusan'];
        $peminjam->buku = $request['buku'];
        $peminjam->save();

        return redirect('/peminjams');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjam $peminjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjam = Peminjam::find($id);

        return view('peminjam.edit', [ 'peminjams' => $peminjam ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peminjam = Peminjam::find($id);
        $peminjam->nim = $request['nim'];
        $peminjam->nama = $request['nama'];
        $peminjam->jurusan = $request['jurusan'];
        $peminjam->buku = $request['buku'];
        $peminjam->update();
        return redirect('/peminjams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjam = Peminjam::where('id',$id);
        $peminjam->delete();

        return redirect('/peminjams');
    }
}
