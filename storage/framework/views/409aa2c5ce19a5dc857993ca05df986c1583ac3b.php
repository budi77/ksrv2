<div>

<div class="container">

<div class='fw-bold h3 ff-secondary text-center pt-2 cfs-22'> BOLA SEPAK</div>
<div class='fw-bold h ff-secondary text-center '> <?php echo e(@$sport_id->venue); ?></div>
<hr>
<div class="row">
    <h5><i class="las la-table"></i> KEDUDUKAN PASUKAN</h5>

    <div class="col pt-2">
    <h6>KUMPULAN A</h5>
            <div class="table-responsive">
                <table class="table table-secondary table-bordered table-striped text-center">
                    <thead class="bg-secondary ">
                        <tr class="bg-secondary ">
                            <th scope="col" class="bg-secondary bg-gradient">#</th>
                            <th scope="col" class="bg-secondary bg-gradient">Team</th>
                            <th scope="col" class="bg-secondary bg-gradient">W</th>
                            <th scope="col" class="bg-secondary bg-gradient">D</th>
                            <th scope="col" class="bg-secondary bg-gradient">L</th>
                            <th scope="col" class="bg-secondary bg-gradient">GF</th>
                            <th scope="col" class="bg-secondary bg-gradient">GA</th>
                            <th scope="col" class="bg-secondary bg-gradient">GD</th>
                            <th scope="col" class="bg-secondary bg-gradient">P</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="">
                            <td scope="row"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($data->code); ?></td>
                            <td><?php echo e($data->bswon); ?></td>
                            <td><?php echo e($data->bstied); ?></td>
                            <td><?php echo e($data->bslost); ?></td>
                            <td><?php echo e($data->bsgoal); ?></td>
                            <td><?php echo e($data->bsagainst); ?></td>
                            <td><?php echo e($data->bsgoaldifference); ?> </td>
                            <td><?php echo e($data->bspoints); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                </table>
            </div>


    </div>
   
    <div class="col pt-2">

    <h6>KUMPULAN B</h5>
            <div class="table-responsive">
                <table class="table table-warning table-bordered table-striped text-center">
                    <thead >
                        <tr>
                            <th scope="col" class="bg-warning bg-gradient">#</th>
                            <th scope="col" class="bg-warning bg-gradient">Team</th>
                            <th scope="col" class="bg-warning bg-gradient">W</th>
                            <th scope="col" class="bg-warning bg-gradient">D</th>
                            <th scope="col" class="bg-warning bg-gradient">L</th>
                            <th scope="col" class="bg-warning bg-gradient">GF</th>
                            <th scope="col" class="bg-warning bg-gradient">GA</th>
                            <th scope="col" class="bg-warning bg-gradient">GD</th>
                            <th scope="col" class="bg-warning bg-gradient">P</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $b; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="">
                            <td scope="row"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($data->code); ?></td>
                            <td><?php echo e($data->bswon); ?></td>
                            <td><?php echo e($data->bstied); ?></td>
                            <td><?php echo e($data->bslost); ?></td>
                            <td><?php echo e($data->bsgoal); ?></td>
                            <td><?php echo e($data->bsagainst); ?></td>
                            <td><?php echo e($data->bsgoaldifference); ?> </td>
                            <td><?php echo e($data->bspoints); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                </table>
            </div>
    </div>

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
                <th scope="col">Tarikh</th>
                <th scope="col">Jam</th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col">Result1</th>
                <th scope="col">Result2</th>
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fixture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($fixture->stage == 'Kumpulan'): ?>
                <tr class="text-center">
                    <td scope="row"><?php echo e($fixture->order); ?></td>
                    <!-- <td><?php echo e($fixture->stage); ?></td> -->
                    <td><?php echo e($fixture->ext2); ?></td>
                    <td><?php echo e($fixture->ext1); ?></td>
                    <td><?php echo e($fixture->court); ?></td>
                    <td><?php echo e($fixture->contigent1->code); ?></td>
                    <td><?php echo e($fixture->result1); ?></td>
                    <td><?php echo e($fixture->result2); ?></td>
                    <td><?php echo e($fixture->contigent2->code); ?></td>
                    
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
                <th scope="col">Tarikh</th>
                <th scope="col">Jam</th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col">Result1</th>
                <th scope="col">Result2</th>
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fixture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($fixture->stage == 'Separuh Akhir'): ?>
                <tr class="text-center">
                    <td scope="row"><?php echo e($fixture->order); ?></td>
                    <!-- <td><?php echo e($fixture->stage); ?></td> -->
                    <td><?php echo e($fixture->ext2); ?></td>
                    <td><?php echo e($fixture->ext1); ?></td>
                    <td><?php echo e($fixture->court); ?></td>
                    <td><?php echo e($fixture->contigent1->code); ?></td>
                    <td><?php echo e($fixture->result1); ?></td>
                    <td><?php echo e($fixture->result2); ?></td>
                    <td><?php echo e($fixture->contigent2->code); ?></td>
                    
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
                <th scope="col">Tarikh</th>
                <th scope="col">Jam</th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col">Result1</th>
                <th scope="col">Result2</th>
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fixture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($fixture->stage == 'Tempat 3 / 4'): ?>
                <tr class="text-center">
                    <td scope="row"><?php echo e($fixture->order); ?></td>
                    <!-- <td><?php echo e($fixture->stage); ?></td> -->
                    <td><?php echo e($fixture->ext2); ?></td>
                    <td><?php echo e($fixture->ext1); ?></td>
                    <td><?php echo e($fixture->court); ?></td>
                    <td><?php echo e($fixture->contigent1->code); ?></td>
                    <td><?php echo e($fixture->result1); ?></td>
                    <td><?php echo e($fixture->result2); ?></td>
                    <td><?php echo e($fixture->contigent2->code); ?></td>
                    
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
                <th scope="col">Tarikh</th>
                <th scope="col">Jam</th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col">Result1</th>
                <th scope="col">Result2</th>
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fixture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($fixture->stage == 'Akhir'): ?>
                <tr class="text-center">
                    <td scope="row"><?php echo e($fixture->order); ?></td>
                    <!-- <td><?php echo e($fixture->stage); ?></td> -->
                    <td><?php echo e($fixture->ext2); ?></td>
                    <td><?php echo e($fixture->ext1); ?></td>
                    <td><?php echo e($fixture->court); ?></td>
                    <td><?php echo e($fixture->contigent1->code); ?></td>
                    <td><?php echo e($fixture->result1); ?></td>
                    <td><?php echo e($fixture->result2); ?></td>
                    <td><?php echo e($fixture->contigent2->code); ?></td>
                    
                </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </tbody>
    </table>
</div>




</div>

</div>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/portal/bs.blade.php ENDPATH**/ ?>