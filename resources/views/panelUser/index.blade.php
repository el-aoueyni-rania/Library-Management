@extends('layout.indexUser')

@section('content')
<div class="content">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid" >
            <h1 class="btn-box span12" >
                <span style="color:#1456a0"> Library Management System Of Iset Jendouba</span>
            </h1>
        </div> 
    </div>    

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($category_list as $key => $category)
        <div class="col">
          <div class="card h-100">
            <img style="height : 150px "  src="{{ asset('uploads/categories/'. $category -> photoC ) }}" class="card-img-top" alt="Skyscrapers"/>
            <div class="card-body">
              <h5 class="card-title"> {{ $category -> category}} </h5>
            </div>
            <div class="card-footer">
              <button style="color: black">Consulter</button>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>
@stop
