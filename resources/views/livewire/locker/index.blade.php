<div>
   
@section('title')
    LOKER
@endsection

    @component('components.breadcrumb')
        @slot('li_1')
           Dashboard
        @endslot
        @slot('title')
           Loker
        @endslot
    @endcomponent

    <div class="row">

        {{-- <button type="button" class="btn btn-primary" wire:click="generate">Button</button> --}}

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    {{-- <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Card Tables</h4>
        
                      
                    </div><!-- end card header --> --}}
        
                    <div class="card-body">
        
                        <div class="live-preview">
                            <div class="table-responsive table-card">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            {{-- <th scope="col" style="width: 46px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="cardtableCheck" wfd-id="id31">
                                                    <label class="form-check-label" for="cardtableCheck"></label>
                                                </div>
                                            </th> --}}
                                            {{-- <th scope="col">#</th> --}}
                                            <th scope="col">No Loker</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col" class="text-center">Penyewa</th>
                                            <th scope="col" class="text-center">Tempoh</th>
                                            <th scope="col" class="text-center">Mula</th>
                                            <th scope="col" class="text-center">Akhir</th>
                                            <th scope="col" class="text-center">Bayaran</th>
                                            <th scope="col" style="width: 150px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lockers as $locker)
                                        <tr>
                                            
                                            {{-- <td><a href="#" class="fw-medium">{{ $loop->iteration }}</a></td> --}}
                                            <td>{{ $locker->locker_no . $locker->gender }}</td>
                                            <td>{{ @$locker->gender }}</td>
                                            <td><span class="badge bg-{{ $locker->status == "OK" ? 'info' : 'danger' }}">{{ $locker->status }}</span></td>
                                            <td>{{ $locker->rate }}</td>
                                            <td class="text-start">
                                                <p>{{ @$locker->tenant->name }}</p>
                                                <p>{{ @$locker->tenant->tel_no }}</p>
                                                <p>{{ @$locker->tenant->email }}</p>
                                            </td>
                                            <td class="text-center">{{ @$locker->tenant->period }}</td>
                                            <td class="text-center">{{ @$locker->tenant->start }}</td>
                                            <td class="text-center">{{ @$locker->tenant->end }}</td>
                                            <td class="text-center">{{ @$locker->tenant->fees }}</td>
                                            <td class="text-end">
                                                <div class="hstack gap-3 fs-15">
                                                    <a href="javascript:void(0);" class="link-primary" wire:click="add('{{ @$locker->tenant->id }}')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"><i class="ri-edit-box-line"></i></a>
                                                    <a href="javascript:void(0);" class="link-warning" wire:click="edit('{{ @$locker->id }}')"><i class="ri-settings-4-line"></i></a>
                                                    <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>

                                                </div>                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>

    </div>

   
    
    <!-- Modal -->
    <div wire:ignore.self class="modal fade zoomIn" id="add" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Maklumat Penyewa Loker : {{ @$locker_info->locker_no . @$locker_info->gender }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="name">
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                              <label for="" class="form-label">No Telefon</label>
                              <input type="email"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="tel_no">
                              {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                            </div>

                        </div>
                        <div class="col-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Emel</label>
                              <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="email">
                              {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Bahagian</label>
                        <select class="form-select" wire:model.defer="department_id">
                        @if(!empty($departments))

                            <option selected>--Pilih--</option>
                            @foreach ($departments as $item)
                                <option value="{{ $item->id }}" @selected($department_id == $item->id)>{{ $item->name }}</option>

                            @endforeach
                        @endif
                            
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                              {{-- <label for="" class="form-label">No Telefon</label> --}}
                              <label for="" class="form-label">Tarikh Mula</label>
                                <x-date-picker id="date" wire:model="start" autocomplete="off" value="" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Tempoh</label>
                                <select class="form-select" name="" id="" wire:model="period" wire:change="countFee">
                                    <option selected>--Pilih--</option>
                                    <option value="1">1 Bulan</option>
                                    <option value="2">2 Bulan</option>
                                    <option value="3">3 Bulan</option>
                                    <option value="4">4 Bulan</option>
                                    <option value="5">5 Bulan</option>
                                    <option value="6">6 Bulan</option>
                                    <option value="7">7 Bulan</option>
                                    <option value="8">8 Bulan</option>
                                    <option value="9">9 Bulan</option>
                                    <option value="10">10 Bulan</option>
                                    <option value="11">11 Bulan</option>
                                    <option value="12">12 Bulan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                              <label for="" class="form-label">Jumlah Yuran (RM)</label>
                              <input type="text"
                              class="form-control" readonly name="" id="" aria-describedby="helpId" placeholder="" wire:model="fees">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store">Simpan</button>
                </div>
            </div>
        </div>
    </div>


    
    <!-- Modal -->
    <div wire:ignore.self  class="modal fade flip" id="edit" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Ubah Maklumat Loker</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">No Loker</label>
                                <input type="text"
                                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="locker_no">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Kategori</label>
                                <select class="form-select" name="" id="" wire:model="gender">
                                    <option>-- Pilih --</option>
                                    <option value="L" @selected($gender == "L")>Lelaki</option>
                                    <option value="P" @selected($gender == "P")>Perempuan</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Rate</label>
                                <input type="text"
                                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="rate">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <select class="form-select" name="" id="" wire:model="status">
                                    <option>-- Pilih --</option>
                                    <option value="OK" @selected($gender == "OK")>OK</option>
                                    <option value="ROSAK" @selected($gender == "ROSAK")>ROSAK</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="update">Kemaskini</button>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    

    @section('script')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var modal = new bootstrap.Modal('#add');
            document.addEventListener('show-add', () => {
                modal.show();
            });
            document.addEventListener('hide-add', () => {
                modal.hide();
            });

            var modal2 = new bootstrap.Modal('#edit');
            document.addEventListener('show-edit', () => {
                modal2.show();
            });
            document.addEventListener('hide-edit', () => {
                modal2.hide();
            });

           
        });
    </script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    @endsection

</div>
