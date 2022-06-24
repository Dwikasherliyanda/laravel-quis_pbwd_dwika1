<?php $__env->startSection('content'); ?>

    <div class="container">
                <h3>Tambah Data Users</h3>
        <form action="<?php echo e(url('/users')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label>Nama User</label>
                    <input type="text" name="user_nama" class="form-control"   >
                </div>
                <label for="kode" class="col-sm-2 col-form-label">Email User</label>
                <div class="mb-3">
                    <input type="text" name="user_email" class="form-control"   >
                </div>
                <label for="kode" class="col-sm-2 col-form-label">Password User</label>
                <div class="mb-3">
                    <input type="Password" name="user_password"  class="form-control">
                </div>
            
                <label for="kode" class="col-sm-2 col-form-label">Alamat User</label>
                <div class="mb-3">
                    <input type="text" name="user_alamat"  class="form-control">
                </div>
   
                <label for="kode" class="col-sm-2 col-form-label">HP User</label>
                <div class="mb-3">
                    <input type="text" name="user_hp" class="form-control">
                </div>

                <label for="kode" class="col-sm-2 col-form-label">Pos User</label>
                <div class="mb-3">
                    <input type="text" name="user_pos" class="form-control">
                </div>
 
                <label for="mb-3" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                    <input type="text" name="user_role" class="form-control">
                </div>

                <label for="mb-3" class="col-sm-2 col-form-label">Status Aktif</label>
                <div class="mb-3">
                    <input type="text" name="user_aktif" class="form-control">
                </div>                                                    
             <hr>
                <div class="form-group">
                    <button type="submit">Tambah</button>
                </div>
        </form>

    </div>
    </body>
</html>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-quis_pbwd_dwika1\resources\views/users/create.blade.php ENDPATH**/ ?>