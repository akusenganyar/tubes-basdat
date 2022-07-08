<?php $__env->startSection('content'); ?>
<div class="col-md-9 col-lg-10 main bg-light">
    <h1 class="display-2 hidden-xs-down">
        Relasi
    </h1>
    <a id="features"></a>
    <div class="row mb-3">
        <div class="col-lg-9 col-md-8">
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-header"><?php echo e($u->name); ?></div>
                    <div class="card-body">
                        <?php $__currentLoopData = $u->pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card mb-3" style="max-width: 18rem;">
                                <p class="card-header"><?php echo e($p->jenis_akomodasi); ?></p>
                                <div class="card-body">
                                    <?php $__currentLoopData = $p->penerbangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <h5 class="card-title"><?php echo e($pp->nama_penerbangan); ?></h5>
                                        <p class="card-text">Daftar Penumpang : </p>
                                        <?php $__currentLoopData = $pp->data_penumpang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($dp->penerbangan_id != null): ?>
                                                <p class="card-text"><?php echo e($dp->nama_penumpang); ?></p>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $p->perhotelan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <h5 class="card-title"><?php echo e($ph->nama_hotel); ?></h5>
                                        <p class="card-text">Daftar pemesan : </p>
                                        <?php $__currentLoopData = $ph->data_penumpang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($dph->perhotelan_id != null): ?>
                                                <p class="card-text"><?php echo e($dph->nama_penumpang); ?></p>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <!--/row-->
    <a id="more"></a>
    <!--/row-->
    <a id="flexbox"></a>
    <!--/main col-->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PEMBELAJARAN\S4\Pemrograman Web\praktikum\modul 5\test\resources\views/auth/dashboard/relations.blade.php ENDPATH**/ ?>