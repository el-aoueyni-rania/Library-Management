@extends('layout.indexUser')

@section('content')
<div class="content">  
  <div style="margin-left : 370px">
    @include('account.message')
  </div> 
    <div style="margin-left : 330px" class="">
        @foreach ($listuser as $key => $user)
        <div class="col">
          <div class="card h-100" >
            <img style="height : 290px "  src="{{ asset('uploads/users/'. $user -> photoU ) }}" class="card-img-top" alt="Skyscrapers"/>
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
<style>
  
</style>
    

</div>
@stop
