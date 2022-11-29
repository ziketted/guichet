@include('header')
<main id="main" class="main">
    <section class="py-4 section align-items-center justify-content-center">
        <div class="py-4 row align-items-center justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Nos Objectifs</h5>

                
                <form action="{{ route('profile.autre_infos') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <div class="col-md-10">
                      <div class="form-floating">
                          <textarea class="form-control" name="" id="" cols="30" rows="10" required></textarea>
                          <label for="floatingEmail">Objectif global de l'organisation</label>
                      </div>
                    </div>


                    <div class="col-md-10">
                        <div class="form-floating">
                            <Textarea type="text" rows="50" cols="30" class="form-control" id="floatingEmail" name="commentaires"></Textarea>
                            <label for="floatingEmail">Objectif specifique</label>
                        </div>
                    </div>



                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </div>
                    

                </form><!-- End General Form Elements -->
                
                <!-- General Form Elements -->
                

              </div>
            </div>

          </div>
        </div>
    </section>
    </main>

@include('footer')
