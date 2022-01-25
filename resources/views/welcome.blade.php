@extends('account.index')

@section('content')
<div class="wrapper">
    <div style="margin-left: 50px" class=" item active">
        <h1 style="color: black">Welcome To Library Management System </h1>
        <h1 style="margin-left: 250px"><span>OF ISET Jendouba </span></h1>
    </div>
</div>

<div class="item active">
                    <h1><span>The Benefits of Library Management Systems</span></h1>
                    <p style="">
                        The best library management systems are usually cloud-based allowing them to be easily integrated on the college website.
                        <br>
                        With a login-based access, it enables students and staff to easily search and reserve reference material from anywhere. 
                        <br>
                        With every task related to library management getting automated, it eliminates repetitive work, makes each process error-free and increases efficiency tenfold.
                    </p>
                    <div class="deuxx">
                        <div>
                            <div class="deuxx">
                                <h1><span>New Librarian ?</span></h1>
                                <a href="" alt=""> <h1> Sign Up</h1>  </a>
                            </div>
                            <img class ="" src="{{ asset('images/new.jpg') }}" /> 
                        </div>
                        <div>
                            <div class="deuxx">
                                <h1><span>Already A User ?</span></h1>
                                <a href="{{ URL::route('login') }}" alt=""> <h1> Sign In</h1>  </a>
                            </div>
                            <img class ="" src="{{ asset('images/login.jpg') }}" /> 
                        </div>
                    </div>
            </div>                                                   

@include('account.style')
@stop