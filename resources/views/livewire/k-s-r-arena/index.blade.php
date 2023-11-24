<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    @section('title') KSR ARENA @endsection
    @component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title') KSR ARENA 2023  @endslot
    @endcomponent

    <div class="row">

        <div class="card">
            {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> --}}
            <div class="card-body">

                <div class="card-header align-items-center d-flex">
                    {{-- <h4 class="card-title mb-2 flex-grow-1">Card Tables</h4> --}}
                        {{-- <a class="btn btn-primary btn-sm" href="{{ route('export.pancing') }}"><i class="ri-file-excel-2-line mr-3"></i>Export Excel</a> --}}
                        <button class="btn btn-secondary btn-sm" onClick="window.print()">Cetak Senarai</button>

                </div>
                <br>

                {{-- <div class="form-group"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('export.pancing') }}">Export Excel File</a> --}}
                {{-- </div>  --}}
                
                <div class="table-responsive table-card">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Bahagian</th>
                                <th scope="col">Nama Pengurus</th>
                                <th scope="col">No Tel</th>
                                <th scope="col">Acara</th>
                                {{-- <th scope="col">Bola Jaring</th> --}}
                                <th scope="col">Borang Penyertaan</th>
                                <th scope="col">Jumlah Bayaran</th>
                                <th scope="col">Resit Bayaran</th>
                                <th scope="col">Tarikh Daftar</th>
                                {{-- <th scope="col"></th> --}}
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results as $r)
                            <tr class="">
                                <td scope="row">{{ $loop->iteration }}</td>
                                
                                <td>{{ @$r->department->name }}</td>
                                <td>{{ @$r->nama_pengurus }}</td>
                                <td>{{ @$r->no_tel }}</td>
                                <td>
                                    @if(@$r->ext1 == 'BOLA TAMPAR')
                                    <span class="badge bg-success">{{ $r->ext1 }}</span>
                                    @else
                                    <span class="badge bg-warning">{{ $r->ext1 }}</span>
                                    @endif
                                </td>
                                {{-- <td>
                                    @if(@$r->netball == '1')
                                    <span class="badge bg-success">YA</span>
                                    @else
                                    <span class="badge bg-danger">TIDAK</span>
                                    @endif
                                </td> --}}
                                <td><a href="{{url('storage/' . $r->borang_penyertaan)}}" target="_blank">Lihat</a></td>
                            
                                <td>{{ @$r->jumlah_bayaran }}</td>
                                {{-- <td>{{ @$r->lampiran_bayaran }}</td> --}}
                                <td><a href="{{url('storage/' . $r->resit_bayaran)}}" target="_blank">Lihat</a></td>

                                <td>{{ @$r->created_at }}</td>
                                {{-- <td>
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Remove">
                                <a class="text-danger "  href="javascript:void(0);" wire:click="delete('{{ $r->id }}')">
                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                </a>
                    </li>
                                </td> --}}
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                

                
            </div>
        </div>


    </div>


</div>
