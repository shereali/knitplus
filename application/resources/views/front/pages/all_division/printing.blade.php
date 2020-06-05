@extends('front.pages.app')
@section('body')
<div class="container" style="background: #0A233B;color:#fff;">
	<div class="row">
		<div class="col-md-9 col-md-offset-2">
			
			<div class="page-header" id="">
				<h1 class="custom-font"><span class="fa fa-product"></span> Printing Machine</h1>
			</div>
			<div class="knitting-img">
				<img src="fronts/images/all_division/print.jpg" alt="">@foreach ($products as $product)
					<img src="{{ url(imagePath().'division/'.$product->divisionImg) }}" alt="">
					<article>
						{!! $product->description !!}
					</article>
				@endforeach
			</div>
			<br><br>
		</div>	
	</div>
</div>
@endsection
