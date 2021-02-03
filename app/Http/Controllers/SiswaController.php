<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        //untuk menampilkan view data
        return view('siswa', ['siswa' =>$siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();

        // return $siswa;

        return view('tambah', compact(['siswa']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $messages = [
            'required' => 'field tidak boleh kosong!',
            'min' => 'masukan setidaknya 3 karakter'
        ];
        $this->validate($request, [
            'nama' => 'required',
            'umur' => 'required'
        ],$messages);

        Siswa::create([
            'nama' => $request->nama,
            'umur' => $request->umur
        ]);

        return redirect()->route('siswa.view');
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
        $siswa = Siswa::findOrFail($id);

        return view('edit',compact(['siswa']));
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
         //update
        $messages = [
            'required' => 'field tidak boleh kosong!',
            'min' => 'masukan setidaknya 3 karakter'
        ];
        $this->validate($request, [
            'nama' => 'required',
            'umur' => 'required'
        ],$messages);

        $input = $request->all();
        $siswa = Siswa::findOrfail($id);
        $siswa->update($input);

        return redirect()->route('siswa.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Siswa::findOrFail($id)->delete();

        return redirect()->route('siswa.view');
    }
}
