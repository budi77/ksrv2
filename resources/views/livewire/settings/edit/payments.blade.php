<div>
    {{-- Stop trying to control. --}}

    {{-- {{ $records }} --}}
    <h5>REKOD PEMBAYARAN :</h5>
    <div class="table-responsive pt-4">
        <table class="table table-sm table-striped">
            <thead class="bg-warning">
                <tr>
                    <th scope="col">Nama/Bahagian</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tarikh Bayaran</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @isset($records)
                @forelse($records as $record)
                <tr class="">
                    <td scope="row">
                        <div>{{ $record->member->name }}</div>
                        <div class="text-muted">{{ $record->member->bahagian->name }}</div>
                    </td>
                    <td>{{ $record->year }}</td>
                    <td>{{ $record->value }}</td>
                    <td>{{ $record->payment_date }}</td>
                    <td>
                        <ul class="list-inline hstack gap-2 mb-0">
                            {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View" data-bs-original-title="View">
                                <a href="http://velzon.laravel-interactive.themesbrand.com/apps-ecommerce-order-details" class="text-primary d-inline-block">
                                    <i class="ri-eye-fill fs-16"></i>
                                </a>
                            </li> --}}
                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                <a href="javascript:void()" wire:click="edit('{{ $record->id }}')" class="text-primary d-inline-block edit-item-btn">
                                    <i class="ri-pencil-fill fs-16"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Remove" data-bs-original-title="Remove">
                                {{-- <a class="text-danger d-inline-block remove-item-btn" onclick="return confirm('Are you sure?')" href="javascript:void(0)" wire:click="delete('{{ $record->id }}')">
                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                </a> --}}
                            </li>
                        </ul>
                    </td>
                </tr>

                @empty
                <p>No data</p>

                @endforelse
                @endisset
               
            </tbody>
        </table>
    </div>


    <div wire:ignore.self class="modal fadeInUp" id="edit" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-soft-info">
                    <h5 class="modal-title" id="modalTitleId">Maklumat Pembayaran Tahun </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row mt-1">
                        <div class="col-lg-12 col-sm-12">
                            <div class="p-2 border border-dashed rounded">
                                <div class="d-flex align-items-center">
                                   
                                    <div class="flex-grow-1">
                                        <p class="fw-bold font-size-15 mb-0 text-center">{{ @$member->name }}</p>
                                        <p class="fw-bold text-muted mb-0 text-center">{{ @$member->bahagian->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                       
                    </div>

                    <div class="row">
                      
                       
                    </div>


                    <div class="row pt-2">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Jumlah</label>
                                <input type="text"
                                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model.defer="value">
                              </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Tarikh Pembayaran</label>
                                <x-date-picker id="date" wire:model="payment_date" autocomplete="off" value="" />
                
                            </div> 
                           
                        </div>

                    </div>

                   
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store">Save</button>
                </div>
            </div>
        </div>
    </div>




    @section('script')
  
    {{-- <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script> --}}

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var modal = new bootstrap.Modal('#edit');
            document.addEventListener('show-edit', () => {
                modal.show();
            });
            document.addEventListener('hide-edit', () => {
                modal.hide();
            });

          
           
        });
    </script>
    @endsection
    
</div>
