@extends('front.pages.app')
@section('body')
<div class="container" style="background: #0A233B;color:#fff;">
	<div class="row">
		<div class="col-md-8 col-md-offset-3">
			
			<div class="page-header" id="">
				<h1 class="custom-font"><span class="fa fa-product"></span> Sister Concern</h1>
			</div>
			<div class="">
			@foreach ($products as $product)
				@if ($product->divisionImg!=NULL)
					<a href="{{ url(imagePath().'division/'.$product->divisionImg) }}" class="swipebox"  title="">
				<img id="sw_close" src="{{ url(imagePath().'division/'.$product->divisionImg) }}" style="width:200px; height:200px;" alt="Image Not Found">
				</a>
				@else
				@endif
				<article>
					<p>
						{!! $product->description !!}
					</p>
				</article>
				@endforeach	

			</div>
			<br><br>
		</div>	
	</div>
</div>
@endsection




