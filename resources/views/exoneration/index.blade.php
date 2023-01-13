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
                    <div class="col-xxl-4 col-md-4 p-2">
                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Exonération à l'importation</p>
                                    <p class="text-2xl font-medium text-gray-900">{{$nombreDemande}}</p>
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
                        </article>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-4 p-2">
                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Exonération à l'interieur du pays</p>

                                    <p class="text-2xl font-medium text-gray-900">{{$nombreInterieur}}</p>
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



                    </div><!-- End Revenue Card -->


                    <div class="col-xxl-4 col-md-4 p-2">
                        <div class="activity-item d-flex">
                            <a href="{{ route('exoneration.store') }}">
                                <button type="submit"
                                    class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                    Nouvelle exoneration
                                </button>
                            </a>
                        </div><br>
                    </div><!-- End Right side columns -->




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
                                <h5 class="card-title">Les demandes d'exonération</h5>

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
                                                        <a href="{{route('exoneration.show', $exoneration->id)}}"
                                                            class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                                    </div> --}}
                                                    <div class="col-auto">
                                                        <a href="{{route('exoneration.edit', $exoneration->id)}}"
                                                            class="btn btn-warning"><i class="bi bi-pen-fill"></i></a>
                                                    </div>
                                                    <div class="col-auto">
                                                        <form
                                                            action="{{ route('exoneration.destroy', $exoneration->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button
                                                                href="{{route('exoneration.destroy', $exoneration->id)}}"
                                                                class="btn btn-danger"><i
                                                                    class="bi bi-trash-fill"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                            @empty
                                            <p class="p-1 text-white bg-secondary">Aucune demande n'a été soumise.</p>
                                            <br>
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


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            <br>
                            <b>L’Attestation des biens à exonérer , Les documents exigés :</b>
                        </h3>
                        <ul style="font-size: 90%;">
                            <li>Requête adressée au Directeur Général du Fonds National de Promotion et de Service
                                Social
                                avec copie au Ministre des Affaires Sociales, Action Humanitaire et Solidarité Nationale
                            </li>
                            <li>Copie de l’attestation d’enrôlement au FNPSS </li>
                            <li>Copie de la convention de partenariat avec le Gouvernement de la
                                République Démocratique du Congo représenté par le Ministre des Affaires Sociales,
                                Action Humanitaire et Solidarité Nationale ou toute autre convention
                                signée entre l’Organisme philanthropique requérant
                                et le Gouvernement dans le cadre de la mise en oeuvre des projets sociaux
                                et d’assistance humanitaire ou toute autre Convention ou Protocole signé
                                avec l’État congolais pour la mise en oeuvre des projets sociaux et humanitaires</li>
                            <li>Copie du rapport d’activités de l’année écoulée</li>
                            <li>Copie du projet ou programme social ou humanitaire concerné par l’exonération</li>
                            <li>Copie du rapport d’affectation des biens exonérés précédant la nouvelle demande et
                                approuvé par le FNPSS</li>

                        </ul>

                        <h3>
                            <br>
                            <b>Frais à payer et délai de traitement:</b>
                        </h3>
                        <ul style="font-size: 90%">
                            <li>L’équivalent en franc congolais de 55 $ USD</li>
                            <li>L’équivalent en Franc congolais de 20 $ USD comme frais de dépôt du dossier</li>
                            <li>Le délai de traitement par le FNPSS est de 10 jours ouvrables à dater du paiement des
                                frais</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            <br>
                            <b>Certificat d’exonération</b>
                        </h3>
                        <p>Le Certificat d’exonération est délivré au requérant ayant déjà bénéficié d’un Arrêté
                            interministériel
                            d’exonération Finances-Plan pour les biens disponibles à l’importation,</p>

                        <h3>
                            <br>
                            <b>L’Attestation des biens à exonérer , Les documents exigés :</b>
                        </h3>
                        <ul style="font-size: 90%;">
                            <li>Requête adressée au Directeur Général du Fonds National de Promotion et de Service
                                Social
                                avec copie au Ministre des Affaires Sociales, Action Humanitaire et Solidarité Nationale
                            </li>
                            <li>Copie de l’attestation des biens à exonérer délivré par le FNPSS</li>
                            <li>Copie de l’avis favorable pour exonération du Ministère sectoriel</li>
                            <li>Copie du Projet d’utilisation du don ou des biens acquis</li>
                            <li>Liste de colisage</li>
                            <li>Copie de la lettre de transport maritime (BL) ou aérien (L.T.A) ou terrestre</li>
                            <li>Copie de l’attestation de don ou la facture d’achat</li>
                            <li>Copie du rapport d’affectation des biens exonérés précédant la nouvelle demande et
                                approuvé par le FNPSS</li>
                        </ul>

                        <h3>
                            <br>
                            <b>Frais à payer et délai de traitement:</b>
                        </h3>
                        <ul style="font-size: 90%">
                            <li>L’équivalent en franc congolais de 55 $ USD</li>
                            <li>L’équivalent en Franc congolais de 20 $ USD comme frais de dépôt du dossier</li>
                            <li>Le délai de traitement par le FNPSS est de 8 jours ouvrable à dater du paiement des
                                frais</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->

@include('footer')
