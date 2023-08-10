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
                    <p class="mt-1 fs-18 fw-bold"> PASUKAN YANG LAYAK KE PERINGKAT AKHIR PERTANDINGAN NYANYIAN LAGU PATRIOTIK SEMPENA SAMBUTAN ULANGTAHUN SPRM KE 56 TAHUN 2023.</p>
                    {{-- <p class="mt-0 fs-20 fw-bold"></p> --}}
                </div>
            </div>
        </div>
    

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col" width="50%"></th>
                            <th scope="col">Video</th>
                            {{-- <th scope="col">Column 3</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">KOIR PATA TIMO KELAH BOH SPRM TERENGGANU</td>
                            <td>
                                <video
                                    id="my-video"
                                    class="video-js"
                                    controls
                                    preload="auto"
                                    width="500"
                                    height="300"
                                    {{-- poster="" --}}
                                    data-setup="{}"
                                >
                                    <source src="{{ URL::asset('assets/video/P01.mp4') }}" type="video/mp4" />
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
                            {{-- <td>R1C3</td> --}}
                        </tr>
                        <tr class="">
                            <td scope="row">Item</td>
                            <td>
                                <video
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    width="500"
    height="300"
    {{-- poster="" --}}
    data-setup="{}"
  >
    <source src="{{ URL::asset('assets/video/P02.mp4') }}" type="video/mp4" />
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
                            {{-- <td>Item</td> --}}
                        </tr>


                        <tr class="">
                            <td scope="row">Item</td>
                            <td>

                                <video
  id="my-video"
  class="video-js"
  controls
  preload="auto"
  width="500"
  height="300"
  {{-- poster="" --}}
  data-setup="{}"
>
  <source src="{{ URL::asset('assets/video/P03.mp4') }}" type="video/mp4" />
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
                            {{-- <td>Item</td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
            

  
    

    


  


</div>

  
    
    
    
    
    
    
    </div>