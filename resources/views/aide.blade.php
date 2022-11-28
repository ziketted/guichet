@include('header')
<main id="main" class="main">
<div class="p-5 ">
    <div class="row ">
        <div class="text-justify col-lg-8">
            <h4 class="mb-0 ">A propos du portail web</h4>
            <p class="text-lg ">Un espace web pouvant centraliser
                des opérations entre différentes entités impliquées dans le fonctionnement
                du FNPSS notamment les requérants <b>(ASBL-ONG)</b>, le Ministère des affaires sociales,
                Ministère du plan et Ministère des finances. <br>
                Cet espace vous permettra de faire un suivi de votre demande, de la soumission jusqu'à la validation de votre dossier.

            </p>
        </div>
        <div class="col-lg-4">
            <img src="../assets/img/howit3.png" alt="img-blur-shadow" class="img-fluid border-radius-xl">
        </div>

    </div>
    <div class="row ">
        <div class="col-lg-3">
            <img src="../assets/img/howit.png" alt="img-blur-shadow" class="img-fluid border-radius-xl">
        </div>
        <div class="text-justify col-lg-9">
            <h4 class="mb-0 ">Comment ça marche &nbsp;</h4>

            <p class="text-lg ">
                 <code><a href="{{route('login')}}"> Connectez- vous</a></code> si vous n'avez pas compte, sinon créez en un <code><a href="{{route('login')}}"> compte</a></code>
                    ceci vous permettra d'avoir accès à la plateforme comme un requérant pouvant soumettre ses demandes aux FNPS.
                    <br>
                    Après votre accession, prière prendre soin de completer votre profile entreprise <code><b><a href="{{url('/profile')}}">ici</a></b></code>
                    en soumettant tous vos documents de la structure
                    (Statut, autorisation juridique,l’arrêté du ministère de finance accordant
                    la personnalité juridique et / ou tout accord ou convention entre
                     l’Etat congolais et les organisations internationales,
                     l’arrêté ministériel d l’autorisation de fonctionnement ) une fois soumis, vous y reviendrez dans cette option en cas de mise à jour dedits documents.
                    <br>
                     chemin : <b>/ PARAMETRES >> Profile>> MES DOCUMENTS</b>
        </div>
    </div>
    <div class="row">

        <div class="text-justify col-lg-12">
            <h4 class="mb-0 ">Comment s'enroler ? </i></h4>
            <p class="text-lg ">
                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quo et omnis aperiam, commodi expedita. Distinctio quod quam aspernatur exercitationem voluptas perferendis quidem tenetur. Placeat laborum magni tempora blanditiis! Aspernatur?
                 Fuga quod eius tenetur velit sapiente omnis quas! Animi, eligendi quis praesentium voluptate modi corporis optio perferendis! Quo molestias sit impedit aliquam! Consequatur obcaecati iusto quis deserunt repellat, nihil cupiditate.
                 Voluptatum nulla, harum, nostrum placeat  </p>
        </div>
    </div>
    <div class="row">

        <div class="text-justify col-lg-12">
            <h4 class="mb-0 ">Comment soumettre une demande Internationale ? </i></h4>
            <p class="text-lg ">
                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quo et omnis aperiam, commodi expedita. Distinctio quod quam aspernatur exercitationem voluptas perferendis quidem tenetur. Placeat laborum magni tempora blanditiis! Aspernatur?
                 Fuga quod eius tenetur velit sapiente omnis quas! Animi, eligendi quis praesentium voluptate modi corporis optio perferendis! Quo molestias sit impedit aliquam! Consequatur obcaecati iusto quis deserunt repellat, nihil cupiditate.
                 Voluptatum nulla, harum, nostrum placeat  </p>
        </div>
    </div>


</div>
</main>
@include('footer')
