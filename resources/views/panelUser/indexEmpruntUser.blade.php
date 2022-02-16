@extends('layout.indexUser')
@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>List Of Borrowed Books </h3>
        </div>
        <div class="module-body">

            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Title Book</th>
                        <th>Date Emprunt</th>
                        <th>Date Retour</th>
                    </tr>
                </thead>
                <tbody id="all-books">
                    @foreach ($listemprunt as $key => $emprunt)
                    <tr class="text-center">
                        <td> {{ $emprunt -> titleB }} </td>
                        <td> {{ $emprunt -> Date_Emprunt }} </td>
                        <td> {{ $emprunt -> Date_retour }} </td>
                        

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
