<div>

    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tambah Bahagian</h5>
                </div>
                <div class="card-body">
                    {{-- <h4 class="card-title">Title</h4> --}}
                    <div class="mb-3">
                      <label for="" class="form-label ">Nama Bahagian</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="name">
                      {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Singkatan</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="short">
                      {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kategori</label>
                        <select class="form-select " name="" id="" wire:model="category">
                            <option>-- Pilih --</option>
                            <option value="Ibu Pejabat" {{ $category == 'Ibu Pejabat' ? 'selected' : '' }}>Ibu Pejabat</option>
                            <option value="Gabungan" {{ $category == 'Gabungan' ? 'selected' : '' }}>Gabungan</option>
                            {{-- <option value="">Jakarta</option> --}}
                        </select>
                    </div>
                </div>
            </div>

            <div class="text-end mb-4">
                <button type="submit" class="btn btn-danger w-sm" wire:click="cancel">Cancel</button>
                {{-- <button type="submit" class="btn btn-secondary w-sm">Draft</button> --}}
                <button type="submit" class="btn btn-success w-sm" wire:click="store">Create</button>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Senarai Bahagian</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Singkatan</th>
                                    <th scope="col">Kategori</th>
                                    {{-- <th scope="col">Customer</th> --}}
                                    {{-- <th scope="col">Purchased</th> --}}
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $row)
                                <tr>
                                    
                                    <td><a href="#" class="fw-semibold">{{ $loop->iteration }}</a></td>
                                    <td>{{ $row->name }}</td>
                                    <td class="text-primary">{{ $row->short }}</td>
                                    
                                    <td>{{ $row->extra }}</td>
                                    <td>
                                        <div class="hstack gap-3 fs-15">
                                            <a href="javascript:void(0);" class="link-warning" wire:click="edit('{{ $row->id }}')"><i class="ri-settings-4-line"></i></a>
                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                            
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end table responsive -->
                </div>
               </div>
        </div>
    </div>

    @section('script')
    {{-- <script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('assets/js/pages/project-create.init.js') }}"></script> --}}
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    @endsection

    
</div>

   