<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script type="text/javascript">
    $(document).ready(function (e){
        $("#addBtn").on("click", function (e) {
            e.preventDefault();
            $.ajax({
                type : 'POST',
                url : '<?php echo e(route('users.store')); ?>',
                data : $('#addForm').serialize(),
                success: function (data){
                    location.reload();
                },
                error : function (data) {
                    /* Ako je nastala greška prikaži ih */
                    let json = data.responseJSON;
                    $("input").removeClass("is-invalid");
                    $(".invalid-feedback").remove();
                    for (var key in json["errors"]){
                        $("#" + key).addClass("is-invalid")
                        $("#" + key).after("<span class='invalid-feedback' role='alert'><strong>"+json["errors"][key]+"</strong></span>")   
                    }
                    console.log(json);
                }
            });
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function (e){
        $("#addbooksBtn").on("click", function (e) {
            e.preventDefault();
            $.ajax({
                type : 'POST',
                url : '<?php echo e(route('addbooks.store')); ?>',
                data : $('#addbooksForm').serialize(),
                success: function (data){
                    location.reload();
                },
                error : function (data) {
                    /* Ako je nastala greška prikaži ih */
                    let json = data.responseJSON;
                    $("input").removeClass("is-invalid");
                    $(".invalid-feedback").remove();
                    for (var key in json["errors"]){
                        $("#" + key).addClass("is-invalid")
                        $("#" + key).after("<span class='invalid-feedback' role='alert'><strong>"+json["errors"][key]+"</strong></span>")   
                    }
                    console.log(json);
                }
            });
        });
    });
    </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('sass/app.scss')); ?>" rel="stylesheet">
</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <form class="form-inline my-2 my-lg-0" type="get" action=" <?php echo e(url('/finder')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="input-group">
                            <input type="text" class="form-control" name="query"placeholder="Pretražite knjige"  style="width: 800px">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary" style="border-radius: 0px 0.25rem 0.25rem 0px">  
                                    <span class="search">Pretraži</span>
                                </button>
                            </span>
                        </div>
                    </form>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    
                        <!-- Authentication Links -->
                        <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('Books')); ?>">
                        Knjige
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart"><i class="fas fa-shopping-cart"></i></a>
                </li>
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name. " " . Auth::user()->surname); ?>

                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('account', Auth::user()->id)); ?>">
                                        <?php echo e(__('Moj račun')); ?>

                                    </a>
                                <?php if (\Illuminate\Support\Facades\Blade::check('superAdministrator')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('users')); ?>">
                                        <?php echo e(__('Korisnici')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('addbooks')); ?>">
                                        <?php echo e(__('Dodavanje knjiga')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('orders')); ?>">
                                        <?php echo e(__('Narudžbe')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if (\Illuminate\Support\Facades\Blade::check('administrator')): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('addbooks')); ?>">
                                        <?php echo e(__('Dodavanje knjiga')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('orders')); ?>">
                                        <?php echo e(__('Narudžbe')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div><br>
    
    <main>
            <?php echo $__env->yieldContent('content'); ?>
    </main><div class="wrapper">
    </div>

<!-- Footer -->

<footer class="bg-dark text-center text-white"style="bottom: 0px">
  <div class="container p-1">
    <section class="mb-1">
      <a class="btn btn-outline-light btn-floating m-1" href="https://drive.google.com/file/d/1hKYFvV9aNhiJ7Xdkxov8dsOkGH2cHD7D/view?usp=sharing" role="button"
        >Vizija</a>
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/g4book/PZI-Bookstore" role="button"
        >Github</a>
      <a class="btn btn-outline-light btn-floating m-1" href="about" role="button"
        >O nama</a>
    </section>
    </div>
  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright: Dario Dominković & Silvio Pejić
  </div>
  
</footer></div>
<!-- Footer -->


</body>
</html><?php /**PATH C:\xampp\htdocs\bookstore\resources\views/layouts/app.blade.php ENDPATH**/ ?>