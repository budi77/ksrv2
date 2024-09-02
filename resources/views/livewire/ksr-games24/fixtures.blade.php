<div>
@section('title') KSR GAMES 24 @endsection
    @component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title') KSR GAMES 2024  @endslot
@endcomponent


<div class="row">

<div class="card">
                                <div class="card-body">
                                    <!-- <p class="text-muted">Use <code>arrow-navtabs </code>class to create arrow nav tabs.</p> -->
                                    <ul class="nav nav-pills arrow-navtabs nav-success bg-light mb-3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#bolasepak" role="tab" aria-selected="true">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant"></i></span>
                                                <span class="d-none d-sm-block">BOLA SEPAK</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#bola-jaring" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-account"></i></span>
                                                <span class="d-none d-sm-block">BOLA JARING</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#badminton" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">BADMINTON</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#bola-tampar-lelaki" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">BOLA TAMPAR LELAKI</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#bola-tampar-wanita" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">BOLA TAMPAR WANITA</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#ping-pong" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">PING PONG</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#sepak-takraw" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">SEPAK TAKRAW</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#futsal" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">FUTSAL</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#karom" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">KAROM</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#balapan" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">BALAPAN</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="bolasepak" role="tabpanel">
                                        <livewire:ksr-games24.bola-sepak.games /> 

                                        </div>
                                        <div class="tab-pane" id="bola-jaring" role="tabpanel">
                                        <livewire:ksr-games24.bola-jaring.games /> 

                                        </div>
                                        <div class="tab-pane" id="badminton" role="tabpanel">
                                        <livewire:ksr-games24.badminton.games /> 

                                        </div>
                                        <div class="tab-pane" id="bola-tampar-lelaki" role="tabpanel">
                                        <livewire:ksr-games24.bola-tampar-lelaki.games /> 

                                        </div>
                                        <div class="tab-pane" id="bola-tampar-wanita" role="tabpanel">
                                        <livewire:ksr-games24.bola-tampar-wanita.games /> 

                                        </div>
                                        <div class="tab-pane" id="ping-pong" role="tabpanel">
                                        <livewire:ksr-games24.ping-pong.games /> 

                                        </div>
                                        <div class="tab-pane" id="sepak-takraw" role="tabpanel">
                                        <livewire:ksr-games24.sepak-takraw.games /> 

                                        </div>
                                        <div class="tab-pane" id="futsal" role="tabpanel">
                                        <livewire:ksr-games24.futsal.games /> 

                                        </div>
                                        <div class="tab-pane" id="balapan" role="tabpanel">
                                        <livewire:ksr-games24.balapan.games /> 

                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div>


</div>



</div>
