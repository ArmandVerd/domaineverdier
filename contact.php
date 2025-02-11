<?php

echo "here"

?>

<!DOCTYPE html>
<html lang=""fr>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scal=1.0">
    <title>Domaine Verdier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="accueil.css">
</head>
<body class="d-flex flex-column ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="accueil.html">
            <img src="logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" style="padding-left: 1%;">
            Domaine Verdier
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="item nav-link" href="histoire.html">Histoire</a>
                </li>
                <li class="nav-item">
                    <a class="item nav-link" href="domaine.html">Domaine</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="item nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cuvées
                    </a>
                    <div class="dropdown-menu bg-glass" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item bg-transparent item" href="#">Rouge</a>
                        <a class="dropdown-item bg-transparent item" href="#">Rosé</a>
                        <a class="dropdown-item bg-transparent item" href="#">Blanc</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav> 
    
    <div class="mt-4 mb-4 container text-white">
        <br><br>
    </div>
    <div class="mt-4 mb-4 container text-white">
        <br><br>
    </div>
    
    

      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="/ma-page-de-traitement" method="post">
                    <ul>
                      <li>
                        <label for="name">Nom obligatoire</label>
                      </li>
                      <li>
                        <input type="text" id="name" name="user_name" required/>
                      </li>
                      <li>
                        <label for="mail">E-mail obligatoire</label>
                      </li>
                      <li>
                        <input type="email" id="mail" name="user_mail" required/>
                      </li>
                      <li>
                        <label for="phone">Téléphone</label>
                      </li>
                      <li>
                        <input type="phone" id="phone" name="user_phone" />
                      </li>
                      <li>
                        <label for="msg">Message</label>
                      </li>
                      <li>
                        <textarea id="msg" name="user_message"></textarea>
                      </li>
                    </ul>
            
                    <div class="button">
                        <button type="submit">Envoyer le message</button>
                      </div>
                  </form>
            </div>
            <div class="col">
                <p>" to center vertically my-auto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
        </div>
      </div>


      <div class="mt-4 mb-4 container text-white">
        <br><br>
    </div>
    <div class="mt-4 mb-4 container text-white">
        <br><br>
    </div>


    <div class="mt-auto">
        <!-- Footer -->
      <footer
        class="mt-auto py-3 bg-body-tertiary text-center text-lg-start text-white footer"
        style="background-color: #34373f"
        >
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold text-center">
                            Domaine Verdier
                        </h6>
                        <img src="logo.jpg" width="100" height="100" class="mx-auto d-block" alt="">
                    </div>
                    <!-- Grid column -->
                    
                    <hr class="w-100 clearfix d-md-none" />
                    
                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-center">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Cuvées</h6>
                        <p>
                            <a class="text-white" href="#">Rouge</a>
                        </p>
                        <p>
                            <a class="text-white" href="#">Rosé</a>
                        </p>
                        <p>
                            <a class="text-white" href="#">Blanc</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    
                    <hr class="w-100 clearfix d-md-none" />
                    
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 text-center">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            A propos
                        </h6>
                        <p>
                            <a class="text-white" href="histoire.html">Histoire</a>
                        </p>
                        <p>
                            <a class="text-white" href="domaine.html">Domaine</a>
                        </p>
                    </div>
                    
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />
                    
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-center">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-home mr-3 text-center"></i> Cazelles 34210 Agel</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
            
            <hr class="my-3">
            
            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            © 2024 Domaine Verdier
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->
                    
                    
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
      </footer>
    <!-- Footer -->
    </div>
    <!-- End of .container -->
</body>