<!DOCTYPE html>
<html>
<head>
    <title>MESYUARAT AGUNG KSR 2024</title>
    
</head>
<body>
    <h1>SENARAI KEHADIRAN MESYUARAT AGUNG KSR</h1>
    <p>26 MAC 2024</p>
    <p>AUDITORIUM SPRM</p>
  
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Bahagian</th>
            <th>Tarikh/Masa Daftar</th>
        </tr>
        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="">
                    <td scope="row"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e(@$row->member->name); ?></td>
                    <td><?php echo e(@$row->member->bahagian->name); ?></td>
                    <td><?php echo e(@$row->created_at); ?></td>
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
</body>
</html><?php /**PATH D:\laragon\www\ksrv2\resources\views/pdf/meeting.blade.php ENDPATH**/ ?>