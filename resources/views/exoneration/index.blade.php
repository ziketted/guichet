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
              <article class="rounded-lg border border-gray-100 bg-white p-6">
                <div class="flex items-center justify-between">
                  <div>
                    <p class="text-sm text-gray-500">Exonération à l'importation</p>

                    <p class="text-2xl font-medium text-gray-900">{{$nombreDemande}}</p>
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
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-8 col-md-8">
              <article class="rounded-lg border border-gray-100 bg-white p-6">
                <div class="flex items-center justify-between">
                  <div>
                    <p class="text-sm text-gray-500">Exonération à l'interieur du pays</p>

                    <p class="text-2xl font-medium text-gray-900">{{$nombreInterieur}}</p>
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



            </div><!-- End Revenue Card -->

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
                        @forelse ($exonerations as $exoneration )


                      <tr>
                        <td>{{$exoneration->titre}}</td>
                        <td>{{$exoneration->created_at}}</td>
                        <td><span class="badge bg-success">{{$exoneration->statut}}</span></td>
                        <td>
                            <div class="items-center row x-gap-10 y-gap-10">
                                {{-- <div class="col-auto">
                                    <a href="{{route('exoneration.show', $exoneration->id)}}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                </div> --}}
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
                         @empty
                              <p class="p-1 text-white bg-secondary">Aucune demande n'a été soumise.</p>
                         @endforelse

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

          <div class="activity-item d-flex">

            <a href="{{ route('exoneration.store') }}">
              <button
                  type="submit"
                  class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                  Nouvelle exoneration
              </button>
            </a>

          </div><br>

          <!-- Recent Activity -->
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Suivi de la demande en cours</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->



              </div>

            </div>
          </div><!-- End Recent Activity -->



        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

@include('footer')

