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
                    <p class="mt-1 fs-16 fw-bold text-dark"> KELAB SUKAN DAN REKREASI (KSR)</p>
                    {{-- <p class="mt-0 fs-20 fw-medium text-dark">SURUHANJAYA PENCEGAHAN RASUAH MALAYSIA</p> --}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-center">SEMAKAN YURAN AHLI</h6>

                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-6">
                            <div class="row g-2" data-np-autofill-form-type="other" data-np-checked="1" data-np-watching="1">
                                <div class="col">
                                    <div class="position-relative mb-3">
                                        <input type="text" class="form-control form-control-lg bg-light border-light" placeholder="Sila Taip Nama atau Emel" value="" wire:model="search">
                                        {{-- <a class="btn btn-link link-success btn-lg position-absolute end-0 top-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="ri-mic-fill"></i></a> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-auto">
                                    <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light"><i class="mdi mdi-magnify me-1"></i> Cari</button>
                                </div> --}}
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
                                        <th scope="col">Maklumat Ahli</th>
                                        <th scope="col" class="text-end">Tahun 2023</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($results as $result)
                                    <tr class="">
                                        <td scope="row">
                                            <p class="mb-0 fw-bold">{{ $result->name }}</p>
                                            <p class="mb-0">{{ $result->email }}</p>
                                            <p class="mb-0">{{ $result->bahagian->name }}</p>
                                        </td>
                                        <td class="text-end">
                                            @if($result->payment == NULL)
                                            <span class="badge bg-danger">BELUM</span>
                                            @else
                                            <span class="badge bg-success">SELESAI</span>
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

