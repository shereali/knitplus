@extends('front.pages.app')
@section('body')
<div class="container" style="background: #0A233B;color:#fff;">
	<div class="row">
		<div class="col-md-9 col-md-offset-2">
			<div class="page-header" id="">
				<h1 class="custom-font"><span class="fa fa-book"></span> Company Profile</h1>
			</div>
			<div class="knitting-img">
				<article class="text-justify">
				@foreach ($company_details as $company_detail)
					{!!$company_detail->description!!}
				@endforeach		
			</article>
			</div>
		</div>	
	</div>
</div>
@endsection