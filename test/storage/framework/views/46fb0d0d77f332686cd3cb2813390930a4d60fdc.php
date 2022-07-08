<?php $__env->startSection('content'); ?>
<div class="col-md-9 col-lg-10 main bg-light">
    <h1 class="display-2 hidden-xs-down">
        Data Penumpang
    </h1>
    <a id="features"></a>
    <div class="row mb-3">
        <div class="col-lg-9 col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Usia</th>
                            <th>Domisili</th>
                            <th>Nomor Hp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data_penumpang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penumpang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($penumpang->id_penumpang); ?></td>
                                <td><?php echo e($penumpang->nama_penumpang); ?></td>
                                <td><?php echo e($penumpang->NIK); ?></td>
                                <td><?php echo e($penumpang->usia); ?></td>
                                <td><?php echo e($penumpang->domisili); ?></td>
                                <td><?php echo e($penumpang->no_hp); ?></td>
                                <td>action</td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PEMBELAJARAN\S4\Pemrograman Web\praktikum\modul 5\test\resources\views/auth/dashboard/data_penumpang.blade.php ENDPATH**/ ?>