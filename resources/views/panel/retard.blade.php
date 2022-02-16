@extends('layout.index')
@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>List Of Retard Emprunts </h3>
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
                <tbody >
                    @foreach ($empruntretard_list as $key => $emprunt)
                    <tr class="text-center">
                        <td> {{ $emprunt -> id }} </td>
                        <td> {{ $emprunt -> user_idR }} </td>
                        <td> {{ $emprunt -> book_idR}} </td>
                        <td> {{ $emprunt -> emailR }} </td>
                        <td> {{ $emprunt -> titleR }} </td>
                        <td> {{ $emprunt -> Date_EmpruntR }} </td>
                        <td> {{ $emprunt -> Date_retourR }} </td>
                        <td>
                        <a href="{{ route('sendmail',[ $emprunt->id ]) }}">
                            <i class="far fa-envelope"></i></a>
                        <a href="#"
                            title=" delete emprunt : {{ $emprunt->id }} "
                            onclick="event.preventDefault(); document.querySelector('#delete-empruntr-form').submit()">
                            <i class="fas fa-trash-alt"></i></a>
                            <form
                                action="{{ route('deleteempruntretard',[ $emprunt->id ]) }}"
                                method="post" id="delete-empruntr-form"> @csrf @method('DELETE')</form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
