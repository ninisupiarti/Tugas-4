<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
    function index(){
        $data['list_produk'] = Produk::all();
        return view('/Produk.index', $data);
    }
    function create(){
        return view('/Produk.create');
    }
    function store(){
        $Produk = new Produk();
        $Produk->nama = request('nama');
        $Produk->harga = request('harga');
        $Produk->deskripsi = request('deskripsi');
        $Produk->stok = request('stok');
        $Produk->save();

        return redirect('Produk')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Produk $Produk){
        $data['Produk'] = $Produk;
        return view('Produk.show', $data);
    }
    function edit(Produk $Produk){
        $data['Produk'] = $Produk;
        return view('Produk.edit', $data);
    }
    function update(Produk $Produk){
        $Produk->nama = request('nama');
        $Produk->harga = request('harga');
        $Produk->deskripsi = request('deskripsi');
        $Produk->stok = request('stok');
        $Produk->save();

        return redirect('Produk')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Produk $Produk){
        $Produk->delete();

        return redirect('Produk')->with('danger', 'Data Berhasil Dihapus');

    }
}
