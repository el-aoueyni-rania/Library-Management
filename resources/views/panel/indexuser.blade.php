@extends('layout.index')
@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>List Of Users</h3>
        </div>
        <div class="module-body">

            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($listuser as $key => $user)
                    <tr class="text-center">
                        <td> {{ $user -> id }} </td>
                        <td> {{ $user -> firstname }} </td>
                        <td> {{ $user -> lastname }} </td>
                        <td> {{ $user -> email }} </td>
                        <td> {{ $user -> role }} </td>
                        <td>
                        <a href="{{ URL::route('updateuserform' , [$user -> id]) }}"
                            title=" edit utilisateur : {{ $user->id }} ">
                            <i class="fas fa-edit"></i></a>
                        <a href="#"
                            title=" delete utilisateur : {{ $user->id }} "
                            onclick="event.preventDefault(); document.querySelector('#delete-user-form').submit()">
                            <i class="fas fa-trash-alt"></i></a>
                            <form
                            action="{{ route('deleteuser',[ $user->id ]) }}"
                            method="post" id="delete-user-form"> @csrf @method('DELETE')</form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
