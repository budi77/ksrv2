<div>
    
    <div class="container-fluid">


     <div class="row justify-content-center mb-4 mt-4">

                        <div class="col-lg-6">

                            <div class="row g-2" data-np-autofill-form-type="other" data-np-checked="1" data-np-watching="1">
                                <div class="col">
                                                                 <h6>CARIAN MAKLUMAT AHLI</h6>

                                    <div class="position-relative mb-3">
                                        <input type="text" class="form-control  bg-light border-light" placeholder="Sila Taip Nama atau Emel" value="" wire:model.debounce.500ms="search">
                                    </div>
                                </div>

                                <?php if(session()->has('message')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(session('message')); ?>

                                    </div>
                                <?php endif; ?>

                                
                          
                                <div class="text-center">
                                    <div wire:loading>
                                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_1KD7{animation:spinner_6QnB 1.2s infinite}.spinner_MJg4{animation-delay:.1s}.spinner_sj9X{animation-delay:.2s}.spinner_WwCl{animation-delay:.3s}.spinner_vy2J{animation-delay:.4s}.spinner_os1F{animation-delay:.5s}.spinner_l1Tw{animation-delay:.6s}.spinner_WNEg{animation-delay:.7s}.spinner_kugV{animation-delay:.8s}.spinner_4zOl{animation-delay:.9s}.spinner_7he2{animation-delay:1s}.spinner_SeO7{animation-delay:1.1s}@keyframes spinner_6QnB{0%,50%{animation-timing-function:cubic-bezier(0.27,.42,.37,.99);r:0}25%{animation-timing-function:cubic-bezier(0.53,0,.61,.73);r:2px}}</style><circle class="spinner_1KD7" cx="12" cy="3" r="0"/><circle class="spinner_1KD7 spinner_MJg4" cx="16.50" cy="4.21" r="0"/><circle class="spinner_1KD7 spinner_SeO7" cx="7.50" cy="4.21" r="0"/><circle class="spinner_1KD7 spinner_sj9X" cx="19.79" cy="7.50" r="0"/><circle class="spinner_1KD7 spinner_7he2" cx="4.21" cy="7.50" r="0"/><circle class="spinner_1KD7 spinner_WwCl" cx="21.00" cy="12.00" r="0"/><circle class="spinner_1KD7 spinner_4zOl" cx="3.00" cy="12.00" r="0"/><circle class="spinner_1KD7 spinner_vy2J" cx="19.79" cy="16.50" r="0"/><circle class="spinner_1KD7 spinner_kugV" cx="4.21" cy="16.50" r="0"/><circle class="spinner_1KD7 spinner_os1F" cx="16.50" cy="19.79" r="0"/><circle class="spinner_1KD7 spinner_WNEg" cx="7.50" cy="19.79" r="0"/><circle class="spinner_1KD7 spinner_l1Tw" cx="12" cy="21" r="0"/></svg>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <?php if($results): ?>

                        <div
                            class="table-responsive"
                        >
                            <table
                                class="table table-sm table-striped"
                            >
                                <thead class="table-dark">
                                    <tr>
                                        <th colspan="2" scope="col">Maklumat Pembayaran</th>
                                        <th scope="col" class=""></th>
                                        <th scope="col" class="text-end"></th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="">
                                        <td scope="row">
                                            <p class="mb-0 fw-bolder"><?php echo e(@$result->name); ?></p>
                                            <p class="mb-0"><?php echo e(@$result->email); ?></p>
                                        </td>
                                        <td>
                                        <p class="mb-0 fw-bold"><?php echo e(@$result->bahagian->name); ?></p>

                                        </td>
                                        <td class="text-end">
                                            <?php if($result->payment == NULL): ?>
                                            <span class="badge bg-danger">TIDAK</span>
                                            <?php else: ?>
                                            <span class="badge bg-success">BAYAR</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-end">

                                        <?php if($result->payment <> NULL): ?>
                                             <a href="javascript:void(0);" wire:click="register('<?php echo e($result->id); ?>')" class="btn btn-warning btn-label btn-sm">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="ri-user-add-fill label-icon align-middle fs-16 me-2"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Daftar
                                                </div>
                                            </div>
                                        </a>
                                            
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


<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/meeting/register.blade.php ENDPATH**/ ?>