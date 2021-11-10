<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>La tour de pize</title>
</head>

<body>
    <!-- START HEADER -->
    <header>
        <div class="container-responsive d-sm-block d-md-none">
            <div class="row justify-content-center g-0">
                <div class="col-12 text-center">
                    <img class="img-fluid" src="./assets/img/Bannière.png" alt="Bannière tour de pize">
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- START APP VUE.JS -->
    <div id="app">
        <!-- START NAV -->
        <nav>
            <div class="container-responsive d-sm-block d-md-none mt-5">
                <div class="row text-center g-0">
                    <div class="col-4">
                        <router-link to="/Home">
                            <i class="icon fas fa-home"></i>
                        </router-link>
                    </div>
                    <div class="col-4">
                        <router-link to="/Burger">
                            <i class="icon fas fa-hamburger"></i>
                        </router-link>
                    </div>
                    <div class="col-4">
                        <router-link to="/Phone">
                            <i class="icon fas fa-phone"></i>
                        </router-link>
                    </div>
                </div>
                <div class="row text-center mt-3 g-0">
                    <div class="col-4">
                        <div class="oblong"></div>
                    </div>
                    <div class="col-4">
                        <div class="oblong"></div>
                    </div>
                    <div class="col-4">
                        <div class="oblong"></div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END NAV -->
        <router-view></router-view>
    </div>
    <!-- END APP VUE.JS -->

    <!-- START HOME SECTION -->
    <script type="text/x-template" id="pagehome">
        <div class="home-section container-responsive">
            <div v-for="element in presentationHome" class="row justify-content-center text-center g-0">
                <div class="col-12">
                    <img class="img-fluid mt-5" v-bind:src="element.img" v-bind:alt="element.alt">
                </div>
                <div class="col-12 text-center mt-5">
                    <p>{{element.texte}}</p>
                </div>
            </div>
        </div>
    </script>
    <!-- END HOME SECTION -->

    <!-- START BURGER SECTION -->
    <script type="text/x-template" id="pageburger">
        <div class="burger-section container-responsive">
            <div v-for="element in typeArticleFood" class="elementBurger row align-items-center text-center mt-5 mb-5 g-0">
                <div class="col-6">
                    <h3>{{ element.title }}</h3>
                </div>
                <div class="col-6">
                    <img class="imgBurger" v-bind:src="element.img" alt="Photo menu">
                </div>
            </div>
        </div>
    </script>
    <!-- END BURGER SECTION -->

    <!-- START PHONE SECTION -->
    <script type="text/x-template" id="pagephone">
        <div class="phone-section container-responsive">
            <div class="row justify-content-center g-0 mt-5">
                <div class="col-9">
                    <p>La tour de pize est ouverte du mardi au samedi de 10h à 21h30 ainsi que le dimanche de 18h à 21h30.</p>
                </div>
                <div class="col-12 d-flex justify-content-center mt-2 mb-2">
                    <div class="rectangle"></div>
                </div>
                <div class="col-12">
                    <div class="row justify-content-center g-0 reseaux">
                        <div class="col-2 text-center align-center">
                            <i class="iconPhone fas fa-phone"></i>
                        </div>
                        <div class="col-5 pt-2">
                            <a href="tel:+33700000000"><p>+33700000000</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center mb-2 mt-2">
                    <div class="rectangle"></div>
                </div>
                <div class="col-12">
                    <div class="row d-flex align-items-center justify-content-center g-0 reseaux">
                        <div class="col-2 text-end me-4">
                            <i class="iconPhone fab fa-facebook-f"></i>
                        </div>
                        <div class="col-6 pt-3">
                            <a href="https://m.facebook.com/latourdepize/" target="_blank"><p>Suivez nous également
                            sur Facebook</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center mb-5">
                    <div class="rectangle"></div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12">
                    <iframe width="100%" height="300px" id="gmap_canvas" src="https://maps.google.com/maps?q=1%20Rue%20du%20Fourney,%2039100%20Choisey&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                <div class="col-12 text-center">
                    <p>1 RUE DU FOURNEY 39100 CHOISEY</p>
                </div>
            </div>
        </div>
    </script>
    <!-- END PHONE SECTION -->

    <!-- START FOOTER -->
    <footer class="container-responsive mt-5">
        <div class=" row justify-content-end g-0">
            <div class="col-6 text-center">
                <h6>BON APETTIT !</h6>
            </div>
        </div>
        <div class="row align-items-center g-0" id="footer">
            <div class="col-6">
                <img class="img-footer" src="./assets/img/friteFooter.png" alt="">
            </div>
            <div class="col-3 text-center">
                <a href="https://m.facebook.com/latourdepize/" target="_blank"><i class="iconFooter fab fa-facebook-f"></i></a>
            </div>
            <div class="col-3 text-center">
                <a href="mailto:san@antonio.net" target="_blank"><i class="iconFooter fas fa-envelope"></i></a>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script> -->
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script src="scripts/dataJs.js"></script>
    <script src="scripts/vue.js"></script>

</body>

</html>