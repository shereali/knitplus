@extends('admin.layouts.app')
@section('editProductType', $editProducts->productType)
@section('box-body')
@section('edit','edit')
@section('edit_method')
{{ method_field('PUT') }}
@endsection
@include('admin.product.create')
@endsection




