<div>
    @section('title') @lang('translation.starter')  @endsection
    @component('components.breadcrumb')
    @slot('li_1') Pages @endslot
    @slot('title') Yuran  @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ibu Pejabat</h4>
    
                    {{-- <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="card-tables-showcode" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="card-tables-showcode">
                        </div>
                    </div> --}}
                </div><!-- end card header -->
    
                <div class="card-body">
                    {{-- <p class="text-muted mb-4">Use <code>table-card</code> class to show card-based table within a
                        &lt;tbody&gt;.</p> --}}
    
                        <div class="table-responsive table-card">
                            <table class="table table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        {{-- <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cardtableCheck">
                                                <label class="form-check-label" for="cardtableCheck"></label>
                                            </div>
                                        </th> --}}
                                        <th scope="col">Id</th>
                                        <th scope="col">Bahagian</th>
                                        <th scope="col" class="text-center">Jumlah Ahli</th>
                                        <th scope="col" class="text-center"># Ahli Selesai Bayar Yuran Tahun Semasa</th>
                                        {{-- <th scope="col">Status</th> --}}
                                        <th scope="col"></th>   
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($results as $row)
                                    <tr>
                                        
                                        <td><a href="#" class="fw-semibold">{{ $loop->iteration }}</a></td>
                                        <td>{{ $row->name }}</td>
                                        <td class="text-center">{{ $row->members_count }}</td>
                                        {{-- <td>$24.05</td> --}}
                                        <td class="text-center"><span class="badge bg-success">{{ $row->totalpaidmemberforcurrentyear_count }}</span></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('fees.departments.show' , $row->id) }}" role="button">Pilih</a>
                                            {{-- <button type="button" class="btn btn-sm btn-light">Details</button> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>

    @section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    @endsection
</div>
