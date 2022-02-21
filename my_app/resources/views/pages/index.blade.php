@extends('master')
@section('title', 'Home Page')
@section('content')
    <x-product_card :parameters='$parameters'/>
    <x-deal_area/>
    <x-service_area/>
@stop
