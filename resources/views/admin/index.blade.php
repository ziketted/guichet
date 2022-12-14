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

            <h5 class="card-title"> Etat général des demandes </h5>
            <div class="col-lg-10 ">
                <div class="row">
                    <!-- Revenue Card -->
                    <div class="col-xxl-3 col-md-6">

                        <article class="rounded-lg border border-gray-100 bg-info p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-lg text-white"> Total des exonérations </p>
                                </div>
                                <p class="text-2xl font-medium text-white"> {{$exonerationValider}}</p>

                            </div>

                            <div class="mt-1 flex gap-1 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>

                                <p class="flex gap-2 text-xs">
                                    Demande validée.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Revenue Card -->
                    <div class="col-xxl-3 col-md-6">

                        <article class="rounded-lg border border-gray-100 bg-warning p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-lg text-white"> Total des enrôlements </p>


                                </div>
                                <p class="text-2xl font-medium text-white">
                                    {{$enrolementValider}}</p>
                            </div>

                            <div class="mt-1 flex gap-1 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>

                                <p class="flex gap-2 text-xs">
                                    Demande validée.
                                </p>
                            </div>
                        </article><br>
                    </div>

                    <div class="col-xxl-3 col-md-6">

                        <article class="rounded-lg border border-gray-100 bg-secondary p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-lg text-white">Total des Conventions
                                    </p>
                                </div>
                                <p class="text-2xl text-white">
                                    {{$conventionValider}}
                                </p>


                            </div>

                            <div class="mt-1 flex gap-1 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>

                                <p class="flex gap-2 text-xs">
                                    Demande validée.
                                </p>
                            </div>
                        </article><br>
                    </div>

                </div>
            </div>
            <hr class="p-2">
            <h5 class="card-title"> Les demandes à valider </h5>
            <!-- Left side columns -->
            <div class="col-lg-10">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-3 col-md-6">
                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">
                                        <a href="{{route('admin.profile')}}"> Nos requérants</a>
                                    </p>

                                    <p class="text-2xl font-medium text-gray-900"></p>
                                </div>

                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>

                                </span>
                                {{$requerantNombre}}

                            </div>

                            <div class="mt-1 flex gap-1 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>

                                <p class="flex gap-2 text-xs">
                                </p>
                            </div>
                        </article>
                        <br>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-3 col-md-6">

                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500"> <a
                                            href="{{route('admin.exoneration',['statut'=>'soumis'])}}"> Demandes
                                            d'exoneration à valider</a></p>

                                    <p class="text-2xl font-medium text-gray-900"></p>
                                </div>

                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>
                                {{$exonerationNombre}}
                            </div>

                            <div class="mt-1 flex gap-1 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>

                                <p class="flex gap-2 text-xs">
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Revenue Card -->
                    <div class="col-xxl-3 col-md-6">

                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500"><a
                                            href="{{route('admin.enrolement',['statut'=>'soumis'])}}"> Demandes
                                            d'enrôlement à valider</a></p>

                                    <p class="text-2xl font-medium text-gray-900"></p>
                                </div>

                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>
                                {{$enrolementNombre}}
                            </div>

                            <div class="mt-1 flex gap-1 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>

                                <p class="flex gap-2 text-xs">
                                </p>
                            </div>
                        </article><br>
                    </div>

                    <div class="col-xxl-3 col-md-6">

                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500"><a
                                            href="{{route('admin.convention',['statut'=>'soumis'])}}"> Conventions
                                            à valider</a></p>

                                    <p class="text-2xl font-medium text-gray-900"></p>
                                </div>

                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>
                                {{$conventionNombre}}
                            </div>

                            <div class="mt-1 flex gap-1 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>

                                <p class="flex gap-2 text-xs">
                                </p>
                            </div>
                        </article><br>
                    </div>

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
        </div>
    </section>

</main><!-- End #main -->

@include('footer')
