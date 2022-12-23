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
              <article class="rounded-lg border border-gray-100 bg-white p-6">
                <div class="flex items-center justify-between">
                  <div>
                    
                    <p class="text-sm text-gray-500">
                      <span><i class="fbi bi-file-person"></i></span>
                      Mon identité
                    </p>
              
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
                      <a href="{{ route('profile.edit') }}">
                        <button
                        class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                        Voir plus
                      </button>
                      </a> 
                  </p>
                </div>
              </article>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">

              <article class="rounded-lg border border-gray-100 bg-white p-6">
                <div class="flex items-center justify-between">
                  <div>
                    
                    <p class="text-sm text-gray-500">
                      <span><i class="bi bi-folder-check"></i></span>
                      Mes documents
                    </p>
              
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
                    <a href="{{ route('profile.document') }}">
                      <button
                      class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                      Voir plus
                    </button>
                    </a> 
                  </p>
                </div>

              </article>

            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
              <article class="rounded-lg border border-gray-100 bg-white p-6">
                <div class="flex items-center justify-between">
                  <div>
                    <p class="text-sm text-gray-500">
                      <span><i class="bi bi-folder-plus"></i></span>
                      Autres informations
                    </p>
                    <p class="text-2xl font-medium text-gray-900"></p>
                  </div>
        
                  <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                  </span>
                </div>
              
                <div class="mt-1 flex gap-1 text-green-600">
                
                  <p class="flex gap-2 text-xs">
                    <a href="{{ route('profile.autre_infos') }}">
                      <button
                      class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                      Voir plus
                    </button>
                    </a> 
                </p>
                  
                </div>
              </article>

            </div><!-- End Customers Card -->
          </div>
        </div><!-- End Left side columns -->


      </div>
    </section>

  </main><!-- End #main -->

@include('footer')
