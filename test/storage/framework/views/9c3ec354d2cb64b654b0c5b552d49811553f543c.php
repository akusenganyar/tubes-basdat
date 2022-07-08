<nav class="navbar navbar-expand-lg navbar-light bg-white">

    <!-- brand "AsikJuGa" -->
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
        <img src="<?php echo e(asset('assets\img\Asikjuga.png')); ?>" height="60" width="100%" class="d-inline-block align-top" />
    </a>

    <!-- responsive button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <!-- regular menu -->
            <li class="nav-item">
                <a class="nav-link" href="#">Akomodasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pesawat + Hotel<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pesawat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hotel</a>
            </li>

            <!-- dropdown -->
            <li class="nav-item">
                <div class="dropdown show">
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu Lainnya
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </li>

        </ul>
    </div>

    <!-- end navbar -->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/openmoji/292/flag-indonesia_1f1ee-1f1e9.png" height="25" width="25" alt="" />
            </a>
        </li>
        <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>
                <li class="nav-item">
                    <?php if(Auth::user()->is_admin == 1): ?>
                        <a href="<?php echo e(route('dashboard')); ?>" class="nav-link"><?php echo e(Auth::user()->name); ?></a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/')); ?>" class="nav-link"><?php echo e(Auth::user()->name); ?></a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                    </form>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a href="<?php echo e(route('login')); ?>" class="nav-link">Masuk</a>
                </li>

                <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('register')); ?>" role="button" class="btn btn-outline-primary">Buat Akun</a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </ul>
</nav>
<?php /**PATH D:\PEMBELAJARAN\S4\Pemrograman Web\praktikum\modul 5\test\resources\views/layouts/_welcome/navbar.blade.php ENDPATH**/ ?>