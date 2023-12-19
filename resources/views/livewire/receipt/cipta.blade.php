<div>
    
    @component('components.breadcrumb')
    @slot('li_1')
    invoices
    @endslot
    @slot('title')
    Create Invoice
    @endslot
    @endcomponent

    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card">
                <form class="needs-validation" novalidate id="invoice_form">
                    <div class="card-body border-bottom border-bottom-dashed p-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="profile-user mx-auto  mb-3">
                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input" />
                                    <label for="profile-img-file-input" class="d-block" tabindex="0">
                                        {{-- <span class="overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded" style="height: 60px; width: 256px;"> --}}
                                            <img src="{{ URL::asset('assets/images/KSR.png') }}" alt="" height="90">

                                        {{-- </span> --}}
                                    </label>
                                    <div class="mt-sm-2 mt-2">
                                        <h6 class="text-dark text-uppercase fw-semibold">KELAB SUKAN DAN REKREASI (KSR) SPRM</h6>
                                        <p class="text-muted mb-1" id="address-details">2, Lebuh Wawasan, Presint 7, </p>
                                        <p class="text-muted mb-0" id="zip-code">62250 Putrajaya, Wilayah Persekutuan Putrajaya</p>
                                    </div>
                                </div>
                                <div>
                                    
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4 ms-auto">
                                <h3><span class="text-dark fw-bold">RESIT RASMI</span>

                               
                                <div class="mb-2">
                                    <input type="text" class="form-control bg-light border-0" id="companyWebsite" placeholder="No Resit" wire:model="receipt_no" />
                                    
                                </div>
                                <div>
                                    <x-date-picker id="date" class="form-control bg-light border-0" wire:model="payment_date" autocomplete="off" value="" placeholder="Tarikh" />

                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-lg-6 col-sm-6">
                                <label for="invoicenoInput">Diterima daripada:</label>
                                <input type="text" class="form-control bg-light border-0" id="invoicenoInput" placeholder="Diterima daripada" wire:model="receive_from"/>
                            </div>
                           
                            <div class="col-lg-6 col-sm-6">
                                <label for="invoicenoInput">Diterima Oleh:</label>
                                <input type="text" class="form-control bg-light border-0" id="invoicenoInput" placeholder="Diterima Oleh" wire:model="receive_by"/>
                            </div>
                            {{-- <div class="col-lg-3 col-sm-6">
                                <div>
                                    <label for="totalamountInput">Total Amount</label>
                                    <input type="text" class="form-control bg-light border-0" id="totalamountInput" placeholder="$0.00" readonly />
                                </div>
                            </div> --}}
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="card-body p-4 border-top border-top-dashed">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div>
                                    <label for="billingName" class="text-muted text-uppercase fw-semibold">Ringgit Malaysia</label>
                                </div>
                                
                                <div class="mb-2">
                                    <textarea class="form-control bg-light border-0"  rows="3" placeholder="" wire:model="ringgit"></textarea>
                                   
                                </div>
                                
                            </div>
                            <!--end col-->
                            <div class="col-lg-6 col-sm-6">
                                <div class="row">
                                        <div>
                                            <label for="shippingName" class="text-muted text-uppercase fw-semibold">Untuk Bayaran</label>
                                        </div>
                                       
                                        <div class="mb-2">
                                            <textarea class="form-control bg-light border-0"  rows="3" placeholder="" wire:model="payment_for"></textarea>
                                            
                                        </div>
                                        
                                       
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Bahagian</label>
                                        <select
                                            class="form-select bg-light border-0 "
                                            name=""
                                            id=""
                                            wire:model="department_id"
                                        >
                                            <option selected>-- Pilih --</option>
                                            @foreach($departments as $key => $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label">Tarikh Mula</label>

                                    <x-date-picker id="date" class="form-control bg-light border-0" wire:model="date_start" autocomplete="off" value="" placeholder="Tarikh" />

                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label">Tarikh Akhir</label>

                                    <x-date-picker id="date" class="form-control bg-light border-0" wire:model="date_end" autocomplete="off" value="" placeholder="Tarikh" />

                                </div>
                                <div class="col-2">
                                    <label for="" class="form-label pt-3"></label>
                                    <br>
                                    
                                    {{-- <button type="submit" class="btn btn-primary btn-sm" wire:click="getData()"><i class="ri-printer-line align-bottom me-1"></i> Cari</button> --}}
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm"  wire:click="getData()"><i class="ri-download-2-line align-bottom me-1"></i> Cari</a>


                                </div>
                            </div>

                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-borderless mb-0"
                                >
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col" class="text-center">Bahagian</th>
                                            <th scope="col" class="text-end">Jumlah Bayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($results)
                                        @foreach($results as $key => $result)
                                        <tr class="">
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ @$result->member->name }}</td>
                                            <td class="text-center">{{ @$result->department->name }}</td>
                                            <td class="text-end">RM{{ $result->value }}</td>
                                        </tr>
                                        @endforeach

                                        <tr class="border-top border-top-dashed mt-2">
                                            <td colspan="3"></td>
                                            <td colspan="3" class="p-0">
                                                <table class="table table-borderless table-sm table-nowrap align-middle mb-0">
                                                    <tbody>
                                                        
                                                        <tr class="border-top border-top-dashed">
                                                            <th scope="row">Jumlah Keseluruhan</th>
                                                            <td>
                                                                <input type="text" class="form-control bg-light border-0" id="cart-total" placeholder="RM0.00" readonly value="{{ @$sum }}" />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end table-->
                                            </td>
                                        </tr>
                                        @endif

                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                           
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label for="choices-payment-type" class="form-label text-muted text-uppercase fw-semibold">Cara Pembayaran</label>
                                    <div class="input-light">
                                        <select class="form-control bg-light border-0" wire:model="payment_method">
                                            <option value="">Payment Method</option>
                                            <option value="Tunai">Tunai</option>
                                            <option value="Bank Transfer">Bank Transfer</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <input class="form-control bg-light border-0" type="text" id="cardholderName" placeholder="Keterangan" wire:model="remarks">
                                </div>
                                
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="mt-4">
                            <label for="exampleFormControlTextarea1" class="form-label text-muted text-uppercase fw-semibold">NOTES</label>
                            <textarea class="form-control alert alert-info" id="exampleFormControlTextarea1" placeholder="Notes" rows="2" required>All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</textarea>
                        </div>
                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                            {{-- <button type="submit" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Save</button> --}}
                            <a href="javascript:void(0);" class="btn btn-success" wire:click="store()"><i class="ri-download-2-line align-bottom me-1"></i> Save</a>
                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download Invoice</a>
                            <a href="javascript:void(0);" class="btn btn-danger"><i class="ri-send-plane-fill align-bottom me-1"></i> Send Invoice</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    @section('script')
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/cleave.js/cleave.js.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/invoicecreate.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    @endsection
    
</div>
