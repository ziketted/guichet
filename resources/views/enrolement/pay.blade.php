@include('header')

<main id="main" class="main">
<section class="py-4 section align-items justify-content">
    <div class="py-4 row align-items justify-content">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">

            {{-- <!-- General Form Elements -->
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


            </form><!-- End General Form Elements --> --}}

                            <!--
              This component uses @tailwindcss/forms

              yarn add @tailwindcss/forms
              npm install @tailwindcss/forms

              plugins: [require('@tailwindcss/forms')]
            -->

            <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
              <div class="mx-auto max-w-lg">
                <h3 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
                  Paiement de l'enrolement 
                </h3>
                <?php 

                    $users = DB::table('users')
                    ->where('id', $user_id)
                    ->get(); 
                ?>
                @foreach ($users as $user )
                    <h7>Nom : {{ $user->name }}</h7><br>
                    <h7>Email : {{ $user->email }}</h7><br>
                    <h7>Montant : 50 USD</h7><br>
                @endforeach


            
                {{-- <form action="{{ route('enrolement.create') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                  @csrf
                  

                  <div>
                    <label for="email" class="text-sm font-medium">Lettre</label>

                    <div class="relative mt-1">
                      <input
                        type="file"
                        id="file"
                        name="lettre"
                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                        placeholder="Chercher les fichiers"
                      />

                      <span class="absolute inset-y-0 right-4 inline-flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5 text-gray-400"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                          />
                        </svg>
                      </span>
                    </div>
                  </div>

                  <div>
                    <label for="Bordereau" class="text-sm font-medium">Bordereau des frais</label>

                    <div class="relative mt-1">
                      <input
                        type="file"
                        id="file"
                        name="autre_document"
                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                        placeholder="Chercher les fichiers"
                      />

                      <span class="absolute inset-y-0 right-4 inline-flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5 text-gray-400"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                          />
                        </svg>
                      </span>
                    </div>

                  </div>
                  
                  <div>
                    <label class="sr-only" for="message">Message</label>
                    <textarea
                      class="w-full rounded-lg border-gray-200 p-3 text-sm"
                      placeholder="Message"
                      rows="8"
                      id="message"
                    ></textarea>
                  </div>
                

                  <button
                    type="submit"
                    class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                    S'enroler maintenant
                  </button>

                  
                </form> --}}

                <form action="https://api.maxicashapp.com/PayEntryPost" method="POST">
                    <input type="hidden" name="PayType" value="MaxiCash">
                    <input type="hidden" name="Amount" value="5000">
                    <input type="hidden" name="Currency" value="MaxiDollar">
                    <input type="hidden" name="Telephone" value="0813579841">
                    <input type="hidden" name="Email" value="{{ $user->email }}">
                   
                    <input type="hidden" name="MerchantID" value="cffbf69177664b7595fe285527cc9ccd">
                    <input type="hidden" name="MerchantPassword" value="66267160e1c84713bd098395902fff19">
                    <input type="hidden" name="Language" value="En">
                    <input type="hidden" name="Reference" value="0001">
                    <input type="hidden" name="accepturl" value="https://www.google.fr/">
                    <input type="hidden" name="cancelurl" value="https://www.google.fr/">
                    <input type="hidden" name="declineurl" value="https://www.google.fr/">
                    <input type="hidden" name="notifyurl" value="https://www.google.fr/">
              
                    <button
                        type="submit"
                        class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                        Payer votre enrolement maintenant
                    </button>

                  </form>

              </div>
            </div>


          </div>
        </div>

      </div>
    </div>
    

</section>

</main>



@include('footer')
