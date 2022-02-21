@extends('layout.indexUser')
@section('content')
<div class="content">
    <div style="margin-left : 370px">
        @include('account.message')
      </div> 
    <div class="module" style="margin-left : 130px">
        <div class="module-head">
            <h3>List Of Borrowed Books </h3>
        </div>
        <div class="module-body">

            <table style="width:1000px ; " class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Title Book</th>
                        <th> Borrow Date </th>
                        <th> Return Date </th>
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
