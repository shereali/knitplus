@extends('admin.layouts.app')
@section('title')
Home page & slider settings
@endsection
@section('box-body')
@parent
@endsection

@section('table')
 <div class="col-md-5 col-md-offset-8">{!! $sliders->links() !!}</div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Slider</th>
                  <th>Slider Page</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  
                  <th>Image</th>
                  <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach ($sliders as $slider)
                <tr>
                  <td>{{ $slider->slider }}</td>
                  <td>{{ $slider->sliderpage }}</td>
                  <td>{{ $slider->title }}</td>
                  <td>{{ $slider->subtitle }}</td>
                  
                  <td><img style="width:100px;height:100px;" src="{{ url(imagePath().$slider->sliderimg) }}" alt="Image not found"></td>
                  <td><a class="btn btn-md btn-warning" href="{{ route('admin.edit',$slider->id )}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <form id="delete-from-{{$slider->id }}" action="{{ route('admin.destroy',$slider->id) }}" method="post" style="display:none">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  </form>
                  <td><a onclick="
                  if(confirm('Are you Sure, you want to delete this')){
                    event.preventDefault();
                    document.getElementById('delete-from-{{ $slider->id }}').submit();
                    }
                    else{
                      event.preventDefault();
                    }
                    " class="btn btn-md btn-danger" href="{{route('admin.edit',$slider->id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>

                  
                </tr>
                 
                @endforeach
                
               
                </tbody>
              </table>
  
@endsection