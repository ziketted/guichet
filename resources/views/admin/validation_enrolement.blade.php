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



                    <div class="col-12">
                        <div class="overflow-auto card recent-sales">

                            <div class="card-body">
                                <h5 class="card-title">Valider l'enrolement</h5>

                                <form action="{{route('admin.validerenrolement', $id)}}" class="row g-3" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <label for="email" class="text-sm font-medium">Avis favorable</label>
                                        <div class="relative mt-1" style="display: none;">
                                            <input type="input" value="{{$id}}" name="id_enrolement"
                                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                                placeholder="Chercher les fichiers" />
                                        </div>
                                        <div class="relative mt-1">
                                            <input type="file" id="file" name="autre_document"
                                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                                placeholder="Chercher les fichiers" required />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="sr-only" for="message">Note</label>
                                        <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                            placeholder="Message" name="notification" rows="8" id="note"></textarea>
                                    </div>
                                    @if ($statut!=="annulé")

                                    <div class="row p-2">
                                        @if ($statut=="validé")
                                        <div class="col-6">
                                            <button type="submit" value="annuler" name="action"
                                                class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                                Annuler l'enrolement
                                            </button>
                                        </div>
                                        @else
                                        <div class="col-6">
                                            <button type="submit" name="action" value="valider"
                                                class="block w-full rounded-lg bg-success px-5 py-3 text-sm font-medium text-white">
                                                Valider l'enrolement
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" value="annuler" name="action"
                                                class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                                Annuler l'enrolement
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
