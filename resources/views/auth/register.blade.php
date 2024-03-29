@include('header')

<main>
    <div class="container">

      {{-- <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form method="POST" action="{{ route('register') }}" class="row g-3 needs-validation" novalidate>
                    @csrf

                    <div class="col-12">
                      <label for="yourName" class="form-label">Nom</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Entrer votre nom</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Entre votre email</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Veuillez entrer votre mot de passe</div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Confimez votre mot de passe</label>
                        <input type="password" name="password_confirmation" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Veuillez confirmer votre mot de passe</div>
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Creer un compte</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vous avez déjà un compte <a href="{{ route('login') }}">Connectez-vous</a></p>
                    </div>
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section> --}}

            <!--
        This component uses @tailwindcss/forms

        yarn add @tailwindcss/forms
        npm install @tailwindcss/forms

        plugins: [require('@tailwindcss/forms')]
      -->

      <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
          <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
            Inscription à la plateforme de FNPSS
          </h1>

          <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
            Ce portail vous permet d'effectuer toutes les opérations en ligne sans vous deplacer
          </p>

          <form method="POST" action="{{ route('register') }}" class="mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl">
            @csrf
            <p class="text-lg font-medium"><b>Creer votre compte maintenant</b></p>

            <div>
              <label for="name" class="text-sm font-medium">Nom</label>

              <div class="relative mt-1">
                <input
                  type="text" name="name"
                  id="name"
                  class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                  placeholder="Entrer votre nom"
                />
              </div>
            </div>

            <div>
              <label for="email" class="text-sm font-medium">Email</label>

              <div class="relative mt-1">
                <input
                  type="email" name="email"
                  id="email"
                  class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                  placeholder="Entrer votre email"
                />
              </div>
            </div>

            <div>
              <label for="password" class="text-sm font-medium">Mot de passe</label>

              <div class="relative mt-1">
                <input
                  type="password" name="password"
                  id="password"
                  class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                  placeholder="Veuillez entrer votre mot de passe"
                />
              </div>
            </div>

            <div>
              <label for="password" class="text-sm font-medium">Confirmation du mot de passe</label>

              <div class="relative mt-1">
                <input
                  type="password" name="password_confirmation"
                  id="password"
                  class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                  placeholder="Veuillez entrer votre mot de passe"
                />
              </div>
            </div>

            <button
              type="submit"
              class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
            >
                Creer un compte
            </button>

            <p class="text-center text-sm text-gray-500">
              Vous avez déjà un compte
              <a class="underline" href="{{ route('login') }}">Connectez-vous</a>
            </p>
          </form>
        </div>
      </div>


    </div>
  </main><!-- End #main -->

@include('footer')

