@include('header')
<main id="main" class="main">
    <section class="py-4 section align-items-center justify-content-center">
        <div class="py-4 row align-items-center justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Objectif global</h5>

                        @foreach ($profiles as $profile)

                        @endforeach
                        <form action="{{ route('profile.upd_autres_infos') }}" class="row g-3" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-10">
                                <div class="form-floating">
                                    <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder=""
                                        rows="8" name="objectif_global"
                                        id="message">{{$profile->objectif_global}}</textarea>
                                </div>
                            </div>

                            <h5 class="card-title">Objectif spécifique</h5>

                            <div class="col-md-10">
                                <div class="form-floating">

                                    <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder=""
                                        rows="8" name="objectif_specifique"
                                        id="message">{{$profile->objectif_specifique}}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                {{-- <button type="submit" class="btn btn-success">Mettre à jour</button> --}}
                                <button type="submit"
                                    class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white">
                                    Mettre à jour
                                </button>
                            </div>
                        </form><!-- End General Form Elements -->

                        <!-- General Form Elements -->


                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@include('footer')
