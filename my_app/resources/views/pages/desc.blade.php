@extends('master')
@section('title', 'Buy charger for ' . $parameters->model_name)
@section('content')
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 mb-4 mb-lg-0">
                    <div class="card text-black">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-product-cards/img1.webp"
                            class="card-img-top" alt="iPhone" />
                        <div class="card-body">
                            <div class="text-center mt-1">
                                <h4 class="card-title">{{ $parameters->model_name }}</h4>
                                <h6 class="text-primary mb-1 pb-3">{{ $parameters->price }}$</h6>
                            </div>

                            <div class="text-center">
                                <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                                    <h5 class="mb-0">Quick Look</h5>
                                </div>

                                <div class="d-flex flex-column mb-4">
                                    <span>{{ $parameters->description }}</span>
                                </div>

                                <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                                    <h5 class="mb-0">Capacity</h5>
                                </div>

                                <div class="d-flex flex-column mb-4 lead">
                                    <span class="mb-2">NULL</span>
                                    <span class="mb-2">NULL</span>
                                    <span style="color: transparent;">0</span>
                                </div>
                            </div>

                            <div class="d-flex flex-row">
                                <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
