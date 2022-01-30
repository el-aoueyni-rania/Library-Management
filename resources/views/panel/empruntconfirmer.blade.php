@extends('layout.index')
@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>List Of Emprunts Confirmer</h3>
        </div>
        <div class="module-body">

            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID User</th>
                        <th>First Name User</th>
                        <th>Last Name User</th>
                        <th>Email User</th>
                        <th>Title Book</th>
                        <th>Date Emprunt</th>
                        <th>Date Retour</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($empruntconfirmer_list as $key => $emprunt)
                    <tr class="text-center">
                        <td> {{ $emprunt -> id }} </td>
                        <td> {{ $emprunt -> user_idC }} </td>
                        <td> {{ $emprunt -> firstnameUC}} </td>
                        <td> {{ $emprunt -> lastnameUC }} </td>
                        <td> {{ $emprunt -> emailUC }} </td>
                        <td> {{ $emprunt -> titleBC }} </td>
                        <td> {{ $emprunt -> Date_EmpruntC }} </td>
                        <td> {{ $emprunt -> Date_retourC }} </td>
                        <td>
                        <a href="#"
                            title=" ajout list retard : {{ $emprunt->id }} ">
                            <i class="fas fa-plus-circle"></i></a>
                        <a href="#"
                            title=" delete emprunt : {{ $emprunt->id }} "
                            onclick="event.preventDefault(); document.querySelector('#delete-empruntc-form').submit()">
                            <i class="fas fa-trash-alt"></i></a>
                            <form
                                action="{{ route('deleteempruntconfirmer',[ $emprunt->id ]) }}"
                                method="post" id="delete-empruntc-form"> @csrf @method('DELETE')</form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
