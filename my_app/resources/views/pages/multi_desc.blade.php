@extends('master')

@section('title', 'List of smartphone chargers')
@section('content')

    <section style="background-color: #eee;">

        <div class="container py-5">
            <div class="row">
                {{ 'We found : ' . $parameters->count() . ' products based on your search' }}
                {{-- {{ Breadcrumbs::render('desc', $parameters) }} --}}
            </div>
            <div class="row">

                @if ($parameters instanceof \Illuminate\Database\Eloquent\Collection)
                    @foreach ($parameters as $item)
                        <x-product_card :parameters='$item' class="col-md-4 col-lg-4 py-1"/>
                    @endforeach
                @else
                     <x-product_card :parameters='$parameters' />
                @endif

             </div>
        </div>
    </section>

@stop
