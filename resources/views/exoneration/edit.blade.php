@include('header')
<main id="main" class="main">
    <section class="py-4 section align-items-center justify-content-center">
        <div class="py-4 row align-items-center justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Modification de la demande de certificat d'exoneration au FNPSS</h5>

                @foreach ($exonerations as $exoneration )
                    <form action="{{ route('exoneration.upd_titre') }} " class="row g-3"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-8">

                            <div class="form-floating">
                                <input class="form-control" name="titre" type="text" id="formFile" value="{{$exoneration->titre}}" required>
                                <label for="floatingEmail">Description de la demande  d'exonération</label>
                            </div>
                        </div>
                        <div class="col-md-4 p-1">
                            <button class="btn btn-danger">
                                Modifier</button> </h5>
                        </div>
                    </form><br>
                    <form action="{{ route('exoneration.upd_lettre') }} " class="row g-3"  method="POST" enctype="multipart/form-data">
                         @csrf
                         @if (is_null($exoneration->lettre) || $exoneration->lettre=='' )
                            <div class="col-md-8" id="update">
                                <div class="mb-3 row">
                                    <label for="inputNumber" class="col-sm-10 col-form-label">Lettre à la Direction du FNPSS</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" name="lettre" type="file" id="formFile" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success">
                                    Modifier</button> </h5>
                            </div>
                            @else
                            <div class="col-md-8 p-3">
                                    <div class="mb-3 row">
                                    <div class="form-floating">
                                        <a href="{{Storage::url($exoneration->lettre)}}" download="lettre">
                                            <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                                Télécharger la lettre &nbsp;</h5></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <button class="btn btn-success">
                                    Modifier</button> </h5>
                            </div>
                            @endif
                        </form>
                    <form action="{{ route('exoneration.upd_attestation') }} " class="row g-3"  method="POST" enctype="multipart/form-data">
                                @csrf
                        @if (is_null($exoneration->attestation) || $exoneration->attestation=='' )
                            <div class="col-md-8">
                                <div class="mb-3 row">
                                    <label for="inputNumber" class="col-sm-10 col-form-label">Attestation des biens à exonerer</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" name="attestation" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success">
                                    Modifier</button> </h5>
                            </div>
                        @else
                            <div class="col-md-8 p-3">
                                    <div class="mb-3 row">
                                    <div class="form-floating">
                                        <a href="{{Storage::url($exoneration->attestation)}}" download="attestation">
                                            <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                                Télécharger l'attestation &nbsp;</h5></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success">
                                    Modifier</button> </h5>
                            </div>
                        @endif
                    </form>
                    <form action="{{ route('exoneration.upd_copie_avis') }} " class="row g-3"  method="POST" enctype="multipart/form-data">
                        @csrf
                         @if (is_null($exoneration->copie_avis) || $exoneration->copie_avis=='' )
                        <div class="col-md-8">
                            <div class="mb-3 row">
                                <label for="inputNumber" class="col-sm-10 col-form-label">Avis favorable du Ministère</label>
                                <div class="col-sm-10">
                                <input class="form-control" name="copie_avis" type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @else
                        <div class="col-md-8 p-3">
                                <div class="mb-3 row">
                                <div class="form-floating">
                                    <a href="{{Storage::url($exoneration->copie_avis)}}" download="copie_avis">
                                        <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                            Télécharger la copie d'avis &nbsp; </h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @endif
                    </form>
                    <form action="{{ route('exoneration.upd_liste_colisage') }} " class="row g-3"  method="POST" enctype="multipart/form-data">
                        @csrf
                       @if (is_null($exoneration->liste_colisage) || $exoneration->liste_colisage=='' )
                        <div class="col-md-8">
                            <div class="mb-3 row">
                                <label for="inputNumber" class="col-sm-10 col-form-label">Liste de colisage</label>
                                <div class="col-sm-10">
                                <input class="form-control" name="liste_colisage" type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @else
                        <div class="col-md-8 p-3">
                                <div class="mb-3 row">
                                <div class="form-floating">
                                    <a href="{{Storage::url($exoneration->liste_colisage)}}" download="liste_colisage">
                                        <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                            Télécharger la liste de colisage &nbsp;</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @endif
                    </form>
                    <form action="{{ route('exoneration.upd_projet') }} " class="row g-3"  method="POST" enctype="multipart/form-data">
                        @csrf
                       @if (is_null($exoneration->projet) || $exoneration->projet=='' )

                        <div class="col-md-8">
                            <div class="mb-3 row">
                                <label for="inputNumber" class="col-sm-10 col-form-label">Copie du projet d'utilisation des biens</label>
                                <div class="col-sm-10">
                                <input class="form-control" name="projet" type="file" id="formFile">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @else
                        <div class="col-md-8 p-3">
                                <div class="mb-3 row">
                                <div class="form-floating">
                                    <a href="{{Storage::url($exoneration->projet)}}" download="projet">
                                        <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                            Télécharger le projet &nbsp; </h5></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @endif
                    </form>
                    <form action="{{ route('exoneration.upd_transport') }} " class="row g-3"  method="POST" enctype="multipart/form-data">
                        @csrf
                       @if (is_null($exoneration->transport) || $exoneration->transport=='' )

                        <div class="col-md-8">
                            <div class="mb-3 row">
                                <label for="inputNumber" class="col-sm-10 col-form-label">Lettre de transport</label>
                                <div class="col-sm-10">
                                <input class="form-control" name="transport" type="file" id="formFile">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @else
                        <div class="col-md-8 p-3">
                                <div class="mb-3 row">
                                <div class="form-floating">
                                    <a href="{{Storage::url($exoneration->transport)}}" download="transport">
                                        <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                            Télécharger le transport &nbsp;</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @endif
                    </form>
                    <form action="{{ route('exoneration.upd_facture') }} " class="row g-3"  method="POST" enctype="multipart/form-data">
                        @csrf
                       @if (is_null($exoneration->facture) || $exoneration->facture=='' )

                        <div class="col-md-8">
                            <div class="mb-3 row">
                                <label for="inputNumber" class="col-sm-10 col-form-label">Facture d'achat</label>
                                <div class="col-sm-10">
                                     <input class="form-control" name="facture" type="file" id="formFile">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @else
                        <div class="col-md-8 p-3">
                                <div class="mb-3 row">
                                <div class="form-floating">
                                    <a href="{{Storage::url($exoneration->facture)}}" download="lettre">
                                        <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                            Télécharger la facture &nbsp; </h5></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @endif
                    </form>
                    <form action="{{ route('exoneration.upd_affectation') }} " class="row g-3"  method="POST" enctype="multipart/form-data">
                        @csrf
                       @if (is_null($exoneration->affectation) || $exoneration->affectation=='' )

                        <div class="col-md-8">
                            <div class="mb-3 row">
                                <label for="inputNumber" class="col-sm-10 col-form-label">Rapport d'affectation des biens exonérés</label>
                                <div class="col-sm-10">
                                <input class="form-control" name="affectation" type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @else
                        <div class="col-md-8 p-3">
                                <div class="mb-3 row">
                                <div class="form-floating">
                                    <a href="{{Storage::url($exoneration->affectation)}}" download="affectation">
                                        <h5>&nbsp;<i class="bi bi-download text-danger"></i>
                                            Télécharger l'affectation &nbsp; </h5></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>
                        @endif
                    </form>
                    <form action="{{ route('exoneration.upd_type') }} " class="row g-3"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-8">
                            <div class="mb-3 form-floating">
                                <select name="type" class="form-select" id="floatingSelect" aria-label="State">
                                    <label for="floatingSelect">Selectionner le type d'exonération</label>
                                    <option value="{{$exoneration->type}}">{{$exoneration->type}}</option>
                                    <option value="Importation">Importation</option>
                                    <option value="Interieur">Interieur de la RDC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success">
                                Modifier</button> </h5>
                        </div>

                    </form>
                    <form action="{{ route('exoneration.upd_commentaire') }} " class="row g-3"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-8">
                            <div class="form-floating">
                                <Textarea type="text" rows="50" cols="30" class="form-control" id="floatingEmail" name="commentaire">{{$exoneration->commentaire}}</Textarea>
                                <label for="floatingEmail">Commentaires</label>
                            </div>
                        </div>
                            <div class="col-sm-4">
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
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
