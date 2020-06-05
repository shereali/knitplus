<div id="carousel-demo" class="carousel vertical slide pull-right" data-ride="carousel" data-interval="2000" style="height: 180px; width:100%;">
 <!-- Indicators -->
  <ol class="carousel-indicators" style="text-align:center;">
    <li data-target="#carousel-demo" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-demo" data-slide-to="1"></li>
    <li data-target="#carousel-demo" data-slide-to="2"></li>
    <li data-target="#carousel-demo" data-slide-to="3"></li>
  </ol>
  
  <!-- Sliding fronts/images statring here --> 
   <div class="carousel-inner" > 
    @foreach ($carousels1 as $carousel)
     
    
    <div class="item active" style="height: 150px !important;">
      <img src="{{ url(imagePath().$carousel->sliderimg) }}" alt="Image Not Found!" style="width:100%;"> 
      <div class="carousel-caption">
       <h3></h3>
       {{-- <p>Banana is useful for health</p> --}}
      </div>
    </div>
    @endforeach 
      @foreach ($carousels2 as $carouse2)
        {{-- expr --}}
     
    <div class="item" style="height: 150px !important;"> 
      <img src="{{ url(imagePath().$carouse2->sliderimg) }}" alt="Image Not Found!" style="width:100%;"> 
      <div class="carousel-caption">
       <h3></h3>
       {{-- <p>Text here</p> --}}
      </div>      
   </div>
     @endforeach

       @foreach ($carousels3 as $carouse3)
          {{-- expr --}}
        
    <div class="item" style="height: 150px !important;"> 
      <img src="{{ url(imagePath().$carouse3->sliderimg) }}" alt="Image Not Found!d" style="width:100%;"> 
      <div class="carousel-caption">
       <h3></h3>
       {{-- <p>Text here</p> --}}
      </div>          
    </div>
     @endforeach

      @foreach ($carousels4 as $carouse4)
        {{-- expr --}}
     
    <div class="item" style="height: 150px !important;"> 
      <img src="{{ url(imagePath().$carouse4->sliderimg) }}" alt="Image Not Found!" style="width:100%;">
      <div class="carousel-caption">
       <h3></h3>
       {{-- <p>Text here</p> --}}
      </div>           
    </div> 
     @endforeach
 
  </div> 
  
  <!-- Next / Previous controls here -->
  <a class="left carousel-control" href="#carousel-demo" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <a class="right carousel-control" href="#carousel-demo" data-slide="next">
    <span class="glyphicon glyphicon-chevron-down"></span>
  </a>

 </div>
