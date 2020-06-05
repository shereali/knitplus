@include('front.layouts.horizontal_menu')
<div class="container">
<div class="row">
<div class="col-md-10 col-sm-10 col-xs-12 pull-right">
<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" style="width:102.6%; margin-left:-1%;">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                 <li data-target="#bootstrap-touch-slider" data-slide-to="3"></li>
                  <li data-target="#bootstrap-touch-slider" data-slide-to="4"></li>
                   <li data-target="#bootstrap-touch-slider" data-slide-to="5"></li>
                    <li data-target="#bootstrap-touch-slider" data-slide-to="6"></li>
                     <li data-target="#bootstrap-touch-slider" data-slide-to="7"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
                 @foreach ($sliders1 as $slider1)
                <div class="item slide-image active">

                    <!-- Slide Background -->
                    <img src="{{ url(imagePath().$slider1->sliderimg) }}" alt="Slider Image Not Found" />
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <!-- slide_style_left --> 
                           
                                
                            <div class="slide-text  slide_style_right">
                                <h1 class="enjoy-css" data-animation="animated rollIn" ><strong style="color:#05A5E2;">{{ $slider1->title }}</strong></h1>
                                <h2 class="enjoycss" data-animation="animated fadeInLeft">{{ $slider1->subtitle }}</h2>
                                <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a> -->
                                <!-- <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">select two</a> -->
                            </div>
                           
                        </div>
                    </div>
                </div>
                 @endforeach
                <!-- End of Slide -->

                <!-- Second Slide -->
                @foreach ($sliders2 as $slider2)
                    
                <div class="item slide-image">

                    <!-- Slide Background -->
                    <img src="{{ url(imagePath().$slider2->sliderimg) }}" alt="Slider Image Not Found"  />
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <!-- slide_style_center  -->  
                    <div class="slide-text slide_style_right">
                        <h1 class="enjoy-css" data-animation="animated flipInX" ><strong style="color:#fff;">{{ $slider2->title }}</strong></h1>
                        <h2 class="enjoycss" data-animation="animated lightSpeedIn">{{ $slider2->subtitle }}</h2>
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">select one</a> -->
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">select two</a> -->
                    </div>
                </div>

                @endforeach
                <!-- End of Slide -->

                <!-- Third Slide -->
                @foreach ($sliders3 as $slider3)
                   
                <div class="item slide-image">

                    <!-- Slide Background -->
                    <img src="{{ url(imagePath().$slider3->sliderimg) }}" alt="Bootstrap Touch Slider"  />
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->   
                    <div class="slide-text slide_style_right">
                        <h1 class="enjoy-css" data-animation="animated flipInY" ><strong style="color:#00ACEC;">{{ $slider3->title }}</strong></h1>
                        <h2 class="enjoycss" data-animation="animated fadeInRight">{{ $slider3->subtitle }}</h2>
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a> -->
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a> -->
                    </div>
                </div>

                @endforeach
                <!-- End of Slide -->
		
		   <!-- Fourth Slider -->
                @foreach ($sliders4 as $slider4)
                   
                <div class="item slide-image">

                    <!-- Slide Background -->
                    <img src="{{ url(imagePath().$slider4->sliderimg) }}" alt="Bootstrap Touch Slider"  />
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->   
                    <div class="slide-text slide_style_right">
                        <h1 class="enjoy-css" data-animation="animated zoomInRight" ><strong style="color:#44C5FF">{{ $slider4->title }}</strong></h1>
                        <h2 class="enjoycss" data-animation="animated fadeInRight">{{ $slider4->subtitle }}</h2>
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a> -->
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a> -->
                    </div>
                </div>

                @endforeach
                <!-- End of Slide -->
                
                   <!-- Fifth Slider -->
                @foreach ($sliders5 as $slider5)
                   
                <div class="item slide-image">

                    <!-- Slide Background -->
                    <img src="{{ url(imagePath().$slider5->sliderimg) }}" alt="Bootstrap Touch Slider"  />
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->   
                    <div class="slide-text slide_style_right">
                        <h1 class="enjoy-css" data-animation="animated bounceInDown" ><strong style="color:#F30A95">{{ $slider5->title }}</strong></h1>
                        <h2 class="enjoycss" data-animation="animated fadeInRight">{{ $slider5->subtitle }}</h2>
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a> -->
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a> -->
                    </div>
                </div>

                @endforeach
                <!-- End of Slide -->
                
                
                <!-- Ninth Slider -->
                @foreach ($sliders6 as $slider6)
                   
                <div class="item slide-image">

                    <!-- Slide Background -->
                    <img src="{{ url(imagePath().$slider6->sliderimg) }}" alt="Bootstrap Touch Slider"  />
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->   
                    <div class="slide-text slide_style_right">
                        <h1 class="enjoy-css" data-animation="animated rotateInDownLeft" ><strong style="color:#FFC705;">{{ $slider6->title }}</strong></h1>
                        <h2 class="enjoycss" data-animation="animated fadeInRight">{{ $slider6->subtitle }}</h2>
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a> -->
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a> -->
                    </div>
                </div>

                @endforeach
                <!-- End of Slide -->
                
                <!-- Seven Slider -->
                @foreach ($sliders7 as $slider7)
                   
                <div class="item slide-image">

                    <!-- Slide Background -->
                    <img src="{{ url(imagePath().$slider7->sliderimg) }}" alt="Bootstrap Touch Slider"  />
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->   
                    <div class="slide-text slide_style_right">
                        <h1 class="enjoy-css" data-animation="animated rotateInDownRight" ><strong style="color:#A6E22E">{{ $slider7->title }}</strong></h1>
                        <h2 class="enjoycss" data-animation="animated fadeInRight">{{ $slider7->subtitle }}</h2>
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a> -->
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a> -->
                    </div>
                </div>

                @endforeach
                <!-- End of Slide -->
                
                 <!-- Eight Slider -->
                @foreach ($sliders8 as $slider8)
                   
                <div class="item slide-image">

                    <!-- Slide Background -->
                    <img src="{{ url(imagePath().$slider8->sliderimg) }}" alt="Bootstrap Touch Slider"  />
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->   
                    <div class="slide-text slide_style_right">
                        <h1 class="enjoy-css" data-animation="animated rotateInUpLeft" ><strong style="color:#426FD9">{{ $slider8->title }}</strong></h1>
                        <h2 class="enjoycss" data-animation="animated fadeInRight">{{ $slider8->subtitle }}</h2>
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a> -->
                        <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a> -->
                    </div>
                </div>

                @endforeach
                <!-- End of Slide -->

            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->
        </div>
      </div>  
     </div> 




