<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="mystyle.scss">

        <title>Bookstore</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 10px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #dcdcdc;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .navbar {
                padding: 10px;
            }
            
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="nav-item">
                    <?php if(Route::has('login')): ?>
                        <div class="top-right links">
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(url('/home')); ?>">Home</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>">Prijava</a>

                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>">Registracija</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div> <br>     
            </div>
        </nav><br>
            <div class="content">
                <div class="title m-b-md">
                    Bookstore
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://cdn.pastemagazine.com/www/articles/2018/04/11/best-fantasy-novels-21st.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Fantasy</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://www.theschoolrun.com/sites/theschoolrun.com/files/article_images/best_mystery_books_for_children.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Mystery</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://images.immediate.co.uk/production/volatile/sites/7/2020/03/Historical_novels-2239acc.jpg?quality=90&resize=620,413" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">History</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\bookstore\resources\views/welcome.blade.php ENDPATH**/ ?>