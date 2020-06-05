@extends('front.pages.app')
@section('body')
<div class="container" style="background: #0A233B;color:#fff;">
	<div class="row">
		<div class="col-md-8 col-md-offset-3">
			<div class="page-header" id="">
				<h1 class="custom-font"><i class="fa fa-industry" aria-hidden="true"></i> Ladies Item</h1>
			</div>
			<!-- Image section -->
			@foreach ($products as $product)
					<span>
					<img style="width:170px;height:180px;margin:10px 7px;" src="{{ url(imagePath().'products/'.$product->productImg) }}" alt="">
					</span>
					
				@endforeach
		</div>	
	</div>
</div>
@endsection
