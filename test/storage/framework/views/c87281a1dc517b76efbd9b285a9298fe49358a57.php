<?php $__env->startSection('create-content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Data Pemesan')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('pemesanan.store')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="row mb-3">
                            <label for="jenis_akomodasi" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Jenis Akomodasi')); ?></label>

                            <select name="jenis_akomodasi" class="form-control custom-select">
                                <option value=""><?php echo e(__('Pilih Akomodasi')); ?></option>
                                <option value="penerbangan">Penerbangan</option>
                                <option value="perhotelan">Perhotelan</option>
                            </select>
                            <div class="col-md-6">
                                <?php $__errorArgs = ['jenis_akomodasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Jenis Akomodasi Siap')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pemesanan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PEMBELAJARAN\S4\Pemrograman Web\praktikum\modul 5\test\resources\views/pemesanan/pemesanan/create.blade.php ENDPATH**/ ?>