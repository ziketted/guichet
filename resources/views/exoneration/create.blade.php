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



                    <div class="col-md-10">
                      <div class="form-floating">
                          <input
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Description de la demande  d'exonération"
                                type="text" 
                                name="titre"
                                id="formFile" required
                          />
                      </div>
                    </div>

                    <div class="col-md-5">
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                              <div>
                                <label for="Bordereau" class="text-sm font-medium">Lettre à la Direction du FNPSS</label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="lettre"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
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
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                              
                              <div>
                                <label for="Bordereau" class="text-sm font-medium">Attestation des biens à exonerer</label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="attestation"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
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

                            </div>
                          </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3 row">
                            
                            <div class="col-sm-10">
                              
                              <div>
                                <label for="Bordereau" class="text-sm font-medium">Avis favorable du Ministère</label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="copie_avis"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
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

                            </div>
                          </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                              <div>

                                <label for="Bordereau" class="text-sm font-medium">Liste de colisage</label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="liste_colisage"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
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

                            </div>
                          </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3 row">
                            
                            <div class="col-sm-10">
                              
                              <div>

                                <label for="Bordereau" class="text-sm font-medium">Copie du projet d'utilisation des biens</label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="projet"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
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
                            </div>
                          </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3 row">
                            <div class="col-sm-10">

                              <div>
                                <label for="Bordereau" class="text-sm font-medium">Lettre de transport</label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="transport"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
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
                            </div>
                          </div>
                    </div>

                    <div class="col-md-5">
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                              
                              <div>
                                <label for="Bordereau" class="text-sm font-medium">Facture d'achat</label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="facture"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
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
                            </div>
                          </div>
                    </div>

                    <div class="col-md-5">
                        <div class="mb-3 row">
                            
                            <div class="col-sm-10">
                              <div>
                                <label for="Bordereau" class="text-sm font-medium">Rapport d'affectation des biens exonérés</label>
            
                                <div class="relative mt-1">
                                  <input
                                    type="file"
                                    id="formFile"
                                    name="affectation"
                                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                    placeholder="Chercher les fichiers" required
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

                            </div>
                          </div>
                    </div>

                    <div class="col-md-10">
                        <div class="mb-3 form-floating">
                            <div>
                              <label for="Country" class="sr-only">Country</label>
              
                              <select id="Country"
                                class="relative w-full border-gray-200 rounded-t-md focus:z-10 sm:text-sm"
                                name="type"
                              >
                                <label for="floatingSelect">Selectionner le type d'exonération</label>
                                <option value="Importation">Importation</option>
                                <option value="Interieur">Interieur de la RDC</option>
                              </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="form-floating">
                            <div>
                              <label class="sr-only" for="message">Message</label>
                              <textarea
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Commentaires"
                                rows="8"
                                type="text"
                                name="commentaires"
                                id="message"
                              ></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                      <button
                        type="submit"
                        class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                        Demander le certificat d'exonération
                      </button>
                    </div>

                </form><!-- End General Form Elements -->

              </div>
            </div>

          </div>
        </div>
    </section>
    </main>

@include('footer')
