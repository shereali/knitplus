@section('p-form')
<form role="form" action="@hasSection('edit') {{ route('product.update',$editProducts->id) }} @else {{ route('product.store') }} @endif" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @section('edit_method')
        @show
              <div class="box-body">
               @include('admin.partials.errors')
                <div class="form-group">
                  <label for="chooseslider">Choose Product Type</label>
                  <select name="productType" id="" class="form-control">
                  @hasSection('editProductType')
                    <option value="@yield('editProductType')">@yield('editProductType')</option>
                    @else
                    <option>Select product type</option>
                    <option value="tshirt">t-Shirt </option>
                    <option value="polo-shirt">Polo Shirt</option>
                    <option value="kids-item">Kids Item</option>
                    <option value="tank-top">Tank Top</option>
                    <option value="Jacket">Jacket</option>
                    <option value="trouser">Trouser</option>
                    <option value="ladies-item">Ladies Item</option>
                    
                    @endif
                  </select>
                </div>
        
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                  <input type="file" name="file[]" id="exampleInputFile" multiple>
                  <h1>
                    @hasSection('edit')
                       <img style="width:140px;height:150px;" src="{{ url('/storage/app/public/'.$editProducts->productImg) }}" alt="Image not found">
                    @endif
                  </h1>
                    

                  <p class="help-block">Example block-level help text here.</p>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
               <button type="submit" class="btn btn-primary">@hasSection('edit')Update @else Submit @endif</button>
                @hasSection('edit')
                <a href="{{ route('product.index') }}" class="btn btn-md btn-danger">Back</a>
                @endif
              </div>
            </form>
         @show   
