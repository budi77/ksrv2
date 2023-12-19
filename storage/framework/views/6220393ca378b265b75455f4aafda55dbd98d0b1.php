<div>
  
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?>
invoices
<?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?>
Invoice Details
<?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row justify-content-center">
    <div class="col-xxl-9">
        <div class="card" id="demo">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header border-bottom-dashed p-4">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                               <img src="<?php echo e(URL::asset('assets/images/KSR.png')); ?>" alt="" height="90">
                               
                                <div class="mt-sm-2 mt-2">
                                    <h6 class="text-dark text-uppercase fw-semibold">KELAB SUKAN DAN REKREASI (KSR) SPRM</h6>
                                    <p class="text-muted mb-1" id="address-details">2, Lebuh Wawasan, Presint 7, </p>
                                    <p class="text-muted mb-0" id="zip-code">62250 Putrajaya, Wilayah Persekutuan Putrajaya</p>
                                </div>
                            </div>
                            <div class="flex-shrink-0 mt-sm-0 mt-3">
                                <h3><span class="text-dark fw-bold">RESIT RASMI</span>
                                    
                                </h3>
                                <h6><span class="text-muted fw-normal">No Resit:</span>
                                    <span id="email">123454/2023</span>
                                </h6>
                                
                                <h6 class="mb-0"><span class="text-muted fw-normal">Tarikh: </span><span> 19/12/2023</span></h6>
                            </div>
                        </div>
                    </div>
                    <!--end card-header-->
                </div>
                <!--end col-->
                <div class="col-lg-12">
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-lg-4 col-6">
                                <p class="text-muted mb-2 text-uppercase fw-semibold">Diterima daripada:</p>
                                <h5 class="fs-14 mb-0 text-uppercase">Budi Hermawan</h5>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4 col-6">
                                <p class="text-muted mb-2 text-uppercase fw-semibold">Ringgit Malaysia</p>
                                <h5 class="fs-14 mb-0">LIMA RATUS LIMA PULUH RINGGIT SAHAJA</h5>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4 col-6">
                                <p class="text-muted mb-2 text-uppercase fw-semibold">untuk bayaran</p>
                                <h5 class="fs-14 mb-0">YURAN KSR UNTUK BAHAGIAN PENGURUSAN REKOD DAN MAKLUMAT UNTUK BULAN JULAI 2023 SEPERTI PENAMA DIBAWAH</h5>
                            </div>
                            <!--end col-->
                            
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end col-->
                
                <!--end col-->
                <div class="col-lg-12">
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                <thead>
                                    <tr class="table-active">
                                        <th scope="col" style="width: 50px;">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Bahagian</th>
                                        <th scope="col">Jumlah</th>
                                        
                                    </tr>
                                </thead>
                                <tbody id="products-list">
                                    <tr>
                                        <th scope="row">01</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Budi Hermawan</span>
                                        </td>
                                        <td><p class="text-muted mb-0">BAHAGIAN PENGURUSAN REKOD DAN MAKLUMAT</p></td>
                                        
                                        <td class="text-end">$239.98</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">02</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Budi Hermawan</span>
                                        </td>
                                        <td><p class="text-muted mb-0">BAHAGIAN PENGURUSAN REKOD DAN MAKLUMAT</p></td>
                                        
                                        <td class="text-end">$239.98</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">03</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Budi Hermawan</span>
                                        </td>
                                        <td><p class="text-muted mb-0">BAHAGIAN PENGURUSAN REKOD DAN MAKLUMAT</p></td>
                                        
                                        <td class="text-end">$239.98</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">04</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Budi Hermawan</span>
                                        </td>
                                        <td><p class="text-muted mb-0">BAHAGIAN PENGURUSAN REKOD DAN MAKLUMAT</p></td>
                                        
                                        <td class="text-end">$239.98</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end table-->
                        </div>
                        <div class="border-top border-top-dashed mt-2">
                            <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                <tbody>
                                    
                                    
                                    
                                    
                                    <tr class="border-top border-top-dashed fs-15">
                                        <th scope="row">Jumlah Keseluruhan</th>
                                        <th class="text-end">RM550.00</th>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end table-->

                            </table>
                            <!--end table-->
                        </div>
                        <div class="mt-3">
                            <h6 class="text-muted text-uppercase fw-semibold mb-3">Maklumat Pembayaran:</h6>
                            <p class="text-muted mb-1">Cara Pembayaran: <span class="fw-medium" id="payment-method">Tunai</span></p>
                            
                            
                            
                        </div>
                        <div class="mt-4">
                            <div class="alert alert-info">
                                <p class="mb-0"><span class="fw-semibold">NOTES:</span>
                                    <span id="note">All accounts are to be paid within 7 days from receipt of invoice. To be
                                        paid by cheque or
                                        credit card or direct payment online. If account is not paid within 7
                                        days the credits details supplied as confirmation of work undertaken
                                        will be charged the agreed quoted fee noted above.
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                            <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download</a>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/invoicedetails.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/receipt/cetak.blade.php ENDPATH**/ ?>