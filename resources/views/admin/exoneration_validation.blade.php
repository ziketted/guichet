@include('header')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Enrolement</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                <li class="breadcrumb-item active">Validation de l'exonération.</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-10">

                <div class="row">
                    @foreach ($exonerations as $exoneration )
                    <h5 class="card-title p-3 mb-4">Titre de l'exonération : &nbsp;<b>{{$exoneration->titre}}.</b> <span></span></h5>

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="activity">
                                        <div class="activity-item d-flex">
                                            <div class="row ">
                                                <div class="col-4 p-2 mt-2">
                                                    <div class="activity-content">
                                                        <a href="{{Storage::url($exoneration->attestation)}}"
                                                            download="Attestation">
                                                            <img
                                                                src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-8 p-3">
                                                    <a href="{{Storage::url($exoneration->attestation)}}"
                                                        class="fw-bold text-dark" download="Attestation"> l'attestation. </a>
                                                        <hr>
                                                </div>
                                            </div>
                                        </div><!-- End activity i tem-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">

                                    <div class="activity">

                                        <div class="activity-item d-flex">

                                            <div class="row ">
                                                <div class="col-4 p-2 mt-2">

                                                    <div class="activity-content">
                                                        <a href="{{Storage::url($exoneration->lettre)}}"
                                                            download="Lettre ">
                                                            <img
                                                                src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-8 p-3">

                                                    <a href="{{Storage::url($exoneration->lettre)}}"
                                                        class="fw-bold text-dark" download="Lettre">Téléchargez &nbsp; la lettre. </a>
                                                        <hr>


                                                </div>



                                            </div>


                                        </div><!-- End activity i tem-->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">

                                    <div class="activity">

                                        <div class="activity-item d-flex">

                                            <div class="row ">
                                                <div class="col-4 p-2 mt-2">

                                                    <div class="activity-content">
                                                        <a href="{{Storage::url($exoneration->copie_avis)}}"
                                                            download="Copie Avis favorable">
                                                            <img
                                                                src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-8 p-3">

                                                    <a href="{{Storage::url($exoneration->copie_avis)}}"
                                                        class="fw-bold text-dark" download="Copie Avis favorable">Copie de l'avis favorable. </a>
                                                        <hr>


                                                </div>



                                            </div>


                                        </div><!-- End activity i tem-->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">

                                    <div class="activity">

                                        <div class="activity-item d-flex">

                                            <div class="row ">
                                                <div class="col-4 p-2 mt-2">

                                                    <div class="activity-content">
                                                        <a href="{{Storage::url($exoneration->liste_colisage)}}"
                                                            download="Liste de colisage">
                                                            <img
                                                                src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-8 p-3">

                                                    <a href="{{Storage::url($exoneration->attestation)}}"
                                                        class="fw-bold text-dark" download="Liste colisage">Liste de colisage. </a>
                                                        <hr>


                                                </div>



                                            </div>


                                        </div><!-- End activity i tem-->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">

                                    <div class="activity">

                                        <div class="activity-item d-flex">

                                            <div class="row ">
                                                <div class="col-4 p-2 mt-2">

                                                    <div class="activity-content">
                                                        <a href="{{Storage::url($exoneration->projet)}}"
                                                            download="Projet">
                                                            <img
                                                                src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-8 p-3">

                                                    <a href="{{Storage::url($exoneration->projet)}}"
                                                        class="fw-bold text-dark" download="Projet">Téléchargez le projet. </a>
                                                        <hr>


                                                </div>



                                            </div>


                                        </div><!-- End activity i tem-->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">

                                    <div class="activity">

                                        <div class="activity-item d-flex">

                                            <div class="row ">
                                                <div class="col-4 p-2 mt-2">

                                                    <div class="activity-content">
                                                        <a href="{{Storage::url($exoneration->transport)}}"
                                                            download="Document Transport">
                                                            <img
                                                                src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-8 p-3">

                                                    <a href="{{Storage::url($exoneration->transport)}}"
                                                        class="fw-bold text-dark" download="Document de transport">Document de transport. </a>
                                                        <hr>


                                                </div>



                                            </div>


                                        </div><!-- End activity i tem-->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">

                                    <div class="activity">

                                        <div class="activity-item d-flex">

                                            <div class="row ">
                                                <div class="col-4 p-2 mt-2">

                                                    <div class="activity-content">
                                                        <a href="{{Storage::url($exoneration->facture)}}"
                                                            download="Facture">
                                                            <img
                                                                src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-8 p-3">

                                                    <a href="{{Storage::url($exoneration->facture)}}"
                                                        class="fw-bold text-dark" download="Facture">Facture des paiements. </a>
                                                        <hr>


                                                </div>



                                            </div>


                                        </div><!-- End activity i tem-->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">

                                    <div class="activity">

                                        <div class="activity-item d-flex">

                                            <div class="row ">
                                                <div class="col-4 p-2 mt-2">

                                                    <div class="activity-content">
                                                        <a href="{{Storage::url($exoneration->affectation)}}"
                                                            download="Affectation">
                                                            <img
                                                                src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-8 p-3">

                                                    <a href="{{Storage::url($exoneration->affectation)}}"
                                                        class="fw-bold text-dark" download="Affectation">Document d'affectation </a>
                                                        <hr>


                                                </div>



                                            </div>


                                        </div><!-- End activity i tem-->

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Note du requérant.</h5>
                                    <p class="text-sm">{{ $exoneration->commentaire }}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Recent Sales -->
                    <div class="col-10">
                        <div class="overflow-auto card recent-sales">

                            <div class="card-body">
                                <h5 class="card-title">Valider l'exonération. </h5>

                                <form action="{{route('admin.validerexoneration')}}" class="row g-3" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div>


                                        <div class="relative mt-1" style="display: none;">
                                            <input type="text" id="titre" name="id" value="{{$id}}"
                                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                                placeholder="Chercher les fichiers" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="sr-only" for="message">Note</label>
                                        <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                            placeholder="Message" rows="4" id="note" name="notification"></textarea>
                                    </div>


                                    @if ($statut!=="annulé")

                                    <div class="row p-2">
                                        @if ($statut=="validé")
                                        <div class="col-6">
                                            <button type="submit" value="annuler" name="action"
                                                class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                                Annuler l'exonération
                                            </button>
                                        </div>
                                        @else
                                        <div class="col-6">
                                            <button type="submit" name="action" value="valider"
                                                class="block w-full rounded-lg bg-success px-5 py-3 text-sm font-medium text-white">
                                                Valider l'exonération
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" value="annuler" name="action"
                                                class="block w-full rounded-lg bg-info px-5 py-3 text-sm font-medium text-white">
                                                Annuler l'exonération
                                            </button>
                                        </div>
                                        @endif

                                    </div>
                                @endif

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
