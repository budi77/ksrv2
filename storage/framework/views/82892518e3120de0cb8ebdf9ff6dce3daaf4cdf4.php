<table>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">No KP</th>
        <th scope="col">No Tel</th>
        <th scope="col">Jantina</th>
        <th scope="col">Bahagian</th>
        <th scope="col">Ahli</th>
        <th scope="col">Saiz</th>
        <th scope="col">Tarikh Bayaran</th>
        <th scope="col">Jumlah Bayaran</th>
        
        <th scope="col">Tarikh Daftar</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="">
            <td scope="row"><?php echo e($loop->iteration); ?></td>               
            <td><?php echo e(@$r->nama); ?></td>
            <td><?php echo e(@$r->no_kp); ?></td>
            <td><?php echo e(@$r->ext2); ?></td>
            <td><?php echo e(@$r->ext1); ?></td>
            <td><?php echo e(@$r->department->name); ?></td>
            <td><?php echo e(@$r->ahli); ?></td>
            <td><?php echo e(@$r->ext1); ?></td>
            <td><?php echo e(@$r->tarikh_bayaran); ?></td>
            <td><?php echo e(@$r->jumlah_bayaran); ?></td>
            <td><?php echo e(@$r->created_at); ?></td>
        </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH D:\laragon\www\ksrv2\resources\views/exports/pancing.blade.php ENDPATH**/ ?>