<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $siswa = siswa::all();
        return view('siswa.index', compact('siswa'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // untuk menampilkan form tambah data siswa
        
        return view('siswa.tambahsiswa');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedStore = $request->validate([
            'nisn' => 'required|numeric|digits:10',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);

        siswa::create($request->all());
        return redirect()->route('datasiswa.index')->with('alert', 'Data Siswa ' . $request->nama . ' berhasil ditambahkan!');
    
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
    public function edit($id)
    {

        $getSiswa = siswa::find($id);
        return view('siswa.editsiswa', compact('getSiswa'));

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

        $validatedStore = $request->validate([
            'nisn' => 'required|numeric|digits:10',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);

        siswa::updateOrCreate(['id' => $id], request()->all());
        return redirect()->route('datasiswa.index')->with('alert', 'Data Siswa ' . $request->nama . ' berhasil diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $siswa = siswa::find($id);
        $siswa->delete();

        return redirect()->route('datasiswa.index')->with('alert', 'Data berhasil dihapus!');

    }
}
