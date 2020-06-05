@extends('front.pages.app')
@section('body')
<div class="container" style="background: #0A233B;color:#fff;">
	<div class="row">
		<div class="col-md-9 col-md-offset-2">
			{{-- <div class="page-header" id="">
				<h1 class="custom-font"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Our Products</h1>
			</div> --}}
			<!-- Image section -->
			{{-- <div class="knitting-img">
				@foreach ($ourproducts as $ourproduct)
				{!! $ourproduct->description !!}
			@endforeach
			</div> --}}
			<div class="page-header" id="">
				<h1 class="custom-font"><i class="fa fa-hourglass-half" aria-hidden="true"></i> PRODUCTION CAPACITY</h1>
			</div>
			<div class="">
				@foreach ($productcapacity as $capacity)
				{!! $capacity->description !!}
			@endforeach
			</div>
			<br><br>
		</div>
		<br><br>	
	</div>
</div>
@endsection
