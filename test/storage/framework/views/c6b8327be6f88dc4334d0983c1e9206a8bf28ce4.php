<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/dashboard/style.css')); ?>">

        <title><?php echo e(config('app.name')); ?></title>
    </head>

    <body>
        <?php echo $__env->make('layouts._welcome.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid" id="main">
            <div class="row row-offcanvas row-offcanvas-left">
                <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-dark" id="sidebar" role="navigation">
                    <ul class="nav flex-column pl-1">
                        <li class="nav-item"><h1 class="nav-link text-light"><?php echo e(Auth::user()->name); ?></h1></li>
                        <li class="nav-item"><a class="nav-link text-light" href="<?php echo e(route('dashboard')); ?>">Overview</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="<?php echo e(route('dashboard.akun')); ?>">Akun</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="<?php echo e(route('dashboard.data-penumpang')); ?>">Data Penumpang</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="<?php echo e(route('dashboard.pemesanan')); ?>">Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="<?php echo e(route('dashboard.penerbangan')); ?>">Penerbangan</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="<?php echo e(route('dashboard.perhotelan')); ?>">Perhotelan</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="<?php echo e(route('dashboard.tiket')); ?>">Tiket</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="<?php echo e(route('dashboard.pembayaran')); ?>">Pembayaran</a></li>
                    </ul>
                </div>
                <!--/col-->
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </body>

    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?php echo e(URL::asset('js/dashboard/script.js')); ?>"></script>
</html>
<?php /**PATH D:\PEMBELAJARAN\S4\Pemrograman Web\praktikum\modul 5\test\resources\views/dashboard.blade.php ENDPATH**/ ?>