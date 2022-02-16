@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">

    <div class="btn-controls">
        <div class="btn-box-row row-fluid" >
            <h1 class="btn-box span12" >
                <span style="color:#1456a0"> List Of Categories</span>
            </h1>
        </div> 
    </div> 



    <div class="main-container">
        <div class="cardsss">
            @foreach ($category_list as $key => $category)
            <div class="carddd card-1">
                <h2 class="card__title"> Category  {{ $key }} : {{ $category -> category }}  </h2>
            </div>
            @endforeach
        </div>
    </div>


    </div>
    
    <div class="module">
        <div class="btn-controls">
            <div class="btn-box-row row-fluid" >
                <h1 class="btn-box span12" >
                    <span style="color:#1456a0"> Add Category </span>
                </h1>
            </div> 
        </div> 
        <div class="module-body">
            <form class="form-horizontal row-fluid" action="{{ URL::route('add-categoryform') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="control-group">
                    <div style="display: inline; ">
                       <b style="margin-right : 100px"> Category</b>
                        <input type="text" name="category" placeholder="Enter the category of the book here..." class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div style="display: inline; ">
                        <b style="margin-right : 20px">Logo Of the Category </b>
                        <input type="file" name="photoC" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-inverse" >Add Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
@stop
