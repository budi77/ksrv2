<div>
  
@component('components.breadcrumb')
@slot('li_1')
invoices
@endslot
@slot('title')
Invoice Details
@endslot
@endcomponent

<div class="row justify-content-center">
    <div class="col-xxl-9">
        <div class="card" id="demo">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header border-bottom-dashed p-4">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                               <img src="{{ URL::asset('assets/images/KSR.png') }}" alt="" height="90">
                               {{-- <img src="{{ URL::asset('assets/images/KSR.png') }}" alt="" height="90"> --}}
                                <div class="mt-sm-2 mt-2">
                                    <h6 class="text-dark text-uppercase fw-semibold">KELAB SUKAN DAN REKREASI (KSR) SPRM</h6>
                                    <p class="text-muted mb-1" id="address-details">2, Lebuh Wawasan, Presint 7, </p>
                                    <p class="text-muted mb-0" id="zip-code">62250 Putrajaya, Wilayah Persekutuan Putrajaya</p>
                                </div>
                            </div>
                            <div class="flex-shrink-0 mt-sm-0 mt-3">
                                <h3><span class="text-dark fw-bold">RESIT RASMI</span>
                                    {{-- <span id="legal-register-no">987654</span> --}}
                                </h3>
                                <h6><span class="text-muted fw-normal">No Resit:</span>
                                    <span id="email">123454/2023</span>
                                </h6>
                                {{-- <h6><span class="text-muted fw-normal">Website:</span> <a href="https://themesbrand.com/" class="link-primary" target="_blank" id="website">www.themesbrand.com</a></h6> --}}
                                <h6 class="mb-0"><span class="text-muted fw-normal">Tarikh: </span><span> 19/12/2023</span></h6>
                            </div>
                        </div>
                    </div>
                    <!--end card-header-->
                </div>
                <!--end col-->
                <div class="col-lg-12">
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-lg-4 col-6">
                                <p class="text-muted mb-2 text-uppercase fw-semibold">Diterima daripada:</p>
                                <h5 class="fs-14 mb-0 text-uppercase">Budi Hermawan</h5>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4 col-6">
                                <p class="text-muted mb-2 text-uppercase fw-semibold">Ringgit Malaysia</p>
                                <h5 class="fs-14 mb-0">LIMA RATUS LIMA PULUH RINGGIT SAHAJA</h5>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4 col-6">
                                <p class="text-muted mb-2 text-uppercase fw-semibold">untuk bayaran</p>
                                <h5 class="fs-14 mb-0">YURAN KSR UNTUK BAHAGIAN PENGURUSAN REKOD DAN MAKLUMAT UNTUK BULAN JULAI 2023 SEPERTI PENAMA DIBAWAH</h5>
                            </div>
                            <!--end col-->
                            {{-- <div class="col-lg-3 col-6">
                                <p class="text-muted mb-2 text-uppercase fw-semibold">Total Amount</p>
                                <h5 class="fs-14 mb-0">$<span id="total-amount">755.96</span></h5>
                            </div> --}}
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end col-->
                {{-- <div class="col-lg-12">
                    <div class="card-body p-4 border-top border-top-dashed">
                        <div class="row g-3">
                            <div class="col-6">
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Billing Address</h6>
                                <p class="fw-medium mb-2" id="billing-name">David Nichols</p>
                                <p class="text-muted mb-1" id="billing-address-line-1">305 S San Gabriel Blvd</p>
                                <p class="text-muted mb-1"><span>Phone: +</span><span id="billing-phone-no">(123)
                                        456-7890</span></p>
                                <p class="text-muted mb-0"><span>Tax: </span><span id="billing-tax-no">12-3456789</span> </p>
                            </div>
                            <!--end col-->
                            <div class="col-6">
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Shipping Address</h6>
                                <p class="fw-medium mb-2" id="shipping-name">David Nichols</p>
                                <p class="text-muted mb-1" id="shipping-address-line-1">305 S San Gabriel Blvd</p>
                                <p class="text-muted mb-1"><span>Phone: +</span><span id="shipping-phone-no">(123)
                                        456-7890</span></p>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div> --}}
                <!--end col-->
                <div class="col-lg-12">
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                <thead>
                                    <tr class="table-active">
                                        <th scope="col" style="width: 50px;">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Bahagian</th>
                                        <th scope="col">Jumlah</th>
                                        {{-- <th scope="col" class="text-end">Amount</th> --}}
                                    </tr>
                                </thead>
                                <tbody id="products-list">
                                    <tr>
                                        <th scope="row">01</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Budi Hermawan</span>
                                        </td>
                                        <td><p class="text-muted mb-0">BAHAGIAN PENGURUSAN REKOD DAN MAKLUMAT</p></td>
                                        {{-- <td>02</td> --}}
                                        <td class="text-end">$239.98</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">02</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Budi Hermawan</span>
                                        </td>
                                        <td><p class="text-muted mb-0">BAHAGIAN PENGURUSAN REKOD DAN MAKLUMAT</p></td>
                                        {{-- <td>02</td> --}}
                                        <td class="text-end">$239.98</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">03</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Budi Hermawan</span>
                                        </td>
                                        <td><p class="text-muted mb-0">BAHAGIAN PENGURUSAN REKOD DAN MAKLUMAT</p></td>
                                        {{-- <td>02</td> --}}
                                        <td class="text-end">$239.98</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">04</th>
                                        <td class="text-start">
                                            <span class="fw-medium">Budi Hermawan</span>
                                        </td>
                                        <td><p class="text-muted mb-0">BAHAGIAN PENGURUSAN REKOD DAN MAKLUMAT</p></td>
                                        {{-- <td>02</td> --}}
                                        <td class="text-end">$239.98</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end table-->
                        </div>
                        <div class="border-top border-top-dashed mt-2">
                            <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                <tbody>
                                    {{-- <tr>
                                        <td>Sub Total</td>
                                        <td class="text-end">$699.96</td>
                                    </tr> --}}
                                    {{-- <tr>
                                        <td>Estimated Tax (12.5%)</td>
                                        <td class="text-end">$44.99</td>
                                    </tr> --}}
                                    {{-- <tr>
                                        <td>Discount <small class="text-muted">(VELZON15)</small></td>
                                        <td class="text-end">- $53.99</td>
                                    </tr> --}}
                                    {{-- <tr>
                                        <td>Shipping Charge</td>
                                        <td class="text-end">$65.00</td>
                                    </tr> --}}
                                    <tr class="border-top border-top-dashed fs-15">
                                        <th scope="row">Jumlah Keseluruhan</th>
                                        <th class="text-end">RM550.00</th>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end table-->

                            </table>
                            <!--end table-->
                        </div>
                        <div class="mt-3">
                            <h6 class="text-muted text-uppercase fw-semibold mb-3">Maklumat Pembayaran:</h6>
                            <p class="text-muted mb-1">Cara Pembayaran: <span class="fw-medium" id="payment-method">Tunai</span></p>
                            {{-- <p class="text-muted mb-1">Card Holder: <span class="fw-medium" id="card-holder-name">David
                                    Nichols</span></p> --}}
                            {{-- <p class="text-muted mb-1">Card Number: <span class="fw-medium" id="card-number">xxx xxxx xxxx
                                    1234</span></p> --}}
                            {{-- <p class="text-muted">Total Amount: <span class="fw-medium" id="">$ </span><span id="card-total-amount">755.96</span></p> --}}
                        </div>
                        <div class="mt-4">
                            <div class="alert alert-info">
                                <p class="mb-0"><span class="fw-semibold">NOTES:</span>
                                    <span id="note">All accounts are to be paid within 7 days from receipt of invoice. To be
                                        paid by cheque or
                                        credit card or direct payment online. If account is not paid within 7
                                        days the credits details supplied as confirmation of work undertaken
                                        will be charged the agreed quoted fee noted above.
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                            <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download</a>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

@section('script')
<script src="{{ URL::asset('/assets/js/pages/invoicedetails.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
</div>
