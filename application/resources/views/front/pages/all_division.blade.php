@extends('front.pages.app')
@section('body')
<div class="container" style="background: #0A233B;color:#fff;">
	<div class="row">
		<div class="col-md-9 col-md-offset-2">
			<div class="page-header" id="">
				<h1 class="custom-font"> All Division</h1>
			</div>
			<div class="">
				<article class="text-justify">
				@foreach ($products as $product)
					{!!$product->description!!}
				@endforeach		
			</article>
			</div>
		</div>	
	</div>
</div>
@endsection