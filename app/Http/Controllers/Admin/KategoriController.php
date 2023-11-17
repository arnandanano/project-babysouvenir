<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriFormRequest;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori.index');
    }

    public function tambah()
    {
        return view('admin.kategori.tambah');
    }

    public function simpan(KategoriFormRequest $request)
    {
        $validatedData = $request->validated();

        $kategori = new Kategori;
        $kategori->nama = $validatedData['nama'];

        $kategori->status = $request->status == true ? '1':'0';
        $kategori->save();

        return redirect('admin/kategori')->with('message', 'Kategori Berhasil Ditambahkan.');
    }

    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(KategoriFormRequest $request, $kategori)
    {
        $validatedData = $request->validated();

        $kategori = Kategori::findOrFail($kategori);

        $kategori->nama = $validatedData['nama'];

        $kategori->status = $request->status == true ? '1':'0';
        $kategori->update();

        return redirect('admin/kategori')->with('message', 'Kategori Berhasil Diupdate.');
    }
}
