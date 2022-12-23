@include('header')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Enrolements</h1>
      {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav> --}}
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">



        <!-- Right side columns -->
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Enrolements <span>|</span></h5>
                          <div class="activity">
                            @forelse ($enrolements as $enrolement )
                                <div class="activity-item d-flex">
                                <i class='bi bi-circle-fill activity-badge text-{{$enrolement->couleur}} align-self-start'></i>
                                <div class="row">
                                    <div class="col-10">
                                        <div class="activity-content">
                                            <a href="#" class="fw-bold text-dark">Enrolement de l'année : {{ $enrolement->validite }}  </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <span class="p-2 badge bg-{{$enrolement->couleur}}">{{$enrolement->etat}}</span>
                                    </div>
                                </div>


                            </div><!-- End activity i tem-->
                            @empty
                               <p class="p-1 text-white bg-secondary">Aucune enrolement est encours...</p>
                            @endforelse
                          </div>
                        </div>
                      </div>
                </div>
                @if ($actif==1)
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Avis favorable. <span>|</span></h5>
                            <div class="activity">

                                    <div class="activity-item d-flex">

                                    <div class="row " >
                                        <div class="col-2">
                                            <div class="activity-content">
                                                <a href="{{Storage::url($enrolement->autre_document)}}" download="Avis favorable">
                                                    <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-10 ">
                                            <a href="{{Storage::url($enrolement->autre_document)}}" class="fw-bold text-dark" download="Avis favorable">Télécharger le document.  </a>
                                            <p><i> Delivré le : <b> {{ $enrolement->updated_at }}</b></i></p>

                                        </div>
                                        <br>
                                        <hr>

                                        <p class="text-muted p-2 mt-2">{{ $enrolement->notification }}</p>
                                    </div>


                                </div><!-- End activity i tem-->

                            </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
          <!-- Recent Activity -->
          <!-- End Recent Activity -->
        </div><!-- End Right side columns -->

         <!-- Left side columns -->
         <div class="col-lg-6">
         @if ($actif==1)
            <div class="row">
                <!-- Sales Card -->
            </div>
        @else

        <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-8 col-md-10">
            <article class="rounded-lg border border-gray-100 bg-white p-6">


                <div class="mt-1 flex gap-1 text-green-600">
                <p class="flex gap-2 text-xs">

                    <a href="{{ route('enrolement.store') }}">
                    <button
                        type="submit"
                        class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                        Cliquez ici pour s'enroler
                    </button>
                    </a>
                </p>
                </div>
            </article>
            </div><!-- End Sales Card -->
        </div>

        @endif
        </div><!-- End Left side columns -->


      </div>
    </section>

  </main><!-- End #main -->

@include('footer')
