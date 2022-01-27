<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css2/login.css') }}" rel="stylesheet">
    <link href="stylejs.js" rel="stylesheet">

    <title>Sign Up</title>
</head>
<body>
    <br>
    <br>
    <form class="form-vertical" action="{{ URL::route('user-create-post') }}" method="POST">
        @csrf
        <div class="cont">
            <div class="sub-cont">
                <div class="form sign-up">
                    <h2>Create your Account</h2>
                    <label class="controlrow-fs luid">
                        <span>First Name</span>
                        <input type="text" name="firstname" @error('firstname') is-invalid @enderror value="{{ old('firstname') }}" required autocomplete="firstname" autofocus/>	
                        @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
					<label>
                        <span>Last Name</span>
                        <input type="text" name="lastname" @error('lastname') is-invalid @enderror value="{{ old('lastname') }}" required autocomplete="lastname" />
                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </label>
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </label>
                    <label class="controls row-fluid">
                        <span>Password</span>
                        <input type="password" name="password"  @error('password') is-invalid @enderror required autocomplete="new-password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </label>
					<label class="mybox">
					<select name="role" class="form-select" aria-label=".form-select-lg example">
						<option  value="admin">Admin</option>
						<option  value="user">User</option>
					  </select>
					</label>
                    <button type="submit" class="submit">Sign Up</button>
					<label for="">
							<span style = " color : gray" class="txt1">
								Already A User ? 
							</span>
						<a style = " text-decoration : none ; color : black"  href="{{ URL::route('login') }}">Sign In</a>
					</label>
                </div>
            </div>
			<div class="">
				<img class ="imaa" src="{{ asset('images/newww.png') }}" /> 

			</div>
        </div>
    </form>
</body>
</html>