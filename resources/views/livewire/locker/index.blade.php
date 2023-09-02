<div>
   
@section('title')
    LOKER
@endsection

    @component('components.breadcrumb')
        @slot('li_1')
           Dashboard
        @endslot
        @slot('title')
           Loker
        @endslot
    @endcomponent

    <div class="row">

        {{-- <button type="button" class="btn btn-primary" wire:click="generate">Button</button> --}}

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Card Tables</h4>
        
                      
                    </div><!-- end card header -->
        
                    <div class="card-body">
        
                        <div class="live-preview">
                            <div class="table-responsive table-card">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            {{-- <th scope="col" style="width: 46px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="cardtableCheck" wfd-id="id31">
                                                    <label class="form-check-label" for="cardtableCheck"></label>
                                                </div>
                                            </th> --}}
                                            <th scope="col">#</th>
                                            <th scope="col">No Loker</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col" style="width: 150px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lockers as $locker)
                                        <tr>
                                            
                                            <td><a href="#" class="fw-medium">{{ $loop->iteration }}</a></td>
                                            <td>{{ $locker->locker_no . $locker->gender }}</td>
                                            <td>{{ $locker->gender }}</td>
                                            <td>{{ $locker->status }}</td>
                                            <td><span class="badge bg-success">{{ $locker->rate }}</span></td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-light">Details</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>

    </div>

</div>
