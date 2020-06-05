@include('front.layouts.horizontal_menu')
<div class="container">
<div class="row">
    <div class="col-md-12 col-md-12-slider">
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line pull-right" data-ride="carousel" data-pause="hover" data-interval="5000" style="height:346px;width:85%;">

                <!-- Indicators -->
                <!-- <ol class="carousel-indicators">
                    <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                    <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                </ol> -->

                <!-- Wrapper For Slides -->
                <div class="carousel-inner" role="listbox">

                    <!-- Third Slide -->
                    @foreach ($pagesliders1 as $pageslider1)
                        {{-- expr --}}
                    
                    <div class="item active">

                        <!-- Slide Background -->
                        <img src="{{ url(imagePath().$pageslider1->sliderimg) }}" alt="Bootstrap Touch Slider"  class="page-slider img-responsive"/>
                        <div class="bs-slider-overlay"></div>

                        <div class="container">
                            <div class="row">
                                <!-- Slide Text Layer -->
                                <!-- slide_style_left --> 
                                <div class="slide-text  slide_style_right">
                                    <!-- <h2 data-animation="animated zoomInRight" ><strong style="color:#55A92E">Turning</strong> <span>into</span> <span style="color:yellow;">Possibilities</span></h2> -->
                                    <!-- <p data-animation="animated fadeInLeft">Creating headspace for further Growth</p> -->
                                    <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a> -->
                                    <!-- <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">select two</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End of Slide -->

                    <!-- Second Slide -->
                    @foreach ($pagesliders2 as $pageslider2)
                        {{-- expr --}}
                    
                    <div class="item">

                        <!-- Slide Background -->
                        <img src="{{ url(imagePath().$pageslider2->sliderimg) }}" alt="Bootstrap Touch Slider"  class="page-slider img-responsive"/>
                        <div class="bs-slider-overlay"></div>
                        <!-- Slide Text Layer -->
                        <!-- slide_style_center  -->  
                        <div class="slide-text slide_style_right">
                            <!-- <h2 data-animation="animated flipInX" ><strong style="color:#55A92E">Unveil</strong> <span style="color:red">Human</span> <span style="color:yellow;">Sprit</span> </h2> -->
                            <!-- <p data-animation="animated lightSpeedIn">Make Better together.</p> -->
                            <!-- <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">select one</a> -->
                            <!-- <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">select two</a> -->
                        </div>
                    </div>
                    @endforeach
                    <!-- End of Slide -->

                    <!-- Third Slide -->
                    @foreach ($pagesliders3 as $pageslider3)
                        {{-- expr --}}
                    
                    <div class="item img-responsive">

                        <!-- Slide Background -->
                        <img src="{{ url(imagePath().$pageslider3->sliderimg) }}" alt="Bootstrap Touch Slider"  class="page-slider img-responsive"/>
                        <div class="bs-slider-overlay"></div>
                        <!-- Slide Text Layer -->   
                        <div class="slide-text slide_style_right">
                            <!-- <h2 data-animation="animated zoomInLeft" ><span style="color:orangered">Creating</span> <span>into</span> <strong style="color:green;">Value</strong> <span>for Chain</span></h2> -->
                            <!-- <p data-animation="animated fadeInRight">Lots of people to make world beautiful .</p> -->
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
                    <!-- <span class="sr-only">Previous</span> -->
                </a>

                <!-- Right Control -->
                <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <!-- <span class="sr-only">Next</span> -->
                </a>

            </div> <!-- End  bootstrap-touch-slider Slider -->
        </div>
    </div>
</div> 




