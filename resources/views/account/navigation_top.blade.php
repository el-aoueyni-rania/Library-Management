<div style = " background-color : gainsboro "class=" header-middle"><!--header-middle-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="pull-left">
					<a class = "t" style = " text-decoration : none " href="{{ URL::route('welcome') }}" >
						<img class ="k" src="{{ asset('images/log.jfif') }}" /> 
						<b> Library Management System OF ISET Jendouba </b>
					</a> 
				</div>
				
			</div>
			<div class="col-sm-8">
				<div class="shop-menu pull-right">
					<ul class="nav navbar-nav">
						<li><a href="{{ URL::route('login') }}" alt=""> <b>Login </b></a></li>	
						<li><a href="{{ URL::route('account-create') }}" alt=""> <b> Sign Up </b></a></li>					
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!--/header-middle-->