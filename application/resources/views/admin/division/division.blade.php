@extends('admin.layouts.app')
@section('title')
Division Page Setting
@endsection
@section('box-body')
@include('admin.division.create')
@section('division-form')
@parent
@endsection	
<div class="col-md-5 col-md-offset-8">{!! $showDivisions->links() !!}</div>
<div class="col-md-12">
	<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product Type</th>
                  <th>Product Image</th>
                  <th>Description</th>
                  <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach ($showDivisions as $showDivision)
                <tr>
                  <td>{{ $showDivision->divisionType }}</td>
                  <td><img style="width:100px;height:100px;" src="{{ url(imagePath().'division/'.$showDivision->divisionImg) }}" alt="Image not found"></td>
                  
                  <td>{{  substr($showDivision->description, 0,100)}}</td>

                  <td><a class="btn btn-md btn-warning" href="{{ route('division.edit',$showDivision->id )}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <form id="delete-from-{{$showDivision->id }}" action="{{ route('division.destroy',$showDivision->id) }}" method="post" style="display:none">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  </form>
                  <td><a onclick="
                  if(confirm('Are you Sure, you want to delete this')){
                    event.preventDefault();
                    document.getElementById('delete-from-{{ $showDivision->id }}').submit();
                    }
                    else{
                      event.preventDefault();
                    }
                    " class="btn btn-md btn-danger" href="{{route('division.edit',$showDivision->id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>

                  
                </tr>
                 
                @endforeach
                
                
                </tbody>
              </table>


</div>
@endsection