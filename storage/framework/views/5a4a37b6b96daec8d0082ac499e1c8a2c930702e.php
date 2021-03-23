<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="item-wrap"> <img class="center" src="image.png" alt="Bookstore" style="align: center"></div><br>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
        </ol>
        <div class="carousel-inner" role="listbox" style="height:600px">
            <div class="carousel-item active">
                <a href="drama">
                <img src="https://upgrade-your-lifestyle.com/wp-content/uploads/2018/11/drama.jpg" alt="Drama" style="width: 100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Drama</h1>
                </div></a>
            </div>
            <div class="carousel-item">
            <a href="fantastika">
                <img src="https://i.pinimg.com/originals/5a/95/ca/5a95ca02bd3f9bc1424f5739b6c87fce.jpg" alt="Fantastika" style="width: 100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Fantastika</h1>
                </div></a>
            </div>
            <div class="carousel-item">
            <a href="krimi">
                 <img src="https://s3-eu-west-1.amazonaws.com/uploads.playbaamboozle.com/uploads/images/18341/1557227782_196231" alt="Krimi" style="width: 100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Krimi</h1>
                </div></a>
            </div>
            <div class="carousel-item">
            <a href="ljubavni">
                <img src="https://img.republicworld.com/republic-prod/stories/promolarge/xxhdpi/pds75ua0lm56xvkf_1581317735.jpeg?tr=w-758,h-433" alt="Ljubavni" style="width: 100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Ljubavni</h1>
                </div></a>
            </div>
            <div class="carousel-item">
            <a href="povijesni">
                <img src="https://cosmosmagazine.com/wp-content/uploads/2020/02/190618_predicting_history_full-1440x809.jpg" alt="Povijesni" style="width: 100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Povijesni</h1>
                </div></a>
            </div>
            <div class="carousel-item">
            <a href="psihološki">
                <img src="https://toledolibrary.s3.amazonaws.com/uploads/images/blog/_large/gripping-psychological-suspense-novels-2018.jpg" alt="Psihološki" style="width: 100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Psihološki</h1>
                </div></a>
            </div>
            <div class="carousel-item">
            <a href="pustolovni">
                <img src="https://www.inspirechallenge.co.uk/wp-content/uploads/2019/08/Creating-Adventures.jpg" alt="Pustolovni" style="width: 100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Pustolovni</h1>
                </div></a>
            </div>
            <div class="carousel-item">
            <a href="triler">
                <img src="https://cdn.pastemagazine.com/www/articles/BestHorrorNovels.jpg" alt="Triler" style="width: 100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Triler</h1>
                </div></a>
            </div>
            <div class="carousel-item">
            <a href="vestern">
                <img src="https://www.dl-online.com/incoming/4884012-hhuuee-Westerns.jpg/alternates/BASE_LANDSCAPE/Westerns.jpg" alt="Vestern" style="width: 100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Vestern</h1>
                </div></a>
            </div>
            <div class="carousel-item">
            <a href="znanstvena_fantastika">
                <img src="https://theengineer.markallengroup.com/production/2020/01/scifi-eye-stock.adobe_.com-James-Thew.jpg" alt="Znanstvena fantastika" style="width: 100%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Znanstvena fantastika</h1>
                </div></a>
            </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
       </div> 
<div class="container-fluid">  
    <div class="item-wrapper">
        <h3 style="text-align: center">Novije knjige</h3>
        <hr>
    <div class="row" style="overflow-x:scroll; height: 400px">
    <?php $__empty_1 = true; $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="small-3 medium-3 large-3 columns  mx-auto">
            <div class="item-wrapper" style="width: 375px;">
                <div class="img-wrapper">
                    <a href="book/<?php echo e($book->id); ?>">
                        <img src="<?php echo e($book->image); ?>" height="250px"/>
                     </a>
                </div>
                <h3 class="subheader">
                    <span class="price-tag"><?php echo e($book->price); ?></span> KM
                </h3>
                    <p style="font-size:20px">
                        <?php echo $book->title; ?> <br>
                        <?php echo $book->author; ?><br>
                        <a href="<?php echo e(route('cart.addItem', $book->id)); ?>" class="button  expanded">Add to Cart</a>
                    </p>
            </div><br>       
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


    <?php endif; ?>
    </div>
</div>  
<!-- -->
<div class="item-wrapper">
    <h3 style="text-align: center">Jeftinije knjige</h3>
    <hr>
    <div class="row" style="overflow-x:scroll; height: 400px">
    <?php $__empty_1 = true; $__currentLoopData = $cheap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="small-3 medium-3 large-3 columns  mx-auto">
            <div class="item-wrapper" style="width: 375px;">
                <div class="img-wrapper">
                    <a href="book/<?php echo e($book->id); ?>">
                        <img src="<?php echo e($book->image); ?>" height="250px"/>
                     </a>
                </div>
                <h3 class="subheader">
                    <span class="price-tag"><?php echo e($book->price); ?></span> KM
                </h3>
                    <p style="font-size:20px">
                        <?php echo $book->title; ?> <br>
                        <?php echo $book->author; ?><br>
                        <a href="<?php echo e(route('cart.addItem', $book->id)); ?>" class="button  expanded">Add to Cart</a>
                    </p>
            </div><br>       
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


    <?php endif; ?>
    </div>
</div>  
<!-- -->
<div class="item-wrapper">
    <h3 style="text-align: center">Klasici</h3>
    <hr>
    <div class="row" style="overflow-x:scroll; height: 400px">
    <?php $__empty_1 = true; $__currentLoopData = $classic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="small-3 medium-3 large-3 columns  mx-auto">
            <div class="item-wrapper" style="width: 375px;">
                <div class="img-wrapper">
                    <a href="book/<?php echo e($book->id); ?>">
                        <img src="<?php echo e($book->image); ?>" height="250px"/>
                     </a>
                </div>
                <h3 class="subheader">
                    <span class="price-tag"><?php echo e($book->price); ?></span> KM
                </h3>
                    <p style="font-size:20px">
                        <?php echo $book->title; ?> <br>
                        <?php echo $book->author; ?><br>
                        <a href="<?php echo e(route('cart.addItem', $book->id)); ?>" class="button  expanded">Add to Cart</a>
                    </p>
            </div><br>       
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


    <?php endif; ?>
    </div>
</div>  
</div>


                <?php if(session('status')): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo e(session('status')); ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bookstore\resources\views/home.blade.php ENDPATH**/ ?>