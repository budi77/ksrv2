<div>
    {{-- Stop trying to control. --}}
 <div class="container pt-4">
    <div class="card">

        <div class="card-body">
        <div class="text-center">
        <div class="mx-auto avatar-md mb-3">
                        <img src="https://ksr.sprm.gov.my/assets/images/KSR.png" alt="" class="img-fluid rounded-circle">
            </div>
            <h2 class=" mb-1">KSR ARENA 2023</h2>
            <p class=" mb-0 text-muted fw-bold">KEJOHANAN SUKAN ANTARA BAHAGIAN & SPRM LEMBAH KLANG</p>
            <p class=" mb-0 text-muted">TAMAN PANCARONA, PRESINT 18, PUTRAJAYA</p>
        </div>

        <hr>


<div>

<p class=" mb-0 text-muted text-center h4">ACARA SUKAN</p>


<div class="d-grid gap-2 pt-3">
 <a class="btn btn-success btn-block waves-effect waves-light " href="/ksrarena2023/bolajaring" role="button"><h3 class="text-white">BOLA JARING</h3></a>
 <br>
 <a class="btn btn-info btn-block waves-effect waves-light" href="/ksrarena2023/bolatampar" role="button"><h3 class="text-white">BOLA TAMPAR</h3></a>
</div>


<br>
{{-- <p class=" mb-0 text-muted text-center h5">JADUAL PERLAWANAN</p> --}}
<div>
<hr>
<!-- Hover added -->
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">JADUAL PERLAWANAN</a>
  <a href="http://ksr.sprm.gov.my/storage/documents/KSR Arena/JADUAL PERLAWANAN - bola jaring.pdf" class="list-group-item list-group-item-action"><i class="bx bxs-file-pdf"></i> BOLA JARING</a>
  <a href="http://ksr.sprm.gov.my/storage/documents/KSR Arena/JADUAL_KEJOHANAN_BOLA_TAMPAR_(CAMPURAN)_KSR_2023_-_new_edit_busut[1].pdf" class="list-group-item list-group-item-action"><i class="bx bxs-file-pdf"></i> BOLA TAMPAR</a>
</div>
</div>


</div>
@if($isOpen)

        <!-- Primary Alert -->
<div class="alert alert-primary alert-dismissible bg-primary text-white alert-label-icon fade show" role="alert">
  <i class="ri-alert-line label-icon"></i><strong>PERHATIAN </strong> - Sila baca syarat syarat pertandingan di bawah sebelum membuat pendaftaran.
</div>



<div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class=" bx bx-basketball bx-sm text-danger"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <a href="{{ asset('documents/SYARAT_BOLATAMPAR.pdf') }}" target="_blank">SYARAT SYARAT PERTANDINGAN BOLA TAMPAR</a>

                            
                        </div>
                    </div>

                    <div class="d-flex mt-2">
                      <div class="flex-shrink-0">
                        <i class=" bx bx-baseball bx-sm text-warning"></i>
                      </div>
                      <div class="flex-grow-1 ms-2">
                        <a href="{{ asset('documents/SYARAT_BOLAJARING.pdf') }}" target="_blank">SYARAT SYARAT PERTANDINGAN BOLA JARING</a>
                      </div>
                  </div>
        <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class=" bx bx-message-alt-detail bx-sm text-info"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <a href="{{ asset('documents/SYARAT_UMUM_KSRARENA.pdf') }}" target="_blank">SYARAT SYARAT UMUM KSR ARENA</a>
                        </div>
                    </div>

    
            
 <div class="mb-3 mt-3">
        <label for="" class="form-label">NAMA BAHAGIAN</label>
        <select class="form-select @error('department_id') is-invalid @enderror" name="" id="" wire:model="department_id">
        <option selected>-- Pilih --</option>
        @foreach($departments as $department)
        <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
                                        
        </select>
</div>

<div class="mb-3">
  <label for="" class="form-label">NAMA PENGURUS</label>
  <input type="text"
    class="form-control @error('nama_pengurus') is-invalid @enderror" name="" id="" aria-describedby="helpId" placeholder="" wire:model="nama_pengurus">
  {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
</div>

<div class="mb-3">
  <label for="" class="form-label">NO TELEFON</label>
  <input type="text"
    class="form-control col-4 @error('no_tel') is-invalid @enderror" name="" id="" aria-describedby="helpId" placeholder="" wire:model="no_tel">
  {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
</div>

  <label for="" class="form-label">ACARA SUKAN</label>

  
      <div class="form-check mb-3">
    <input class="form-check-input" type="radio" name="acara" id="flexRadioDefault1" value="BOLA TAMPAR" wire:model="acara">
    <label class="form-check-label" for="flexRadioDefault1">
        BOLA TAMPAR
    </label>
</div>

<div class="form-check mb-3">
    <input class="form-check-input" type="radio" name="acara" id="flexRadioDefault2" value="BOLA JARING" wire:model="acara">
    <label class="form-check-label" for="flexRadioDefault2">
        BOLA JARING
    </label>
</div>



   <div class="mb-3 pt-3">
          <label for="" class="form-label">BORANG PENYERTAAN</label>
          <input type="file" class="form-control @error('borang_penyertaan') is-invalid @enderror" name="" id="" placeholder="" aria-describedby="fileHelpId" wire:model="borang_penyertaan">
  </div>

  <div class="mb-3">
        <label for="" class="form-label">JUMLAH BAYARAN</label>
        <div class="input-group">
          <span class="input-group-text">RM</span>
          <input wire:model="jumlah_bayaran" type="text" class="form-control  @error('jumlah_bayaran') is-invalid @enderror" aria-label="Amount (to the nearest dollar)" data-np-intersection-state="visible" wfd-id="id43">
      </div>
  </div>

  <div class="mb-3">
        <label for="" class="form-label">RESIT BAYARAN</label>
        <input type="file" class="form-control @error('resit_bayaran') is-invalid @enderror" name="" id="" placeholder="" aria-describedby="fileHelpId" wire:model="resit_bayaran">
      </div>




<!-- Success Alert -->
<div class="alert alert-warning alert-dismissible alert-additional fade show" role="alert">
<div class="alert-content">
        <p class="mb-0">Semua bayaran hendaklah dibuat ke atas akaun berikut:</p>
    </div>
    <div class="alert-body">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="d-flex">
            <div class="flex-shrink-0 me-3">
                <i class="ri-alert-line fs-16 align-middle"></i>
            </div>
            <div class="flex-grow-1">
                {{-- <h5 class="alert-heading"><h5>MAKLUMAT AKAUN</h5> --}}
                <p class="mb-0">BANK ISLAM</p>
                <p class="mb-0">TETUAN KELAB SUKAN DAN REKREASI SPRM (KSR)</p>
                <p class="mb-0">NO AKAUN : 16018010015446</p>
            </div>
        </div>
    </div>
    {{-- <div class="alert-content">
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </div> --}}
</div>

  

  <div class="text-center pt-3">

    <button type="button" class="btn btn-success" wire:click="store">Hantar</button>
  </div>

    @endif

        </div>
    </div>
 </div>
</div>
