          <div {{ $attributes->merge(['class' => 'mb-4 mb-lg-0']) }}>
              <div class="card text-black">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-product-cards/img1.webp"
                      class="card-img-top" alt="iPhone" />
                  <div class="card-body">
                      <div class="text-center mt-1">
                          <h4 class="card-title">
                              {{ $parameters->model_name }}
                          </h4>
                          <h6 class="text-primary mb-1 pb-3">
                              {{ $parameters->price }}
                              $
                          </h6>
                      </div>

                      <div class="text-center">
                          <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                              <h5 class="mb-0">Quick Look</h5>
                          </div>

                          <div class="d-flex flex-column mb-4">
                              <span>
                                  {{ $parameters->description }}
                              </span>
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

                      <form action="{{ route('cart.store') }}" method="POST">
                          @csrf
                          <input type="hidden" name="id" value="{{ $parameters->modelsmartphone_id }}" />
                          <div class="d-flex flex-row py-1">
                              <button type="submit" class="btn btn-primary flex-fill ms-1">Add to cart</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
