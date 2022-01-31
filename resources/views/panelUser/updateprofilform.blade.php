@extends('layout.indexUser')

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Update Profil</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid" action="{{ URL::route('updateprofil') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="control-group">
                    <label class="control-label">First Name</label>
                    <div class="controls">
                        <input type="text" name="firstname" value="{{ auth()->user()->firstname }}"  class="span8" required autofocus>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Last Name</label>
                    <div class="controls">
                        <input type="text" name="lastname"  value="{{ auth()->user()->lastname }}"   class="span8" required>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label">Email</label>
                    <div class="controls">
                        <input type="email" name="email"   value="{{ auth()->user()->email }}"  class="span8" required>
                    </div>
                </div>

               
                <div class="control-group">
                    <label class="control-label"> Your old Image </label>
                    <div class="controls">
                        <img class="span8" style=" margin-left : 200px ; width : 200px ; height : 200px"  src="{{ asset('uploads/users/'. auth()->user()->photoU ) }}" class="card-img-top" alt="Skyscrapers"/>
                    </div>
                </div> 
                <div class="control-group">
                    <label class="control-label"> Your New Image </label>
                    <div class="controls">
                        <input type="file" name="photo" class="span8">
                    </div>
                </div> 

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-inverse" id="">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
@stop





