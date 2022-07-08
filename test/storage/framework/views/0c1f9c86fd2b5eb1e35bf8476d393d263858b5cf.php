<?php $__env->startSection('hero'); ?>
<section>
    <div class="content">
        <div class="info">
          <h2>Aplikasi pemesanan akomodasi<br><span>Penerbangan dan pemesanan hotel</span></h2>
          <p>Bersama <span><img src="<?php echo e(asset('assets\img\Asikjuga.png')); ?>" height="60" max-width="100%"/></span> liburan anda akan menjadi "ASIK JUGA"</p>
          <a href="<?php echo e(route('data-penumpang.create')); ?>" class="info-btn">Pesan Sekarang</a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PEMBELAJARAN\S4\Pemrograman Web\praktikum\modul 5\test\resources\views/welcome/index.blade.php ENDPATH**/ ?>