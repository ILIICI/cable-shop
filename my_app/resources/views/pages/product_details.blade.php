@extends('master')
@section('title', 'Product Details')
@section('content')
    <x-product_detail id='{{ $parameters->modelsmartphone_id }}' title='{{ $parameters->model_name }}' price='{{ $parameters->price }}' description='{{ $parameters->description }}'/>
@stop
