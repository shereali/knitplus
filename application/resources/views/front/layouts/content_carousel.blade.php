<div class="container" style="background: #0A233B;">
<div class="row">
  <div class="col-md-8"><h3 style="color:#B7B7B7; margin-left:13px;"> <i class="fa fa-briefcase" aria-hidden="true"></i> Our Business</h3>
 
<!-- <p>Hover over the image to see the effect.</p> -->
    @foreach($messages1 as $message1)
      <div class="col-md-6 overly-1">
      <img src="{{ url(imagePath().$message1->sliderimg) }}" alt="Avatar" class="image-1" style="width:100%">
      <div class="middle-1">
        <div class="text-1"><a href="#">Under Construction</a> </div>
      </div>
      <h4 class="text-center"><a href="#" style="color:#DFDFDF; text-decoration: none;">MD's Message</a></h4>
      </div>
      @endforeach
      @foreach ($messages2 as $message2)
        
      
      <div class="col-md-6 overly-2">
      <img src="{{ url(imagePath().$message2->sliderimg) }}" alt="Avatar" class="image-2" style="width:100%">
      <div class="middle-2">
        <div class="text-2"><a href="#">Under Construction</a> </div>
      </div>
      <h4 class="text-center"><a href="#" style="color:#DFDFDF; text-decoration: none;">ED's Message</a></h4>
      </div>
      @endforeach
      {{-- <div class="col-md-6 overly-3">
      <img src="fronts/images/cover_page/3.jpg" alt="Avatar" class="image-3" style="width:100%">
      <div class="middle-3">
        <div class="text-3"><a href="{{ url('dyeing') }}">Dyeing</a> </div>
      </div>
      <h4 class="text-center"><a href="" style="color:#DFDFDF; text-decoration: none;">Jorem upsum</a></h4>
      </div> --}}
  </div>
  <div class="col-md-4"><h3 style="color:#B7B7B7;"> <i class="fa fa-bullhorn" aria-hidden="true"></i> News & Event</h3>
  
    @include('front.layouts.vertical_slider') 
  </div>
  </div>
</div>
 @include('front.layouts.border')