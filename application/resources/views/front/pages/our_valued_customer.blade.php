@extends('front.pages.app')
@section('body')
<div class="container" style="background: #0A233B;color:#fff;">
	<div class="row">
		<div class="col-md-8 col-md-offset-3">
			
			<div class="page-header" id="">
				<h1 class="custom-font"><span class="fa fa-product"></span> Our Valued Customers</h1>
			</div>
			@foreach ($products as $product)
					<article>
						{{ $product->description }}
					</article>
				@endforeach	
			<br><br>
		</div>	
	</div>
</div>
@endsection




