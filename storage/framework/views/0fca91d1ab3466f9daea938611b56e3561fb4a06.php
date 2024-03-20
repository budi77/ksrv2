<div>
    
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-12">
                <div class="text-center mt-sm-2 mb-2 text-dark">
                    <div>
                        <a href="index" class="d-inline-block auth-logo">
                            <img src="<?php echo e(URL::asset('assets/images/KSR.png')); ?>" alt="" height="70">
                        </a>
                    </div>
                    <p class="mt-1 fs-16 fw-bold text-dark"> KELAB SUKAN DAN REKREASI (KSR)</p>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-center">SEMAKAN YURAN AHLI</h6>

                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-6">
                            <div class="row g-2" data-np-autofill-form-type="other" data-np-checked="1" data-np-watching="1">
                                <div class="col">
                                    <div class="position-relative mb-3">
                                        <input type="text" class="form-control form-control-lg bg-light border-light" placeholder="Sila Taip Nama atau Emel" value="" wire:model="search">
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <?php if($results): ?>

                        <div
                            class="table-responsive"
                        >
                            <table
                                class="table table-sm"
                            >
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Maklumat Ahli</th>
                                        <th scope="col" class="text-end">Tahun 2023</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="">
                                        <td scope="row">
                                            <p class="mb-0 fw-bold"><?php echo e($result->name); ?></p>
                                            <p class="mb-0"><?php echo e($result->email); ?></p>
                                            <p class="mb-0"><?php echo e($result->bahagian->name); ?></p>
                                        </td>
                                        <td class="text-end">
                                            <?php if($result->payment == NULL): ?>
                                            <span class="badge bg-danger">BELUM</span>
                                            <?php else: ?>
                                            <span class="badge bg-success">SELESAI</span>
                                            <?php endif; ?>
                                        </td>
                                       
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                        
                        <?php endif; ?>

                     
                        <!--end col-->
                        
                    </div>
                </div>
            </div>
            
        </div>


        
       
    </div>
</div>

<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/member/semakan.blade.php ENDPATH**/ ?>