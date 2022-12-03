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
                                <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez vos statuts</label>
                                <div class="col-sm-10">
                                <input class="form-control" name="doc_statut" type="file" id="formFile" required>
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
                                        <a href="{{Storage::url($profile->doc_statut)}}" download="lettre">
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
                                <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre autorisation de fonctionnement</label>
                                <div class="col-sm-10">
                                <input class="form-control" name="doc_autorisation" type="file" id="formFile" required>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">Mettre à jour</button>
                            </div>
                        </div>
                        <hr>
                        @else
                        <div class="col-md-4 p-3">
                                <div class="mb-3 row">
                                <div class="form-floating">
                                    <a href="{{Storage::url($profile->doc_autorisation)}}" download="lettre">
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
                            <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre personnalité juridique</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="doc_personnalite" type="file" id="formFile" required>
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
                                <a href="{{Storage::url($profile->doc_personnalite)}}" download="lettre">
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
                            <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre Certificat</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="doc_certificat" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </div>
                    </div>
                    <hr>
                    @else
                    <div class="col-md-4 p-3">
                            <div class="mb-3 row">
                            <div class="form-floating">
                                <a href="{{Storage::url($profile->doc_certificat)}}" download="lettre">
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
                            <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre convention de partenariat</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="doc_convention" type="file" id="formFile" required>
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
                                    <a href="{{Storage::url($profile->doc_convention)}}" download="lettre">
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
                            <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre accord cadre</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="doc_accord" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </div>
                    </div>
                    <hr>
                    @else
                    <div class="col-md-4 p-3">
                            <div class="mb-3 row">
                            <div class="form-floating">
                                <a href="{{Storage::url($profile->doc_accord)}}" download="lettre">
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
