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
    <form class="form-vertical" action="{{ URL::route('account-sign-in-post') }}" method="POST">
        @csrf
        <div class="cont">
            <div class="sub-cont">
                <div class="form sign-up">
                    <h2>Welcome</h2>
                    <label for="">
                        @include('account.message')
                    </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" value="{{ Request::old('email') }}" autofocus required/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" required/>
                    
                </label>
                <p class="forgot-pass">Forgot password?</p>
                <button type="submit" class="submit">Login</button>
                
					<label for="">
							<span style = " color : gray" class="txt1">
								New librarian? 
							</span>
						<a style = " text-decoration : none ; color : black"  href="{{ URL::route('account-create') }}">Sign Up</a>
					</label>
					<label for="">
						<a style = " text-decoration : none ; color : black" href="{{ URL::route('welcome') }}"> <b>  Go Back ! </b></a>
					</label>
                </div>
            </div>
			<div class="">
				<img class ="imaa" src="{{ asset('images/logg.png') }}" /> 
			</div>
        </div>
    </form>
</body>
</html>