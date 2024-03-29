@extends('layout.index')
@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            @foreach ($category as $key => $category)
            <span style="color:#1456a0">  </span>
            <h3>Books available to Students Of Category {{ $category -> category }}</h3>
            @endforeach
        </div>
        <div class="module-body">
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($book_list as $key => $book)
                    <tr class="text-center">
                        <td> {{ $book -> book_id }} </td>
                        <td> {{ $book -> title }} </td>
                        <td> {{ $book -> author }} </td>
                        <td> {{ $book -> description }} </td>
                        <td> {{ $book -> total }} </td>
                        <td>
                            <a href="{{ URL::route('updatebookform' , [$book -> book_id]) }}"
                                title=" edit book : {{ $book->book_id }} ">
                                <i class="fas fa-edit"></i></a>
                            <a href="#"
                                title=" delete book : {{ $book->book_id }} "
                                onclick="event.preventDefault(); document.querySelector('#delete-book-form').submit()">
                                <i class="fas fa-trash-alt"></i></a>
                                <form
                                action="{{ route('deletebook',[ $book->book_id ]) }}"
                                method="post" id="delete-book-form"> @csrf @method('DELETE')</form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
