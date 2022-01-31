@extends('layout.index')


@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Add Books</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid" action="{{ URL::route('updatebook') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @foreach($book as $book)

                <div class="control-group">
                    <label class="control-label">Title Of Book</label>
                    <div class="controls">
                        <input type="text" name="title" value="{{ $book->title }}" class="span8" required>
                        <input type="hidden"  name="book_id"  value="{{ $book->book_id }}" >
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Author Name</label>
                    <div class="controls">
                        <input type="text" name="author" value="{{ $book->author }}" class="span8" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Description of Book</label>
                    <div class="controls">
                        <textarea class="span8" name="description"  rows="5" value="{{ $book->description }}" placeholder="{{ $book->description }}"></textarea>
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
                        <input type="number" name="total"  value="{{ $book->total }}" class="span8" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">  old Image </label>
                    <div class="controls">
                        <img class="span8" style=" margin-left : 200px ; width : 200px ; height : 200px"  src="{{ asset('uploads/books/'. $book -> photo ) }}" class="card-img-top" alt="Skyscrapers"/>
                    </div>
                </div> 
                <div class="control-group">
                    <label class="control-label">New Image </label>
                    <div class="controls">
                        <input type="file" name="photo" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-inverse" id="">update</button>
                    </div>
                </div>
                @endforeach

            </form>
        </div>
    </div>    
</div>
@stop





