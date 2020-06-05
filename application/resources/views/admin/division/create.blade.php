@section('division-form')
@push('js')
<script src="{{ asset('dashboard/bower_components/ckeditor/ckeditor.js') }}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    // $('.textarea').wysihtml5()
  })
</script>
@endpush
<form role="form" action="@hasSection('edit_div_Id'){{route('division.update',$edit_div->id)}}@else {{route('division.store')}}@endif" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @hasSection('division_method')
        {{ method_field('PUT') }}
        @endif
              <div class="box-body">
             @include('admin.partials.errors')
                <div class="form-group">
                  <label for="choose Division">Section</label>
                  <select name="divisionType" id="" class="form-control">
                  @hasSection('edit_div_type')
                    <option value="@yield('edit_div_type')">@yield('edit_div_type')</option>
                    @else
                    <option value="">Select element section</option>
                    {{-- <option value="knitting">Knitting</option>
                    <option value="printing">Printing</option>
                    <option value="cutting">Cutting</option>
                    <option value="carton">Carton</option>
                    <option value="accessories">Accessories</option>
                    <option value="sublimation_label">Sublimation & Label</option>
                    <option value="embroidery">Embroidery</option>
                    <option value="dyeing">Dyeing</option>
                    <option value="sewing">Sewing</option> 
                    <option value="our_all_over_printing">Our All Over Printing</option>--}}
                    <option value="all_division">All Division</option>
                    <option value="company-details">Company Profile Details</option>
                    <option value="company-info">Company Profile Info</option>
                    <option value="our_products">Our Products Section</option>
                    <option value="production_capacity">Production Capacity Section</option>
                    <option value="management">Management</option>
                    <option value="ourbankers">Our Bank</option>
                    <option value="valuedcustomer">Our Valued Customer</option>
                    <option value="certificate">Certificate</option>
                    <option value="particulars">Particulars</option>
                    <option value="sisterconcern">Sister Concern</option>
                    <option value="contactus">Contact Us</option>
                    <option value="particulars">Particulars</option>
                    <option value="compliance">compliance</option>
                    <option value="go_practice">Go Practice</option>
                    
                    @endif
                  </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                  <input type="file" name="divisionImg[]" id="exampleInputFile" multiple>
                  <h1>
                  @hasSection('edit_div_Id')
                    <img style="width:140px;height:150px;" src="{{ url(imagePath().'division/'.$edit_div->divisionImg) }}" alt="Image not found">
                    @else
                    @endif
                  </h1>
                </div>
                <div class="form-group">
                  <label for="adddivision">Add Division</label>
                  <textarea id="editor1" name="description" cols="30" rows="5" class="textarea form-control{{ $errors->has('description')?'is-invalid':'' }}">@hasSection('edit_div_Id'){!! $edit_div->description !!}@endif</textarea>
                  @if($errors->has('description'))
                    <strong class="text-danger">{{ $errors->first('description') }}</strong>
                  @endif
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">@hasSection('edit_div_Id')Update @else Submit @endif</button>
               @hasSection('edit_div_Id')
                <a href="{{ route('division.store') }}" class="btn btn-md btn-danger">Back</a>
                @endif
              </div>
            </form>
          @show


  