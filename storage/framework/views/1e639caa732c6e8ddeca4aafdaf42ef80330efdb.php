

<?php $__env->startSection('content'); ?>
    <div class="container">

        <h3>
            Data Golongan
            <a class="btn btn-primary btn-sm float-end" href="<?php echo e(url('golongan/create')); ?>">Tambah Data</a>
        </h3>

        <table class="table table-striped">
            <tr>
                <td>ID Golongan</td>
                <td>Kode Golongan</td>
                <td>Nama Golongan</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($row->gol_id); ?></td>                                       
                    <td><?php echo e($row->gol_kode); ?></td>
                    <td><?php echo e($row->gol_nama); ?></td>
                    <td><a href="<?php echo e(url('golongan/' . $row->gol_id . '/edit')); ?>" class="btn btn-secondary">Edit</a></td>
                    <td>
                        <form action="<?php echo e(url('golongan/' . $row->gol_id)); ?>" method="POST">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger">Hapus</button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-quis_pbwd_dwika1\resources\views/golongan/index.blade.php ENDPATH**/ ?>