@extends('layout.indexUser')

@section('content')
<div class="content">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid" >
            <h1 class="btn-box span12" >
                <span style="color:#1456a0">  Profil Of {{ auth()->user()->firstname }}  </span>
            </h1>
        </div> 
    </div>    

    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($listuser as $key => $user)
        <div class="col">
          <div class="card h-100">
            {{-- <img style="height : 150px "  src="{{ asset('uploads/books/'. $book -> photo ) }}" class="card-img-top" alt="Skyscrapers"/> --}}
            <div class="card-body">
              <h5 class="card-title"> First Name : {{ $user -> firstname}} </h5>
              <h5 class="card-title"> Last Name : {{ $user -> lastname}} </h5>
              <h5 class="card-title"> Email : {{ $user -> email }} </h5>
              <h5 class="card-title"> Role : {{ $user -> role }} </h5>
            </div>
            <div class="card-footer">
              <button style="color: black">Update Your Profil</button>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>
@stop
