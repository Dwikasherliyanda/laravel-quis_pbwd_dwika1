<?php $__env->startSection('content'); ?>
 
    <div class="container">

        <h3>
            Data Users
            <a class="btn btn-primary btn-sm float-end" href="<?php echo e(url('users/create')); ?>">Tambah Data</a>
        </h3>

        <table class="table table-striped">
              <thead>
        <tr>
                <td>Nama User</td>
                <td>Email User</td>
                <td>HP User</td>
                <td>Alamat User</td>
                <td>Pos User</td>
                <td>Role User</td>
                <td>Status Aktif</td>                                
                            <td>EDIT</td>
                <td>HAPUS</td>
        </tr>
      </thead>
<?php $no=1;
?>
         <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                    <td><?php echo e($row->user_nama); ?></td>
                    <td><?php echo e($row->user_email); ?></td>
                    <td><?php echo e($row->user_hp); ?></td>
                    <td><?php echo e($row->user_alamat); ?></td>
                    <td><?php echo e($row->user_pos); ?></td>
                    <td><?php echo e($row->user_role); ?></td>
                    <td><?php echo e($row->user_aktif); ?></td>
                <td>
            <a href="<?php echo e(url('users/' . $row->user_id . '/edit')); ?>" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <form action="<?php echo e(url('users/' . $row->user_id)); ?>" method="POST">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger">Hapus</button>
                        </form>                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    </div>
    </body>

</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-quis_pbwd_dwika1\resources\views/users/index.blade.php ENDPATH**/ ?>