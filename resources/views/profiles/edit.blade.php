@include('header')

<main id="main" class="main">
    <section class="py-4 section align-items-center justify-content-center">
        <div class="py-4 row align-items-center justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <!-- General Form Elements -->

                @foreach ($profiles as $profile )
                    <form action="{{ route('profile.identiteupdate') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                        @csrf

                        <h5 class="card-title">Identification de la structure</h5>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Denomination"
                                    type="text" value="{{$profile->denomination}}"
                                    name="denomination"
                                    id="formFile" required
                                />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Sigle"
                                    type="text" value="{{$profile->sigle}}"
                                    name="sigle"
                                    id="formFile" required
                                />
                            </div>
                        </div>

                        <h5 class="card-title">Adresse</h5>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select appearance-none
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding bg-no-repeat
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                    <option selected>Selectionner la province</option>
                                    <option value="1">Kinshasa</option>
                                    <option value="2">Autres</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Rue"
                                    type="text" value="{{$profile->rue}}"
                                    name="rue"
                                    id="formFile" required
                                />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Numéro"
                                    type="text" value="{{$profile->numero}}"
                                    name="numero"
                                    id="formFile" required
                                />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Quartier"
                                    type="text" value="{{$profile->quartier}}"
                                    name="quartier"
                                    id="formFile" required
                                />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Commune"
                                    type="text" value="{{$profile->commune}}"
                                    name="commune"
                                    id="formFile" required
                                />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="District"
                                    type="text" value="{{$profile->district}}"
                                    name="district"
                                    id="formFile" required
                                />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Date de creation"
                                    type="text" value="{{$profile->date}}"
                                    name="date"
                                    id="formFile" required
                                />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Téléphone"
                                    type="text" value="{{$profile->telephone}}"
                                    name="telephone"
                                    id="formFile" required
                                />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Email"
                                    type="text" value="{{$profile->email}}"
                                    name="email"
                                    id="formFile" required
                                />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Compte bancaire"
                                    type="text" value="{{$profile->email}}"
                                    name="compte_bancaire"
                                    id="formFile" required
                                />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select appearance-none
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding bg-no-repeat
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                    <option selected>Selectionner le domaine</option>
                                    <option value="1">Développement humanitaire</option>
                                    <option value="2">Scientifique</option>
                                    <option value="2">Confessionelle</option>
                                    <option value="2">Artistique</option>
                                    <option value="2">Développement Communautaire</option>
                                    <option value="2">Agriculture</option>
                                    <option value="2">Environnement</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select appearance-none
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding bg-no-repeat
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                    <option selected>Selectionner le fourniture </option>
                                    <option value="1">Santé</option>
                                    <option value="2">Education</option>
                                    <option value="2">Nutrition</option>
                                    <option value="2">Eau</option>
                                    <option value="2">Electricité</option>
                                    <option value="2">Logements sociaux</option>
                                    <option value="2">Assainessement</option>
                                </select>
                            </div>
                        </div>


                        <h5 class="card-title">Autres informations</h5>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <div>
                                    <label class="sr-only" for="message">Rayon d'intervention</label>
                                    <textarea
                                      class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                      placeholder="Message"
                                      rows="8"
                                      id="message"
                                    ></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <div>
                                    <label class="sr-only" for="message">Justification</label>
                                    <textarea
                                      class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                      placeholder="Message"
                                      rows="8"
                                      id="message"
                                    ></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <div>
                                    <label class="sr-only" for="message">Projet en cours</label>
                                    <textarea
                                      class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                      placeholder="Message"
                                      rows="8"
                                      id="message"
                                    ></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <div>
                                    <label class="sr-only" for="message">Bénéficiaire</label>
                                    <textarea
                                      class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                      placeholder="Message"
                                      rows="8"
                                      id="message"
                                    ></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <div>
                                    <label class="sr-only" for="message">Impact</label>
                                    <textarea
                                      class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                      placeholder="Message"
                                      rows="8"
                                      id="message"
                                    ></textarea>
                                </div>
                            </div>
                        </div>

                        
                        <h5 class="card-title">Responsable de l'organisation</h5>
                        <div class="col-md-6">
                        <div class="form-floating">
                            
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Nom"
                                    type="text" value="{{$profile->responsable_nom}}"
                                    name="responsable_nom"
                                    id="formFile" required
                                />
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-floating">
                            <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="PostNom"
                                    type="text" value="{{$profile->responsable_postnom}}"
                                    name="responsable_postnom"
                                    id="formFile" required
                                />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                            
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Prenom"
                                    type="text" value="{{$profile->responsable_prenom}}"
                                    name="responsable_prenom"
                                    id="formFile" required
                                />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Fonction"
                                    type="text" value="{{$profile->responsable_fonction}}"
                                    name="responsable_fonction"
                                    id="formFile" required
                                />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Téléphone"
                                    type="text" value="{{$profile->responsable_phone}}"
                                    name="responsable_phone"
                                    id="formFile" required
                                />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                            <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Email"
                                    type="text" value="{{$profile->responsable_email}}"
                                    name="responsable_email"
                                    id="formFile" required
                                />
                        </div>
                        </div>

                        <div class="col-sm-6">
                        {{-- <button type="submit" class="btn btn-success">Mettre à jour</button> --}}
                        <button
                            type="submit"
                            class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                Mettre à jour
                        </button>
                        </div>

                    </form>
                @endforeach
              </div>
            </div>

          </div>
        </div>
    </section>
    </main>

    

@include('footer')
