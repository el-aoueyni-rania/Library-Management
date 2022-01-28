@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Add Books Category</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid" action="{{ URL::route('add-categoryform') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="control-group">
                    <label class="control-label">Category</label>
                    <div class="controls">
                        <input type="text" name="category" placeholder="Enter the category of the book here..." class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Logo Of the Category </label>
                    <div class="controls">
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
