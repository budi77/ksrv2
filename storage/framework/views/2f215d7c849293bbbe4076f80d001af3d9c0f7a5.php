<div>


<div class="container-fluid">

    
    <div class="row pt-2">
        <div class="col-lg-12">
            <div class="text-center mt-sm-2 mb-2 text-dark-50">
                <div>
                    <a href="index" class="d-inline-block auth-logo">
                        <img src="<?php echo e(URL::asset('assets/images/KSR.png')); ?>" alt="" height="90">
                    </a>
                </div>
                <p class="mt-1 fs-18 fw-bold"> BORANG PENYERTAAN PERTANDINGAN NYANYIAN LAGU PATRIOTIK SEMPENA SAMBUTAN ULANGTAHUN SPRM KE 56 TAHUN 2023.</p>
                
            </div>
        </div>
    </div>

    <div class="container">

           <!-- Primary Alert -->
<div class="alert alert-primary alert-dismissible alert-additional fade show" role="alert">
<div class="alert-body">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
<div class="d-flex">
<div class="flex-shrink-0 me-3">
<i class="ri-user-smile-line fs-16 align-middle"></i>
</div>
<div class="flex-grow-1">
<h5 class="alert-heading">Arahan !</h5>
<p class="mb-0">Borang ini hendaklah dihantar bersama pautan google drive video persembahan nyanyian sebelum atau pada 11 Ogos 2023 (Jumaat) sebelum jam 12.00 tengahari.</p>
</div>
</div>
</div>
<div class="alert-content">
<p class="mb-0">Sebarang pertanyaan boleh hubungi xxxxxxx ditalian xxxxxxx.</p>
</div>
</div>

    <div class="card">
   <div class="card-header bg-success bg-gradient">
                    
                    <h6 class="card-title mb-0">MAKLUMAT PESERTA</h6>
                </div>
    <div class="card-body">
       <form action="">
            <div class="row mb-3">
            <div class="col-lg-3">
            <label for="nameInput" class="form-label">PENYERTAAN</label>
            </div>
            <div class="col-lg-9">
             <select class="form-select mb-3" aria-label="Default select example">
                <option selected>-- Sila Pilih --</option>
                <option value="SOLO">SOLO</option>
                <option value="BERKUMPULAN">BERKUMPULAN</option>
                
                </select>
            </div>
            </div>

        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="websiteUrl" class="form-label">NAMA PESERTA / NAMA KUMPULAN</label>
            </div>
            <div class="col-lg-9">
                <input type="url" class="form-control" id="websiteUrl" placeholder="">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="websiteUrl" class="form-label">BAHAGIAN / NEGERI</label>
            </div>
            <div class="col-lg-9">
                <select class="form-select mb-3" aria-label="Default select example">
                <option selected>-- Sila Pilih --</option>
                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>



        <div class="row mb-3">
            <div class="col-lg-3">
            <label for="meassageInput" class="form-label">ALAMAT PEJABAT</label>
            </div>
            <div class="col-lg-9">
            <textarea class="form-control" id="meassageInput" rows="3" placeholder=""></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="websiteUrl" class="form-label">PEGAWAI UNTUK DIHUBUNGI</label>
            </div>
            <div class="col-lg-9">
                <input type="url" class="form-control" id="websiteUrl" placeholder="">
            </div>
        </div>



        <div class="row mb-3">
            <div class="col-lg-3">
            <label for="contactNumber" class="form-label">NO. TELEFON</label>
            </div>
            <div class="col-lg-9">
            <input type="number" class="form-control" id="contactNumber" placeholder="">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-3">
            <label for="leaveemails" class="form-label">EMEL</label>
            </div>
            <div class="col-lg-9">
            <input type="email" class="form-control" id="leaveemails" placeholder="">
            </div>
        </div>


        
    </form>
    </div>
    </div> 


    <div class="card">
   <div class="card-header bg-info bg-gradient">
                    
                    <h6 class="card-title mb-0">MAKLUMAT LAGU</h6>
                </div>
    <div class="card-body">
       <form action="">
            <div class="row mb-3">
            <div class="col-lg-3">
            <label for="nameInput" class="form-label">TAJUK LAGU</label>
            </div>
            <div class="col-lg-9">
            <input type="text" class="form-control" id="nameInput" placeholder="">
            </div>
            </div>

        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="websiteUrl" class="form-label">PENYANYI ASAL</label>
            </div>
            <div class="col-lg-9">
                <input type="url" class="form-control" id="websiteUrl" placeholder="">
            </div>
        </div>

        


        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="websiteUrl" class="form-label">PAUTAN VIDEO</label>
            </div>
            <div class="col-lg-9">
                <input type="url" class="form-control" id="websiteUrl" placeholder="">
            </div>
        </div>






        <div class="text-end">
        <button type="submit" class="btn btn-primary">HANTAR</button>
        </div>
    </form>
    </div>
    </div> 


    
    </div>






</div>


</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/patriotik/index.blade.php ENDPATH**/ ?>