<div>

<div class="row">

<div class='fw-bold h3 text-primary'> BADMINTON</div>
<hr>
<div class="row">
    <h4><i class="las la-table"></i> KEDUDUKAN PASUKAN</h4>

    <div class="col-6 pt-2">
    <h6>KUMPULAN A</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Team</th>
                            <th scope="col">W</th>
                            <th scope="col">L</th>
                            <th scope="col">GF</th>
                            <th scope="col">GA</th>
                            <th scope="col">GD</th>
                            <th scope="col">P</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="">
                            <td scope="row"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($data->name); ?></td>
                            <td><?php echo e($data->won); ?></td>
                            
                            <td><?php echo e($data->lost); ?></td>
                            <td><?php echo e($data->goal); ?></td>
                            <td><?php echo e($data->against); ?></td>
                            <td><?php echo e($data->goaldifference); ?> </td>
                            <td><?php echo e($data->volleypoints); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                </table>
            </div>


    </div>
    <div class="col-6 pt-2">

    <h6>KUMPULAN B</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Team</th>
                            <th scope="col">W</th>
                            <th scope="col">L</th>
                            <th scope="col">GF</th>
                            <th scope="col">GA</th>
                            <th scope="col">GD</th>
                            <th scope="col">P</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $b; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="">
                            <td scope="row"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($data->contigent->name); ?></td>
                            <td><?php echo e($data->won); ?></td>
                            
                            <td><?php echo e($data->lost); ?></td>
                            <td><?php echo e($data->goal); ?></td>
                            <td><?php echo e($data->against); ?></td>
                            <td><?php echo e($data->goaldifference); ?> </td>
                            <td><?php echo e($data->volleypoints); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                </table>
            </div>
    </div>
</div>





</div>

<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header bg-info">
                    <h6 class="card-title mb-0 ">MAKLUMAT PERLAWANAN</h6>
            </div> 
            <div class="card-body">
            <div class="mb-3">
                            <label for="" class="form-label">Peringkat</label>
                            <select class="form-select" wire:model="stage">
                                <option selected>--Sila Pilih--</option>
                                <option value="Kumpulan">Kumpulan</option>
                                <option value="Suku Akhir">Suku Akhir</option>
                                <option value="Separuh Akhir">Separuh Akhir</option>
                                <option value="Tempat 3 / 4">Tempat ke 3 / 4</option>
                                <option value="Akhir">Akhir</option>
                            </select>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Order</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            wire:model="order"
                        />
                    </div>
                    
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Court</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            wire:model="court"
                        />
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Date</label>
                        <select
                            class="form-select "
                            name=""
                            id=""
                            wire:model="mdate"
                        >
                            <option selected>-- Pilih --</option>
                            <option value="27/9">27/9</option>
                            <option value="28/9">28/9</option>
                            <option value="29/9">29/9</option>
                        </select>
                    </div>
                    
                    
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Time</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            wire:model="mtime"
                        />
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label">Kontigen 1</label>
                    <select
                        class="form-select"
                        name=""
                        id=""
                        wire:model="contigent1"
                    >
                        <option selected>-- Pilih --</option>
                        <?php $__currentLoopData = $contigents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Keputusan 1</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            wire:model="result1"
                        />
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                <div class="mb-3">
                    <label for="" class="form-label">Kontigen 2</label>
                    <select
                        class="form-select"
                        name=""
                        id=""
                        wire:model="contigent2"
                    >
                        <option selected>-- Pilih --</option>
                        <?php $__currentLoopData = $contigents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                </div>
                <div class="col-6">

                <div class="mb-3">
                    <label for="" class="form-label">Keputusan 2</label>
                    <input
                        type="text"
                        class="form-control"
                        name=""
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        wire:model="result2"
                    />
                </div>
                
                </div>
            </div>
              
                
           
                <button type="button" class="btn btn-primary" wire:click="store">Hantar</button>

                
            </div>
        </div>

    </div>
    <div class="col-8"></div>
</div>



</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/badminton/games.blade.php ENDPATH**/ ?>