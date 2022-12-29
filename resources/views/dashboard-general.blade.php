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
                    <div class="col-xxl-3 col-md-6">
                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Demandes d'exoneration</p>

                                    <p class="text-2xl font-medium text-gray-900">{{$exonerationTotal}}</p>
                                </div>

                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>

                            </div>

                            <div class="mt-1 flex gap-1 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>


                            </div>
                        </article>
                    </div><!-- End Sales Card -->



                    <!-- Revenue Card -->
                    <div class="col-xxl-3 col-md-6 p-2">
                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Importations</p>

                                    <p class="text-2xl font-medium text-gray-900">{{$importationCount}}</p>
                                </div>

                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>
                            </div>

                            <div class="mt-1 flex gap-1 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>


                            </div>
                        </article>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-3 col-xl-12 p-2">
                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Operations à l'interieur du pays</p>

                                    <p class="text-2xl font-medium text-gray-900">{{$interieurCount}}</p>
                                </div>

                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>
                            </div>

                            <div class="mt-1 flex gap-1 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>


                            </div>
                        </article>
                    </div>
                    <?php
            $now = new DateTime();
            $year = $now->format("Y");
            if($valide>=$year){ ?>
                    <div class="col-xxl-3 col-xl-12">

                        <div role="alert" class="rounded-xl border border-gray-100 p-4 shadow-xl">
                            <div class="flex items-start gap-4">
                                <span class="text-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>



                                <div class="flex-1">
                                    <strong class="block font-medium text-gray-900"> Délai d'enrolement </strong>

                                    <p class="mt-1 text-sm text-gray-700">
                                        Valable pour : <b> {{$valide}} </b>
                                    </p>
                                </div>
                                <?php }?>


                            </div>
                        </div>

                    </div>

                    <p></p>
                    <br><br>
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">


                            <div class="card-body">
                                <h5 class="card-title">Les demandes d'exonération.</h5>

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
                                        @forelse ($exonerations as $exoneration )
                                        <tr>
                                            <th scope="row"><a href="#">#{{$exoneration->id}}</a></th>
                                            <td>{{$exoneration->titre}}</td>
                                            <td><a href="#" class="text-primary">{{$exoneration->type}}</a></td>
                                            <td> {{ \Carbon\Carbon::parse($exoneration->created_at)->diffForHumans() }}
                                            </td>
                                            <td><span
                                                    class="badge bg-{{$exoneration->couleur}}">{{$exoneration->statut}}</span>
                                            </td>
                                        </tr>
                                        @empty
                                        <p class="p-1 text-white bg-secondary">Aucune enrolement est encours...</p>
                                        <br>
                                        @endforelse
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
