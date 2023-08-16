<div>
   
<div class="container-fluid">
    <div class="container">

<div class="row pt-2">
        <div class="col-lg-12">
            <div class="text-center mt-sm-2 mb-2 text-dark-50">
                <div>
                    <a href="index" class="d-inline-block auth-logo">
                        <img src="{{ URL::asset('assets/images/KSR.png') }}" alt="" height="90">
                    </a>
                </div>
                <p class="mt-1 fs-18 fw-bold"> PERTANDINGAN NYANYIAN LAGU PATRIOTIK SEMPENA SAMBUTAN ULANGTAHUN SPRM KE 56 TAHUN 2023</p>
                {{-- <p class="mt-0 fs-20 fw-bold"></p> --}}
            </div>
        </div>
    </div>

    <div class="alert alert-primary alert-dismissible alert-additional fade show" role="alert">
                                                    <div class="alert-body">
                                                        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <i class="ri-error-warning-line fs-16 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5 class="alert-heading">TAHNIAH !</h5>
                                                                <p class="mb-0">Berikut adalah senarai 10 pasukan yang telah layak untuk ke peringkat akhir. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="alert-content">
                                                        <p class="mb-0">*Susunan video adalah tidak mengikut kedudukan semasa saringan.</p>
                                                    </div>
                                                </div>



<div class="row justify-content-center align-items-center g-2">
    @foreach($results as $result)

    <div class="col-md-6">

     <video
                id="vid1"
                class="video-js vjs-default-skin vjs-big-play-centered"
                controls="true"
                preload="auto"
                {{-- responsive="true" --}}
                aspectRatio="9:16"
                
                width="550"
                height="300"
                data-setup='{"playbackRates": [0.25, 0.5, 1, 1.5, 2],"techOrder": ["html5", "other supported tech"]}'
              >
                <source src="{{ $result->extra2 }}" type="video/mp4" />
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a
                  web browser that
                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                    >supports HTML5 video</a
                  >
                </p>
              </video>

              <ul class="list-group">
                <li class="list-group-item"><i class="ri-bill-line align-middle me-2"></i> <span class="fw-bold">NAMA KUMPULAN</span> : {{ $result->nama }}</li>
                <li class="list-group-item"><i class=" ri-earth-line align-middle me-2"></i><span class="fw-bold">BAHAGIAN/NEGERI</span> : {{ $result->department->name }}</li>
                <li class="list-group-item"><i class="ri-mic-line align-middle me-2"></i><span class="fw-bold">TAJUK LAGU</span> : {{ $result->tajuk_lagu }}</li>
                {{-- <li class="list-group-item"><i class="ri-secure-payment-line align-middle me-2"></i>Check uikings theme and give customer support</li> --}}
            </ul>

              {{-- <p class="pt-2"><span class="fw-bold">NAMA KUMPULAN</span> : {{ $result->nama }}</p>
                <p class="pt-0"><span class="fw-bold">BAHAGIAN/NEGERI</span> : {{ $result->department->name }}</p>
                <p class="pt-0"><span class="fw-bold">TAJUK LAGU</span> : {{ $result->tajuk_lagu }}</p> --}}


    
    
    </div>

    @endforeach
    
</div>



  <div class="row pt-3">








  {{-- <div class="table-responsive-md">


    <table class="table align-middle table-nowrap mb-0">
        <thead class="table-dark">
            <tr>
            <th scope="col" style="width:30%; word-break: break-all;">Video</th>
            <th scope="col">Maklumat Kumpulan/Peserta</th>
            
            </tr>
        </thead>
        <tbody class="bg-white">
        @foreach($results as $result)
        <tr>
            
            <td class="align-top">
                 <video
                id="vid1"
                class="video-js vjs-default-skin vjs-big-play-centered"
                controls="true"
                preload="auto"
                responsive="true"
                aspectRatio="9:16"
                
                width="500"
                height="300"
                data-setup='{"playbackRates": [0.25, 0.5, 1, 1.5, 2],"techOrder": ["html5", "other supported tech"]}'
              >
                <source src="{{ $result->extra2 }}" type="video/mp4" />
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a
                  web browser that
                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                    >supports HTML5 video</a
                  >
                </p>
              </video>



                
            </td>
           
            <td class="align-top">
            <p><span class="fw-bold">NAMA KUMPULAN</span> : {{ $result->nama }}</p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : {{ $result->department->name }}</p>
                <p><span class="fw-bold">TAJUK LAGU</span> : {{ $result->tajuk_lagu }}</p>

               

            </td>
            
            
        </tr>
        @endforeach
        
        
        </tbody>
        </table>

</div> --}}

        
        
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

            <script>
            var player = videojs('vid1', {
                responsive: true
                });
            </script>
        @endsection

    </div>

    </div>


    </div>
