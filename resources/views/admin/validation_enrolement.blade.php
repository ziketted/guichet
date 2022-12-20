@include('header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Enrolement</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
          <li class="breadcrumb-item active">Validation de l'enrolement</li>
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
                  <h5 class="card-title">Liste des enrolements</h5>

                  <form action="" class="row g-3" method="POST" enctype="multipart/form-data">

                    <div>
                        <label for="email" class="text-sm font-medium">Avis favorable</label>
    
                        <div class="relative mt-1">
                          <input
                            type="file"
                            id="file"
                            name="avis"
                            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                            placeholder="Chercher les fichiers"
                          />
                        </div>
                    </div>
                    <div>
                        <label class="sr-only" for="message">Note</label>
                        <textarea
                          class="w-full rounded-lg border-gray-200 p-3 text-sm"
                          placeholder="Message"
                          rows="8"
                          id="note"
                        ></textarea>
                      </div>
                    
    
                      <button
                        type="submit"
                        class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                        Valider l'enrolement
                      </button>

                  </form>

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

