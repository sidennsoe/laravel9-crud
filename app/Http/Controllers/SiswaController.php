<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $siswa = Siswa::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $siswa = Siswa::paginate(5);
        }

        return view('siswa.index', compact(['siswa']));
    }

    public function tambah()
    {
        return view('siswa.tambah');
    }

    public function proses(Request $request)
    {
        Siswa::create($request->except(['_token', 'submit']));
        return redirect('/siswa');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        // dd($siswa);
        return view('siswa.edit', compact(['siswa']));
    }

    public function update($id, Request $request)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->except(['_token', 'submit']));
        return redirect('/siswa');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('siswa');
    }
}