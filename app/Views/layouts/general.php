<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>APAR WEB APPS</title>
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <script type="text/javascript" src="/assets/js/jquery/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="/assets/js/jquery/datepicker.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php 
            $uri = service('uri');
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?=base_url()?>/dashboard">
            <i class="fas fa-fire-extinguisher"></i>
            </a>
            <a class="navbar-brand" href="<?=base_url()?>/dashboard">APAR WEB APPS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php if (session()->get('isLoggedIn')) : ?>
                    
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars"></i> DATA
                        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        
                        <a class="dropdown-item" href="<?=base_url()?>/masterapar">Data Apar</a>
                        <a class="dropdown-item" href="<?=base_url()?>/masterjenisapar">Data Jenis Apar</a>
                        
                </div>
                    </li>
                </ul>
    
                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item <?= ($uri->getSegment(1) == 'profile')? 'active' : null?>">
                        <a class="nav-link" href="<?=base_url()?>/profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="White" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                        </a>
                    </li>
                    <!--
                <li class="nav-item <?= ($uri->getSegment(1) == 'profile')? 'active' : null?>">
                        <a class="nav-link" href="<?=base_url()?>/profile">Profile</a>
                    </li>
                -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>/logout">Logout</a>
                    </li>

                </ul>
                <?php else: ?>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item <?= ($uri->getSegment(1) == 'login')? 'active' : null?>">
                        <a class="nav-link" href="<?=base_url()?>/login">Login</a>
                    </li>
                    <li class="nav-item <?= ($uri->getSegment(1) == 'register')? 'active' : null?>">
                        <a class="nav-link" href="<?=base_url()?>/register">Register</a>
                    </li>
                </ul>
                <?php endif; ?>
            </div>
                </a>
        </nav>
        <?= $this->renderSection('content') ?>
   </body>
</html>        