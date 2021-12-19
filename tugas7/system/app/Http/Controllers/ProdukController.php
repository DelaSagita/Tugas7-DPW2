<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('produk.index', $data);
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->nama = request('nama');
        $produk->id_user = request()->user()->id;
        $produk->harga = request('harga');
        $produk->stok = request('stok');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('admin/produk')->with('success', 'data berhasil di tambahkan');
    }

    public function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.show', $data);
    }

    public function edit(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.edit', $data);
    }

    public function update(Produk $produk)
    {
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->stok = request('stok');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('admin/produk')->with('success', 'data berhasil di ubah');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect('admin/produk')->with('danger', 'data berhasil di hapus');
    }
    function filter(){
        $nama = request('nama');
        $stok = explode(",",request('stok'));
        $data['harga_min']= $harga_min = request('harga_min');
        $data['harga_max']= $harga_max = request('harga_max');
        //$data['list_produk'] = Produk:: where('nama','like',"%$nama%")->get();
        //$data['list_produk'] = Produk:: whereIn('stok', $stok)->get();
        //$data['list_produk'] = Produk:: whereBetween('harga', [$harga_min, $harga_max])->get();
        //$data['list_produk'] = Produk:: where('stok','<>',$stok)->get();
        //$data['list_produk'] = Produk:: whereNotIn('stok', $stok)->get();
        //$data['list_produk'] = Produk:: whereNotBetween('harga', [$harga_min, $harga_max])->get();
        //$data['list_produk'] = Produk:: whereNull('stok')->get();
        //$data['list_produk'] = Produk:: whereNotNull('stok')->get();
        //$data['list_produk'] = Produk:: whereDate('created_at','2021-12-18')->get();
        //$data['list_produk'] = Produk:: whereMonth('created_at','12')->get();
        //$data['list_produk'] = Produk:: whereYear('created_at','2021')->get();
        //$data['list_produk'] = Produk:: whereTime('created_at','04:56:55')->get();
        //$data['list_produk'] = Produk:: whereBetween('harga', [$harga_min, $harga_max])-> whereNotIn('stok', [8])->whereYear('created_at','2021')->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');
        return view('produk.index', $data);
    
 
    }
}
