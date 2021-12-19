@extends('section.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        edit data
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/produk', $produk->id) }}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $produk->nama }}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Harga</label>
                                        <input type="number" class="form-control" name="harga" value="{{ $produk->harga }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">stok</label>
                                        <input type="number" class="form-control" name="stok" value="{{ $produk->stok }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">berat</label>
                                        <input type="number" class="form-control" name="berat" value="{{ $produk->berat }}">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control">
                                  {{ $produk->deskripsi }}
                                </textarea>
                            </div>

                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i> save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
