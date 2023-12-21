<div>
   <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">YURAN KSR</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                            </a>

                            <div class="">
                                
                                <select
                                    class="form-select form-select-sm"
                                    name=""
                                    id=""
                                    wire:model="year"
                                >
                                    <option selected>-- Pilih --</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                </select>
                            </div>
                            
                            
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                            <i class="ri-money-dollar-circle-fill align-middle"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">
                                            Jumlah Kutipan</p>
                                        <h3 class=" mb-0">RM<span class="counter-value" data-target="2390.68"><?php echo e($result); ?></span></h3>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <span class="badge bg-success text-success text-white"><?php echo e($year); ?>

                                            <span>
                                            </span></span>
                                    </div>
                                </div>
                            </div>
            </div>
</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/dashboard/stat.blade.php ENDPATH**/ ?>