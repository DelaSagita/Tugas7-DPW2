@extends('section.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
              <div class="card-header">
                Detail data user
              </div>

           
              <div class="card-body">
                <h3>{{ $user->nama }}</h3>
                <hr>
                <p>{{"@".$user->username }} 
                  <hr>
                  email : {{ $user->email }} 
                
                </p>
                <p>
                No Handphone : {{ $user->detail->no_handphone }} 
                </p>
              </div>
            </div>
        </div>
      </div>
    </div>
@endsection