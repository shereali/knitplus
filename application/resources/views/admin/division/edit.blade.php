@extends('admin.layouts.app')
@section('box-body')
@section('edit_div_Id',$edit_div->id)
@section('edit_div_type',$edit_div->divisionType)
@section('division_method','division_method')
@include('admin.division.create')
@endsection
