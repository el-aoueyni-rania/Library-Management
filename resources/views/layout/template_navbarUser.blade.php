<div style = " background-color : gainsboro "class=" header-middle"><!--header-middle-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="pull-left">
					<a class = "t" style = " text-decoration : none " href="{{ URL::route('welcome') }}" >
						<img class ="k" src="{{ asset('images/log.jfif') }}" /> 
						<strong > Library Management System </strong>
					</a> 
				</div>
			</div>
			<div class="col-sm-6">
				<div class="shop-menu " >
					<ul class="nav navbar-nav" style="display: inline; ">
						<li style=" margin-left : 20px ; ">
							<a href="{{ URL::route('homeUser') }}" alt=""> <strong> <i class="fas fa-home bbb"></i>  </strong></a></li>	
						<li><a href="{{ URL::route('all-booksuser') }}" alt=""> <strong> <i class="fas fa-book bbb" ></i> Books </strong></a></li>	
						<li><a href="{{ URL::route('listempruntuser') }}" alt=""> <strong> <i class="fas fa-book-reader bbb"></i> List Of Borrowed Books </strong></a></li>
						<li><a href="{{ URL::route('profil') }}" alt=""> <strong> <i class="fas fa-user-alt bbb"></i> Profil </strong></a></li>									
									
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="shop-menu pull-right">
					<ul style="margin-top : 10px ; " class="nav navbar-nav">
						<li class="nav-user "><a href="#" class="" data-toggle="dropdown">
                           <strong> {{ auth()->user()->firstname }} <i class="fas fa-caret-down"></i> </strong> 
                            <ul style="background-color: #f1f1f1; min-width: 100px; " class="dropdown-menu ">
                                <li ><a onmouseover="this.style.background='#f1f1f1';" href="{{ URL::route('account-sign-out') }}">Logout</a></li>
                            </ul>
                        </li>
					</ul>
			    </div>
			</div>
		</div>
	</div>
</div><!--/header-middle-->