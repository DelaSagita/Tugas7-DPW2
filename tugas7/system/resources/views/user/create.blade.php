@extends('section.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah user
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/user') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label">username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label">email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label">passwrod</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">No HP</label>
                                <input type="text" class="form-control" name="no_handphone">
                            </div>


                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i> save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
