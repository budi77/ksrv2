<div>
    @component('components.breadcrumb')
    @slot('li_1')
    Resit
    @endslot
    @slot('title')
    Resit
    @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="orderList">
                <div class="card-header border-0">
                    <div class="row align-items-center gy-3">
                        <div class="col-sm">
                            <h5 class="card-title mb-0">RESIT PEMBAYARAN</h5>
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex gap-1 flex-wrap">
                                <a href="{{ route('resit.cipta') }}" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Jana Resit</a>
                                {{-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Create Order</button> --}}
                                {{-- <button type="button" class="btn btn-info"><i class="ri-file-download-line align-bottom me-1"></i> Import</button> --}}
                                {{-- <button class="btn btn-soft-danger" id="remove-actions" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-body border border-dashed border-end-0 border-start-0">
                    <form data-np-autofill-form-type="other" data-np-checked="1" data-np-watching="1">
                        <div class="row g-3">
                            <div class="col-xxl-5 col-sm-6">
                                <div class="search-box">
                                    <input type="text" class="form-control search" placeholder="Search for order ID, customer, order status or something...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-2 col-sm-6">
                                <div>
                                    <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Select date" readonly="readonly">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-2 col-sm-4">
                                <div>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" data-choices="" data-choices-search-false="" name="choices-single-default" id="idStatus" hidden="" tabindex="-1" data-choice="active"><option value="all" data-custom-properties="[object Object]">All</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="all" data-custom-properties="[object Object]" aria-selected="true">All</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--idStatus-item-choice-8" class="choices__item choices__item--choice choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="8" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Status</div><div id="choices--idStatus-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="1" data-value="all" data-select-text="Press to select" data-choice-selectable="">All</div><div id="choices--idStatus-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Cancelled" data-select-text="Press to select" data-choice-selectable="">Cancelled</div><div id="choices--idStatus-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Delivered" data-select-text="Press to select" data-choice-selectable="">Delivered</div><div id="choices--idStatus-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Inprogress" data-select-text="Press to select" data-choice-selectable="">Inprogress</div><div id="choices--idStatus-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Pending" data-select-text="Press to select" data-choice-selectable="">Pending</div><div id="choices--idStatus-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Pickups" data-select-text="Press to select" data-choice-selectable="">Pickups</div><div id="choices--idStatus-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="Returns" data-select-text="Press to select" data-choice-selectable="">Returns</div></div></div></div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-2 col-sm-4">
                                <div>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" data-choices="" data-choices-search-false="" name="choices-single-default" id="idPayment" hidden="" tabindex="-1" data-choice="active"><option value="all" data-custom-properties="[object Object]">All</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="all" data-custom-properties="[object Object]" aria-selected="true">All</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--idPayment-item-choice-5" class="choices__item choices__item--choice choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="5" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Select Payment</div><div id="choices--idPayment-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="1" data-value="all" data-select-text="Press to select" data-choice-selectable="">All</div><div id="choices--idPayment-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="COD" data-select-text="Press to select" data-choice-selectable="">COD</div><div id="choices--idPayment-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Mastercard" data-select-text="Press to select" data-choice-selectable="">Mastercard</div><div id="choices--idPayment-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Paypal" data-select-text="Press to select" data-choice-selectable="">Paypal</div><div id="choices--idPayment-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Visa" data-select-text="Press to select" data-choice-selectable="">Visa</div></div></div></div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-1 col-sm-4">
                                <div>
                                    <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-1 align-bottom"></i>
                                        Filters
                                    </button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div> --}}
                <div class="card-body border border-dashed border-end-0 border-start-0 ">

                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-striped"
                        >
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">No Resit</th>
                                    <th scope="col">Tarikh Resit</th>
                                    <th scope="col">Bahagian</th>
                                    <th scope="col">Tarikh Mula</th>
                                    <th scope="col">Tarikh Akhir</th>
                                    <th scope="col" ></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $key => $data)
                                <tr class="">
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td scope="row">{{ $data->receipt_no }}</td>
                                    <td scope="row">{{ $data->receipt_date }}</td>
                                    <td>{{ $data->department->name }}</td>
                                    <td>{{ $data->date_start }}</td>
                                    <td >{{ $data->date_end }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('resit.cetak', $data->id) }}" class="text-primary d-inline-block">
                                            <i class="ri-printer-line fs-18"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                    
                   
                    
                    <!-- Modal -->
                  
                    <!--end modal -->
                </div>
            </div>
    
        </div>
        <!--end col-->
    </div>
</div>
