<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.layouts.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
	@include('admin.layouts.header')
	@include('admin.layouts.sidebar')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        {{-- <small>it all starts here</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
            <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">@section('title') @show</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        {{-- <div class="box-body">
          @section('form-body')
        @show
        </div> --}}
        <div class="box-body">

        @section('box-body')
        <form role="form" action="@hasSection('editId') {{ route('admin.update',$editItem->id) }} @else {{ route('admin.store') }} @endif" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @section('editMethod')
        @show

              <div class="box-body">
                 @include('admin.partials.errors')
                <div class="form-group">
                  <label for="chooseslider">Slider Section</label>
                  <select name="slider" id="" class="form-control">
                  @hasSection('editSlider')
                    <option value="@yield('editSlider')">@yield('editSlider')</option>
                    @else
                    <option>Select Slider </option>
                    <option value="slider1">Slider 1</option>
                    <option value="slider2">Slider 2</option>
                    <option value="slider3">Slider 3</option>
                    <option value="slider4">Slider 4</option>
                    <option value="slider5">Slider 5</option>
                    <option value="slider6">Slider 6</option>
                    <option value="slider7">Slider 7</option>
                    <option value="slider8">Slider 8</option>
                    <option value="pageslider1">Page Slider 1</option>
                    <option value="pageslider2">Page Slider 2</option>
                    <option value="pageslider3">Page Slider 3</option>
                    <option value="carousel1">carousel 1</option>
                    <option value="carousel2">carousel 2</option>
                    <option value="carousel3">carousel 3</option>
                    <option value="carousel4">carousel 4</option>
                    <option value="message1">Message 1</option>
                    <option value="message2">Message 2</option>
                    <option value="logo">Logo</option>
                    @endif
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="chooseslider">Slider Page Section</label>
                  <select name="sliderpage" id="" class="form-control">
                  @hasSection('editSliderPages')
                  <option value="@yield('editSliderPages')">@yield('editSliderPages')</option>
                  @else
                    <option value="">Select Sldier Page</option>
                    <option value="home">Home Page</option>
                    <option value="companyprofile">Company Profile</option>
                    <option value="ourproduct">Our Product</option>
                    {{-- <option value="tshirt">Tshirt</option>
                    <option value="poloshirt">Polo Shirt</option>
                    <option value="kidsitem">Kids Item</option>
                    <option value="tanktop">Tank Top</option>
                    <option value="trouser">Trouser</option>
                    <option value="jacket">Jacket</option>
                    <option value="ladiesitem">Ladies Item</option>
                    <option value="knitting">Knitting</option>
                    <option value="printing">Printing</option>
                    <option value="sewing">Sewing</option>
                    <option value="dyeing">Dyeing</option>
                    <option value="cutting">Cutting Division</option>
                    <option value="carton">Carton Machine</option>
                    <option value="accessories">Accessories</option>
                    <option value="embroidery">Embroidery</option>
                    <option value="sublimation_label">Sublimation & Label</option>
                    <option value="alloverprinting">Our all over printing</option> --}}
                    <option value="all_division"> All Division</option>
                    <option value="compliance">compliance</option>
                    <option value="go_practice">Good practice</option>
                    <option value="management">management</option>
                    <option value="valued_customer">Valued Customer</option>
                    <option value="valued_customer">Valued Customer</option>
                    <option value="contactus">Contact Us</option>
                    <option value="ourbankers">ourbankers</option>
                    @endif
                  </select>
                 </div> 

                <div class="form-group">
                  <label for="SlideTitle2">Add Slider</label>
                  <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="Title" value="@yield('editTitle')">
                </div>
                <div class="form-group">
                  <label for="SlideTitle2">Sub Title</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="subtitle" placeholder="Sub Title" value="@yield('editSubTitle')">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                  <input type="file" name="file" id="exampleInputFile">
                     <h1>
                    @hasSection('editId')
                       <img style="width:140px;height:150px;" src="{{ url('/storage/app/public/'.$editItem->sliderimg) }}" alt="Image not found">
                    @endif
                  </h1>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">@hasSection('editId')Update @else Submit @endif</button>
                 @hasSection('editId')
                <a href="{{ route('admin.index') }}" class="btn btn-md btn-danger">Back</a>
                @endif
              </div>
            </form>

    
        @show

        @section('table')
        @show
          
              </div>
        <!-- /.box-body -->
            <div class="box-footer">
          {{-- Footer --}}
        </div>
        <!-- /.boxu-footer-->
      </div>
      <!-- /.box -->     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

	@include('admin.layouts.footer')
	</div>
</body>
</html>