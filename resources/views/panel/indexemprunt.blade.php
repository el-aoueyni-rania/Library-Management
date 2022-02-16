@extends('layout.index')
@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>List Of Borrower Students </h3>
        </div>
        <div class="module-body">

            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID User</th>
                        <th>ID Book</th>
                        <th>Email User</th>
                        <th>Title Book</th>
                        <th>Date Emprunt</th>
                        <th>Date Retour</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="all-books">
                    @foreach ($listemprunt as $key => $emprunt)
                    <tr class="text-center">
                        <td> {{ $emprunt -> id }} </td>
                        <td> {{ $emprunt -> user_id }} </td>
                        <td> {{ $emprunt -> book_id }} </td>
                        <td> {{ $emprunt -> emailU }} </td>
                        <td> {{ $emprunt -> titleB }} </td>
                        <td> {{ $emprunt -> Date_Emprunt }} </td>
                        <td> {{ $emprunt -> Date_retour }} </td>
                        <td>
                        <a href="#"
                            title=" confirmer emprunt {{ $emprunt->id }} "
                            onclick="event.preventDefault(); document.querySelector('#delete-emprunt-form').submit()">
                            <i class="fas fa-check-circle"></i> Confirmer</a>
                            <form
                                action="{{ route('addempruntconfirmer',[ $emprunt->id ]) }}"
                                method="post" id="delete-emprunt-form"> @csrf @method('DELETE')</form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
