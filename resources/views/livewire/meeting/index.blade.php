<div>
    @section('title') KSR ARENA @endsection
    @component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title') MESYUARAT AGUNG KSR 2023  @endslot
    @endcomponent


    <div class="row">

    
  <div class="flex-shrink-0 pb-2">
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm" wire:click="generatePDF"><i class="ri-download-2-fill align-middle me-1"></i> Muat Turun Kehadiran</a>
                            </div>



<div class="card">
                                <div class="card-body">
                                    {{-- <p class="text-muted">Use <code>nav-tabs</code> class to generate a default tabbed interface.</p> --}}
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-tabs mb-3" role="tablist">
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">
                                                Pendaftaran
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#product1" role="tab" aria-selected="false" tabindex="-1">
                                                Senarai Kehadiran
                                            </a>
                                        </li>
                                      
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content  text-muted">
                                        <div class="tab-pane active show" id="home" role="tabpanel">
                                            <livewire:meeting.register>

                                            
                                        </div>
                                        <div class="tab-pane" id="product1" role="tabpanel">
                                            <livewire:meeting.attendance>

                                        </div>
                                        
                                    </div>
                                </div><!-- end card-body -->
                            </div>








    
</div>
