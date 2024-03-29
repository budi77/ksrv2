<div>
    @section('title') @lang('translation.starter')  @endsection
    @component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title') Yuran Gabungan  @endslot
    @endcomponent

    <div class="text-center h3 pb-2">
        {{ $department_name }}
    </div>

    <div class="row row-cols-xxl-4 row-cols-lg-4 row-cols-sm-2 row-cols-1">
        <div class="col">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="flex-grow-1">
                        <h4>{{ $tot_members }}</h4>
                        <h6 class="text-muted fs-14 mb-0">Jumlah Ahli</h6>
                    </div>
                    <div class="flex-shrink-0 avatar-sm">
                        <div class="avatar-title bg-soft-primary text-primary fs-22 rounded">
                            <i class="ri-upload-2-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="flex-grow-1">
                        <h4>{{ $tot_paid }}</h4>
                        <h6 class="text-muted fs-14 mb-0">Selesai</h6>
                    </div>
                    <div class="flex-shrink-0 avatar-sm">
                        <div class="avatar-title bg-soft-info text-info fs-22 rounded">
                            <i class="ri-remote-control-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="flex-grow-1">
                        <h4>{{ $tot_members - $tot_paid }}</h4>
                        <h6 class="text-muted fs-14 mb-0">Belum Bayar</h6>
                    </div>
                    <div class="flex-shrink-0 avatar-sm">
                        <div class="avatar-title bg-soft-primary text-primary fs-22 rounded">
                            <i class="ri-flashlight-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="flex-grow-1">
                        <h4>RM{{ $tot_sum }}</h4>
                        <h6 class="text-muted fs-14 mb-0">Jumlah Kutipan</h6>
                    </div>
                    <div class="flex-shrink-0 avatar-sm">
                        <div class="avatar-title bg-soft-info text-info fs-22 rounded">
                            <i class="ri-hand-coin-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row" id="contactList">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center border-0 bg-info">
                    <h5 class="card-title mb-0 flex-grow-1">Rekod Pembayaran</h5>
                 
                </div>
                <div class="card-body border border-dashed border-end-0 border-start-0">
                    <div class="row g-2">
                        <div class="col-xl-4 col-md-6">
                            <div class="search-box">
                                <input type="text" class="form-control search" placeholder="Carian Ahli..." wire:model="search_federation">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <select
                                class="form-select form-select"
                                name=""
                                id=""
                                wire:model="year"
                            >
                                <option selected>-- Pilih Tahun --</option>
                                <option value="2023" @selected($year == '2023')>2023</option>
                                <option value="2024" @selected($year == '2024')>2024</option>
                                <option value="2025" @selected($year == '2025')>2025</option>
                                <option value="2026" @selected($year == '2026')>2026</option>
                            </select>
                        </div>
                        <!--end col-->
                        
                    </div>
                    <!--end row-->
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-nowrap table-striped" id="customerTable">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th  scope="col" class="text-center">Gabungan</th>
                                    <th  scope="col" class="text-center">Tahun</th>
                                    <th  scope="col" class="text-center">Jumlah Bayaran</th>
                                    <th  scope="col" class="text-center">Baki</th>
                                    <th  scope="col" class="text-end"></th>
                                </tr>
                            </thead>
                            <!--end thead-->
                            <tbody class="list form-check-all">
                                @forelse($results as $row)
                                <tr>
                                    <td class="order_date">
                                        {{ $loop->iteration }}
                                    </td>
                                    
                                    <td class="name">
                                        {{ $row->name }}
                                    </td>
                                    <td class="text-center">
                                    
                                    {{ $year }}


                                    </td>
                                    <td class="text-center">

                                        {{ @$row->payments_federation_sum_value ?? '0'}}


                                    </td>
                                    <td class="text-center">
                                          @if(@$value - @$row->payments_federation_sum_value == 0)
                                                <span
                                                    class="badge text-bg-success text-uppercase"> {{ @$value - @$row->payments_federation_sum_value }}
                                                </span>

                                            @elseif((@$value - @$row->payments_sum_value) > 0 and (@$value - @$row->payments_federation_sum_value) < @$value)
                                                <span
                                                    class="badge text-bg-warning text-uppercase"> {{ @$value - @$row->payments_federation_sum_value }}
                                                </span>
                                            @else
                                                <span
                                                    class="badge text-bg-danger text-uppercase"> {{ @$value - @$row->payments_federation_sum_value }}
                                                </span>
                                            @endif
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <ul class="list-inline hstack gap-2 mb-0 text-end">
                                            
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit">
                                                <a href="javascript:void(0);"  class="text-muted d-inline-block edit-item-btn" wire:click="edit('{{ $row->id }}')" >
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View">
                                                <a href="javascript:void(0);" class="text-muted d-inline-block" wire:click="list('{{ $row->id }}')" >
                                                    <i class="ri-eye-fill fs-16"></i>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                       
                                    </td>
                                </tr>

                                @empty
                                
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                            colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ orders We did not find any orders
                                            for you search.</p>
                                    </div>
                                </div>

                                @endforelse

                                <!--end tr-->
                                
                                <!--end tr-->
                            </tbody>
                        </table>
                        <!--end table-->
                        
                    </div>
                    
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>

    <div wire:ignore.self class="modal fadeInUp" id="edit" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-soft-info">
                    <h5 class="modal-title" id="modalTitleId">Maklumat Pembayaran Tahun {{ $year }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row mt-1">
                        <div class="col-lg-12 col-sm-12">
                            <div class="p-2 border border-dashed rounded">
                                <div class="d-flex align-items-center">
                                   
                                    <div class="flex-grow-1">
                                        <p class="fw-bold font-size-15 mb-0 text-center">{{ @$federation->name }}</p>
                                        {{-- <p class="fw-bold text-muted mb-0 text-center">{{ @$member->bahagian->name}}</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                       
                    </div>

                    <div class="row pt-2">

                     <div data-simplebar style="max-height: 215px;">
                            <ul class="list-group">
                            <li class="list-group-item bg-light">
                            <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                            <div class="d-flex">
                                
                                <div class="flex-shrink-0 ms-2">
                                    <h6 class="fs-14 mb-0">Baki Tunggakan Tahun Semasa</h6>
                                    {{-- <small class="text-muted">2 min Ago</small> --}}
                                </div>
                            </div>
                            </div>
                            <div class="flex-shrink-0">
                            <span class="text-danger fw-bold">RM{{@$value- $balance}}</span>
                            </div>
                            </div>
                            </li>
                            
                           
                           
                            </ul>
                            </div>
                      
                       
                    </div>


                    <div class="row pt-4">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Jumlah</label>
                                <input type="text"
                                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="value">
                              </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Tarikh Pembayaran</label>
                                <x-date-picker id="date" wire:model="payment_date" autocomplete="off" value="" />
                
                            </div> 
                           
                        </div>

                    </div>

                   
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <div wire:ignore.self class="modal fade flip" id="list" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg role="document">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="modalTitleId">Rekod Pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row pb-1">
                        <div class="col-12">
                            <p class="fw-bold h4 mb-0 text-center">{{ @$member_list->name }}</p>
                            <p class="fw-bold text-muted mb-0 text-center">{{ @$member_list->bahagian->name}}</p>
                        </div>
                    </div>

                    @isset($member_list->payments)

                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead class="bg-info text-white">
                                <tr>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Tarikh</th>
                                    <th scope="col">Bahagian</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($member_list->payments as $data)
                                <tr class="">
                                    <td scope="row">{{ @$data->year }}</td>
                                    <td>{{ @$data->payment_date }}</td>
                                    <td>{{ @$data->department->name }}</td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>

                    @endisset
                    


                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- @endsection --}}
    @section('script')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var modal = new bootstrap.Modal('#edit');
            document.addEventListener('show-edit', () => {
                modal.show();
            });
            document.addEventListener('hide-edit', () => {
                modal.hide();
            });

            var modal2 = new bootstrap.Modal('#list');
            document.addEventListener('show-list', () => {
                modal2.show();
            });
            document.addEventListener('hide-list', () => {
                modal2.hide();
            });

           
        });
    </script>

    @endsection
</div>

