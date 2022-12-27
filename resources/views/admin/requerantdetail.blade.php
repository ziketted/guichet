@include('header')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Details du requerant</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
          <li class="breadcrumb-item active">Details du requerant</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-10">

              <div class="row">
                @forelse ($profiles as $profile)
                  {{-- <h5 class="card-title p-3 mb-4">Titre de l'exonération : &nbsp;<b>{{$exoneration->titre}}.</b> <span></span></h5> --}}

                      <div class="col-lg-3">
                          <div class="card">
                              <div class="card-body">
                                  <div class="activity">
                                      <div class="activity-item d-flex">
                                          <div class="row ">
                                              @if (is_null($profile->doc_statut) || $profile->doc_statut=='' )
                                                <a href="" class="fw-bold text-dark">
                                                  <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                                  Statut juridique
                                                </a>
                                                
                                              @else
                                              <div class="col-4 p-2 mt-2">
                                                  <div class="activity-content">
                                                      <a href="{{Storage::url($profile->doc_statut)}}" download="Statut juridique"
                                                          >
                                                          <img
                                                              src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                      </a>
                                                  </div>
                                              </div>
                                              
                                              <div class="col-8 p-3">
                                                  <a href="{{Storage::url($profile->doc_statut)}}" download="Statut juridique"
                                                      class="fw-bold text-dark" > Statut juridique </a>
                                                      <hr>
                                              </div>
                                              @endif
                                          </div>
                                      </div><!-- End activity i tem-->
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="activity">
                                    <div class="activity-item d-flex">
                                        <div class="row ">
                                          @if (is_null($profile->doc_accord) || $profile->doc_accord=='' )
                                              <a href="" class="fw-bold text-dark">
                                                <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                                Accord juridique
                                              </a>
                                              
                                            @else
                                            <div class="col-4 p-2 mt-2">
                                                <div class="activity-content">
                                                    <a href="{{Storage::url($profile->doc_accord)}}" download="Accord juridique"
                                                        >
                                                        <img
                                                            src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            <div class="col-8 p-3">
                                                <a href="{{Storage::url($profile->doc_accord)}}" download="Statut juridique"
                                                    class="fw-bold text-dark" > Accord juridique </a>
                                                    <hr>
                                            </div>
                                            @endif
                                        </div>
                                    </div><!-- End activity i tem-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="card">
                          <div class="card-body">
                              <div class="activity">
                                  <div class="activity-item d-flex">
                                      <div class="row ">
                                        @if (is_null($profile->doc_autorisation) || $profile->doc_autorisation=='' )
                                            <a href="" class="fw-bold text-dark">
                                              <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                              Autorisation juridique
                                            </a>
                                            
                                          @else
                                          <div class="col-4 p-2 mt-2">
                                              <div class="activity-content">
                                                  <a href="{{Storage::url($profile->doc_autorisation)}}" download="Autorisation juridique"
                                                      >
                                                      <img
                                                          src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                  </a>
                                              </div>
                                          </div>
                                          
                                          <div class="col-8 p-3">
                                              <a href="{{Storage::url($profile->doc_autorisation)}}" download="Autorisation juridique"
                                                  class="fw-bold text-dark" > Autorisation juridique </a>
                                                  <hr>
                                          </div>
                                          @endif
                                      </div>
                                  </div><!-- End activity i tem-->
                              </div>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="card">
                          <div class="card-body">
                              <div class="activity">
                                  <div class="activity-item d-flex">
                                      <div class="row ">
                                        @if (is_null($profile->doc_personnalite) || $profile->doc_personnalite=='' )
                                            <a href="" class="fw-bold text-dark">
                                              <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                              Personnalité juridique
                                            </a>
                                            
                                          @else
                                          <div class="col-4 p-2 mt-2">
                                              <div class="activity-content">
                                                  <a href="{{Storage::url($profile->doc_autorisation)}}" download="Personnalité juridique"
                                                      >
                                                      <img
                                                          src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                  </a>
                                              </div>
                                          </div>
                                          
                                          <div class="col-8 p-3">
                                              <a href="{{Storage::url($profile->doc_personnalite)}}" download="Personnalité juridique"
                                                  class="fw-bold text-dark" > Personnalité juridique </a>
                                                  <hr>
                                          </div>
                                          @endif
                                      </div>
                                  </div><!-- End activity i tem-->
                              </div>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="card">
                          <div class="card-body">
                              <div class="activity">
                                  <div class="activity-item d-flex">
                                      <div class="row ">
                                        @if (is_null($profile->doc_personnalite) || $profile->doc_personnalite=='' )
                                            <a href="" class="fw-bold text-dark">
                                              <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                              Convention juridique
                                            </a>
                                            
                                          @else
                                          <div class="col-4 p-2 mt-2">
                                              <div class="activity-content">
                                                  <a href="{{Storage::url($profile->doc_convention)}}" download="Statut juridique"
                                                      >
                                                      <img
                                                          src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="col-8 p-3">
                                              <a href="{{Storage::url($profile->doc_personnalite)}}" download="Personnalité juridique"
                                                  class="fw-bold text-dark" > Convention juridique </a>
                                                  <hr>
                                          </div>
                                          @endif
                                      </div>
                                  </div><!-- End activity i tem-->
                              </div>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="card">
                          <div class="card-body">
                              <div class="activity">
                                  <div class="activity-item d-flex">
                                      <div class="row ">
                                        @if (is_null($profile->doc_certificat) || $profile->doc_certificat=='' )
                                            <a href="" class="fw-bold text-dark">
                                              <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                              Convention juridique
                                            </a>
                                            
                                          @else
                                          <div class="col-4 p-2 mt-2">
                                              <div class="activity-content">
                                                  <a href="{{Storage::url($profile->doc_convention)}}" download="Statut juridique"
                                                      >
                                                      <img
                                                          src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="col-8 p-3">
                                              <a href="{{Storage::url($profile->doc_certificat)}}" download="Certificat juridique"
                                                  class="fw-bold text-dark" > Certificat juridique </a>
                                                  <hr>
                                          </div>
                                          @endif
                                      </div>
                                  </div><!-- End activity i tem-->
                              </div>
                          </div>
                      </div>
                    </div>


                    <div class="col-12">
                      <div class="overflow-auto card recent-sales">
      
                        <div class="card-body">
                          <h5 class="card-title">Demandes</h5>
      
                          <table class="table table-borderless">
                            <thead>
                                 <tr>
                                   <th scope="col">N°</th>
                                   <th scope="col">Demande</th>
                                   <th scope="col">Date</th>
                                   <th scope="col">Etat</th>
                                 </tr>
                            </thead>
                            <tbody>
                                 @foreach ($exonerations as $item)
                                   <tr>
                                     <td>#{{$item->id}}</td>
                                     <td>{{$item->titre}}</td>
                                     <td>{{$item->created_at}}</td>
                                 <td><span class="badge {{$item->statut}}">{{$item->statut}}</span></td>
                                 
                                 </tr>
                                 @endforeach
                            </tbody>
                          </table>
      
                        </div>
      
                      </div>
                  </div><!-- End Recent Sales -->

                  <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informations</h5>
                            
                            <p class="text-sm">
                              <h3>Mobile : {{$profile->telephone}} </h3>
                              <h3>Email : {{$profile->email}} </h3>
                              <h3>Location : {{$profile->province}} </h3>
                              <h3>Adresse : {{$profile->numero}} &nbsp;/{{$profile->rue}}  </h3>
                              <h3>Compte bancaire : {{$profile->compte_bancaire}} </h3>
                            </p>
                        </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informations</h5>
                            
                            <p class="text-sm">
                              <h3>Responsable de la structure</h3>
                              <h3>Nom complet : {{$profile->responsable_nom}}</h3>
                              <h3>Fonction : {{$profile->responsable_fonction}}</h3>
                              <h3>Email :{{$profile->responsable_email}}</h3>
                              <h3>Téléphone :{{$profile->responsable_phone}}</h3>
                            </p>
                        </div>
                    </div>
                  </div>

                      @empty
                       <div class="card-body ">
                            <br>
                            <h3 class="card-title text-danger">Aucun document et/ou renseignement concernant le requerant</h3>
                            <p>Prière demander au requérant de bien rensiegner ses informations. </p>
                            <br>
                            <button class="btn btn-primary"> Notifier le requerant </button>
                        </div>
                      

                      @endforelse
              </div>

              
          </div><!-- End Left side columns -->

          <!-- Right side columns -->
      </div>
  </section>

    {{-- <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">



            <!-- Recent Sales -->
            <div class="col-12">
              <div class="overflow-auto card recent-sales">

                <div class="card-body">

                    @forelse ($profiles as $profile)

                         <div class="row">
                             <div class="col-md-4">
                                 <br>
                                 <img src="https://img.icons8.com/fluency/48/null/small-business.png"/>
                                 <br>
                                 <h3>Mobile :{{$profile->telephone}} </h3><br>
                                 <h3>Email :{{$profile->email}} </h3><br>
                                 <h3>Location : {{$profile->province}} </h3><br>
                                 <h3>Adresse :{{$profile->numero}} &nbsp;/{{$profile->rue}}  </h3><br>
                                 <h3>Compte bancaire :{{$profile->compte_bancaire}} </h3><br>

                             </div>

                             <div class="col-lg-3">
                              <div class="card">
                                  <div class="card-body">
                                      <div class="activity">
                                          <div class="activity-item d-flex">
                                              <div class="row ">
                                                  <div class="col-4 p-2 mt-2">
                                                    @if (is_null($profile->doc_statut) || $profile->doc_statut=='' )
                                                    <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                                    @else
                                                      <div class="activity-content">
                                                          <a href="{{Storage::url($profile->doc_statut)}}" download="Statut juridique">
                                                              <img
                                                                  src="https://img.icons8.com/stickers/50/null/live-folder.png" />
                                                          </a>
                                                      </div>
                                                  </div>
                                                  <div class="col-8 p-3">
                                                      <a href="{{Storage::url($profile->doc_statut)}}"
                                                          class="fw-bold text-dark" download="Statut juridique"> Statut juridique </a>
                                                          <hr>
                                                  </div>
                                                  @endif
                                              </div>
                                          </div><!-- End activity i tem-->
                                      </div>
                                  </div>
                              </div>
                          </div>



                             <div class="col-md-4">
                                 <br>
                                 <h3><b>Documents</b></h3>
                                 <p>
                                   @if (is_null($profile->doc_statut) || $profile->doc_statut=='' )
                                         <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                    @else
                                         <a href="{{Storage::url($profile->doc_statut)}}" download="Statut juridique">
                                         <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                         </a>
                                    @endif
                                     <h3>Statut juridique</h3>
                                 </p>
                                 <p>
                                     @if (is_null($profile->doc_accord) || $profile->doc_accord=='' )
                                     <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>

                                     @else
                                     <a href="{{Storage::url($profile->doc_accord)}}" download="Statut juridique">
                                         <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                     </a>
                                     @endif
                                     <h3>Accord juridique</h3>
                                 </p>
                                 <p>
                                     @if (is_null($profile->doc_autorisation) || $profile->doc_autorisation=='' )
                                     <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                     @else
                                     <a href="{{Storage::url($profile->doc_autorisation)}}" download="Statut juridique">
                                         <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                     </a>
                                     @endif
                                     <h3>Autorisation juridique</h3>
                                 </p>
                                 <p>
                                     @if (is_null($profile->doc_personnalite) || $profile->doc_personnalite=='' )
                                     <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                     @else
                                     <a href="{{Storage::url($profile->doc_personnalite)}}" download="Statut juridique">
                                         <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                     </a>
                                     @endif
                                     <h3>Personnalité juridique</h3>
                                 </p>
                                 <p>
                                     @if (is_null($profile->doc_personnalite) || $profile->doc_personnalite=='' )
                                         <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                     @else
                                         <a href="{{Storage::url($profile->doc_convention)}}" download="Statut juridique">
                                             <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                         </a>
                                     @endif
                                     <h3>Convention juridique</h3>
                                 </p>
                                 <p>
                                     @if (is_null($profile->doc_certificat) || $profile->doc_certificat=='' )
                                         <img src="https://img.icons8.com/external-flat-icons-inmotus-design/50/null/external-empty-printer-control-ui-elements-flat-icons-inmotus-design.png"/>
                                     @else
                                     <a href="{{Storage::url($profile->doc_certificat)}}" download="Statut juridique">
                                         <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                     </a>
                                     @endif
                                     <h3>Certificat juridique</h3>
                                 </p>
                             </div>

                             <div class="col-md-4">
                                 <br>
                                 <h3><b>Responsable de la structure</b></h3><br>
                                 <h3><b>Nom complet : {{$profile->responsable_nom}}</b></h3><br>
                                 <h3><b>Fonction : {{$profile->responsable_fonction}}</b></h3><br>
                                 <h3><b>Email :{{$profile->responsable_email}} </b></h3><br>
                                 <h3><b>Téléphone :{{$profile->responsable_phone}} </b></h3><br>

                             </div>

                         </div>
                       @empty
                       <div class="card-body ">
                            <br>
                            <h3 class="card-title text-danger">Aucun document et/ou renseignement concernant le requerant</h3>
                            <p>Prière demander au requérant de bien rensiegner ses informations. </p>
                            <br>
                            <button class="btn btn-primary"> Notifier le requerant </button>
                        </div>


                       @endforelse


                </div>

              </div>
            </div><!-- End Recent Sales -->

           
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
      </div>
    </section> --}}

  </main><!-- End #main -->


@include('footer')



