

<?php $__env->startSection('content'); ?>
    <div class="container">

        <h3>
            Data Pelanggan
            <a class="btn btn-primary btn-sm float-end" href="<?php echo e(url('pelanggan/create')); ?>">Tambah Data</a>
        </h3>

        <table class="table table-bordered">
            <tr>
            <th>Nama Pelanggan</th>
            <th>Id Golongan</th>
            <th>Alamat</th>
            <th>HP</th>
            <th>KTP</th>
            <th>Seri</th>
            <th>Meteran</th>
            <th>Aktif</th>
            <th>Id User</th>
            <th>Created At</th>
            <th>Updated At</th>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>                 
                <td><?php echo e($row->pel_nama); ?></td>
                <td><?php echo e($row->pel_id_gol); ?></td>
                <td><?php echo e($row->pel_alamat); ?></td>
                <td><?php echo e($row->pel_hp); ?></td>
                <td><?php echo e($row->pel_ktp); ?></td>
                <td><?php echo e($row->pel_seri); ?></td>
                <td><?php echo e($row->pel_meteran); ?></td>
                <td><?php echo e($row->pel_aktif); ?></td>
                <td><?php echo e($row->pel_id_user); ?></td>
                <td><?php echo e($row->created_at); ?></td>
                <td><?php echo e($row->updated_at); ?></td>                                    
                    <td><a href="<?php echo e(url('pelanggan/' . $row->pel_id . '/edit')); ?>">Edit</a></td>
                    <td>
                        <form action="<?php echo e(url('pelanggan/' . $row->pel_id)); ?>" method="POST">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button>Hapus</button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-quiz_datin\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>