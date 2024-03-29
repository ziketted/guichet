@include('header')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Conventions</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                <li class="breadcrumb-item active">Conventions</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">




                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-4">

                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Nombre de demandes </p>

                                    <p class="text-2xl font-medium text-gray-900">{{$conventionTotal}}</p>
                                </div>

                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>

                            </div>

                            <div class="mt-1 flex gap-1 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>

                                <p class="flex gap-2 text-xs">
                                </p>
                            </div>
                        </article><br>
                    </div>
                    <div class="col-xxl-4 col-md-4">

                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Demandes annulées</p>

                                    <p class="text-2xl font-medium text-gray-900">{{$conventionAnnuler}}</p>
                                </div>

                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>

                            </div>

                            <div class="mt-1 flex gap-1 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>

                                <p class="flex gap-2 text-xs">
                                </p>
                            </div>
                        </article><br>
                    </div>
                    <div class="col-xxl-4 col-md-4">

                        <article class="rounded-lg border border-gray-100 bg-white p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Demandes validées</p>

                                    <p class="text-2xl font-medium text-gray-900">{{$conventionValider}}</p>
                                </div>

                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>

                            </div>

                            <div class="mt-1 flex gap-1 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>

                                <p class="flex gap-2 text-xs">
                                </p>
                            </div>
                        </article><br>
                    </div>


                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="overflow-auto card recent-sales">

                            <div class="card-body">
                                <h5 class="card-title">Liste des conventions</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Requerant</th>
                                            <th scope="col">Programme social</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($conventions as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td> <a href="{{Storage::url($item->programme_social)}}" download="lettre">
                                                    <i class="bi bi-download text-gray"> Téléchargez le programme social
                                                    </i></a></td>
                                            <td><span class="badge {{$item->statut}}  p-2">{{$item->statut}}</span></td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <a href="{{route('admin.validerconvention', $item->id)}}"
                                                    class="btn btn-warning"><i class="bi bi-pen-fill"></i></a>

                                            </td>
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
