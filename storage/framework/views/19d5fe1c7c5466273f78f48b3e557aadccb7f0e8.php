<!DOCTYPE html>
<html>
<head>
    <title>MESYUARAT AGUNG KSR 2024</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="text-center">
   <h5>SENARAI KEHADIRAN MESYUARAT AGUNG KSR</h5>
    <p>26 MAC 2024</p>
    <p>AUDITORIUM SPRM</p>
</div>
 
  
    <table class="table table-bordered">
        <tr>
            <th><small>#</small></th>
            <th><small>Nama</small></th>
            <th><small>Bahagian</small></th>
            <th><small>Tarikh/Masa</small></th>
        </tr>
        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="">
                    <td scope="row"><small><?php echo e($loop->iteration); ?></small></td>
                    <td><small><?php echo e(@$row->member->name); ?></small></td>
                    <td><small><?php echo e(@$row->member->bahagian->name); ?></small></td>
                    <td><small><?php echo e(@$row->created_at); ?></small></td>
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
</body>
</html><?php /**PATH D:\laragon\www\ksrv2\resources\views/pdf/meeting.blade.php ENDPATH**/ ?>