@include('header')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Convention</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                <li class="breadcrumb-item active">Convention</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-xxl-4 col-md-6">
                                <article class="rounded-lg border border-gray-100 bg-white p-6">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-sm text-gray-500">Nombre des coventions effectuées</p>

                                            <p class="text-2xl font-medium text-gray-900"> {{$conventionNombre}}</p>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>

                                        <p class="flex gap-2 text-xs">
                                        </p>
                                    </div>
                                </article><br><br>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <article class="rounded-lg border border-gray-100 bg-white p-6">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-sm text-gray-500">Convention validée</p>

                                            <p class="text-2xl font-medium text-gray-900"> {{$conventionValider}}</p>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>

                                        <p class="flex gap-2 text-xs">
                                        </p>
                                    </div>
                                </article><br><br>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <article class="rounded-lg border border-gray-100 bg-white p-6">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-sm text-gray-500">Convention annulée</p>

                                            <p class="text-2xl font-medium text-gray-900"> {{$conventionAnnuler}}</p>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>

                                        <p class="flex gap-2 text-xs">
                                        </p>
                                    </div>
                                </article><br><br>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="activity-item d-flex">
                            <a href="{{ route('convention.create') }}">
                                <button type="submit"
                                    class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                    Nouvelle convention
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Sales Card -->

                    <!-- End Sales Card -->



                    <!-- End Right side columns -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>
                                    <br>
                                    <b>Les documents exigés :</b>
                                </h3>
                                <ul style="font-size: 90%;">
                                    <li>Requête adressée au Ministre des Affaires Sociales, Action Humanitaire et
                                        Solidarité
                                        Nationale avec copie au Directeur Général du Fonds National de Promotion et de
                                        Service Social (FNPSS)</li>
                                    <li>Copie de l’attestation d’enrôlement au FNPSS </li>
                                    <li>Copie du Plan d’Action pour l’année en cours</li>
                                    <li>Copie du rapport annuel d’activités de l’année écoulée</li>
                                    <li>Copie du projet ou programme social ou humanitaire concerné par le partenariat
                                        sollicité</li>

                                </ul>

                                <h3>
                                    <br>
                                    <b>Frais à payer et délai de traitement:</b>
                                </h3>
                                <ul style="font-size: 90%">
                                    <li>Frais dépôt du dossier : l’équivalent en Franc Congolais de 20 $ US</li>
                                    <li>Frais d’enquête : l’équivalent en Franc Congolais de 300 $ US</li>
                                    <li>Le délai de traitement par le FNPSS est de 10 jours ouvrables à dater du
                                        paiement des frais.</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    {{-- <div class="col-xxl-8 col-md-8">
                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Exonération à l'interieur du pays</p>

                                    <p class="text-2xl font-medium text-gray-900"></p>
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

                                <p class="flex gap-2 text-xs">
                                </p>
                            </div>
                        </article><br>



                    </div> --}}

                    {{--
                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Customers <span>| This Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="pt-1 text-danger small fw-bold">12%</span> <span
                                            class="pt-2 text-muted small ps-1">decrease</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card --> --}}

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="overflow-auto card recent-sales">

                            <div class="card-body">
                                <h5 class="card-title">Les demandes de conventions</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>

                                            <th scope="col">Date de soumission</th>
                                            <th scope="col">Intitulé</th>
                                            <th scope="col">Statut</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($conventions as $item)

                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->commentaires}}</td>
                                        <td><span class="badge {{$item->statut}}">{{$item->statut}}</span></td>
                                        <td>
                                            <div class="items-center row x-gap-10 y-gap-10">
                                                {{-- <div class="col-auto">
                                                    <a href="{{route('exoneration.show', $exoneration->id)}}"
                                                        class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                                </div> --}}
                                                <div class="col-auto">
                                                    <a href="{{route('convention.show',$item->id )}}"
                                                        class="btn btn-info"><i
                                                            class="bi bi-pen-fill"></i>&nbsp;Edit</a>
                                                </div>
                                                <div class="col-auto">
                                                    <form action="" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button href="" class="btn btn-danger"><i
                                                                class="bi bi-trash-fill"></i></button>
                                                    </form>
                                                </div>
                                            </div>
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
