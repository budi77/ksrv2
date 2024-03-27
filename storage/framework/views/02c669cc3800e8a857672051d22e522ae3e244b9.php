<!DOCTYPE html>
<html>
<head>
    <title>MESYUARAT AGUNG KSR 2024</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
          font-family: 12px Arial, sans-serif;
        }
        p { font-size: 12px; }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }

        </style>
</head>
<body>
<div class="text-center">
   <p>MESYUARAT AGONG KELAB SUKAN DAN REKREASI SPRM KALI KE 15 TAHUN 2024</p>
    <p class="mt-0">26 MAC 2024</p>
    <p class="mt-0">AUDITORIUM SPRM</p>

   
 
    <p class="font-weight-bold">SENARAI KEHADIRAN</p>

</div>
 
  
    <table class="table table-bordered table-sm">
        <tr class="border border-dark">
            <th><small>#</small></th>
            <th><small>Nama</small></th>
            <th><small>Bahagian</small></th>
            
        </tr>
        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="">
                    <td scope="row"><small><?php echo e($loop->iteration); ?></small></td>
                    <td><small><?php echo e(@$row->member->name); ?></small></td>
                    <td><small><?php echo e(@$row->member->bahagian->name); ?></small></td>
                    
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
</body>
</html><?php /**PATH C:\laragon\www\ksrv2\resources\views/pdf/meeting.blade.php ENDPATH**/ ?>