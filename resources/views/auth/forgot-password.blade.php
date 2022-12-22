@include('header')
  <main>
    <div class="container">
        
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
              <h5 class="text-2xl font-bold sm:text-3xl">Reinitialiser le mot de passe</h5>

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

            <form method="POST" action="{{ route('password.email') }}" class="mx-auto mt-8 mb-0 max-w-md space-y-4">
              @csrf
              <div>
                <label for="email" class="sr-only">Email</label>

                <div class="relative">
                  <input
                    type="email" name="email" id="email" required
                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                    placeholder="Entrer votre email" required autofocus
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

              <div class="flex items-center justify-between">
                <button
                  type="submit"
                  class="ml-3 inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
                >
                    Envoyer le lien de reinitialisation de mot de passe
                </button>
              </div>
            </form>
          </div>
        </section>
    </div>
  </main><!-- End #main -->

