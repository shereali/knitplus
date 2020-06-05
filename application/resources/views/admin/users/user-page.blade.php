@extends('admin.layouts.app')
@section('title')
User Page
@endsection
@section('box-body')

@endsection

@section('table')
 <div class="col-md-12 ">{!! $user->links() !!}</div>

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
                
                @foreach ($user as $u)
                <tr>
                  <td>{{ $u->name }}</td>
                  <td>{{ $u->email }}</td>
                  <td>{{ $u->created_at->diffForHumans() }}</td>
                  <td>{{ $u->subtitle }}</td>
                  
                  <td><img style="width:100px;height:100px;" src="{{ url(imagePath().$u->sliderimg) }}" alt="Image not found"></td>
                  {{-- <td><a class="btn btn-md btn-warning" href="{{ route('admin.edit',$u->id )}}"><span class="glyphicon glyphicon-edit"></span></a></td> --}}
                  <form id="delete-from-{{$u->id }}" action="{{ route('users.destroy',$u->id) }}" method="post" style="display:none">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  </form>
                  <td><a onclick="
                  if(confirm('Are you Sure, you want to delete this')){
                    event.preventDefault();
                    document.getElementById('delete-from-{{ $u->id }}').submit();
                    }
                    else{
                      event.preventDefault();
                    }
                    " class="btn btn-md btn-danger" href="{{route('users.edit',$u->id)}}"><span class="glyphicon glyphicon-trash"></span></a> 
                  </td>

                  
                </tr>
                 
                @endforeach
                
               
                </tbody>
              </table>
  
@endsection