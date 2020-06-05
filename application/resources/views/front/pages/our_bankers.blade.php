@extends('front.pages.app')
@section('body')
<div class="container" style="background: #0A233B;color:#fff;">
	<div class="row">
		<div class="col-md-8 col-md-offset-3">
			
			<div class="page-header" id="">
				<h1 class="custom-font"><span class="fa fa-product"></span> Our  Bankers</h1>
			</div>
				<div class="knitting-img">
					@foreach ($products as $product)
					{!! $product->description !!}
					@endforeach
				</div>
			
			<br><br>
		</div>	
	</div>
</div>
@endsection
