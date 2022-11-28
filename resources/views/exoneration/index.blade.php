@include('header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tableau de bord</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
          <li class="breadcrumb-item active">Tableau de bord</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Demandes <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="pt-1 text-success small fw-bold">12%</span> <span class="pt-2 text-muted small ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="pt-1 text-success small fw-bold">8%</span> <span class="pt-2 text-muted small ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="pt-1 text-danger small fw-bold">12%</span> <span class="pt-2 text-muted small ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="overflow-auto card recent-sales">

                <div class="card-body">
                  <h5 class="card-title">Les demandes d'exonération <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Titre de dela demande</th>
                        <th scope="col">Date de soumission</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($exonerations as $exoneration )


                      <tr>
                        <td>{{$exoneration->titre}}</td>
                        <td>{{$exoneration->created_at}}</td>
                        <td><span class="badge bg-success">{{$exoneration->statut}}</span></td>
                        <td>
                            <div class="items-center row x-gap-10 y-gap-10">
                                <div class="col-auto">
                                    <a href="{{route('exoneration.show', $exoneration->id)}}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('exoneration.edit', $exoneration->id)}}" class="btn btn-warning"><i class="bi bi-pen-fill"></i></a>
                                </div>
                                <div class="col-auto">
                                    <form action="{{ route('exoneration.destroy', $exoneration->id) }}"
                                        method="POST" >
                                        @method('DELETE')
                                        @csrf
                                        <button href="{{route('exoneration.destroy', $exoneration->id)}}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                              </div>
                        </td>
                        @endforeach
                      </tr>

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <div class="activity-item d-flex">

            <a href="{{ route('exoneration.store') }}" class="btn btn-success">
                <i class="bi bi-check-circle"></i>
                Nouvelle demande d'exoneration
            </a>
          </div>

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

@include('footer')

