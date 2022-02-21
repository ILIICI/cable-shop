@extends('master')
@section('title', 'Buy charger for ' . $parameters->model_name)
@section('content')
    <x-product_card :parameters='$parameters'/>
@stop
