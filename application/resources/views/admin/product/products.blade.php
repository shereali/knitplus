@extends('admin.layouts.app')
@section('title')
Product Page Setting
@endsection
@section('box-body')
@include('admin.product.create')
@section('p-form')
@parent
@endsection
@endsection

@section('table')
<div class="col-md-5 col-md-offset-8">{!! $products->links() !!}</div>
<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product Type</th>
                  <th>Product Image</th>
                  <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach ($products as $product)
                <tr>
                  <td>{{ $product->productType }}</td>
                  <td><img style="width:100px;height:100px;" src="{{ url(imagePath().'products/'.$product->productImg) }}" alt="Image not found"></td>
                  <td><a class="btn btn-md btn-warning" href="{{ route('product.edit',$product->id )}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <form id="delete-from-{{$product->id }}" action="{{ route('product.destroy',$product->id) }}" method="post" style="display:none">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  </form>
                  <td><a onclick="
                  if(confirm('Are you Sure, you want to delete this')){
                    event.preventDefault();
                    document.getElementById('delete-from-{{ $product->id }}').submit();
                    }
                    else{
                      event.preventDefault();
                    }
                    " class="btn btn-md btn-danger" href="{{route('product.edit',$product->id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>

                  
                </tr>
                 
                @endforeach
                
                
                </tbody>
              </table>


@endsection