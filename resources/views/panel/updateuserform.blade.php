@extends('layout.index')

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Update Profil</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid" action="{{ URL::route('updateuser') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @foreach ($user as $key => $user)  
                <div class="control-group">
                    <label class="control-label">First Name</label>
                    <div class="controls">
                        <input type="hidden" name="id" value=" {{ $user -> id }} "  class="span8" required autofocus>
                        <input type="text" name="firstname" value=" {{ $user -> firstname }} "  class="span8" required autofocus>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Last Name</label>
                    <div class="controls">
                        <input type="text" name="lastname"  value=" {{ $user -> lastname }}"   class="span8" required>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label">Email</label>
                    <div class="controls">
                        <input type="email" name="email"   value="{{ $user -> email }}"  class="span8" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Role</label>
                    <div class="controls">
                        <label class="mybox">
                            <select name="role" class="form-select" aria-label=".form-select-lg example">
                                <option  value="admin">Admin</option>
                                <option  value="user">User</option>
                            </select>
                        </label>
                    </div>
                </div>

                
               
                <div class="control-group">
                    <label class="control-label">  old Image </label>
                    <div class="controls">
                        <img class="span8" style=" margin-left : 200px ; width : 200px ; height : 200px"  src="{{ asset('uploads/users/'. $user -> photoU ) }}" class="card-img-top" alt="Skyscrapers"/>
                    </div>
                </div> 
                <div class="control-group">
                    <label class="control-label">  New Image </label>
                    <div class="controls">
                        <input type="file" name="photo" class="span8">
                    </div>
                </div> 

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-inverse" id="">Update</button>
                    </div>
                </div>

                @endforeach
            </form>
        </div>
    </div>    
</div>
@stop





