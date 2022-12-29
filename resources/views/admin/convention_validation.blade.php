@include('header')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Convention</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                <li class="breadcrumb-item active">Validation la convention.</li>

            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">

                <div class="row">
                    @foreach ($conventions as $convention )
                    <h5 class="card-title p-3"> Requérant : <b> {{$convention->user->name}}</b></h5>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="activity">
                                    <div class="activity-item d-flex">
                                        <div class="row ">
                                            <div class="col-4 p-2 mt-2">
                                                <div class="activity-content">
                                                    <a href="{{Storage::url($convention->programme_social)}}"
                                                        download="programme_social">
                                                        <img
                                                            src="https://img.icons8.com/stickers/60/null/live-folder.png" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8 p-2"><br>
                                                <a href="{{Storage::url($convention->programme_social)}}"
                                                    class="fw-bold text-dark" download="programme_social">Téléchargez
                                                    Programme social. </a>
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
                                <p class="text-sm">{{ $convention->commentaires }}</p>

                            </div>
                        </div>
                    </div>


                    <!-- Recent Sales -->
                    <div class="col-10">
                        <div class="overflow-auto card recent-sales">

                            <div class="card-body">
                                <h5 class="card-title">Valider la convention. </h5>

                                <form action="{{route('admin.modifierconvention')}}" class="row g-3" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div>


                                        <div class="relative mt-1" style="display: none;">
                                            <input type="text" id="titre" name="id_convention" value="{{$id}}"
                                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                                placeholder="Chercher les fichiers" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="sr-only" for="message">Note</label>
                                        <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                            placeholder="Message" rows="4" id="note"
                                            name="notification">{{ $convention->notification }}</textarea>
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
                                @endforeach
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
