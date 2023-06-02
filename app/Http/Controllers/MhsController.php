<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    protected $primaryKey = 'nim';
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $data = $request->all();
        Mahasiswa::create($data);
        echo "Data Berhasil Tersimpan!" . PHP_EOL;

        return redirect()->route('mahasiswa.index');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('mahasiswa.index');

    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> delete();

        return redirect()->route('mahasiswa.index');
    }
}