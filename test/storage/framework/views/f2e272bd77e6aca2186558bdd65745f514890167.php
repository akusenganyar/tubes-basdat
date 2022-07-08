<?php $__env->startSection('hero'); ?>
<div class="jumbotron pb-20" style="background-image: url(<?php echo e(asset('assets\img\beach.jpg')); ?>);">
    <img class="card-img" src="<?php echo e(asset('assets\img\beach.jpg')); ?>" width="100%" height="350" alt="Card image" />
    <h1 class="display-4">AsikJuga</h1>
    <p class="lead">Aplikasi pemesanan akomodasi penerbangan dan pemesanan hotel</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Pesan sekarang</a>
    </p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landing-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PEMBELAJARAN\S4\Pemrograman Web\praktikum\modul 5\test\resources\views/landing-page/index.blade.php ENDPATH**/ ?>