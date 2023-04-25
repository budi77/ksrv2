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
                                <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                    <i class="ri-pencil-fill fs-16"></i>
                                </a>
                            </li>
                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Remove" data-bs-original-title="Remove">
                                <a class="text-danger d-inline-block remove-item-btn" onclick="return confirm('Are you sure?')" href="javascript:void(0)" wire:click="delete('{{ $record->id }}')">
                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                </a>
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


    @section('script')
  
    <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    @endsection
    
</div>
