<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    @section('title') Angsi 2023 @endsection
    @component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title') ANGSI 2023  @endslot
    @endcomponent

    <div class="row">

        <div class="card">
            {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> --}}
            <div class="card-body">

                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-2 flex-grow-1">Card Tables</h4>
    
                </div>
                
                <div class="table-responsive table-card">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tel</th>
                                <th scope="col">Emel</th>
                                <th scope="col">Bahagian</th>
                                <th scope="col">Pengangkutan</th>
                                <th scope="col">Penyakit</th>
                                <th scope="col">Jenis Sakit</th>
                                <th scope="col">Nama Waris</th>
                                <th scope="col">Tel kecemasan</th>
                                <th scope="col">Tarikh Daftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results as $r)
                            <tr class="">
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ @$r->nama }}</td>
                                <td>{{ @$r->tel }}</td>
                                <td>{{ @$r->emel }}</td>
                                <td>{{ @$r->department->name }}</td>
                                <td>{{ @$r->pengangkutan }}</td>
                                <td>{{ @$r->penyakit }}</td>
                                <td>{{ @$r->sakit }}</td>
                                <td>{{ @$r->waris }}</td>
                                <td>{{ @$r->kecemasan }}</td>
                                <td>{{ @$r->created_at }}</td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                

                
            </div>
        </div>


    </div>


</div>
