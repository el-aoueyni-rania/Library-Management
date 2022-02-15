@extends('layout.indexUser')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Emprunt Book</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid" action="{{ URL::route('bookempruntform') }}" method="POST">
                @csrf

                <div class="control-group">
                    <label class="control-label">First Name</label>
                    <div class="controls">
                        <input type="text" name="firstnameU"   value="{{ auth()->user()->firstname }}" class="span8" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Last Name</label>
                    <div class="controls">
                        <input type="text" name="lastnameU"   value="{{ auth()->user()->lastname }}" class="span8" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Email </label>
                    <div class="controls">
                        <input type="email" name="emailU"   value="{{ auth()->user()->email }}" class="span8" readonly>
                    </div>
                </div>
               
                @foreach ($book as $key => $book)
                <div class="control-group">
                    <label class="control-label">Title Of The Book</label>
                    <div class="controls">
                        <input type="" name="id_book"   value=" {{ $book -> book_id }} " class="span8" hidden>

                        <input type="text" name="titleB"   value=" {{ $book -> title }} " class="span8" readonly>
                    </div>
                </div>
                @endforeach
                
                
                <div class="control-group">
                    <label class="control-label"> Date Emprunt</label>
                    <div class="controls">
                        <input type="date" name="Date_Emprunt"  class="span8" required>
                    </div>
                </div>

                
                <div class="control-group">
                    <label class="control-label"> Date Retour</label>
                    <div class="controls">
                        <input type="date" name="Date_retour"   class="span8" required>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-inverse" id="">Emprunter Book</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
@stop





