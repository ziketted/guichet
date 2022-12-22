@include('header')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Details du requerant</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
          <li class="breadcrumb-item active">Details du requerant</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">


            {{-- <div class="col-xxl-4 col-md-6">
              <article class="rounded-lg border border-gray-100 bg-white p-6">

                <div class="flex items-center justify-between">
                  <div>
                    <p class="text-sm text-gray-500">Nombre de requerants</p>

                    <p class="text-2xl font-medium text-gray-900"></p>
                  </div>

                  <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-8 w-8"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
                      />
                    </svg>
                  </span>
                </div>

                <div class="mt-1 flex gap-1 text-green-600">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                    />
                  </svg>

                  <p class="flex gap-2 text-xs">
                  </p>
                </div>
              </article>
            </div> --}}


            {{-- <div class="col-xxl-4 col-md-6">

              <article class="rounded-lg border border-gray-100 bg-white p-6">
                <div class="flex items-center justify-between">
                  <div>
                    <p class="text-sm text-gray-500">Demandes d'exoneration à valider</p>

                    <p class="text-2xl font-medium text-gray-900"></p>
                  </div>

                  <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-8 w-8"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
                      />
                    </svg>
                  </span>

                </div>

                <div class="mt-1 flex gap-1 text-green-600">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                    />
                  </svg>

                  <p class="flex gap-2 text-xs">
                  </p>
                </div>
              </article>
            </div> --}}


            {{-- <div class="col-xxl-4 col-md-6">
                <article class="rounded-lg border border-gray-100 bg-white p-6">
                  <div class="flex items-center justify-between">
                    <div>
                      <p class="text-sm text-gray-500">Enrolements à valider</p>

                      <p class="text-2xl font-medium text-gray-900"></p>
                    </div>

                    <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-8 w-8"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
                        />
                      </svg>
                    </span>

                  </div>

                  <div class="mt-1 flex gap-1 text-green-600">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-4 w-4"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                      />
                    </svg>

                    <p class="flex gap-2 text-xs">
                    </p>
                  </div>
                </article><br>
            </div> --}}

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="overflow-auto card recent-sales">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <br>
                            <img src="https://img.icons8.com/fluency/48/null/small-business.png"/>
                            <br>
                            <h3>Mobile : </h3><br>
                            <h3>Email :</h3><br>
                            <h3>Location :</h3><br>
                            <h3>Adresse : </h3><br>
                            <h3>Compte bancaire :</h3><br>
                            
                        </div>
                        <div class="col-md-4">
                            <br>
                            <h3><b>Documents</b></h3>
                            <p>
                                <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                <h3>Statut juridique</h3>
                            </p>
                            <p>
                                <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                <h3>Accord juridique</h3>
                            </p>
                            <p>
                                <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                <h3>Autorisation juridique</h3>
                            </p>
                            <p>
                                <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                <h3>Personnalité juridique</h3> 
                            </p>
                            <p>
                                <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                <h3>Convention juridique</h3> 
                            </p>
                            <p>
                                <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                <h3>Certificat juridique</h3> 
                            </p>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <h3><b>Responsable de la structure</b></h3><br>
                            <h3><b>Nom complet : </b></h3><br>
                            <h3><b>Fonction : </b></h3><br>
                            <h3><b>Email : </b></h3><br>
                            <h3><b>Téléphone : </b></h3><br>
                            
                        </div>
                        
                    </div>
                </div>

              </div>
            </div><!-- End Recent Sales -->

            <div class="col-12">
                <div class="overflow-auto card recent-sales">
  
                  <div class="card-body">
                    <h5 class="card-title">Demandes</h5>
  
                    <table class="table table-borderless datatable">
                      <thead>
                           <tr>
                             <th scope="col">N°</th>
                             <th scope="col">Demande</th>
                             <th scope="col">Date</th>
                             <th scope="col">Etat</th>
                             <th scope="col">Niveau</th>
                           </tr>
                      </thead>
                      <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                          </tr>
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