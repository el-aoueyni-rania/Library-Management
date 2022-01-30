@extends('layout.indexUser')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Add Books</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid" action="{{ URL::route('add-bookuserform') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="control-group">
                    <label class="control-label">Title Of Book</label>
                    <div class="controls">
                        <input type="text" name="title" placeholder="Enter the title of the book here..." class="span8" required>
                        <input type="hidden"  data-form-field="token"  value="{{ csrf_token() }}">
                        <input type="hidden"  data-form-field="auth_user"  value="{{ auth()->user()->id }}" >
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Author Name</label>
                    <div class="controls">
                        <input type="text" name="author"  placeholder="Enter the name of author for the book here..." class="span8" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Description of Book</label>
                    <div class="controls">
                        <textarea class="span8" name="description"  rows="5" placeholder="Enter few lines about the book here"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Category</label>
                    <div class="controls">
                        <select tabindex="1" name="category" data-placeholder="Select category.." class="span8">
                            @foreach($categories_list as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Total</label>
                    <div class="controls">
                        <input type="number" name="total"  placeholder="How many books are there?" class="span8" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label">Image Of the book </label>
                    <div class="controls">
                        <input type="file" name="photo" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-inverse" id="">Add Book</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
@stop

@section('custom_bottom_script')

    <script type="text/javascript" src="{{ asset('static/custom/js/script.addbook.js') }}"></script>

@stop






