@extends('master')
@section('title', 'Product Details')
@section('content')
<x-product_detail
    id='{{ $parameters->product_uuid }}'
    title='{{ $parameters->product_name }}'
    price='{{ $parameters->price }}'
    description='{{ $parameters->description }}'
    instock='{{ $parameters->instock }}'
    :images="$parameters->images"
    sncode="{{ $parameters->sncode }}"
    shortdesc='{{ $parameters->short_description}}'
    techdesc='{{ $parameters->tech_description  }}'
    longdesc='{{ $parameters->long_description }}'>
</x-product_detail>
@stop
