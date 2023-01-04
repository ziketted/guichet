@include('header')
<main id="main" class="main">
    <section class="py-4 section align-items-center justify-content-center">
        <div class="py-4 row align-items-center justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Demande de convention au FNPSS</h5>

                        <!-- General Form Elements -->
                        @foreach ($conventions as $item)
                        <form action="{{route('convention.update', $item->id)}}" class="row g-3" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-3"><br>
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
                                            <strong class="block font-medium text-gray-900"> Attestation</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6"><br>
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
                                            <strong class="block font-medium text-gray-900"> Plan d'actions</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"><br>
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
                                            <strong class="block font-medium text-gray-900"> Rapport</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="col-lg-12 ">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="activity">
                                                <div class="activity-item d-flex">
                                                    <div class="row ">
                                                        @if (is_null($item->programme_social) ||
                                                        $item->programme_social=='' )
                                                        <div class=" row p-4">
                                                            <div class="col-12">
                                                                <h5 for="Bordereau" class="card-title">Copie
                                                                    du projet ou
                                                                    programme social.</h5>
                                                                <div class="relative mt-1">
                                                                    <input type="file" id="formFile"
                                                                        name="programme_social"
                                                                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                                                        placeholder="Chercher les fichiers" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class=" row p-4">
                                                            <div class="col-2">
                                                                <div class="activity-content">
                                                                    <a href="{{Storage::url($item->programme_social)}}"
                                                                        download="programme social">
                                                                        <img
                                                                            src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-7 p-2">
                                                                <a href="{{Storage::url($item->programme_social)}}"
                                                                    download="copie programme social"
                                                                    class="fw-bold text-dark">
                                                                    copie programme social</a>
                                                                <hr>
                                                            </div>
                                                            <div class="col-12 p-1">
                                                                <button class="btn btn-warning">Modifier le document
                                                                    soumis.</button>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div><!-- End activity i tem-->
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-10">
                                <div class="form-floating">
                                    <div>
                                        <label class="sr-only" for="message">Message</label>
                                        <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                            placeholder="Commentaires" rows="8" type="text" name="commentaires"
                                            id="message">{{$item->commentaires}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" name="ajour" value="valider"
                                    class="block w-full rounded-lg bg-info px-5 py-3 text-sm font-medium text-white">
                                    Mettre à jour
                                </button>
                            </div>

                        </form><!-- End General Form Elements -->

                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@include('footer')
