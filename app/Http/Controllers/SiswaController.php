<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Jurusan;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Storage;
use Validator;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa=Siswa::latest()->get();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas=Kelas::all();
        $jurusan=Jurusan::all();
        return view('siswa.create', compact('kelas', 'jurusan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // vallidate form
        $request->validate([
            'nama_siswa' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'tgl' => 'required',
            'tmpt' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $siswa = new Siswa();
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->jk = $request->jk;
        $siswa->agama = $request->agama;
        $siswa->tmpt = $request->tmpt;
        $siswa->tgl = $request->tgl;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->id_jurusan = $request->id_jurusan;

        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/siswas', $image->hashName());
        $siswa->image = $image->hashName();
        $siswa->save();

        return redirect()->route('siswa.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas=Kelas::all();
        $jurusan=Jurusan::all();
        $siswa=Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa', 'kelas', 'jurusan'));
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
        $this->validate($request, [
            'nama_siswa' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'tgl' => 'required',
            'tmpt' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $siswa=Siswa::findOrFail($id);
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->jk = $request->jk;
        $siswa->agama = $request->agama;
        $siswa->tmpt = $request->tmpt;
        $siswa->tgl = $request->tgl;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->id_jurusan = $request->id_jurusan;
        //upload siswa
            $image=$request->file('image');
            $image->storeAs('public/siswas', $image->hashName());

        // delete siswa
        Storage::delete('public/siswas/'. $siswa->image);

        $siswa->image=$image->hashName();
        $siswa->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
