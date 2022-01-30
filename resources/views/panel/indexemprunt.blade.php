@extends('layout.index')
@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>List Of Emprunts </h3>
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
                <tbody id="all-books">
                    @foreach ($listemprunt as $key => $emprunt)
                    <tr class="text-center">
                        <td> {{ $emprunt -> id }} </td>
                        <td> {{ $emprunt -> user_id }} </td>
                        <td> {{ $emprunt -> firstnameU}} </td>
                        <td> {{ $emprunt -> lastnameU }} </td>
                        <td> {{ $emprunt -> emailU }} </td>
                        <td> {{ $emprunt -> titleB }} </td>
                        <td> {{ $emprunt -> Date_Emprunt }} </td>
                        <td> {{ $emprunt -> Date_retour }} </td>
                        <td>
                        <a href="#"
                            title=" ajout list retard : {{ $emprunt->id }} ">
                            <i class="fas fa-plus-circle"></i></a>
                        <a href="#"
                            title=" delete emprunt : {{ $emprunt->id }} ">
                            <i class="fas fa-trash-alt"></i></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
