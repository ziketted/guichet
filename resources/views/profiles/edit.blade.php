@include('header')

<main id="main" class="main">
    <section class="py-4 section align-items-center justify-content-center">
        <div class="py-4 row align-items-center justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <!-- General Form Elements -->

                @foreach ($profiles as $profile )
                    <form action="{{ route('profile.identiteupdate') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                        @csrf

                        <h5 class="card-title">Identification de la structure</h5>
                        <div class="col-md-6">
                        <div class="form-floating">
                            <input
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Denomination"
                                type="text" value="{{$profile->denomination}}"
                                name="denomination"
                                id="formFile" required
                            />
                        </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Sigle"
                                    type="text" value="{{$profile->sigle}}"
                                    name="sigle"
                                    id="formFile" required
                                />
                            </div>
                        </div>

                        <h5 class="card-title">Responsable de l'organisation</h5>
                        <div class="col-md-6">
                        <div class="form-floating">
                            
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Nom"
                                    type="text" value="{{$profile->responsable_nom}}"
                                    name="responsable_nom"
                                    id="formFile" required
                                />
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-floating">
                            <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="PostNom"
                                    type="text" value="{{$profile->responsable_postnom}}"
                                    name="responsable_postnom"
                                    id="formFile" required
                                />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                            
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Prenom"
                                    type="text" value="{{$profile->responsable_prenom}}"
                                    name="responsable_prenom"
                                    id="formFile" required
                                />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Fonction"
                                    type="text" value="{{$profile->responsable_fonction}}"
                                    name="responsable_fonction"
                                    id="formFile" required
                                />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Téléphone"
                                    type="text" value="{{$profile->responsable_phone}}"
                                    name="responsable_phone"
                                    id="formFile" required
                                />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                            <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Email"
                                    type="text" value="{{$profile->responsable_email}}"
                                    name="responsable_email"
                                    id="formFile" required
                                />
                        </div>
                        </div>

                        <div class="col-sm-4">
                        {{-- <button type="submit" class="btn btn-success">Mettre à jour</button> --}}
                        <button
                            type="submit"
                            class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                                Mettre à jour
                        </button>
                        </div>

                    </form>
                @endforeach
              </div>
            </div>

          </div>
        </div>
    </section>
    </main>

    

@include('footer')
