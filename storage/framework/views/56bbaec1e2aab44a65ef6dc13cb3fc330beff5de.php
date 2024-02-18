<table>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Bahagian</th>
        <th scope="col">Tahun</th>
        <th scope="col">Jumlah Bayaran</th>
        <th scope="col">Tarikh Bayaran</th>
       
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="">
            <td scope="row"><?php echo e($loop->iteration); ?></td>               
            <td><?php echo e(@$r->member->name); ?></td>
            <td><?php echo e(@$r->department->name); ?></td>
            <td><?php echo e(@$r->year); ?></td>
            <td><?php echo e(@$r->value); ?></td>
            <td><?php echo e(@$r->payment_date); ?></td>
            
        </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\laragon\www\ksrv2\resources\views/exports/yuran.blade.php ENDPATH**/ ?>