@extends('layout.indexUser')
@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid" >
            <h1 class="btn-box span12" >
                <span style="color:#1456a0"> List Of All Books In Library</span>
            </h1>
        </div> 
    </div> 
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($book_list as $key => $book)
        <div class="col">
          <div class="card h-100">
            <img style="height : 150px "  src="{{ asset('uploads/books/'. $book -> photo ) }}" class="card-img-top" alt="Skyscrapers"/>
            <div class="card-body">
              <h5 class="card-title"> Title : {{ $book -> title}} </h5>
              <h5 class="card-title"> Author : {{ $book -> title}} </h5>
              <p class="card-text">
                  Description : 
                {{ $book -> description }} 
              </p>
            </div>
            <div class="card-footer">
              <button style="color: black">Emprunter</button>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>      
@stop
