@extends('layout.indexUser')
@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid" >
            <h1 class="btn-box span12" >
                @foreach ($category as $key => $category)
                <span style="color:#1456a0"> List Of All Books In Library Of Category {{ $category -> category }} </span>
                @endforeach
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


            @if ( $book -> fichierpdf  == 'Version PDF Not Found' )
            <div class="card-footer">
              <b style="color: red"> Version PDF Not Found </b>
            </div> 
            @else
            <div class="card-footer">
              <object data="data/test.pdf" type="application/pdf" width="300" height="200">
                <a href="{{ asset('uploads/files/'. $book -> fichierpdf ) }}">View PDF Version</a>
                </object>
            </div> 


            <div class="card-footer">
              <a style="color: black" href="{{ URL::route('downloadbook', [ $book -> book_id ] ) }}">Download</a>
            </div> 
            @endif            

            <div class="card-footer">
              @if ( $book -> total == 0)
              <b style="color: red"> Currently unavailable </b>
              @else
              <a style="color: black" href="{{ URL::route('empruntbook', [ $book -> book_id ] ) }}">Borrow</a>
              @endif
                  
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>      
@stop
