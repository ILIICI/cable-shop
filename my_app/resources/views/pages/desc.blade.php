@extends('master')
@section('title', 'Buy charger for ' . $parameters->model_name)
@section('content')

    <section style="background-color: #eee;">

        <div class="container py-5">
            <div class="row">
                {{ Breadcrumbs::render('desc', $parameters) }}

            <div class="row">
                <x-product_card :parameters='$parameters' class="col-md-8 offset-md-2 col-lg-6 offset-lg-3"/>
             </div>
        </div>
    </section>

@stop
