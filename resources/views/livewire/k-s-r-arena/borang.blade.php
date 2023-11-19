<div>
    {{-- Stop trying to control. --}}
 <div class="container pt-4">
    <div class="card">
        {{-- <div class="card-header">
            <h6 class="card-title mb-0 text-center">
            <p class="fw-bold">KSR ARENA 2023</p>
KEJOHANAN BOLA TAMPAR & BOLA JARING ANTARA BAHAGIAN
</h6>
        </div>         --}}
        <div class="card-body">
        <div class="text-center">
        <div class="mx-auto avatar-md mb-3">
                        <img src="https://ksr.sprm.gov.my/assets/images/KSR.png" alt="" class="img-fluid rounded-circle">
            </div>
<h2 class="card-title mb-1">KSR ARENA 2023</h5>
<p class="text-muted mb-0">KEJOHANAN BOLA TAMPAR & BOLA JARING ANTARA BAHAGIAN</p>
        </div>

        <hr>
<div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                            <i class="ri-file-text-fill ri-lg text-info"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            SYARAT SYARAT PERTANDINGAN
                        </div>
                    </div>
        <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                            <i class="ri-file-text-fill ri-lg text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            TENTATIF PROGRAM
                        </div>
                    </div>

    
            
 <div class="mb-3 mt-3">
        <label for="" class="form-label">NAMA BAHAGIAN</label>
        <select class="form-select" name="" id="" wire:model="department_id">
        <option selected>-- Pilih --</option>
        @foreach($departments as $department)
        <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
                                        
        </select>
</div>

<div class="mb-3">
  <label for="" class="form-label">NAMA PENGURUS</label>
  <input type="text"
    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
  {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
</div>

<div class="mb-3">
  <label for="" class="form-label">NO TELEFON</label>
  <input type="text"
    class="form-control col-4" name="" id="" aria-describedby="helpId" placeholder="">
  {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
</div>

  <label for="" class="form-label">ACARA SUKAN</label>

<div class="list-group">
    <label class="list-group-item">
      <input class="form-check-input me-1" type="checkbox" value="">
      BOLA TAMPAR
    </label>
    <label class="list-group-item">
      <input class="form-check-input me-1" type="checkbox" value="">
      BOLA JARING
    </label>
   
  </div>

   <div class="mb-3 pt-3">
          <label for="" class="form-label">BORANG PENYERTAAN</label>
          <input type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId" wire:model="borang_penyertaan">
                                  {{-- <div id="fileHelpId" class="form-text">Help text</div> --}}
  </div>
  

        </div>
    </div>
 </div>
</div>
