@extends('front.pages.app')
@section('body')
<div class="container" style="background: #0A233B;color:#fff;">
	<div class="row">
		<div class="col-md-9 col-md-offset-2">
			<div class="page-header" id="">
				<h1 class="custom-font"><span class="fa fa-book"></span> Management</h1>
			</div>
			<!-- Image section -->
			
				@foreach ($products as $product)
				<div class="col-md-4">
				{{-- <div class="text-center m-padding"> --}}
				
					<center><img style="width:170px;height:180px;margin:10px 7px;"  src="{{ url(imagePath().'division/'.$product->divisionImg) }}" alt="">
						<p style="color:#fff !important">{!! $product->description !!}</p>
					</center>

				
				{{-- </div> --}}
				</div>
				@endforeach	
			
			
		</div>	
	</div>
</div>
@endsection
