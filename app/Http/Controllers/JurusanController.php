<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Storage;
use Validator;

class JurusanController extends Controller
{

    public function index()
    {
        //index
        $jurusan = Jurusan::latest()->get();
        return view('jurusan.index', compact('jurusan'));
    }


    public function create()
    {
        //create
        return view ('jurusan.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_jurusan' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',

        ]);

        $jurusan = new jurusan();
        $jurusan->nama_jurusan = $request->nama_jurusan;
         // image
         $image = $request->file('image');
         $image->storeAs('public/jurusans', $image->hashName());
         $jurusan->image = $image->hashName();
        $jurusan->save();
        return redirect()->route('jurusan.index');
    }

    public function show($id)
    {
        //show
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.show', compact('jurusan'));
    }

    public function edit($id)
    {
        //edit
        $jurusan = jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
{
    // Validate form
    $request->validate([
        'nama_jurusan' => 'required',
        'image' => 'image|file|max:1024'
    ]);

    $jurusan=jurusan::findOrFail($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        //upload jurusan
        $image=$request->file('image');
        $image->storeAs('public/jurusans', $image->hashName());

        // delete jurusan
        Storage::delete('public/jurusans/'. $jurusan->image);

    $jurusan->image=$image->hashName();
        $jurusan->save();
        return redirect()->route('jurusan.index');
    }



    public function destroy($id)
    {
        //delete
        $jurusan = Jurusan::findOrFail($id);
        Storage::delete('public/jurusans/' . $jurusan->image);
        $jurusan->delete();
        return redirect()->route('jurusan.index');

    }
}
