

<?php $__env->startSection('content'); ?>
    <div class="container">

        <h3>Edit Data Pelanggan</h3>
        <form action="<?php echo e(url('/pelanggan/' . $row->pel_id)); ?>" method="POST">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label>Nama Pelanggan</label>
                <input type="text" class="form-control" name="pel_nama" value="<?php echo e($row->pel_nama); ?>"></>
            </div>
            <div class="mb-3">
                <label>ID Golongan</label>
                <input type="text" class="form-control" name="pel_id_gol" value="<?php echo e($row->pel_id_gol); ?>"></>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" class="form-control" name="pel_alamat" value="<?php echo e($row->pel_alamat); ?>"></>
            </div>
            <div class="mb-3">
                <label>No Hp</label>
                <input type="text" class="form-control" name="pel_hp" value="<?php echo e($row->pel_hp); ?>"></>
            </div>
            <div class="mb-3">
                <label>No KTP</label>
                <input type="text" class="form-control" name="pel_ktp" value="<?php echo e($row->pel_ktp); ?>"></>
            </div>
            <div class="mb-3">
                <label>Seri</label>
                <input type="text" class="form-control" name="pel_seri" value="<?php echo e($row->pel_seri); ?>"></>
            </div>
            <div class="mb-3">
                <label>Meteran</label>
                <input type="text" class="form-control" name="pel_meteran" value="<?php echo e($row->pel_meteran); ?>"></>
            </div>
            <div class="mb-3">
                <label>Aktif</label>
                <input type="text" class="form-control" name="pel_aktif" value="<?php echo e($row->pel_aktif); ?>"></>
            </div>                                                                                    
            <div class="mb-3">
                <label>ID User</label>
                <input type="text" class="form-control" name="pel_id_user" value="<?php echo e($row->pel_id_user); ?>"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-quiz_datin\resources\views/pelanggan/edit.blade.php ENDPATH**/ ?>