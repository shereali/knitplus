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
        {{ ucfirst(substr(Route::currentRouteName(),6)).' '.'Page' }}
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
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
	        @section('box-body')
	        
	    	@include('admin.layouts.app_partials')
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