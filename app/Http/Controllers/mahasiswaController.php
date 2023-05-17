<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswaModel;

class mahasiswaController extends Controller
{
    public function index()
    {
        $mhs = mahasiswaModel::all();
        return view('mhs.index', [
            'mahasiswa' => $mhs
        ]);
    }

    public function indexTambah()
    {
        return view('mhs.tambah');
    }

    public function store(Request $request)
    {
        mahasiswaModel::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat
        ]);

        return redirect('/index-mhs');
    }

    public function edit($id)
    {
        $mhsedit = mahasiswaModel::where('id', $id)->first();
        return view('mhs.edit', [
            'mhs' => $mhsedit
        ]);
    }

    public function update(Request $request)
    {
        mahasiswaModel::where('id', $request->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat
        ]);

        return redirect('/index-mhs');
    }

    public function delete($id)
    {
        $data = mahasiswaModel::where('id', $id)->first();
        $data->delete();
        return redirect('/index-mhs');
    }
}
