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
        <div class="col-lg-8">
          <div class="row">



            <!-- Recent Sales -->
            <div class="col-12">
              <div class="overflow-auto card recent-sales">

                <div class="card-body">
                    @foreach ($profiles as $profile)
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
                    @endforeach

                </div>

              </div>
            </div><!-- End Recent Sales -->

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
                           <
                           </tr>
                           @endforeach
                      </tbody>
                    </table>

                  </div>

                </div>
            </div><!-- End Recent Sales -->
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
      </div>
    </section>

  </main><!-- End #main -->


@include('footer')

