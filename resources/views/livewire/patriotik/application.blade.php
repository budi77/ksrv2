<div>
    @section('title') @lang('translation.starter')  @endsection
    @component('components.breadcrumb')
    @slot('li_1') Pages @endslot
    @slot('title') SENARAI BORANG PENYERTAAN @endslot
    @endcomponent

    <a href="{{ route('patriotik') }}" class="btn btn-primary btn-label">
        <div class="d-flex">
            <div class="flex-shrink-0">
                <i class="ri-user-smile-line label-icon align-middle fs-16 me-2"></i>
            </div>
            <div class="flex-grow-1">
                Senarai Video Yang Layak Ke Peringkat Saringan
            </div>
        </div>
    </a>


  <div class="row pt-2">
    

    <table class="table align-middle table-nowrap mb-0">
        <thead class="table-dark">
            <tr>
            <th></th>
            <th scope="col">Kategori</th>
            <th scope="col" style="width:30%; word-break: break-all;">Nama Kumpulan</th>
            <th scope="col">Bahagian/Negeri</th>
            <th scope="col">PIC</th>
            <th scope="col">Telefon</th>
            <th scope="col">Lagu</th>
            <th scope="col">Video</th>
            <th scope="col">Tarikh Daftar</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="bg-white">
        @foreach($results as $result)
        <tr>
            <td class="fw-bold">P{{ sprintf('%02d',$result['id']) }}</td>
            <td>{{ $result->penyertaan }}</td>
            <td>{{ $result->nama }}</td>
            <td style="word-break:break-all; word-wrap:break-word;">{{ $result->department->name }}</td>
            <td>{{ $result->extra1 }}</td>
            <td>{{ $result->telefon }}</td>
            <td>{{ $result->tajuk_lagu }}</td>
            <td>
                <a href="{{ $result->pautan }}" class="link-dark fs-20" target="_blank"><i class="ri-vidicon-line"></i></a>
            </td>
            
            <td>{{ Carbon\Carbon::parse($result->created_at, 'Asia/Kuala_Lumpur' )->format('d-m-Y h:i:s A') }}</td>
            <td>
                @if($result->extra3 == "Layak")
                <span class="badge bg-success">Layak</span>
                @elseif($result->extra3 == "Tidak Layak")
                <span class="badge bg-danger">Tidak Layak</span>
                @endif

             </td>
            <td>
                <div class="hstack gap-3 fs-15">
                    <ul class="list-inline hstack gap-2 mb-0">
                                               
                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View">
                            <a href="{{ route('pdf.patriotik', $result->id) }}" class="link-success" target="_blank"><i class="ri-printer-line"></i></a>
                        </li>
                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit">
                            <a href="javascript:void(0);" class="view-item-btn" wire:click="upload('{{ $result->id }}')"><i class="ri-upload-line align-bottom text-muted"></i></a>
                        </li>
                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit">
                            <a class="edit-item-btn" href="javascript:void(0);" wire:click="saringan('{{ $result->id }}')"><i class="ri-file-edit-fill align-bottom text-info"></i></a>
                        </li>
                      
                    </ul>
                {{-- <a href="{{ route('pdf.patriotik', $result->id) }}" class="link-success" target="_blank"><i class="ri-printer-line"></i></a> --}}
                </div>
                {{-- <div class="hstack gap-3 fs-15">
                <a href="{{ route('pdf.patriotik', $result->id) }}" class="link-success" target="_blank"><i class="ri-printer-line"></i></a>
                </div> --}}
                </td>
        </tr>
        @endforeach
        
        
        </tbody>
        </table>
    
    

    
  </div>

   <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        <div wire:ignore.self class="modal fade" id="uploadModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Muatnaik Video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{ $nama }}</p>
                        <p>{{ $bahagian }}</p>
                        <p>{{ $lagu }}</p>

                        <div class="mb-3">
                          <label for="" class="form-label">Link Video</label>
                          <input type="text"
                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="video">
                        </div>

                       

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" wire:click="store_video">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <div wire:ignore.self class="modal fade" id="saringanModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Keputusan Saringan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{ $nama }}</p>
                        <p>{{ $bahagian }}</p>
                        <p>{{ $lagu }}</p>

                        <div class="mb-3">
                            <label for="" class="form-label">Keputusan</label>
                            <select class="form-select " name="" id="" wire:model="saringan">
                                <option selected>-- Pilih --</option>
                                <option value="Layak" {{ $result->extra3 == 'Layak' ? 'selected' : '' }}>Layak</option>
                                <option value="Tidak Layak" {{ $result->extra3 == 'Tidak Layak' ? 'selected' : '' }}>Tidak Layak</option>
                                {{-- <option value="">Jakarta</option> --}}
                            </select>
                        </div>

                       

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" wire:click="store_saringan">Save</button>
                    </div>
                </div>
            </div>
        </div>
        

    @section('script')
  
    <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var modal = new bootstrap.Modal('#uploadModal');
            document.addEventListener('close-upload-modal', () => {
                modal.hide();
            });
            document.addEventListener('show-upload-modal', () => {
                modal.show();
            });

            var modal2 = new bootstrap.Modal('#saringanModal');
            document.addEventListener('show-saringan-modal', () => {
                modal2.show();
            });
            document.addEventListener('close-saringan-modal', () => {
                modal2.hide();
            });

        });
    </script>
    @endsection
</div>
