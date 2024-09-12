<div>

<div class="row">

<div class='fw-bold h3 text-primary'> TARIK TALI LELAKI</div>
<hr>

<div class="row">
    <h4><i class="las la-table"></i> KEDUDUKAN PASUKAN</h4>

    <div class="col-12 pt-2">
    <h6>KUMPULAN A</h5>
            <div class="table-responsive">
                <table class="table table-secondary table-bordered table-striped text-center">
                    <thead class="bg-secondary ">
                        <tr class="bg-secondary ">
                            <th scope="col" class="bg-secondary bg-gradient">#</th>
                            <th scope="col" class="bg-secondary bg-gradient">Team</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="">
                            <td scope="row"><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($data->name); ?></td>
                          
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                </table>
            </div>


    </div>

</div>



</div>

<hr>

<div class="row">
    <div class="col-4">
        <div class="card card-light">
            <div class="card-header bg-light">
                    <h6 class="card-title mb-0 ">MAKLUMAT PERLAWANAN</h6>
            </div> 
            <div class="card-body">
            <div class="mb-3">
                            <label for="" class="form-label text-dark">Peringkat</label>
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
                        <label for="" class="form-label text-dark">Order</label>
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
                        <label for="" class="form-label text-dark">Court</label>
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
                        <label for="" class="form-label text-dark">Date</label>
                        <select
                            class="form-select "
                            name=""
                            id=""
                            wire:model="mdate"
                        >
                            <option selected>-- Pilih --</option>
                            <option value="27/9">28/9</option>
                            <option value="28/9">29/9</option>
                            <option value="29/9">30/9</option>
                        </select>
                    </div>
                    
                    
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label text-dark">Time</label>
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
                    <label for="" class="form-label text-dark">Kontigen 1</label>
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
                        <label for="" class="form-label text-dark">Keputusan 1</label>
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
                    <label for="" class="form-label text-dark">Kontigen 2</label>
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
                    <label for="" class="form-label text-dark">Keputusan 2</label>
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
    <div class="col-8">

    <h4>JADUAL PERLAWANAN</h4>

    <div
        class="table-responsive"
    >
        <table
            class="table table-sm table-bordered table-striped"
        >
            <thead>
                <tr class="table-dark text-center">
                    <th scope="col">#</th>
                    <th scope="col">Peringkat</th>
                    <th scope="col">Tarikh</th>
                    <th scope="col">Jam</th>
                    <th scope="col">glg</th>
                    <th scope="col">Team1</th>
                    <th scope="col">Result1</th>
                    <th scope="col">Team2</th>
                    <th scope="col">Result2</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $fixtures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fixture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-center">
                    <td scope="row"><?php echo e($fixture->order); ?></td>
                    <td><?php echo e($fixture->stage); ?></td>
                    <td><?php echo e($fixture->ext2); ?></td>
                    <td><?php echo e($fixture->ext1); ?></td>
                    <td><?php echo e($fixture->court); ?></td>
                    <td><?php echo e($fixture->contigent1->name); ?></td>
                    <td><?php echo e($fixture->result1); ?></td>
                    <td><?php echo e($fixture->contigent2->name); ?></td>
                    <td><?php echo e($fixture->result2); ?></td>
                    <td>
                    <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('<?php echo e($fixture->id); ?>')">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                           
                                           
                                        </ul>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </tbody>
        </table>
    </div>
    



    </div>
</div>



</div>

<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/ksr-games24/tarik-tali-lelaki/games.blade.php ENDPATH**/ ?>