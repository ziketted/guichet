@include('header')

<main id="main" class="main">
<section class="py-4 section align-items-center justify-content-center">
    <div class="py-4 row align-items-center justify-content-center">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Enrolement au FNPSS</h5>

            <!-- General Form Elements -->
            <form action="{{ route('enrolement.create') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-8">
                    <div class="mb-3 row">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Lettre</label>
                        <div class="col-sm-10">
                          <input class="form-control" name="lettre" type="file" id="formFile">
                        </div>
                      </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3 row">
                        <label for="inputNumber" class="col-sm-10 col-form-label">Bordereau des frais</label>
                        <div class="col-sm-10">
                          <input class="form-control" name="autre_document" type="file" id="formFile">
                        </div>
                      </div>
                </div>

                <div class="col-md-8">
                    <div class="form-floating">
                        <Textarea type="text" rows="50" cols="30" class="form-control" id="floatingEmail" name="commentaires"></Textarea>
                        <label for="floatingEmail">Commentaires</label>
                    </div>
                </div>


                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">S'enroler maintenant</button>
                </div>


            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>
    </div>
</section>
</main>

@include('footer')
