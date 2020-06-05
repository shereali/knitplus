<div class="container">
<div class="row">
<!-- <div class="col-md-6" style="background: #00B1B3; padding: 13px 0px;">
    <a href=""></a>
</div>
<div class="col-md-6 custom-font text-right" style="background: #34C3B1;padding: 3px 0px;">
    <a href="" style="color:#fff; margin:0px 10px;"><span class="glyphicon glyphicon-send"></span> Member Registration</a>
    <a href="" style="color:#fff; margin:0px 10px;"><span class="fa fa-sign-in"></span> Member Login</a>
</div> -->

</div>
<div class="page_horizontal_menu col-md-2 col-sm-12 col-xs-12">

<div class="nav-side-menu">
    <div class="brand">
    	<div class="logo-section">
    	@foreach ($logos as $logo)
 	<a href="{{ url('/') }}"><img src="{{ url(imagePath().$logo->sliderimg) }}" alt="Image not found"><p class="logo-title">KNIT PLUS LTD</p></a>
 
	@endforeach 
	</div> 
    </div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <!-- <li>
                  <a href="#">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li> -->
                <li class="active">
                  <a href="{{ url('company_profile') }}">
                  <i class="fa fa-book fa-lg"></i> Company Profile
                  </a>
                </li>
                <li class="">
                  <a href="{{ url('our_products') }}">
                  <i class="fa fa-shopping-bag" aria-hidden="true"></i> Production Capacity
                  </a>
                  </li>
                {{-- <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                  <a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Products Category<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="{{ url('tshirt') }}">T-Shirt</a></li>
                    <li><a href="{{ url('polo_tshirt') }}">Polo Shirt</a></li>
                    <li><a href="{{ url('kids_item') }}">Kids Item</a></li>
                    <li><a href="{{ url('tank_top') }}">Tank top</a></li>
                    <li><a href="{{ url('jacket') }}">Jacket</a></li>
                    <li><a href="{{ url('trouser') }}">Trouser</a></li>
                    <li><a href="{{ url('ladies_item') }}">Ladies Item</a></li> --}}
                    <!-- <li><a href="#">Panels</a></li>
                    <li><a href="#">Widgets</a></li>
                    <li><a href="#">Bootstrap Model</a></li> -->
                {{-- </ul> --}}


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="{{ url('all_division') }}"><i class="fa fa-list fa-lg"></i> All Division</a>
                </li>  
               {{--  <ul class="sub-menu collapse" id="service">
                  <li><a href="{{ url('knitting') }}"> Knitting Division</a></li>
                  <li><a href="{{ url('dyeing') }}"> Dyeing Division</a></li>
                  <li><a href="{{ url('sewing_and_finishing') }}"> Sewing & Finishing Division</a></li>
                  
                  <li><a href="{{ url('printing') }}"> Printing Division</a></li>
                  <li><a href="{{ url('cutting') }}"> Cutting Division</a></li> 
                  <li><a href="{{ url('embroidery') }}"> Embroidery Division</a></li>
                  <li><a href="{{ url('carton') }}"> Carton Machine</a></li>
                  <li><a href="{{ url('accessories') }}"> Accessories</a></li>
                  <li><a href="{{ url('sublimation_label') }}"> Sublimation & Label</a></li>
                  <li><a href="{{ url('all_over_printing') }}"> All Over Printing Division</a></li>
                </ul> --}}


                <li data-toggle="collapse" data-target="#compliance" class="collapsed">
                  <a href="#"><i class="fa fa-cog fa-lg"></i> Compliance <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="compliance">
                   <li><a href="{{ url('compliance') }}">
                 Compliance
                  </a></li>
                  {{-- <li>
                  <a href="{{ url('particulars') }}">
                 Particulars
                  </a>
                </li> --}}
                  <li><a href="{{ url('certificate') }}"> Certificate & Award</a></li>

                  <li><a href="{{ url('go_practice') }}"> Good Practice</a></li>
                </ul>

          
                 {{-- <li><a href="{{ url('valued_customer') }}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Valued Customer</a></li> --}}
                 <li>
                  <a href="{{ url('sister_concern') }}">
                  <i class="fa fa-female" aria-hidden="true"></i> Sister Concern
                  </a>
                </li>
                <li>
                  <a href="{{ url('management') }}">
                  <i class="fa fa-balance-scale" aria-hidden="true"></i> Management
                  </a>
                </li>
                {{-- <li>
                  <a href="{{ url('our_bankers') }}">
                  <i class="fa fa-university" aria-hidden="true"></i> Our Bank
                  </a>
                </li> --}}
                
                <li>
                  <a href="{{ url('contact_us') }}">
                  <i class="fa fa-address-card fa-lg"></i> Contact Us
                  </a>
                </li>

            </ul>
     </div>
</div>
</div>
<div class="col-md-10"></div>
</div>

