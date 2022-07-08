<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                      <?php echo e(session('error')); ?>

                    </div>
                    <?php endif; ?>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div> 
                    <?php endif; ?>

                    You are logged in!

                </div>
                <div class="card-body">
                    <div class="panel-body">
                        <?php if(Auth::user()->is_admin == 1): ?>
                            <a href="<?php echo e(route('admin.view')); ?>">Admin View</a>
                        <?php else: ?>
                        <a href="<?php echo e(url('/')); ?>">Landing Page</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PEMBELAJARAN\S4\Pemrograman Web\praktikum\modul 5\test\resources\views/home/index.blade.php ENDPATH**/ ?>