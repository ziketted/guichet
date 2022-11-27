@include('header')
<main id="main" class="main">
    <section class="py-4 section align-items-center justify-content-center">
        <div class="py-4 row align-items-center justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Demande de certificat d'exoneration au FNPSS</h5>

                <!-- General Form Elements -->
                <form action="{{ route('exoneration.create') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-8">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-3 col-form-label">Lettre à la Direction du FNPSS</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="lettre" type="file" id="formFile">
                            </div>
                          </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Attestation des biens à exonerer</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="attestation" type="file" id="formFile">
                            </div>
                          </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Avis favorable du Ministère</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="copie_avis" type="file" id="formFile">
                            </div>
                          </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Liste de colisage</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="liste_colisage" type="file" id="formFile">
                            </div>
                          </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Copie du projet d'utilisation des biens</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="projet" type="file" id="formFile">
                            </div>
                          </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Lettre de transport</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="transport" type="file" id="formFile">
                            </div>
                          </div>
                    </div>

                    <div class="col-md-8">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Facture d'achat</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="facture" type="file" id="formFile">
                            </div>
                          </div>
                    </div>

                    <div class="col-md-8">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Rapport d'affectation des biens exonérés</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="affectation" type="file" id="formFile">
                            </div>
                          </div>
                    </div>

                    <div class="col-md-8">
                        <div class="mb-3 form-floating">
                            <select name="type_exoneration" class="form-select" id="floatingSelect" aria-label="State">
                                <label for="floatingSelect">Selectionner le type d'exonération</label>
                                <option value="Importation">Importation</option>
                                <option value="Interieur">Interieur de la RDC</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-floating">
                            <Textarea type="text" rows="50" cols="30" class="form-control" id="floatingEmail" name="commentaires"></Textarea>
                            <label for="floatingEmail">Commentaires</label>
                        </div>
                    </div>


                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Demander le certificat d'exonération</button>
                    </div>


                </form><!-- End General Form Elements -->

              </div>
            </div>

          </div>
        </div>
    </section>
    </main>

@include('footer')
