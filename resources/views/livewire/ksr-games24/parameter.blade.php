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
                                            <a class="nav-link active" data-bs-toggle="tab" href="#arrow-overview" role="tab" aria-selected="true">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant"></i></span>
                                                <span class="d-none d-sm-block">Acara Sukan</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#arrow-profile" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-account"></i></span>
                                                <span class="d-none d-sm-block">Kontijen</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#arrow-contact" role="tab" aria-selected="false" tabindex="-1">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-email"></i></span>
                                                <span class="d-none d-sm-block">Kumpulan</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="arrow-overview" role="tabpanel">
                                        <livewire:ksr-games24.sports /> 

                                        </div>
                                        <div class="tab-pane" id="arrow-profile" role="tabpanel">
                                        <livewire:ksr-games24.contigent /> 

                                        </div>
                                        <div class="tab-pane" id="arrow-contact" role="tabpanel">
                                        <livewire:ksr-games24.grouping /> 

                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div>


</div>



</div>
