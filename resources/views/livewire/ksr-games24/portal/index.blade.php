<div>



<div class="container">

<div class="row">
    <div class="text-center">

        <img src="{{ URL::asset('assets/images/KSR.png') }}" alt="" class="rounded avatar-xl" >
    </div>

<div class="text-center h4 pt-4">KSR GAMES 2024</div>
<p class="text-center h4 text-muted">PROGRAM</p>


    <!-- Buttons Grid -->
<div class="d-grid gap-2 pt-2" >
    <button class="btn btn-warning bg-gradient bg-animation" type="button">ATURCARA MAJLIS</button>
    <a class="btn btn-primary bg-gradient bg-animation" href="{{route('ksrgames24.program')}}" role="button">PROGRAM</a>
    <!-- <a class="btn btn-primary" href="{{route('ksrgames24.program')}}" role="button">PROGRAM</a> -->
    <a class="btn btn-danger bg-gradient bg-animation" href="{{route('ksrgames24.program')}}" role="button">SYARAT-SYARAT</a>
    <a class="btn btn-info bg-gradient bg-animation" href="{{route('ksrgames24.program')}}" role="button">SENARAI UNTUK DIHUBUNGI</a>
    <a class="btn btn-warning bg-gradient bg-animation"     data-bs-toggle="modal" data-bs-target="#solat" role="button">WAKTU SOLAT</a>

    
</div>

</div>

</div>

<!-- Modal trigger button -->
<!-- <button
    type="button"
    class="btn btn-primary btn-lg"
    data-bs-toggle="modal"
    data-bs-target="#solat"
>
    Launch
</button> -->

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div
    class="modal fade"
    id="solat"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    
    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-fullscreen"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    WAKTU SOLAT UNTUK KAWASAN SHAH ALAM
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
            <div class="text-center">
                <iframe marginheight="0" marginwidth="0" scrolling="no"  src="https://www.e-solat.gov.my/portalassets/www2/roxy.php?kod=SGR01&lang=BM&url=http:/www.islam.gov.my" width=480 height=360 frameborder=0></iframe>

            </div>

            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Tutup
                </button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
            </div>
        </div>
    </div>
</div>

<!-- Optional: Place to the bottom of scripts -->




</div>
