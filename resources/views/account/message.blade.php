@if(Session::has('global'))
			<div style="color: red" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('global') }}
				</div>
			</div>
@endif
@if(Session::has('storeUser'))
			<div style="color: green" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('storeUser') }}
				</div>
			</div>
@endif

@if(Session::has('storeBookUser'))
			<div style="color: green" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('storeBookUser') }}
				</div>
			</div>
@endif

@if(Session::has('storeCategory'))
			<div style="color: green" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('storeCategory') }}
				</div>
			</div>
@endif

@if(Session::has('storeBook'))
			<div style="color: green" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('storeBook') }}
				</div>
			</div>
@endif

@if(Session::has('storeEmprunt'))
			<div style="color: green" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('storeEmprunt') }}
				</div>
			</div>
@endif


@if(Session::has('storeempruntconfirmer'))
			<div style="color: green" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('storeempruntconfirmer') }}
				</div>
			</div>
@endif


@if(Session::has('deleteempruntconfirmer'))
			<div style="color: red" class="row">
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('deleteempruntconfirmer') }}
				</div>
			</div>
@endif


@if(Session::has('deleteempruntretard'))
			<div style="color: red" class="row">
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('deleteempruntretard') }}
				</div>
			</div>
@endif


@if(Session::has('storeempruntretard'))
			<div style="color: green" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('storeempruntretard') }}
				</div>
			</div>
@endif

@if(Session::has('updateprofil'))
			<div style="color: green" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('updateprofil') }}
				</div>
			</div>
@endif


@if(Session::has('updateuser'))
			<div style="color: green" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('updateuser') }}
				</div>
			</div>
@endif



@if(Session::has('deleteuser'))
			<div style="color: red" class="row">
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('deleteuser') }}
				</div>
			</div>
@endif



@if(Session::has('updatebook'))
			<div style="color: green" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('updatebook') }}
				</div>
			</div>
@endif



@if(Session::has('deletebook'))
			<div style="color: red" class="row">
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('deletebook') }}
				</div>
			</div>
@endif


@if(Session::has('sentmail'))
			<div style="color: green" class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('sentmail') }}
				</div>
			</div>
@endif