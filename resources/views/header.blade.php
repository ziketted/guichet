<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fonds national de promotion et de service social</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css"') }} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    .annulé{
        background-color: brown
    }
    .soumis{
        background-color:dodgerblue
    }
    .validé{
        background-color:darkgreen
        


    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
@auth

<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
      <span class="d-none d-lg-block">FNPSS</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->



  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">



      <li class="nav-item dropdown">
        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge bg-primary badge-number">{{-- {{$notification}} --}}0</span>
        </a><!-- End Notification Icon -->
      </li><!-- End Notification Nav -->

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

          <img src="https://img.icons8.com/pastel-glyph/64/null/name.png" alt="Profile" class="rounded-circle" />
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>

        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>

            </h6>

          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="">
              <i class="bi bi-person"></i>
              <span>Profil</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>


          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{url('/aide')}}">
              <i class="bi bi-question-circle"></i>
              <span>Aide</span>
            </a>
          </li>
          <li>
            <form action="{{ route('logout') }}" method="POST" >
              @csrf
              <button class="dropdown-item d-flex align-items-center">
                    <i class="bi-box-arrow-right"></i>
                    <span>Deconnexion</span>
              </button>
            </form>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>



        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">


    <ul class="sidebar-nav" id="sidebar-nav">
        @if (auth()->user()->role_id == '1')
        {{-- <li class="nav-item">
        <a class="nav-link " href="/dashboard">
            <i class="bi bi-grid"></i>
            <span>Tableau de bord</span>
        </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Mes demandes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="{{ route('enrolement.index') }}">
                <i class="bi bi-circle"></i><span>Enrolements</span>
            </a>
            </li>
            <li>
            <a href="{{ route('exoneration.index') }}">
                <i class="bi bi-circle"></i><span>Exonerations</span>
            </a>
            </li>

        </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('profile.index') }}">
            <i class="bi bi-person"></i>
            <span>Profil</span>
        </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/aide')}}">
            <i class="bi bi-question-circle"></i>
            <span>Aide</span>
        </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="/">
            <i class="bi bi-back"></i>
            <span>Retour sur le site</span>
        </a>
        </li><!-- End F.A.Q Page Nav --> --}}

        <div class="flex flex-col justify-between h-screen bg-white">
          <div class="px-4 py-6">
            <nav aria-label="Main Nav" class="flex flex-col mt-6 space-y-1">
              <a
                href="/dashboard"
                class="flex items-center px-4 py-2 text-gray-700 {{ (request()->is('dashboard')) ? 'bg-red-100' : '' }} rounded-lg"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-5 h-5 opacity-75"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                  />
                </svg>

                <span class="ml-3 text-sm font-medium"> Tableau de bord </span>
              </a>

              <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary
                  class="flex items-center px-4 py-2 text-gray-500 rounded-lg cursor-pointer
                  {{ (request()->is('enrolement/index')) ? 'bg-red-100' : '' }}
                  {{ (request()->is('exoneration/index')) ? 'bg-red-100' : '' }}

                    hover:bg-gray-100 hover:text-gray-700"
                >
                <img src="https://img.icons8.com/emoji/48/null/open-file-folder-emoji.png" width="16" height="16"/>

                  <span class="ml-3 text-sm font-medium"> Mes demandes </span>

                  <span
                    class="ml-auto transition duration-300 shrink-0 group-open:-rotate-180"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </span>
                </summary>

                <nav aria-label="Teams Nav" class="mt-1.5 ml-8 flex flex-col">
                  <a
                    href="{{ route('enrolement.index') }}"
                    class="flex items-center px-4 py-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5 opacity-75"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"
                      />
                    </svg>

                    <span class="ml-3 text-sm font-medium"> Enrolements </span>
                  </a>

                  <a
                    href="{{ route('exoneration.index') }}"
                    class="flex items-center px-4 py-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5 opacity-75"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                      />
                    </svg>

                    <span class="ml-3 text-sm font-medium"> Exonerations </span>
                  </a>

                  <a
                    href="{{ route('convention.index') }}"
                    class="flex items-center px-4 py-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5 opacity-75"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                      />
                    </svg>

                    <span class="ml-3 text-sm font-medium"> Conventions </span>
                  </a>
                </nav>
              </details>

              <a
                href="{{ route('profile.index') }}"
                class="flex items-center px-4 py-2 text-gray-500 rounded-lg
                {{ (request()->is('profile/index')) ? 'bg-red-100' : '' }}
                hover:bg-gray-100 hover:text-gray-700"
              >
                <img src="https://img.icons8.com/ios-filled/50/null/user-male-circle.png" width="16" height="16"/>

                <span class="ml-3 text-sm font-medium"> Profil </span>
              </a>

              <a
                href="/aide"
                class="flex items-center px-4 py-2
                {{ (request()->is('aide')) ? 'bg-red-100' : '' }}
                text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700"
              >
                <img src="https://img.icons8.com/ios-filled/50/null/info-squared.png" width="16" height="16"/>

                <span class="ml-3 text-sm font-medium"> Aide </span>
              </a>

              <a
                href="/"
                class="flex items-center px-4 py-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700"
              >
                <img src="https://img.icons8.com/ios-glyphs/30/null/circled-left.png" width="16" height="16"/>

                <span class="ml-3 text-sm font-medium"> Retour sur le site </span>
              </a>


            </nav>
          </div>


        </div>



        <hr>
        @else
        <div class="flex flex-col justify-between h-screen bg-white">
          <div class="px-4 py-6">
            <nav aria-label="Main Nav" class="flex flex-col mt-6 space-y-1">
              <a
                href="{{route('admin.admin')}}"
                class="flex items-center px-4 py-2 text-gray-700 bg-red-100 rounded-lg"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-5 h-5 opacity-75"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                  />
                </svg>

                <span class="ml-3 text-sm font-medium"> Tableau de bord</span>
              </a>

              <a
                href="{{route('admin.profile')}}"
                class="flex items-center px-4 py-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-5 h-5 opacity-75"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                  />
                </svg>

                <span class="ml-3 text-sm font-medium"> Nos requerants </span>
              </a>

              <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary
                  class="flex items-center px-4 py-2 text-gray-500 rounded-lg cursor-pointer hover:bg-gray-100 hover:text-gray-700"
                >
                <img src="https://img.icons8.com/emoji/48/null/open-file-folder-emoji.png" width="16" height="16"/>

                  <span class="ml-3 text-sm font-medium"> Dossier à valider </span>

                  <span
                    class="ml-auto transition duration-300 shrink-0 group-open:-rotate-180"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </span>
                </summary>

                <nav aria-label="Teams Nav" class="mt-1.5 ml-8 flex flex-col">
                  <a
                    href="{{route('admin.enrolement')}}"
                    class="flex items-center px-4 py-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5 opacity-75"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"
                      />
                    </svg>

                    <span class="ml-3 text-sm font-medium"> Enrolements </span>
                  </a>

                  <a
                    href="{{route('admin.exoneration')}}"
                    class="flex items-center px-4 py-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-5 h-5 opacity-75"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                      />
                    </svg>

                    <span class="ml-3 text-sm font-medium"> Exonerations </span>
                  </a>
                </nav>
              </details>

              <a
                href="#"
                class="flex items-center px-4 py-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700"
              >
                <img src="https://img.icons8.com/ios-filled/50/null/user-male-circle.png" width="16" height="16"/>

                <span class="ml-3 text-sm font-medium"> Licences en cours </span>
              </a>

              <a
                href="{{route('notification.index')}}"
                class="flex items-center px-4 py-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-700"
              >
                <img src="https://img.icons8.com/ios-filled/50/null/info-squared.png" width="16" height="16"/>

                <span class="ml-3 text-sm font-medium"> Notifiez le requerant </span>
              </a>




            </nav>
          </div>


        </div>

        @endif
    </ul>




</aside><!-- End Sidebar-->


@endauth

