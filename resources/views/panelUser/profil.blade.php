@extends('layout.indexUser')

@section('content')
<div class="content">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid" >
            
        </div> 
    </div>    

    <div style="margin-left : 300px" class=" row-cols-md-2 ">
        @foreach ($listuser as $key => $user)
        <div class="col">
          <div class="card h-100">
            <img style="height : 150px "  src="{{ asset('uploads/users/'. $user -> photoU ) }}" class="card-img-top" alt="Skyscrapers"/>
            <div class="card-body">
              <h5 class="card-title"> First Name : {{ $user -> firstname}} </h5>
              <h5 class="card-title"> Last Name : {{ $user -> lastname}} </h5>
              <h5 class="card-title"> Email : {{ $user -> email }} </h5>
              <h5 class="card-title"> Role : {{ $user -> role }} </h5>
            </div>
            <div class="card-footer">
              <a style="color: black" href="{{ URL::route('updateprofilform') }}">Update profil</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>
@stop
