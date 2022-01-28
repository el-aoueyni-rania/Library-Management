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