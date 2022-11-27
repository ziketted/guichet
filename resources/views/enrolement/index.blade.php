@include('header')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Enrolements</h1>
      {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav> --}}
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

       

        <!-- Right side columns -->
        <div class="col-lg-6">

          <!-- Recent Activity -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Enrolements <span>|</span></h5>

              <div class="activity">
                @foreach ($enrolements as $enrolement )
                <div class="activity-item d-flex">
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Enrolement de l'année : {{ $enrolement->validite }}  </a> 
                  </div>
                </div><!-- End activity item-->
                @endforeach
              </div>
            </div>
          </div><!-- End Recent Activity -->
        </div><!-- End Right side columns -->

         <!-- Left side columns -->
         <div class="col-lg-6">
          <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-8 col-md-10">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Nouvel enrolement ? <span>|</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-plus"></i>
                    </div>
                    <div class="ps-3">
                      <h5><a href="{{ route('enrolement.store') }}">Cliquez ici pour s'enroler</a></h5>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

@include('footer')