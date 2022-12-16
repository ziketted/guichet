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
                @forelse ($enrolements as $enrolement )
                    <div class="activity-item d-flex">
                    <i class='bi bi-circle-fill activity-badge text-{{$enrolement->couleur}} align-self-start'></i>
                    <div class="row">
                        <div class="col-10">
                            <div class="activity-content">
                                <a href="#" class="fw-bold text-dark">Enrolement de l'année : {{ $enrolement->validite }}  </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <span class="badge bg-{{$enrolement->couleur}}">{{$enrolement->etat}}</span>
                        </div>
                    </div>


                </div><!-- End activity i tem-->
                @empty
                   <p class="p-1 text-white bg-secondary">Aucune enrolement est encours...</p>
                @endforelse
              </div>
            </div>
          </div><!-- End Recent Activity -->
        </div><!-- End Right side columns -->

         <!-- Left side columns -->
         <div class="col-lg-6">
          <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-8 col-md-10">
              <article class="rounded-lg border border-gray-100 bg-white p-6">
                <div class="flex items-center justify-between">
                  <div>
                    <p class="text-sm text-gray-500">Nouvel enrolement ?</p>
              
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
                  
                  <p class="flex gap-2 text-xs">
                  
                    <a href="{{ route('enrolement.store') }}">
                      <button
                        type="submit"
                        class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                        Cliquez ici pour s'enroler
                      </button>
                    </a>
                    
                  </p>
                </div>
              </article>
            </div><!-- End Sales Card -->
          </div>
        </div><!-- End Left side columns -->
        

      </div>
    </section>

  </main><!-- End #main -->

@include('footer')
