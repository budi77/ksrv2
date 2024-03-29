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
                        <img class="rounded-start img-fluid" src="{{asset('assets/images/pancing2023.png')}}" alt="Card image">
                        <img class="rounded-start img-fluid" src="{{asset('assets/images/bankislam.jpg')}}" alt="Card image">
                        <p></p>
                        <p></p>
                    </div>
                    <div class="col-md-6">
                        <div class="card-header">
                        <a name="" id="" class="btn btn-secondary" href="{{url('storage/' . 'Peraturan_dan_Syarat_Pertandingan_Memancing_KSR_2023.pdf')}}" target="_blank" role="button">Syarat & Maklumat Umum</a>
                        <a name="" id="" class="btn btn-secondary" href="{{url('storage/' . 'tentatif_pancing_ksr_2023.pdf')}}" target="_blank" role="button">Tentatif Program</a>
                            <h5 class="card-title mb-0 pt-3 ">BORANG PENDAFTARAN</h5>
                        </div>
                        <div class="card-body">

                        @if($isOpen)


                            <div>
                               

                                <div class="mb-3">
                                <label for="" class="form-label">Nama Penuh :</label>
                                <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="nama">
                                </div>

                                 <div class="mb-3">
                                        <label for="" class="form-label">No KP</label>
                                        <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="nokp">
                                    </div>

                                <div class="row">
                                    
                                    <div class="col-6">
                                        <label for="" class="form-label">Jantina</label>
                                        <select class="form-select" name="" id="" wire:model="jantina">
                                            <option selected>-- Sila Pilih --</option>
                                            <option value="Lelaki">Lelaki</option>
                                            <option value="Perempuan">Perempuan</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="" class="form-label">No Telefon</label>
                                        <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="no_tel">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="mb-3">
                                <label for="" class="form-label">Emel</label>
                                <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="emel">
                                </div> --}}


                                <div class="mb-3">
                                    <label for="" class="form-label">Bahagian</label>
                                    <select class="form-select" name="" id="" wire:model="bahagian">
                                        <option selected>-- Pilih --</option>
                                        @foreach($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>


                               <div class="row justify-content-center align-items-center g-2 mb-3">
                                    <div class="col">

                                    <label for="" class="form-label">Saiz Baju</label>
                                    <select class="form-select" name="" id="" wire:model="saiz">
                                        <option selected>-- Sila Pilih --</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="2XL">2XL</option>
                                        <option value="3XL">3XL</option>
                                        <option value="5XL">5XL</option>
                                    </select>
                                    
                                    </div>
                                    <div class="col">
                                   
                                        <div class="align-middle text-start pt-4">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalId">
                                            Lihat Carta Saiz
                                            </button>
                                        </div>
                                  

                                    </div>
                                    
                                </div>

                               

                               

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="" class="form-label">Tarikh bayaran</label>
                                         <x-date-picker id="date" wire:model="tarikh" autocomplete="off" value="" />

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                        <label for="" class="form-label">Jumlah bayaran</label>
                                        <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="jumlah_bayaran">
                                        </div>
                                    </div>
                                </div>

                               

                                <div class="mb-3">
                                  <label for="" class="form-label">Muatnaik resit pembayaran</label>
                                  <input type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId" wire:model="lampiran">
                                </div>

                                
                            </div>  

                            <hr>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="" wire:model="checked" wire:change="processMark()">
                              <label class="form-check-label text-uppercase" for="">
                                Saya dengan ini mengaku tidak akan membabitkan pihak penganjur dan jawatankuasa atas sebarang kejadian yang tidak diingini berlaku terhadap diri, harta benda saya sebelum, semasa dan selepas Pertandingan Memancing ini berlangsung.
                              </label>
                            </div>
                            <hr>

                             @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                              <div class="text-end pt-3">
                                <button type="button" class="btn btn-success bg-gradient waves-effect waves-light" wire:click="store" {{ $disabled ? 'disabled' : '' }}>Hantar</button>
                            </div>
                            
                           
                            @elseif($isClosed)

                            <!-- Warning Alert -->
                            <div class="alert bg-warning border-warning text-white" role="alert">
                                <strong>Untuk makluman</strong> - Pendaftaran telah ditutup!
                            </div>

                           

                            @endif

                          
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal trigger button -->
      
        
        <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Size Chart</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="rounded-start img-fluid" src="{{asset('assets/images/size.jpg')}}" alt="">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        {{-- <button type="button" class="btn btn-primary">Save</button> --}}
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Optional: Place to the bottom of scripts -->
        <script>
            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
        
        </script>



       
    </div>
</div>

