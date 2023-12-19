<div>
    
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?>
    invoices
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?>
    Create Invoice
    <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card">
                <form class="needs-validation" novalidate id="invoice_form">
                    <div class="card-body border-bottom border-bottom-dashed p-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="profile-user mx-auto  mb-3">
                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input" />
                                    <label for="profile-img-file-input" class="d-block" tabindex="0">
                                        
                                            <img src="<?php echo e(URL::asset('assets/images/KSR.png')); ?>" alt="" height="90">

                                        
                                    </label>
                                    <div class="mt-sm-2 mt-2">
                                        <h6 class="text-dark text-uppercase fw-semibold">KELAB SUKAN DAN REKREASI (KSR) SPRM</h6>
                                        <p class="text-muted mb-1" id="address-details">2, Lebuh Wawasan, Presint 7, </p>
                                        <p class="text-muted mb-0" id="zip-code">62250 Putrajaya, Wilayah Persekutuan Putrajaya</p>
                                    </div>
                                </div>
                                <div>
                                    
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4 ms-auto">
                                <h3><span class="text-dark fw-bold">RESIT RASMI</span>

                               
                                <div class="mb-2">
                                    <input type="text" class="form-control bg-light border-0" id="companyWebsite" placeholder="No Resit" wire:model="receipt_no" />
                                    
                                </div>
                                <div>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.date-picker','data' => ['id' => 'date','class' => 'form-control bg-light border-0','wire:model' => 'payment_date','autocomplete' => 'off','value' => '','placeholder' => 'Tarikh']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('date-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'date','class' => 'form-control bg-light border-0','wire:model' => 'payment_date','autocomplete' => 'off','value' => '','placeholder' => 'Tarikh']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-lg-6 col-sm-6">
                                <label for="invoicenoInput">Diterima daripada:</label>
                                <input type="text" class="form-control bg-light border-0" id="invoicenoInput" placeholder="Diterima daripada" wire:model="receive_from"/>
                            </div>
                           
                            <div class="col-lg-6 col-sm-6">
                                <label for="invoicenoInput">Diterima Oleh:</label>
                                <input type="text" class="form-control bg-light border-0" id="invoicenoInput" placeholder="Diterima Oleh" wire:model="receive_by"/>
                            </div>
                            
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="card-body p-4 border-top border-top-dashed">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div>
                                    <label for="billingName" class="text-muted text-uppercase fw-semibold">Ringgit Malaysia</label>
                                </div>
                                
                                <div class="mb-2">
                                    <textarea class="form-control bg-light border-0"  rows="3" placeholder="" wire:model="ringgit"></textarea>
                                   
                                </div>
                                
                            </div>
                            <!--end col-->
                            <div class="col-lg-6 col-sm-6">
                                <div class="row">
                                        <div>
                                            <label for="shippingName" class="text-muted text-uppercase fw-semibold">Untuk Bayaran</label>
                                        </div>
                                       
                                        <div class="mb-2">
                                            <textarea class="form-control bg-light border-0"  rows="3" placeholder="" wire:model="payment_for"></textarea>
                                            
                                        </div>
                                        
                                       
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Bahagian</label>
                                        <select
                                            class="form-select bg-light border-0 "
                                            name=""
                                            id=""
                                            wire:model="department_id"
                                        >
                                            <option selected>-- Pilih --</option>
                                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label">Tarikh Mula</label>

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.date-picker','data' => ['id' => 'date','class' => 'form-control bg-light border-0','wire:model' => 'date_start','autocomplete' => 'off','value' => '','placeholder' => 'Tarikh']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('date-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'date','class' => 'form-control bg-light border-0','wire:model' => 'date_start','autocomplete' => 'off','value' => '','placeholder' => 'Tarikh']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label">Tarikh Akhir</label>

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.date-picker','data' => ['id' => 'date','class' => 'form-control bg-light border-0','wire:model' => 'date_end','autocomplete' => 'off','value' => '','placeholder' => 'Tarikh']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('date-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'date','class' => 'form-control bg-light border-0','wire:model' => 'date_end','autocomplete' => 'off','value' => '','placeholder' => 'Tarikh']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                </div>
                                <div class="col-2">
                                    <label for="" class="form-label pt-3"></label>
                                    <br>
                                    
                                    
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm"  wire:click="getData()"><i class="ri-download-2-line align-bottom me-1"></i> Cari</a>


                                </div>
                            </div>

                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-borderless mb-0"
                                >
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col" class="text-center">Bahagian</th>
                                            <th scope="col" class="text-end">Jumlah Bayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($results): ?>
                                        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="">
                                            <td scope="row"><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e(@$result->member->name); ?></td>
                                            <td class="text-center"><?php echo e(@$result->department->name); ?></td>
                                            <td class="text-end">RM<?php echo e($result->value); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <tr class="border-top border-top-dashed mt-2">
                                            <td colspan="3"></td>
                                            <td colspan="3" class="p-0">
                                                <table class="table table-borderless table-sm table-nowrap align-middle mb-0">
                                                    <tbody>
                                                        
                                                        <tr class="border-top border-top-dashed">
                                                            <th scope="row">Jumlah Keseluruhan</th>
                                                            <td>
                                                                <input type="text" class="form-control bg-light border-0" id="cart-total" placeholder="RM0.00" readonly value="<?php echo e(@$sum); ?>" />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end table-->
                                            </td>
                                        </tr>
                                        <?php endif; ?>

                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                           
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label for="choices-payment-type" class="form-label text-muted text-uppercase fw-semibold">Cara Pembayaran</label>
                                    <div class="input-light">
                                        <select class="form-control bg-light border-0" wire:model="payment_method">
                                            <option value="">Payment Method</option>
                                            <option value="Tunai">Tunai</option>
                                            <option value="Bank Transfer">Bank Transfer</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <input class="form-control bg-light border-0" type="text" id="cardholderName" placeholder="Keterangan" wire:model="remarks">
                                </div>
                                
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="mt-4">
                            <label for="exampleFormControlTextarea1" class="form-label text-muted text-uppercase fw-semibold">NOTES</label>
                            <textarea class="form-control alert alert-info" id="exampleFormControlTextarea1" placeholder="Notes" rows="2" required>All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</textarea>
                        </div>
                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                            
                            <a href="javascript:void(0);" class="btn btn-success" wire:click="store()"><i class="ri-download-2-line align-bottom me-1"></i> Save</a>
                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download Invoice</a>
                            <a href="javascript:void(0);" class="btn btn-danger"><i class="ri-send-plane-fill align-bottom me-1"></i> Send Invoice</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/cleave.js/cleave.js.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/invoicecreate.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <?php $__env->stopSection(); ?>
    
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/receipt/cipta.blade.php ENDPATH**/ ?>