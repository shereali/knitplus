@extends('front.pages.app')
@section('body')
<div class="container" style="background: #0A233B;color:#fff;">
	<div class="row">
		<div class="col-md-9 col-md-offset-2">
			
			<div class="page-header" id="">
				<h1 class="custom-font"><span class="fa fa-product"></span> Particulars</h1>
			</div>

			<div class="knitting-img">
				<article>
				@foreach ($products as $product)
					{!! $product->description !!}
				@endforeach
			</article>
			</div>
			<br><br>
		</div>	
	</div>
</div>
@endsection
