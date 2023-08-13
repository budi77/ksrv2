<div>
    @section('title') @lang('translation.starter')  @endsection
    @component('components.breadcrumb')
    @slot('li_1') Pages @endslot
    @slot('title') VIDEO PENYERTAAN @endslot
    @endcomponent


  <div class="row">

    <table class="table align-middle table-nowrap mb-0">
        <thead class="table-dark">
            <tr>
            <th></th>
            <th scope="col">Kategori</th>
            <th scope="col" style="width:30%; word-break: break-all;">Video</th>
            {{-- <th scope="col">Bahagian/Negeri</th> --}}
            {{-- <th scope="col">PIC</th> --}}
            {{-- <th scope="col">Telefon</th> --}}
            {{-- <th scope="col">Lagu</th> --}}
            {{-- <th scope="col">Video</th> --}}
            {{-- <th scope="col">Tarikh Daftar</th> --}}
            {{-- <th scope="col"></th> --}}
            </tr>
        </thead>
        <tbody class="bg-white">
        @foreach($results as $result)
        <tr>
            <td class="fw-bold align-top">
                P{{ sprintf('%02d',$result['id']) }}
            </td>
            <td class="align-top">
                {{-- <p>{{ $result->penyertaan }}</p> --}}
                <p><span class="fw-bold">NAMA KUMPULAN</span> : {{ $result->nama }}</p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : {{ $result->department->name }}</p>
                <p><span class="fw-bold">TAJUK LAGU</span> : {{ $result->tajuk_lagu }}</p>
            </td>
           
            <td>

                <video
                id="my-video"
                class="video-js"
                controls
                preload="auto"
                width="480"
                height="250"
                {{-- poster="MY_VIDEO_POSTER.jpg" --}}
                data-setup="{}"
              >
                <source src="{{ $result->extra2 }}" type="video/mp4" />
                {{-- <source src="MY_VIDEO.webm" type="video/webm" /> --}}
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a
                  web browser that
                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                    >supports HTML5 video</a
                  >
                </p>
              </video>




            </td>
            
            {{-- <td>
                <div class="hstack gap-3 fs-15">
                    <ul class="list-inline hstack gap-2 mb-0">
                                               
                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View">
                            <a href="javascript:void(0);" class="view-item-btn" wire:click="upload('{{ $result->id }}')"><i class="ri-eye-fill align-bottom text-muted"></i></a>
                        </li>
                        
                      
                    </ul>
                </div>
            </td> --}}
        </tr>
        @endforeach
        
        
        </tbody>
        </table>


        
        
        <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        <div wire:ignore class="modal fade" id="uploadModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Body
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        
        
       

        @section('script')
            {{-- <script src="{{ URL::asset('assets/libs/list.js/list.js.min.js') }}"></script> --}}
            {{-- <script src="{{ URL::asset('assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script> --}}
            {{-- <script src="{{ URL::asset('assets/js/pages/tasks-list.init.js') }}"></script> --}}
            {{-- <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script> --}}
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
