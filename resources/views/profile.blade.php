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


            {{-- <!-- Customers Card -->
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

            </div><!-- End Customers Card --> --}}

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="overflow-auto card recent-sales">

                <div class="card-body">
                  <h5 class="card-title">Liste des requérants</h5>

                  <table class="table table-borderless datatable">
                    <thead>

                         <tr>
                           <th scope="col">Requerant</th>
                           <th scope="col">Telephone</th>
                           <th scope="col">Email</th>
                           <th scope="col">Action</th>
                         </tr>

                    </thead>
                    <tbody>


                        @foreach ($requerants as $requerant)
                            <tr>
                            <td>{{$requerant->name}}</td>
                            <td>{{$requerant->telephone}}</td>
                            <td>{{$requerant->email}}</td>
                            <td>

                                        <a href="{{route('admin.detailrequerant',$requerant->id )}}" class="btn btn-info"><i class="bi bi-eye"></i> Détail</a>



                            </td>


                        </tr>
                      @endforeach

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
      </div>
    </section>

  </main><!-- End #main -->

@include('footer')

