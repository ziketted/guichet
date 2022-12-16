@include('header')
  <main>
    <div class="container">
      {{-- <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets-home/img/hero-img.png" class="h-100 w-50" alt="">
                  <span class="d-none d-lg-block">PORTAIL FNPSS</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Connexion au compte</h5>
                    <p class="text-center small"></p>
                  </div>

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form method="POST" class="row g-3 needs-validation" novalidate action="{{ route('login') }}">
                    @csrf

                    <div class="col-12">
                      <label for="Email" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Entrer votre email</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Entrer votre mot de passe</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Connectez-vous</button>
                    </div><br>

                    <div class="col-12">

                      <a href="{{ url('auth/google') }}" class="btn btn-danger w-100">
                        <i class="bi bi-google"></i>
                          Google
                      </a>
                    </div>

                    <div class="col-12">
                      <p class="small mb-0">Vous n'avez pas de compte ? <a href="{{ route('register') }}">Creer un compte</a></p>
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

<section class="relative flex flex-wrap lg:h-screen lg:items-center">
  <!--
            This component uses @tailwindcss/forms

            yarn add @tailwindcss/forms
            npm install @tailwindcss/forms

            plugins: [require('@tailwindcss/forms')]
          -->

          <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-lg text-center">
              <h1 class="text-2xl font-bold sm:text-3xl">Portail FNPSS</h1>

              {{-- <p class="mt-4 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla
                eaque error neque ipsa culpa autem, at itaque nostrum!
              </p> --}}
            </div>
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

            <form method="POST" action="{{ route('login') }}" class="mx-auto mt-8 mb-0 max-w-md space-y-4">
              @csrf
              <div>
                <label for="email" class="sr-only">Email</label>

                <div class="relative">
                  <input
                    type="email" name="email" id="email" required
                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                    placeholder="Entrer votre email"
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
                <label for="password" class="sr-only">Mot de passe</label>
                <div class="relative">
                  <input
                    type="password" name ="password" id="yourPassword"
                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                    placeholder="Enter password"
                  />
                </div>
              </div>
              <p class="text-sm text-gray-500">
                Vous n'avez pas de compte ?
                <a class="underline" href="{{ route('register') }}">Creer un compte</a>
              </p>

              <div class="flex items-center justify-between">
                <button
                  type="submit"
                  class="ml-3 inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
                >
                Connectez-vous
                </button>
                <a
                href="{{ url('auth/google') }}"
                  type="submit"
                  class="ml-3 inline-block rounded-lg bg-red-500 px-5 py-3 text-sm font-medium text-white"
                >
                Google
                </a>
              </div>
            </form>
          </div>
</section>

    </div>
  </main><!-- End #main -->
