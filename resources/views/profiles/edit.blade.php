@include('header')

<main id="main" class="main">
    <section class="py-4 section align-items-center justify-content-center">
        <div class="py-4 row align-items-center justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <!-- General Form Elements -->
                <form action="{{ route('profile.edit') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf

                    <h5 class="card-title">Identification de la structure</h5>
                    <div class="col-md-6">
                      <div class="form-floating">
                          <input class="form-control" name="titre" type="text" id="formFile" required>
                          <label for="floatingEmail">Denomination</label>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-floating">
                          <input class="form-control" name="titre" type="text" id="formFile" required>
                          <label for="floatingEmail">Sigle</label>
                      </div>
                    </div>

                    <h5 class="card-title">Responsable de l'organisation</h5>
                    <div class="col-md-6">
                      <div class="form-floating">
                          <input class="form-control" name="titre" type="text" id="formFile" required>
                          <label for="floatingEmail">Nom</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                          <input class="form-control" name="titre" type="text" id="formFile" required>
                          <label for="floatingEmail">PostNom</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                          <input class="form-control" name="titre" type="text" id="formFile" required>
                          <label for="floatingEmail">Prenom</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                          <input class="form-control" name="titre" type="text" id="formFile" required>
                          <label for="floatingEmail">Fonction</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                          <input class="form-control" name="titre" type="text" id="formFile" required>
                          <label for="floatingEmail">Téléphone</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                          <input class="form-control" name="titre" type="text" id="formFile" required>
                          <label for="floatingEmail">Email</label>
                      </div>
                    </div>

                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success">Mettre à jour</button>
                    </div>
    
    
                </form><!-- End General Form Elements -->
    
              </div>
            </div>
    
          </div>
        </div>
    </section>
    </main>

@include('footer')
