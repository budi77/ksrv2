<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-12">
                <div class="text-center mt-sm-2 mb-2 text-dark">
                    <div>
                        <a href="index" class="d-inline-block auth-logo">
                            <img src="{{ URL::asset('assets/images/KSR.png') }}" alt="" height="70">
                        </a>
                    </div>
                    <p class="mt-1 fs-16 fw-bold text-dark"> MESYUARAT AGONG KELAB SUKAN DAN REKREASI SPRM KALI KE 16 TAHUN 2025</p>
                    {{-- <p class="mt-0 fs-20 fw-medium text-dark">SURUHANJAYA PENCEGAHAN RASUAH MALAYSIA</p> --}}
                </div>
            </div>
        </div>

<!--         <div class="list-group">
    <a href="{{url('storage/' . 'AGENDA_AGM15_KSR_TAHUN_2024.pdf')}}" target="_blank" class="list-group-item list-group-item-action text-primary"
        ><i class="bx bxs-file-pdf"></i> Agenda AGM KSR 2024</a
    >
    <a href="{{url('storage/' . 'Minit_Mesyuarat_AGM_KSR_SPRM_Kali_ke_14_Tahun_2023.pdf')}}" target="_blank" class="list-group-item list-group-item-action text-primary"
        > <i class="bx bxs-file-pdf"></i> Minit Mesyuarat AGM KSR Kali ke 14 2023</a
    >
    <a href="{{url('storage/' . 'sKSR_SPRM_2023_Annual_Report.pdf')}}" target="_blank" class="list-group-item list-group-item-action text-primary"
        ><i class="bx bxs-file-pdf"></i> Laporan Tahunan KSR 2023</a
    > -->
</div>

<br>


        <div class="row">

<!-- Hover added -->




            <div class="card">
                <div class="card-body">
                    <p class="text-center fw-bold">Semakan Pembayaran Yuran Ahli Tahun 2024</p>

                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-6">
                            <div class="row g-2" data-np-autofill-form-type="other" data-np-checked="1" data-np-watching="1">
                                <div class="col">
                                    <div class="position-relative mb-3">
                                        <input type="text" class="form-control form-control-lg bg-light border-light" placeholder="Sila Taip Nama atau Emel" value="" wire:model.debounce.500ms="search">
                                        {{-- <a class="btn btn-link link-success btn-lg position-absolute end-0 top-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="ri-mic-fill"></i></a> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-auto">
                                    <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light"><i class="mdi mdi-magnify me-1"></i> Cari</button>
                                </div> --}}
                                <div class="text-center">
                                    <div wire:loading>
                                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_1KD7{animation:spinner_6QnB 1.2s infinite}.spinner_MJg4{animation-delay:.1s}.spinner_sj9X{animation-delay:.2s}.spinner_WwCl{animation-delay:.3s}.spinner_vy2J{animation-delay:.4s}.spinner_os1F{animation-delay:.5s}.spinner_l1Tw{animation-delay:.6s}.spinner_WNEg{animation-delay:.7s}.spinner_kugV{animation-delay:.8s}.spinner_4zOl{animation-delay:.9s}.spinner_7he2{animation-delay:1s}.spinner_SeO7{animation-delay:1.1s}@keyframes spinner_6QnB{0%,50%{animation-timing-function:cubic-bezier(0.27,.42,.37,.99);r:0}25%{animation-timing-function:cubic-bezier(0.53,0,.61,.73);r:2px}}</style><circle class="spinner_1KD7" cx="12" cy="3" r="0"/><circle class="spinner_1KD7 spinner_MJg4" cx="16.50" cy="4.21" r="0"/><circle class="spinner_1KD7 spinner_SeO7" cx="7.50" cy="4.21" r="0"/><circle class="spinner_1KD7 spinner_sj9X" cx="19.79" cy="7.50" r="0"/><circle class="spinner_1KD7 spinner_7he2" cx="4.21" cy="7.50" r="0"/><circle class="spinner_1KD7 spinner_WwCl" cx="21.00" cy="12.00" r="0"/><circle class="spinner_1KD7 spinner_4zOl" cx="3.00" cy="12.00" r="0"/><circle class="spinner_1KD7 spinner_vy2J" cx="19.79" cy="16.50" r="0"/><circle class="spinner_1KD7 spinner_kugV" cx="4.21" cy="16.50" r="0"/><circle class="spinner_1KD7 spinner_os1F" cx="16.50" cy="19.79" r="0"/><circle class="spinner_1KD7 spinner_WNEg" cx="7.50" cy="19.79" r="0"/><circle class="spinner_1KD7 spinner_l1Tw" cx="12" cy="21" r="0"/></svg>
                                       {{-- <p class="text-muted fw-bold">Sila tunggu....</p> --}}
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        @if($results)

                        <div
                            class="table-responsive"
                        >
                            <table
                                class="table table-sm"
                            >
                                <thead class="table-dark">
                                    <tr>
                                        <th colspan="2" scope="col">Maklumat Pembayaran</th>
                                        {{-- <th scope="col" class="text-end">Tahun 2023</th> --}}
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($results as $result)
                                    <tr class="">
                                        <td scope="row">
                                            <p class="mb-0 fw-bolder">{{ @$result->name }}</p>
                                            <p class="mb-0">{{ @$result->email }}</p>
                                            <p class="mb-0 fw-bold text-muted">{{ @$result->bahagian->name }}</p>
                                        </td>
                                        <td class="text-end">
                                            @if($result->payment == NULL)
                                            <span class="badge bg-danger">TIDAK</span>
                                            @else
                                            <span class="badge bg-success">BAYAR</span>
                                            @endif
                                        </td>
                                       
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                        
                        {{-- {{ $results }} --}}
                        @endif

                     
                        <!--end col-->
                        {{-- <div class="col-lg-12">
                            <h5 class="fs-16 fw-semibold text-center mb-0">Showing results for "<span class="text-primary fw-medium fst-italic">Admin Dashboard</span> "</h5>
                        </div> --}}
                    </div>
                </div>
            </div>
            
        </div>


        
       
    </div>
</div>

