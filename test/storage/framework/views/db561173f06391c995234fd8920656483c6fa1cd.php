<?php $__env->startSection('content'); ?>
<div class="col-md-9 col-lg-10 main bg-light">
    <h1 class="display-2 hidden-xs-down">
        Pemesanan
    </h1>
    <a id="features"></a>
    <div class="row mb-3">
        <div class="col-lg-9 col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Id</th>
                            <th>Jenis Akomodasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($p->id_pemesanan); ?></td>
                                <td><?php echo e($p->jenis_akomodasi); ?></td>
                                <td>action</td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/row-->
    <a id="more"></a>
    <!--/row-->
    <a id="flexbox"></a>
    <!--/main col-->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PEMBELAJARAN\S4\Pemrograman Web\praktikum\modul 5\test\resources\views/auth/dashboard/pemesanan.blade.php ENDPATH**/ ?>