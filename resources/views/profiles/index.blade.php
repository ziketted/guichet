@include('header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Mes informations</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/welcome">Acceuil</a></li>
          <li class="breadcrumb-item active">Mes informations</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Mon identité <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file-person"></i>
                    </div>
                    <div class="ps-3">
                        <a href="{{ route('profile.edit') }}">
                          <button type="button" class="btn btn-outline-danger btn-sm">Voir plus</button>
                        </a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Mes documents <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-folder-check"></i>
                    </div>
                    <div class="ps-3">
                      <a href="{{ route('profile.document') }}">
                        <button type="button" class="btn btn-outline-danger btn-sm">Voir plus</button>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Autres informations <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-folder-plus"></i>
                    </div>
                    <div class="ps-3">
                        <button type="button" class="btn btn-outline-danger btn-sm">Voir plus</button>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
          </div>
        </div><!-- End Left side columns -->


      </div>
    </section>

  </main><!-- End #main -->

@include('footer')
