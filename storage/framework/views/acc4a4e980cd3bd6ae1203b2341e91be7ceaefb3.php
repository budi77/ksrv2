<div>
    
    <div class="container">
        <div>

            


        </div>

        <div class="pt-4">

            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img class="rounded-start img-fluid" src="<?php echo e(asset('assets/images/angsi.png')); ?>" alt="Card image">
                    </div>
                    <div class="col-md-6">
                        <div class="card-header">
                            <h5 class="card-title mb-0">BORANG PENDAFTARAN</h5>
                        </div>
                        <div class="card-body">

                            <?php if($isOpen): ?>

                            <div>
                                <?php if($errors->any()): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <div class="mb-3">
                                <label for="" class="form-label">Nama Penuh :</label>
                                <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="nama">
                                
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="" class="form-label">No KP</label>
                                        <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="kp">
                                        
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="" class="form-label">No Telefon</label>
                                        <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="tel">
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                <label for="" class="form-label">Emel</label>
                                <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="emel">
                                
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">Bahagian</label>
                                    <select class="form-select" name="" id="" wire:model="department_id">
                                        <option selected>-- Pilih --</option>
                                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="" class="form-label">No Kecemasan Untuk Dihubungi</label>
                                        <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="tel_waris">
                                        
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="" class="form-label">Nama Waris</label>
                                        <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="nama_waris">
                                        
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="mb-3">

                                    <div>
                                        <label for="" class="form-label">Pengangkutan</label>

                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="pengangkutan" id="" value="Kenderaan Sendiri" wire:model="pengangkutan">
                                        <label class="form-check-label" for="">Kenderaan Sendiri</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="pengangkutan" id="" value="Menaiki Bas SPRM" wire:model="pengangkutan">
                                        <label class="form-check-label" for="">Menaiki Bas SPRM</label>
                                    </div>

                                </div>


                                <div class="mb-3">

                                    <div>
                                        <label for="" class="form-label">Adakah mempunyai sebarang penyakit kronik?</label>

                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="penyakit" id="" value="Ya" wire:model="penyakit">
                                        <label class="form-check-label" for="">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="penyakit" id="" value="Tidak" wire:model="penyakit">
                                        <label class="form-check-label" for="">Tidak</label>
                                    </div>

                                </div>

                                <div class="mb-3">
                                <label for="" class="form-label">Jika jawapan di atas adalah YA, sila nyatakan </label>
                                <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="jenis_penyakit">
                                
                                </div>
                            </div>  

                            <hr>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="" wire:model="checked" wire:change="processMark()">
                              <label class="form-check-label" for="">
                                SAYA DENGAN INI AKAN BERTANGGUNGJAWAB SEPENUHNYA MENJAGA KESELAMATAN DIRI SAYA SEPANJANG AKTIVITI BERLANGSUNG. SEKIRANYA BERLAKU APA-APA KEJADIAN YANG TIDAK DIINGINI, SAYA AKAN SEGERA MELAPORKAN KEPADA PIHAK URUSETIA. PIHAK URUSETIA TIDAK AKAN BERTANGGUNGJAWAB DI ATAS SEBARANG KEJADIAN YANG TIDAK DIINGINI KEPADA PESERTA.
                              </label>
                            </div>
                           
                            <?php elseif($isClosed): ?>

                            <!-- Warning Alert -->
                            <div class="alert bg-warning border-warning text-white" role="alert">
                                <strong>Untuk makluman!</strong> - Pendaftaran telah ditutup!
                            </div>

                            <?php else: ?>

                            
                            

                            <?php endif; ?>

                            <div class="text-end pt-3">
                                <button type="button" class="btn btn-success bg-gradient waves-effect waves-light" wire:click="store" <?php echo e($disabled ? 'disabled' : ''); ?>>Hantar</button>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>



       
    </div>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/angsi/borang.blade.php ENDPATH**/ ?>