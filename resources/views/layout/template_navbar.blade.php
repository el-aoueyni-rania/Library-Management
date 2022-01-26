<div style = " background-color : gainsboro "class=" header-middle"><!--header-middle-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="pull-left">
					<a class = "t" style = " text-decoration : none " href="{{ URL::route('welcome') }}" >
						<img class ="k" src="{{ asset('images/jj.gif') }}" /> 
						<b> Library Management System OF ISET Jendouba </b>
					</a> 
				</div>
				
			</div>
			<div class="col-sm-8">
				<div class="shop-menu pull-right">
					<ul style="margin-top : 10px" class="nav navbar-nav">
						<li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ auth()->user()->firstname }}
                            <b class="caret"></b></a>
                            <ul style="background-color: #f1f1f1; min-width: 100px; " class="dropdown-menu">
                                <li ><a onmouseover="this.style.background='#f1f1f1';" href="{{ URL::route('account-sign-out') }}">Logout</a></li>
                            </ul>
                        </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!--/header-middle-->