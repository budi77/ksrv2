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
                                                                <p class="mb-0">Berikut adalah keputusan akhir PERTANDINGAN LAGU PATRIOTIK SAMBUTAN ULANGTAHUN SPRM KE 56 </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="alert-content">
                                                        <p class="mb-0">*Susunan video adalah tidak mengikut kedudukan semasa saringan.</p>
                                                    </div> --}}
    </div>







  <div class="row pt-3">


  <div class="table-md">


    <table class="table align-middle  mb-0">
        {{-- <thead class="table-dark">
            <tr>
            <th scope="col" style="width:30%; word-break: break-all;">Video</th>
            <th scope="col">Maklumat Kumpulan/Peserta</th>
            
            </tr>
        </thead> --}}
        <tbody class="bg-white">
        {{-- @foreach($results as $result) --}}
        <tr>
            
            <td class="align-top">
                 <video
                id="vid1"
                class="video-js vjs-default-skin vjs-big-play-centered"
                controls="true"
                preload="auto"
                responsive="true"
                aspectRatio="9:16"
                
                width="400"
                height="300"
                data-setup='{"playbackRates": [0.25, 0.5, 1, 1.5, 2],"techOrder": ["html5", "other supported tech"]}'
              >
                <source src="https://ksr.sprm.gov.my/storage/documents/Patriotik2023/2.mp4" type="video/mp4" />
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
                <p><span class="fw-bold">
                   <img src="https://cdn-icons-png.flaticon.com/128/2583/2583344.png" class="img-fluid rounded-top" alt="" width="100" height="200"> 
                </span>  </p>
            <p><span class="fw-bold">NAMA KUMPULAN</span> : JAUHAR</p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : SPRM JOHOR</p>
                <p><span class="fw-bold">TAJUK LAGU</span> : SEJAHTERA MALAYSIA </p>

               

            </td>
            
            
        </tr>

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
                <source src="https://ksr.sprm.gov.my/storage/documents/Patriotik2023/9.mp4" type="video/mp4" />
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
                <p><span class="fw-bold">
                    <img src="https://cdn-icons-png.flaticon.com/128/2583/2583319.png" class="img-fluid rounded-top" alt="" width="100" height="200"> 
                 </span>  </p>
            <p><span class="fw-bold">NAMA KUMPULAN</span> : THE MELODIOUS </p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : SPRM NEGERI SEMBILAN </p>
                <p><span class="fw-bold">TAJUK LAGU</span> : MALAYSIA BERJAYA </p>

               

            </td>
            
            
        </tr>
        {{-- @endforeach --}}

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
                <source src="https://ksr.sprm.gov.my/storage/documents/Patriotik2023/1.mp4" type="video/mp4" />
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
                <p><span class="fw-bold">
                    <img src="https://cdn-icons-png.flaticon.com/128/2583/2583434.png" class="img-fluid rounded-top" alt="" width="100" height="200"> 
                 </span>  </p>
            <p><span class="fw-bold">NAMA KUMPULAN</span> : 7 DAYS CHOIR</p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : BAHAGIAN KHIDMAT PENGURUSAN</p>
                <p><span class="fw-bold">TAJUK LAGU</span> : GEMILANG </p>

               

            </td>
            
            
        </tr>

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
                <source src="https://ksr.sprm.gov.my/storage/documents/Patriotik2023/5.mp4" type="video/mp4" />
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
                <p><span class="fw-bold">
                    <div class="alert alert-secondary alert-dismissible bg-secondary text-white alert-label-icon fade show" role="alert">
                        <i class="ri-check-double-line label-icon"></i><strong>SAGUHATI</strong>
                    </div>
                 </span>  </p>
            <p><span class="fw-bold">NAMA KUMPULAN</span> : AWANG MAN </p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : SPRM SARAWAK </p>
                <p><span class="fw-bold">TAJUK LAGU</span> : BAHTERA MERDEKA </p>

               

            </td>
            
            
        </tr>

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
                <source src="https://ksr.sprm.gov.my/storage/documents/Patriotik2023/7.mp4" type="video/mp4" />
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
                <p><span class="fw-bold">
                    <div class="alert alert-secondary alert-dismissible bg-secondary text-white alert-label-icon fade show" role="alert">
                        <i class="ri-check-double-line label-icon"></i><strong>SAGUHATI</strong>
                    </div>
                 </span>  </p>
            <p><span class="fw-bold">NAMA KUMPULAN</span> : DIRGAHAYU BPMP </p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : BAHAGIAN PEMERIKSAAN DAN PERUNDINGAN</p>
                <p><span class="fw-bold">TAJUK LAGU</span> : TANAH PUSAKA </p>

               

            </td>
            
            
        </tr>

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
                <source src="https://ksr.sprm.gov.my/storage/documents/Patriotik2023/6.mp4" type="video/mp4" />
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
                <p><span class="fw-bold">
                    <div class="alert alert-secondary alert-dismissible bg-secondary text-white alert-label-icon fade show" role="alert">
                        <i class="ri-check-double-line label-icon"></i><strong>SAGUHATI</strong>
                    </div>
                 </span>  </p>
            <p><span class="fw-bold">NAMA KUMPULAN</span> : THE BCP's </p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : BAHAGIAN KECEMERLANGAN DAN PROFESIONALISME </p>
                <p><span class="fw-bold">TAJUK LAGU</span> : MALAYSIA BARU </p>

               

            </td>
            
            
        </tr>

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
                <source src="https://ksr.sprm.gov.my/storage/documents/Patriotik2023/8.mp4" type="video/mp4" />
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
                <p><span class="fw-bold">
                    <div class="alert alert-secondary alert-dismissible bg-secondary text-white alert-label-icon fade show" role="alert">
                        <i class="ri-check-double-line label-icon"></i><strong>SAGUHATI</strong>
                    </div>
            <p><span class="fw-bold">NAMA KUMPULAN</span> : K-FIRST </p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : BAHAGIAN KESELAMATAN </p>
                <p><span class="fw-bold">TAJUK LAGU</span> : LEGENDA</p>

               

            </td>
            
            
        </tr>

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
                <source src="https://ksr.sprm.gov.my/storage/documents/Patriotik2023/10.mp4" type="video/mp4" />
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
                <p><span class="fw-bold">
                    <div class="alert alert-secondary alert-dismissible bg-secondary text-white alert-label-icon fade show" role="alert">
                        <i class="ri-check-double-line label-icon"></i><strong>SAGUHATI</strong>
                    </div>
                 </span>  </p>
            <p><span class="fw-bold">NAMA KUMPULAN</span> : SYAHRIMAN</p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : BAHAGIAN PENDIDIKAN MASYARAKAT </p>
                <p><span class="fw-bold">TAJUK LAGU</span> : GEMURUH JIWA </p>

               

            </td>
            
            
        </tr>

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
                <source src="https://ksr.sprm.gov.my/storage/documents/Patriotik2023/3.mp4" type="video/mp4" />
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
                <p><span class="fw-bold">
                    <div class="alert alert-secondary alert-dismissible bg-secondary text-white alert-label-icon fade show" role="alert">
                        <i class="ri-check-double-line label-icon"></i><strong>SAGUHATI</strong>
                    </div>
                 </span>  </p>
            <p><span class="fw-bold">NAMA KUMPULAN</span> : SIMFONI REKOD</p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : BAHAGIAN PENGURUSAN REKOD & MAKLUMAT </p>
                <p><span class="fw-bold">TAJUK LAGU</span> : STANDING IN THE EYES OF THE WORLD </p>

               

            </td>
            
            
        </tr>

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
                <source src="https://ksr.sprm.gov.my/storage/documents/Patriotik2023/4.mp4" type="video/mp4" />
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
                <p><span class="fw-bold">
                    <div class="alert alert-secondary alert-dismissible bg-secondary text-white alert-label-icon fade show" role="alert">
                        <i class="ri-check-double-line label-icon"></i><strong>SAGUHATI</strong>
                    </div>
                 </span>  </p>
            <p><span class="fw-bold">NAMA KUMPULAN</span> : SUARA BAK</p>
                <p><span class="fw-bold">BAHAGIAN/NEGERI</span> : BAHAGIAN ANALISA KEWANGAN </p>
                <p><span class="fw-bold">TAJUK LAGU</span> : SETIA </p>

               

            </td>
            
            
        </tr>
        
        
        
        </tbody>
        </table>

</div>


{{-- <div class="row justify-content-center align-items-center g-2">
    @foreach($results as $result)

    <div class="col-md-6">

     <video
                id="vid1"
                class="video-js vjs-default-skin vjs-big-play-centered"
                controls="true"
                preload="auto"
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
            </ul>

             

    
    
    </div>

    @endforeach
    
</div> --}}

        
        
        <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        {{-- <div wire:ignore class="modal fade" id="uploadModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
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
         --}}
        
       

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
