@include('header')

<main id="main" class="main">
    <section class="py-4 section align-items-center justify-content-center">
        <div class="py-4 row align-items-center justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <!-- General Form Elements -->
                <form action="{{ route('profile.document') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf

                    <h5 class="card-title">Documents administratifs</h5>
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez vos statuts</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="lettre" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre autorisation de fonctionnement</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="lettre" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre personnalité juridique</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="lettre" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre Certificat</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="lettre" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre convention de partenariat</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="lettre" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="inputNumber" class="col-sm-10 col-form-label">Modifiez votre accord cadre</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="lettre" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </div>
                    </div>
                    <hr>
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
                   

    
                </form><!-- End General Form Elements -->
    
              </div>
            </div>
    
          </div>
        </div>
    </section>
    </main>

@include('footer')
