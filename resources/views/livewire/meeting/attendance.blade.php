<div wire:poll>
    
    {{-- {{ $results }} --}}

    <div class="card">
                                            <div class="card card-animate bg-success">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-white mb-0">JUMLAH PENDAFTARAN</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold text-white">{{ $results->count() }}</h2>
                                            {{-- <p class="mb-0 text-white-50"><span class="badge bg-white bg-opacity-25 text-white mb-0"><i class="ri-arrow-down-line align-middle"></i> 0.24 % </span> vs. previous month</p> --}}
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-white bg-opacity-25 rounded-circle fs-2 material-shadow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-white"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>

                          
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped"
        >
            <thead class="table-dark">
                <tr>
                    <th scope="col">Bil</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bahagian</th>
                    <th scope="col">Timestamp</th>
                </tr>
            </thead>
            <tbody>
            @foreach($results as $row)
                <tr class="">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ @$row->member->name }}</td>
                    <td>{{ @$row->member->bahagian->name }}</td>
                    <td>{{ @$row->created_at }}</td>
                </tr>
            @endforeach
                
            </tbody>
        </table>
    </div>
    
</div>
