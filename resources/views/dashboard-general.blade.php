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
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Demandes d'exoneration <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>2</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Importation</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-bag-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>5</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Operations à l'interieur du pays</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>5</h6>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Details de demande</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Numero du dossier</th>
                        <th scope="col">Titre de la demande</th>
                        <th scope="col">Type de la demande</th>
                        <th scope="col">Date</th>
                        <th scope="col">Statut</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2459</a></th>
                        <td>Demande d'exonération du mois de Novembre</td>
                        <td><a href="#" class="text-primary">IMPORTATION</a></td>
                        <td>25-11-2022 </td>
                        <td><span class="badge bg-success">Soumis</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2460</a></th>
                        <td>Demande du mois de Decembre</td>
                        <td><a href="#" class="text-primary">INTERIEUR DU PAYS</a></td>
                        <td>25-11-2021 </td>
                        <td><span class="badge bg-success">Soumis</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2461</a></th>
                        <td>Demande d'exonération du mois de Novembre</td>
                        <td><a href="#" class="text-primary">INTERIEUR DU PAYS</a></td>
                        <td>25-05-2022 </td>
                        <td><span class="badge bg-success">Soumis</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2462</a></th>
                        <td>Demande d'exonération du mois de Novembre</td>
                        <td><a href="#" class="text-primary">IMPORTATION</a></td>
                        <td>25-04-2022 </td>
                        <td><span class="badge bg-success">Soumis</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2463</a></th>
                        <td>Demande d'exonération du mois de Novembre</td>
                        <td><a href="#" class="text-primary">INTERIEUR DU PAYS</a></td>
                        <td>25-01-2022 </td>
                        <td><span class="badge bg-success">Soumis</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
          
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

@include('footer')
