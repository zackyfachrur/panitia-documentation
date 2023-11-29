<?php

namespace App\Http\Controllers;
use App\Models\Panitia;
use Illuminate\Http\Request;

class PanitiaController extends Controller
{
    public function index() {
        $panitia = Panitia::all();
        return view('panitia', ['panitia' => $panitia]);
    }
    public function tambah() {
        return view ('panitia_tambah');
    }

    public function store(Request $request) {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Panitia::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/panitia');
    }

    public function edit($id) {
        $panitia = Panitia::find($id);
        return view('panitia_edit', ['panitia' => $panitia]);
    }

    public function update($id, Request $request) {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $panitia = Panitia::find($id);
        $panitia->nama = $request->nama;
        $panitia->alamat = $request->alamat;
        $panitia->save();
        return redirect('/panitia');
    }

    public function delete($id) {
        $panitia = Panitia::find($id);
        $panitia->delete();
        return redirect()->back();
    }
}
