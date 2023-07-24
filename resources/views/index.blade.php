@extends('include.layout')
@section('container')

    <body>

        </div>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" style="color: black;"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1" style="color: black;"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2" style="color: black;"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/slide1.png') }}" alt="slide1" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slide2.png') }}" alt="slide2" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slide3.png') }}" alt="slide3" class="d-block" style="width:100%">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev"
                style="color: black;">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next"
                style="color: black;">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!--section about-->
        <div class="row" style="background-color: #ffeaf1" id="about">
            <div class="col-6">
                <div class="row">
                    <img src="{{ asset('images/apropos3.png') }}" alt=""
                        style=" width:80%; margin:100px 5px 100px 130px;">
                </div>
            </div>
            <div class="col-6" style="padding:100px;">
                <p style="margin-block: -60px; font-weight:bold; font-size:30px; color:rgb(255, 0, 91);">
                    Qui suis-je ?
                </p><br>
                <p style="margin-block: 60px 20px; text-align:justify; font-size:14px; font-family:Roboto Regular;">
                    A l’ état civil, je réponds au nom de <b>Nathalie Maroufath EGOUNLETY</b>, célibataire sans
                    enfant, née
                    le <b>28 juillet 2002</b>, je suis âgée de <b>20ans</b> au jour d’aujourd’hui. Diplômée d’une
                    licence en
                    <b>Systèmes Informatiques et Logiciels</b>, je mène le métier de <b>développeur web et
                        d'interface
                        UI/UX</b> c’est à dire que je conçois des sites webs, des chartes graphiques, des maquettes
                    pour les
                    sites, des cartes d’invitations, logos, tout ce qui a atttrait avec le graphisme.
                </p>
                <p style="text-align:justify; font-size:14px; font-family:Roboto Regular;">
                    Très tôt, j’ai été passionnée par les lettres, les calculs, les chiffres, l’art, les couleurs,
                    les
                    dessins, les jeux vidéos, les films et séries; j’en suis une grande fan même à ce jour.
                    Mon amour pour tous ces éléments qui nous font, m'ont amenée à me lancée dans l’informatique
                    juste après
                    mon bac et me spécialiser plus dans le web design après l'obtention de ma licence. Aujourd’hui,
                    je mène
                    un métier que j’aime et dans lequel je voudrais faire des prouesses afin de faire des créations
                    aussi
                    exceptionnelles et magiques à travers le monde entier.
                </p>
                <p style="text-align:justify; font-size:14px; font-family:Roboto Regular;">
                    Le design tout comme le dévéloppement web, c’est tout un art, tout un monde il faut en être
                    amoureux;
                    passionnée pour le faire; car c’est ainsi tu pourrais te trouver des inspirations aussi unique
                    les uns
                    des autres pour la création des sites ou applications web.
                </p> <br>
                <div class="button">
                    <!--button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal">
                            <strong style="font-size:20px; color:azure;"> Appuyez ici pour consulter ma carte&nbsp;<i
                                    class="bi bi-postcard-heart-fill"></i></strong>
                            <div class=""></div>
                        </button-->
                    <button class="buttom button2" data-bs-toggle="modal" data-bs-target="#myModal" type="submit"><strong
                            style="font-size:23px; ;"> Consultez ma carte &nbsp;<i
                                class="bi bi-postcard-heart-fill"></i></strong>
                        <div class=""></div>
                    </button>

                </div>
            </div>
        </div>
        <!-- End section about-->

        <!--section services-->
        <div class="container" id="services">
            <div class="row" style="background-color: #ffffff">
                <center>
                    <p style="font-weight:bold; font-size:30px; color:rgb(255, 0, 91); margin:70px 70px;">
                        Mes services
                    </p><br>
                    <p style="font-size:20px; margin: -60px;">
                        Nous vous proposons d’excellents services dans les différents domaines ci-après:
                    </p>
                </center>
            </div>
            <div style="margin:130px;">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card text-white  mb-3" style=" height:15rem; background:#fff6A3">
                                <div class="card-body">
                                    <div style="text-align: center; margin:40px;">
                                        <i class="bi bi-person-workspace circle"
                                            style="color: black; font-size:25px;"></i>
                                    </div>
                                    <p class="card-title" style="color: #000000; font-weight:bold;">Développement
                                        d’applications web avec Laravel et wordPress.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-white  mb-3" style="; height:15rem; background:#ffEAF1">
                                <div class="card-body">
                                    <div style="text-align: center; margin:40px;">
                                        <i class=" bi bi-journal-richtext circle"
                                            style="color: black; font-size:25px;"></i>
                                    </div>
                                    <p class="card-title" style="color: #000000; font-weight:bold;">Conception de
                                        chartes
                                        graphiques, maquettes de sites web.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-white  mb-3" style="; height:15rem; background:#BCE3FF">
                                <div class="card-body">
                                    <div style="text-align: center; margin:40px;">
                                        <i class="bi bi-box2-heart-fill circle"
                                            style="color: black; font-size:25px;"></i>
                                    </div>
                                    <p class="card-title" style="color: #000000; font-weight:bold;">Conceptions de
                                        flyers,
                                        affiches, cartes d’invitation, logos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End section services-->
        <!--section parcours-->
        <div class="background">
            <div class="col">
                <div class="row">
                    <div class="col-lg-5" id="education">
                        <div class="row mb-3"
                            style="background-color: #ffffff; min-height:600px; min-width:420px; padding:10px;">
                            <i class="bi bi-book-fill" style="color:rgb(255, 0, 91); font-size:45px; margin:30px;">
                                <strong style="color:#000000; font-style:normal; font-size:40px;"> Education</strong></i>
                            <p style="color:rgb(255, 0, 91); font-size:25px; ">Etudes primaires</p>
                            <p>Ecole Urbaine Centre de Porto-Novo : Maternelle
                                Ecole Primaire Privée Don de Dieu de Porto-Novo : CI au CM2</p><br>
                            <p style="color:rgb(255, 0, 91); font-size:25px; ">Etudes Secondaires</p>
                            <p>Collège d’Enseignement Général Application : 6è en terminale C</p><br>
                            <p style="color:rgb(255, 0, 91); font-size:25px; ">Etudes Universitaires</p>
                            <p>Les cours SONOU Porto-Novo (1ère, 2ème, 3ème année d’étude
                                en Systèmes Informatiques et logiciels) <br>
                                FLASH-ADJARRA : 1ère et 2ème année d’étude en Anglais</p> <br>
                            <p style="color:rgb(255, 0, 91); font-size:25px; ">Diplômes obtenus</p>
                            <p>CEP, BEPC, BAC C, Lience en Systèmes Informatiques et
                                Logiciels</p>

                        </div>
                    </div>
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-5" id="experience">
                        <div class="row mb-3"
                            style="background-color: #ffffff; min-height:600px; min-width:420px; padding:10px;">
                            <i class="bi bi-person-video3" style="color:rgb(255, 0, 91); font-size:45px; margin:30px;">
                                <strong style="color:#000000; font-style:normal; font-size:40px;"> Mon
                                    expérience</strong></i>
                            <p style="color:rgb(255, 0, 91); font-size:25px;">Formations</p>
                            <p>Formation pratiques en graphisme, développement web (PHP)</p><br>
                            <p style="color:rgb(255, 0, 91); font-size:25px;">Expérience en Entreprise</p>
                            <p>Stage académique dans la structure Digiweb SARL
                                Stage professionnel dans la structure Digiweb SARL
                                Développeur web et d’interface UX/UI dans la structure
                                Digiweb SARL</p><br>
                            <p style="color:rgb(255, 0, 91); font-size:25px;">Domaines appliquées dans les stages</p>
                            <p>Développement en Laravel (PHP)
                                Conceptions graphiques (flyers, chartes graphiques, logos...)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End section parcours-->
        <!--section témoignages-->
        <div class="row" style="background-color: #FFEAF1; min-width:600px; min-height:600px;" id="clients">
            <center>
                <p style="font-weight:bold; font-size:30px; color:rgb(255, 0, 91); margin:70px 70px;">
                    Témoignages clients
                <p>
                <p style="font-size:20px; margin:-40px;">
                    Nous vous proposons les avis de quelques clients pour témoignages:
                </p>
                </p>
                </p>
            </center>
            <div class="col">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="row">

                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                                <!-- Indicators/dots -->
                                <!--div class="carousel-indicators">
                                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"
                                            style="color: black;"></button>
                                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"
                                            style="color: black;"></button>
                                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"
                                            style="color: black;"></button-->


                                <!-- The slideshow/carousel -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <p>
                                            <img src="{{ asset('images/tem1.png') }}" alt="Avatar"
                                                style="width:200px; height:200px; border-radius:50%; float:left; margin-right:60px; border:2px  solid #FEE501;">
                                        <h2 style="font-weight: bold; font-size:35px; font-weight: bold;">Jeanne DELACROIX
                                        </h2>
                                        <p style="color: #b4adad; font-size:25px;">Expert Comptable</p>
                                        <p style="font-size: 20px; text-align:justify;">Elle fait des conceptions
                                            incroyables adapté à vos besoins,
                                            je vous la recommande pour des services exceptionnelles
                                            de haute gamme.</p>
                                        </p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>
                                            <img src="{{ asset('images/tem2.png') }}" alt="Avatar"
                                                style="width:200px; height:200px; border-radius:50%; float:left; margin-right:60px; border:2px  solid #FEE501;">
                                        <h2 style="font-weight: bold; font-size:35px; font-weight: bold;">Maeva EGOUNLETY
                                        </h2>
                                        <p style="color: #b4adad; font-size:25px;">Directrice Générale SEO</p>
                                        <p style="font-size: 20px; text-align:justify;">Elle offre des services aussi
                                            uniques et exceptionnelles adapté à chaque client, vous pouvez lui confier votre
                                            identité visuelle en toute sécurité.</p>
                                        </p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>
                                            <img src="{{ asset('images/tem4.png') }}" alt="Avatar"
                                                style="width:200px; height:200px; border-radius:50%; float:left; margin-right:60px; border:2px  solid #FEE501;">
                                        <h2 style="font-weight: bold; font-size:35px; font-weight: bold;">Sylvie DELAMER
                                        </h2>
                                        <p style="color: #b4adad; font-size:25px;">Professeur des Arts</p>
                                        <p style="font-size: 20px; text-align:justify;">J'ai testé plusieurs graphistes ou
                                            designers mais, elle est spéciale car elle te fait voyager dans l'imaginaire à
                                            travers ses œuvres, beaucoup de réussite à elle.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls/icons -->
                            <!--button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev"
                        style="color: black;">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next"
                        style="color: black;">
                        <span class="carousel-control-next-icon"></span>
                    </button-->
                        </div>
                        <div class="container">

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End section témoignages-->
        <!--section prix-->
        <div class="winners" id="prix">
            <div class="col">
                <div class="row">
                    <div class="col-lg-5" id="education">

                    </div>
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-5" id="experience">
                        <div class="row mb-3" style="background-color:transparent;  min-height:600px; ">
                            <i class="bi bi-trophy-fill" style="color:rgb(255, 0, 91); font-size:25px; margin:1px;">
                                <strong style="color:#000000; font-style:normal; font-size:20px;"> J'ai remporté plusieurs
                                    prix du national vers l'international</strong></i>
                            <i class="bi bi-trophy-fill" style="color:rgb(255, 0, 91); font-size:25px; margin:-1px;">
                                <strong style="color:#000000; font-style:normal; font-size:20px;"> J'ai remporté plusieurs
                                    prix du national vers l'international</strong></i>
                            <i class="bi bi-trophy-fill" style="color:rgb(255, 0, 91); font-size:25px; margin:-1px;">
                                <strong style="color:#000000; font-style:normal; font-size:20px;"> J'ai remporté plusieurs
                                    prix du national vers l'international</strong></i>
                            <i class="bi bi-trophy-fill" style="color:rgb(255, 0, 91); font-size:25px; margin:-1px;">
                                <strong style="color:#000000; font-style:normal; font-size:20px;"> J'ai remporté plusieurs
                                    prix du national vers l'international</strong></i>
                            <i class="bi bi-trophy-fill" style="color:rgb(255, 0, 91); font-size:25px; margin:-1px;">
                                <strong style="color:#000000; font-style:normal; font-size:20px;"> J'ai remporté plusieurs
                                    prix du national vers l'international</strong></i>
                            <i class="bi bi-trophy-fill" style="color:rgb(255, 0, 91); font-size:25px; margin:-1px;">
                                <strong style="color:#000000; font-style:normal; font-size:20px;"> J'ai remporté plusieurs
                                    prix du national vers l'international</strong></i>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End section prix-->

        <!--section projets-->

        <div class="container" id="projects">
            <div class="row" style="background-color: #ffffff">
                <center>
                    <p style="font-weight:bold; font-size:30px; color:rgb(255, 0, 91); margin:70px 70px;">
                        Mes projets
                    </p><br>
                    <p style="font-size:20px; margin: -60px;">
                        Quelques une de mes projets réalisés sont illustrés comme ci-dessous: </p>
                </center>
            </div><br><br><br><br><br>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="400" height="225"
                            src="{{ asset('images/p3.png') }}" alt=""
                            style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        ">
                        <!--svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg-->

                        <div class="card-body" style="min-height: 100px;">
                            <p class="card-text" style="color: #000000; font-size:20px; text-align:center;">Logo pour site
                                web</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="400" height="225"
                            src="{{ asset('images/p10.png') }}" alt=""
                            style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    ">

                        <div class="card-body" style="min-height: 100px;">
                            <p class="card-text" style="color: #000000; font-size:20px; text-align:center;">Logo pour site
                                web</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="400" height="225"
                            src="{{ asset('images/p11.png') }}" alt=""
                            style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        ">

                        <div class="card-body" style="min-height: 100px;">
                            <p class="card-text" style="color: #000000; font-size:20px; text-align:center;">flyer minime
                                pour une entreprise de ventes d'accessoires hommes et dames.</p>
                            <!--div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div-->
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="400" height="225"
                            src="{{ asset('images/p13.png') }}" alt=""
                            style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        ">

                        <div class="card-body" style="min-height: 100px;">
                            <p class="card-text" style="color: #000000; font-size:20px; text-align:center;">flyer pour le
                                lancement du kioque digital, notre plateforme de journaux en ligne.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="400" height="225"
                            src="{{ asset('images/p15.png') }}" alt=""
                            style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        ">

                        <div class="card-body" style="min-height: 100px;">
                            <p class="card-text" style="color: #000000; font-size:20px; text-align:center;">flyer pour
                                souhaiter une bonne reprise scolaire.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="400" height="225"
                            src="{{ asset('images/p14.png') }}" alt=""
                            style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        ">

                        <div class="card-body" style="min-height: 100px;">
                            <p class="card-text" style="color: #000000; font-size:20px; text-align:center;">Cate
                                d'invitation de mariage.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
        <!--End section projets-->

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">MA CARTE</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <img src="{{ asset('images/imagecard.jpeg') }}" alt="Paris"
                            style="width:30%; height:10%; display: block; margin-left: auto; margin-right: auto;"><br>
                        <center>
                            <h4 style="font-weight: bold;">Nathalie M. EGOUNLETY</h4>
                            <h6 style="color:rgb(255, 0, 91); font-family:Roboto regular;">Développeur web et
                                d'interface UI/UX </h6><br>
                            <p style="border:1px dashed rgb(148, 147, 147) "></p>
                            <table>
                                <tr>
                                    <td>
                                        <p>TELEPHONE : </p>
                                    </td>
                                    <td>
                                        <p>+229 62 22 88 11</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>ADRESSE : </p>
                                    </td>
                                    <td>
                                        <p>DOWA DEDOME</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>E-MAIL : </p>
                                    </td>
                                    <td>
                                        <p>nathalie@digiweb.bj</p>
                                    </td>
                                </tr>
                                <tr></tr>
                            </table>
                        </center>
                    </div>

                    <!-- Modal footer
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>-->

                </div>
            </div>
        </div>


    </body>
@endsection
