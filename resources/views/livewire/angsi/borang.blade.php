<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container">
        <div>

            {{-- <picture>
                <source srcset="sourceset" type="image/svg+xml">
                <img src="{{ URL::asset('assets/images/angsi_header.png') }}" class="img-fluid" alt="image desc">
            </picture> --}}


        </div>

        <div class="pt-4">

            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img class="rounded-start img-fluid" src="{{asset('assets/images/angsi.png')}}" alt="Card image">
                    </div>
                    <div class="col-md-6">
                        <div class="card-header">
                            <h5 class="card-title mb-0">BORANG PENDAFTARAN</h5>
                        </div>
                        <div class="card-body">

                            @if($isOpen)

                            <div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="mb-3">
                                <label for="" class="form-label">Nama Penuh :</label>
                                <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="nama">
                                {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="" class="form-label">No KP</label>
                                        <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="kp">
                                        {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="" class="form-label">No Telefon</label>
                                        <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="tel">
                                        {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                <label for="" class="form-label">Emel</label>
                                <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="emel">
                                {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">Bahagian</label>
                                    <select class="form-select" name="" id="" wire:model="department_id">
                                        <option selected>-- Pilih --</option>
                                        @foreach($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="" class="form-label">No Kecemasan Untuk Dihubungi</label>
                                        <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="tel_waris">
                                        {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="" class="form-label">Nama Waris</label>
                                        <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="nama_waris">
                                        {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
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
                                {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                </div>
                            </div>  

                            <hr>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="" wire:model="checked" wire:change="processMark()">
                              <label class="form-check-label" for="">
                                SAYA DENGAN INI AKAN BERTANGGUNGJAWAB SEPENUHNYA MENJAGA KESELAMATAN DIRI SAYA SEPANJANG AKTIVITI BERLANGSUNG. SEKIRANYA BERLAKU APA-APA KEJADIAN YANG TIDAK DIINGINI, SAYA AKAN SEGERA MELAPORKAN KEPADA PIHAK URUSETIA. PIHAK URUSETIA TIDAK AKAN BERTANGGUNGJAWAB DI ATAS SEBARANG KEJADIAN YANG TIDAK DIINGINI KEPADA PESERTA.
                              </label>
                            </div>
                           
                            @elseif($isClosed)

                            <!-- Warning Alert -->
                            <div class="alert bg-warning border-warning text-white" role="alert">
                                <strong>Untuk makluman!</strong> - Pendaftaran telah ditutup!
                            </div>

                            @else

                            
                            

                            @endif

                            <div class="text-end pt-3">
                                <button type="button" class="btn btn-success bg-gradient waves-effect waves-light" wire:click="store" {{ $disabled ? 'disabled' : '' }}>Hantar</button>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>



       
    </div>
</div>
