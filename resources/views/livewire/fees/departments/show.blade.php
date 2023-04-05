<div>
    {{-- @extends('layouts.master') --}}
    @section('title') @lang('translation.starter')  @endsection
    {{-- @section('content') --}}
    @component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title') Yuran Bahagian  @endslot
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
        <!--end col-->
        {{-- <div class="col">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="flex-grow-1">
                        <h4>1585</h4>
                        <h6 class="text-muted fs-14 mb-0">Upcoming ICO</h6>
                    </div>
                    <div class="flex-shrink-0 avatar-sm">
                        <div class="avatar-title bg-soft-primary text-primary fs-22 rounded">
                            <i class="ri-donut-chart-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--end col-->
    </div>

    <div class="row" id="contactList">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center border-0">
                    <h5 class="card-title mb-0 flex-grow-1">Rekod Pembayaran</h5>
                    {{-- <div class="flex-shrink-0">
                        <div class="flax-shrink-0 hstack gap-2">
                            <button class="btn btn-primary">Today's Orders</button>
                            <button class="btn btn-soft-info">Past Orders</button>
                        </div>
                    </div> --}}
                </div>
                <div class="card-body border border-dashed border-end-0 border-start-0">
                    <div class="row g-2">
                        <div class="col-xl-4 col-md-6">
                            <div class="search-box">
                                <input type="text" class="form-control search" placeholder="Carian Ahli..." wire:model="search_member">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <!--end col-->
                        
                    </div>
                    <!--end row-->
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-nowrap" id="customerTable">
                            <thead class="table-light text-muted">
                                <tr>
                                    <th scope="col">#</th>
                                    <th  scope="col">Nama</th>
                                    <th  scope="col" class="text-center">No KP</th>
                                    <th  scope="col" class="text-center">Email</th>
                                    <th  scope="col" class="text-center">Bayaran Terakhir</th>
                                    <th  scope="col" class="text-center">Tahun Semasa</th>
                                    {{-- <th class="sort" data-sort="price" scope="col">Price</th> --}}
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
                                        {{ $row->ic_no }}
                                    </td>
                                    <td class="text-center">{{ $row->email }}</td>
                                   
                                    <td class="text-center">

                                        {{-- {{ @$row->latestPayment->year }} --}}
                                        @if(@$row->latestPayment->year <> '')
                                            @if(@$row->latestPayment->year == $year)
                                            <span
                                                class="badge text-bg-success text-uppercase"> {{ @$row->latestPayment->year }}
                                            </span>

                                            @else
                                            <span
                                            class="badge text-bg-warning text-uppercase"> {{ @$row->latestPayment->year }}
                                            </span>
                                            @endif
                                        @endif


                                    </td>
                                    <td class="text-center">

                                        @if(@$row->latestPayment->year == $year)
                                            <span
                                                class="badge badge-soft-info text-uppercase"> Paid
                                            </span>

                                        @else
                                            <span
                                            class="badge badge-soft-danger text-uppercase"> Unpaid
                                            </span>
                                        @endif

                                    </td>
                                    <td class="text-end">
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
                    {{-- <div class="d-flex justify-content-end mt-3">
                        <div class="pagination-wrap hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="#">
                                Previous
                            </a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="#">
                                Next
                            </a>
                        </div>
                    </div> --}}
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
                                    {{-- <div class="avatar-sm me-2">
                                        <div class="avatar-title rounded bg-transparent text-info fs-24">
                                            <i class="ri-money-dollar-circle-fill"></i>
                                        </div>
                                    </div> --}}
                                    <div class="flex-grow-1">
                                        <p class="fw-bold font-size-15 mb-0 text-center">{{ @$member->name }}</p>
                                        <p class="fw-bold text-muted mb-0 text-center">{{ @$member->bahagian->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                       
                    </div>

                    <div class="row">
                      
                        {{-- <div class="col-12">
                            <p class="fw-bold font-size-15 mb-0 text-center">{{ @$member->name }}</p>
                            <p class="fw-bold text-muted mb-0 text-center">{{ @$member->bahagian->name}}</p>
                        </div> --}}
                    </div>

                    {{-- <hr> --}}

                    <div class="row pt-2">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Jumlah</label>
                                <input type="text"
                                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="value">
                                {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                              </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Tarikh Pembayaran</label>
                                <x-date-picker id="date" wire:model="payment_date" autocomplete="off" value="" />
                
                            </div> 
                           
                        </div>

                    </div>

                    {{-- <div class="row">
                       
                        <div class="col-12">
                            <p class="mb-1"><label for="" class="form-label">Cara Pembayaran</label></p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Tunai" checked wire:model="mode">
                                <label class="form-check-label font-size-14 fw-bold" for="">Tunai</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Bank-In" wire:model="mode">
                                <label class="form-check-label font-size-14 fw-bold" for="">Bank-In</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mode" id="mode" value="Kospera" wire:model="mode">
                                <label class="form-check-label font-size-14 fw-bold" for="">Kospera</label>
                              </div>
                             
                        </div>
                    </div> --}}
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade flip" id="list" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg role="document">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="modalTitleId">Rekod Pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row pb-1">
                      {{-- {{ $member_list }} --}}
                        <div class="col-12">
                            <p class="fw-bold h4 mb-0 text-center">{{ @$member_list->name }}</p>
                            <p class="fw-bold text-muted mb-0 text-center">{{ @$member_list->bahagian->name}}</p>
                        </div>
                    </div>

                    {{-- <hr> --}}
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
                    {{-- <button type="button" class="btn btn-primary">Save</button> --}}
                </div>
            </div>
        </div>
    </div>


    {{-- @endsection --}}
    @section('script')
    {{-- <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script> --}}

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
