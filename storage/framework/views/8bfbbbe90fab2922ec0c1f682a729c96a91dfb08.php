<?php $__env->startSection('content'); ?>
    <div class="container">
                <h3>Edit Data Users</h3>

        <form action="<?php echo e(url('/users/' . $row->users_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label>Nama Users</label>
                <input type="text" class="form-control" name="user_nama" value="<?php echo e($row->user_nama); ?>"></>
            </div>
                <label>Email User</label>
                <div class="mb-3">
                    <input type="text" name="user_email" class="form-control"  value="<?php echo e($row->user_email); ?>">
                </div>
                <label >Alamat User</label>
                <div class="mb-3">
                    <input type="text" name="user_alamat" class="form-control" value="<?php echo e($row->user_alamat); ?>">
                </div>
                <label>HP User</label>
                <div class="mb-3">
                    <input type="text" name="user_hp" class="form-control" value="<?php echo e($row->user_hp); ?>">
                </div>
                <label>Pos User</label>
                <div class="mb-3">
                    <input type="text" name="user_pos" class="form-control"  value="<?php echo e($row->user_pos); ?>">
                </div>
                <label >Role</label>
                <div class="mb-3">
                    <input type="text" name="user_role" class="form-control"  value="<?php echo e($row->user_role); ?>" >
                </div>
                <label>Status Aktif</label>
                <div class="mb-3">
                    <input type="text" name="user_aktif" class="form-control"  value="<?php echo e($row->user_aktif); ?>">
                </div>                                                       
             <hr>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
</div>
    
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-quis_pbwd_dwika1\resources\views/users/edit.blade.php ENDPATH**/ ?>