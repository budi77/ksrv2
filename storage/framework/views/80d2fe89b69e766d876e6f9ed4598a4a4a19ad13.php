<div>

<div class="container">

<div class='fw-bold h3 ff-secondary text-center pt-2 cfs-22'> TARI TALI LELAKI</div>
<div class='fw-bold h ff-secondary text-center '> <?php echo e(@$sport_id->venue); ?></div>
<div class="text-center h5"><a href="https://maps.app.goo.gl/YzGbdMz6GeJQRg2A6"><i class="las la-map-marker-alt"></i> Google Maps</a></div>

<hr>
<div class="row">

   


    <div class="text-center">

        <h5><i class="las la-calendar"></i> JADUAL & KEPUTUSAN PERLAWANAN</h5>
    </div>

<h6 class="text-primary"><i class="las las la-calendar-check"></i> PERINGKAT KUMPULAN</h6>

<div
    class="table-responsive"
>
    <table
        class="table table-sm table-bordered table-striped"
    >
        <thead>
            <tr class="table-dark text-center">
                <th scope="col">#</th>
                <!-- <th scope="col">Peringkat</th> -->
                <th scope="col"><i class="las la-calendar-day"></i></th>
                <th scope="col"><i class="las la-clock"></i></th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col" colspan="2">Keputusan</th>
                <!-- <th scope="col">Result2</th> -->
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody class="bg-white">
            <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fixture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($fixture->stage == 'Kumpulan'): ?>
                <tr class="text-center">
                    <td scope="row"><?php echo e(@$fixture->order); ?></td>
                    <td><?php echo e(@$fixture->ext2); ?></td>
                    <td><?php echo e(@$fixture->ext1); ?></td>
                    <td><?php echo e(@$fixture->court); ?></td>
                    <td><?php echo e(@$fixture->contigent1->code); ?></td>
                    <td><?php echo e(@$fixture->result1); ?></td>
                    <td><?php echo e(@$fixture->result2); ?></td>
                    <td><?php echo e(@$fixture->contigent2->code); ?></td>
                    
                </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </tbody>
    </table>
</div>



<h6 class="text-primary"><i class="las las la-calendar-check"></i> PERINGKAT SEPARUH AKHIR</h6>

<div
    class="table-responsive"
>
    <table
        class="table table-sm table-bordered table-striped"
    >
        <thead>
            <tr class="table-dark text-center">
                <th scope="col">#</th>
                <!-- <th scope="col">Peringkat</th> -->
                <th scope="col"><i class="las la-calendar-day"></i></th>
                <th scope="col"><i class="las la-clock"></i></th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col" colspan="2">Keputusan</th>
                <!-- <th scope="col">Result2</th> -->
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody class="bg-white">
            <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fixture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($fixture->stage == 'Separuh Akhir'): ?>
                <tr class="text-center">
                <td scope="row"><?php echo e(@$fixture->order); ?></td>
                    <td><?php echo e(@$fixture->ext2); ?></td>
                    <td><?php echo e(@$fixture->ext1); ?></td>
                    <td><?php echo e(@$fixture->court); ?></td>
                    <td><?php echo e(@$fixture->contigent1->code); ?></td>
                    <td><?php echo e(@$fixture->result1); ?></td>
                    <td><?php echo e(@$fixture->result2); ?></td>
                    <td><?php echo e(@$fixture->contigent2->code); ?></td>
                    
                </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </tbody>
    </table>
</div>


<h6 class="text-primary"><i class="las las la-calendar-check"></i> PENENTUAN 3/4</h6>

<div
    class="table-responsive"
>
    <table
        class="table table-sm table-bordered table-striped"
    >
        <thead>
            <tr class="table-dark text-center">
                <th scope="col">#</th>
                <!-- <th scope="col">Peringkat</th> -->
                <th scope="col"><i class="las la-calendar-day"></i></th>
                <th scope="col"><i class="las la-clock"></i></th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col" colspan="2">Keputusan</th>
                <!-- <th scope="col">Result2</th> -->
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody class="bg-white">
            <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fixture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($fixture->stage == 'Tempat 3 / 4'): ?>
                <tr class="text-center">
                <td scope="row"><?php echo e(@$fixture->order); ?></td>
                    <td><?php echo e(@$fixture->ext2); ?></td>
                    <td><?php echo e(@$fixture->ext1); ?></td>
                    <td><?php echo e(@$fixture->court); ?></td>
                    <td><?php echo e(@$fixture->contigent1->code); ?></td>
                    <td><?php echo e(@$fixture->result1); ?></td>
                    <td><?php echo e(@$fixture->result2); ?></td>
                    <td><?php echo e(@$fixture->contigent2->code); ?></td>
                    
                </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </tbody>
    </table>
</div>


<h6 class="text-primary"><i class="las las la-calendar-check"></i> AKHIR</h6>

<div
    class="table-responsive"
>
    <table
        class="table table-sm table-bordered table-striped"
    >
        <thead>
            <tr class="table-dark text-center">
                <th scope="col">#</th>
                <!-- <th scope="col">Peringkat</th> -->
                <th scope="col"><i class="las la-calendar-day"></i></th>
                <th scope="col"><i class="las la-clock"></i></th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col" colspan="2">Keputusan</th>
                <!-- <th scope="col">Result2</th> -->
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody class="bg-white">
            <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fixture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($fixture->stage == 'Akhir'): ?>
                <tr class="text-center">
                <td scope="row"><?php echo e(@$fixture->order); ?></td>
                    <td><?php echo e(@$fixture->ext2); ?></td>
                    <td><?php echo e(@$fixture->ext1); ?></td>
                    <td><?php echo e(@$fixture->court); ?></td>
                    <td><?php echo e(@$fixture->contigent1->code); ?></td>
                    <td><?php echo e(@$fixture->result1); ?></td>
                    <td><?php echo e(@$fixture->result2); ?></td>
                    <td><?php echo e(@$fixture->contigent2->code); ?></td>
                    
                </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </tbody>
    </table>
</div>




</div>

</div>
</div>



<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/portal/ttl.blade.php ENDPATH**/ ?>