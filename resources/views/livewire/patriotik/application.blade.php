<div>
    @section('title') @lang('translation.starter')  @endsection
    @component('components.breadcrumb')
    @slot('li_1') Pages @endslot
    @slot('title') SENARAI BORANG PENYERTAAN @endslot
    @endcomponent


  <div class="row">

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
                <div class="hstack gap-3 fs-15">
                    <ul class="list-inline hstack gap-2 mb-0">
                                               
                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View">
                            <a href="{{ route('pdf.patriotik', $result->id) }}" class="link-success" target="_blank"><i class="ri-printer-line"></i></a>
                        </li>
                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit">
                            <a href="javascript:void(0);" class="view-item-btn" wire:click="upload('{{ $result->id }}')"><i class="ri-upload-line align-bottom text-muted"></i></a>
                        </li>
                        {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit">
                            <a class="edit-item-btn" href="javascript:void(0);" wire:click="confirm('{{ $result->id }}')"><i class="ri-delete-bin-fill align-bottom text-danger"></i></a>
                        </li> --}}
                      
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
                          {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                        </div>

                        {{-- <form wire:submit.prevent="store_video" enctype="multipart/form-data">
                            <input type="file" class="form-control" wire:model="video">
                         
                            <br>
                            <button type="submit" class="btn btn-info">Upload Video</button>
                        </form> --}}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" wire:click="store_video">Save</button>
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

            // var modal2 = new bootstrap.Modal('#list');
            // document.addEventListener('show-list', () => {
            //     modal2.show();
            // });
            // document.addEventListener('hide-list', () => {
            //     modal2.hide();
            // });

        });
    </script>
    @endsection
</div>
