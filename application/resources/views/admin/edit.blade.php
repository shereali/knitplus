@extends('admin.layouts.app')
@section('box-body')
@parent
@section('editId',$editItem->id)
@section('editSlider',$editItem->slider)
@section('editSliderPages',$editItem->sliderpage)
@section('editTitle',$editItem->title)
@section('sliderimg','sliderimg')
@section('editSubTitle',$editItem->subtitle)

@section('editMethod')
{{ method_field('PUT') }}
@endsection
@endsection




