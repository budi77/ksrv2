<div>
    
 <div class="container pt-4">
    <div class="card">

        <div class="card-body">
        <div class="text-center">
        <div class="mx-auto avatar-md mb-3">
                        <img src="https://ksr.sprm.gov.my/assets/images/KSR.png" alt="" class="img-fluid rounded-circle">
            </div>
<h2 class=" mb-1">KSR ARENA 2023</h2>
<p class=" mb-0 text-muted fw-bold">KEJOHANAN SUKAN ANTARA BAHAGIAN & SPRM LEMBAH KLANG</p>
<p class=" mb-0 text-muted">02 DISEMBER 2023, UNIVERSITI TEKNOLOGI MARA KAMPUS DENGKIL</p>
        </div>

        <hr>

        <!-- Primary Alert -->
<div class="alert alert-primary alert-dismissible bg-primary text-white alert-label-icon fade show" role="alert">
  <i class="ri-alert-line label-icon"></i><strong>PERHATIAN </strong> - Sila baca syarat syarat pertandingan di bawah sebelum membuat pendaftaran.
  
</div>

<div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class=" bx bx-basketball bx-sm text-danger"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <a href="<?php echo e(asset('documents/SYARAT_BOLATAMPAR.pdf')); ?>" target="_blank">SYARAT SYARAT PERTANDINGAN BOLA TAMPAR</a>

                            
                        </div>
                    </div>

                    <div class="d-flex mt-2">
                      <div class="flex-shrink-0">
                        <i class=" bx bx-baseball bx-sm text-warning"></i>
                      </div>
                      <div class="flex-grow-1 ms-2">
                        <a href="<?php echo e(asset('documents/SYARAT_BOLAJARING.pdf')); ?>" target="_blank">SYARAT SYARAT PERTANDINGAN BOLA JARING</a>
                      </div>
                  </div>
        <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class=" bx bx-message-alt-detail bx-sm text-info"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <a href="<?php echo e(asset('documents/SYARAT_UMUM_KSRARENA.pdf')); ?>" target="_blank">SYARAT SYARAT UMUM KSR ARENA</a>
                        </div>
                    </div>

    
            
 <div class="mb-3 mt-3">
        <label for="" class="form-label">NAMA BAHAGIAN</label>
        <select class="form-select <?php $__errorArgs = ['department_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="" id="" wire:model="department_id">
        <option selected>-- Pilih --</option>
        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
        </select>
</div>

<div class="mb-3">
  <label for="" class="form-label">NAMA PENGURUS</label>
  <input type="text"
    class="form-control <?php $__errorArgs = ['nama_pengurus'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="" id="" aria-describedby="helpId" placeholder="" wire:model="nama_pengurus">
  
</div>

<div class="mb-3">
  <label for="" class="form-label">NO TELEFON</label>
  <input type="text"
    class="form-control col-4 <?php $__errorArgs = ['no_tel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="" id="" aria-describedby="helpId" placeholder="" wire:model="no_tel">
  
</div>

  <label for="" class="form-label">ACARA SUKAN</label>

<div class="list-group">
    <label class="list-group-item">
      <input class="form-check-input me-1" type="checkbox" value="1" wire:model="volleyball">
      BOLA TAMPAR
    </label>
    <label class="list-group-item">
      <input class="form-check-input me-1" type="checkbox" value="1" wire:model="netball">
      BOLA JARING
    </label>
   
  </div>

   <div class="mb-3 pt-3">
          <label for="" class="form-label">BORANG PENYERTAAN</label>
          <input type="file" class="form-control <?php $__errorArgs = ['borang_penyertaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="" id="" placeholder="" aria-describedby="fileHelpId" wire:model="borang_penyertaan">
  </div>

  <div class="mb-3">
        <label for="" class="form-label">JUMLAH BAYARAN</label>
        <div class="input-group">
          <span class="input-group-text">RM</span>
          <input wire:model="jumlah_bayaran" type="text" class="form-control  <?php $__errorArgs = ['jumlah_bayaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-label="Amount (to the nearest dollar)" data-np-intersection-state="visible" wfd-id="id43">
          
      </div>
  </div>

  <div class="mb-3">
        <label for="" class="form-label">RESIT BAYARAN</label>
        <input type="file" class="form-control <?php $__errorArgs = ['resit_bayaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="" id="" placeholder="" aria-describedby="fileHelpId" wire:model="resit_bayaran">
      </div>

  
  

  <div class="text-center pt-3">

    <button type="button" class="btn btn-success" wire:click="store">Hantar</button>
  </div>
        </div>
    </div>
 </div>
</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/k-s-r-arena/borang.blade.php ENDPATH**/ ?>