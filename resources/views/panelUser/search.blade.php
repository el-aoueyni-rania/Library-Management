@extends('layout.indexUser')
@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid" >
            <h1 class="btn-box span9" >
                <span style="color:#1456a0"> List Of All Books In Library</span>
            </h1>
            <form action="{{ URL::route('search_book') }}" class="d-flex " input style="margin-top: 60px">
              <div class="mb-0 mr-1">
                  <input style="margin-top: 10px" type="text" name="q" class="" value="{{ request()->q ?? '' }}">
              </div>
              <button type="submit" class="btn " style="background-color: blue"><i class="fas fa-search"></i></button>
          </form>
        </div> 
    </div> 
    @if (request()->input())
            <h6 style="margin-bottom: 20px ; text-align : center ; color : blue;">{{ $books->count() }} résultat(s) pour la recherche "{{ request()->q }}"</h6>
        @endif
    <div class="row row-cols-1 row-cols-md-4 g-4">
         
        
        @foreach ($books as $key => $book)
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
              @if ( $book -> total == 0)
              <b style="color: red"> Currently unavailable </b>
              @else
              <a style="color: black" href="{{ URL::route('empruntbook', [ $book -> book_id ] ) }}">Emprunter</a>
              @endif            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>      
@stop
