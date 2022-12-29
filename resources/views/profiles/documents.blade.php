@include('header')
<main id="main" class="main">
    <section class="py-4 section align-items-center justify-content-center">
        <div class="py-4 row align-items-center justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <!-- General Form Elements -->
                @foreach ($profiles as $profile )
                <h5 class="card-title">Documents administratifs</h5>
                    <form action="{{ route('profile.updStatut') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (is_null($profile->doc_statut) || $profile->doc_statut=='' )

                        <div class="col-md-6">
                            <div class="mb-3 row">
                                <div>
                                    <label for="email" class="text-sm font-medium"><b>Modifiez vos statuts</b></label>
                
                                    <div class="relative mt-1">
                                      <input
                                        type="file"
                                        id="formFile"
                                        name="doc_statut"
                                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                        placeholder="Chercher les fichiers"
                                      />
                                    </div>
                                </div>
                                  
                            </div>
                            <div class="col-sm-7">
                                {{-- <button type="submit" class="btn btn-success">Mettre à jour</button> --}}
                                <button
                                    type="submit"
                                    class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                    Mettre à jour
                                </button>
                            </div>
                        </div>
                        @else
                            <div class="col-md-4 p-3">
                                <div class="mb-3 row">
                                    <div class="form-floating">
                                        <a href="public/storage/{{($profile->doc_statut)}}" download="lettre">
                                            <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                                Télécharger le statut &nbsp;</h5></a>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-4">
                                <button class="btn btn-success">
                                    Modifier</button> </h5>
                            </div>
                        @endif
                    </form>
                    <form action="{{ route('profile.updAutorisation') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (is_null($profile->doc_autorisation) || $profile->doc_autorisation=='' )

                        <div class="col-md-6">
                            <div class="mb-3 row">
                                {{-- <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre autorisation de fonctionnement</label>
                                <div class="col-sm-10">
                                <input class="form-control" name="doc_autorisation" type="file" id="formFile" required>
                                </div> --}}

                                <div>
                                    <label for="email" class="text-sm font-medium"><b>Modifiez votre autorisation de fonctionnement</b></label>
                
                                    <div class="relative mt-1">
                                      <input
                                        type="file"
                                        id="formFile"
                                        name="doc_autorisation"
                                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                        placeholder="Chercher les fichiers"
                                      />
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-7">
                                <button
                                    type="submit"
                                    class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                    Mettre à jour
                                </button>
                            </div><br>
                        </div>
                        <hr>
                        @else
                        <div class="col-md-4 p-3">
                                <div class="mb-3 row">
                                <div class="form-floating">
                                    <a href="public/storage/{{($profile->doc_autorisation)}}" download="lettre">
                                        <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                            Télécharger le statut &nbsp;</h5></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @endif
                    </form>
                <form action="{{ route('profile.upd_personnalite') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (is_null($profile->doc_personnalite) || $profile->doc_personnalite=='' )

                    <div class="col-md-6">
                        <div class="mb-3 row">
                            {{-- <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre personnalité juridique</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="doc_personnalite" type="file" id="formFile" required>
                            </div> --}}

                            <div>
                                <label for="email" class="text-sm font-medium"><b>Modifiez votre personnalité juridique</b></label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="doc_personnalite"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
                                  />
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <button
                                type="submit"
                                class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                Mettre à jour
                            </button>
                        </div><br>
                    </div>
                    @else
                    <div class="col-md-4 p-3">
                            <div class="mb-3 row">
                            <div class="form-floating">
                                <a href="public/storage/{{($profile->doc_personnalite)}}" download="lettre">
                                    <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                        Télécharger le statut &nbsp;</h5></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <button class="btn btn-success">
                            Modifier</button> </h5>
                    </div>
                    @endif
                </form>
                <form action="{{ route('profile.upd_certificat') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (is_null($profile->doc_certificat) || $profile->doc_certificat=='' )

                    <div class="col-md-6">
                        <div class="mb-3 row">
                            {{-- <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre Certificat</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="doc_certificat" type="file" id="formFile" required>
                            </div> --}}

                            <div>
                                <label for="email" class="text-sm font-medium"><b>Modifiez votre Certificat</b></label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="doc_certificat"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
                                  />
            
                                  
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <button
                                type="submit"
                                class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                Mettre à jour
                            </button>
                        </div><br>
                    </div>
                    <hr>
                    @else
                    <div class="col-md-4 p-3">
                            <div class="mb-3 row">
                            <div class="form-floating">
                                <a href="public/storage/{{($profile->doc_certificat)}}" download="lettre">
                                    <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                        Télécharger le statut &nbsp;</h5></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <button class="btn btn-success">
                            Modifier</button> </h5>
                    </div>
                    @endif
                </form>
                <form action="{{ route('profile.upd_convention') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (is_null($profile->doc_convention) || $profile->doc_convention=='' )

                    <div class="col-md-6">
                        <div class="mb-3 row">
                            {{-- <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre convention de partenariat</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="doc_convention" type="file" id="formFile" required>
                            </div> --}}

                            <div>
                                <label for="email" class="text-sm font-medium"><b>Modifiez votre convention de partenariat</b></label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="doc_convention"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
                                  />
            
                                  
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-7">
                            <button
                                type="submit"
                                class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                Mettre à jour
                            </button>
                        </div><br>
                    </div>
                    @else
                        <div class="col-md-4 p-3">
                                <div class="mb-3 row">
                                <div class="form-floating">
                                    <a href="public/storage/{{($profile->doc_convention)}}" download="lettre">
                                        <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                            Télécharger la convention.  &nbsp;</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success">Modifier</button> </h5>
                        </div>
                    @endif
                </form>
                <form action="{{ route('profile.upd_accord') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (is_null($profile->doc_accord) || $profile->doc_accord=='' )

                    <div class="col-md-6">
                        <div class="mb-3 row">
                            {{-- <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre accord cadre</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="doc_accord" type="file" id="formFile" required>
                            </div> --}}

                            <div>
                                <label for="email" class="text-sm font-medium"><b>Modifiez votre accord cadre</b></label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="doc_accord"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
                                  />
            
                                  
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <button
                                type="submit"
                                class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                Mettre à jour
                            </button>
                        </div><br>
                    </div>
                    <hr>
                    @else
                    <div class="col-md-4 p-3">
                            <div class="mb-3 row">
                            <div class="form-floating">
                                <a href="public/storage/{{($profile->doc_accord)}}" download="lettre">
                                    <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                        Télécharger le statut &nbsp;</h5></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <button class="btn btn-success">
                            Modifier</button> </h5>
                    </div>
                    @endif
                </form>
                {{-- <form action="{{ route('profile.document') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (is_null($profile->doc_statut) || $profile->statut=='' )

                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">La liste du personel</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="lettre" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </div>
                    </div>
                    @else
                    <div class="col-md-4 p-3">
                            <div class="mb-3 row">
                            <div class="form-floating">
                                <a href="{{Storage::url($profile->statut)}}" download="lettre">
                                    <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                        Télécharger le statut &nbsp;</h5></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <button class="btn btn-success">
                            Modifier</button> </h5>
                    </div>
                    @endif
                </form> --}}
                @endforeach
              </div>
            </div>

          </div>
        </div>
    </section>
    </main>

@include('footer')
