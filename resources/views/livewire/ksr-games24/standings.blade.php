<div>
    
@section('title')
    STANDING
@endsection

@component('components.breadcrumb')
    @slot('li_1')
        Dashboard
    @endslot
    @slot('title')
        Standing
    @endslot
@endcomponent

<div class="row">
    <div class="card">
        <div class="card-body">

        <div class="row">

        <h4>STANDING</h4>

        <div class="table-responsive">
                <table class="table table-warning table-bordered table-striped text-center">
                    <thead class="">
                        <tr class="bg-secondary ">
                            <th scope="col" class="bg-warning bg-gradient">#</th>
                            <th scope="col" class="bg-warning bg-gradient">PASUKAN</th>
                            <th scope="col" class="bg-warning bg-gradient">EMAS</th>
                            <th scope="col" class="bg-warning bg-gradient">PERAK</th>
                            <th scope="col" class="bg-warning bg-gradient">GANGSA</th>
                            <th scope="col" class="bg-warning bg-gradient">KE-EMPAT</th>
                            <th scope="col" class="bg-warning bg-gradient">MATA</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($standings as $key => $data)
                        <tr class="">
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->first }}</td>
                            <td>{{ $data->second }}</td>
                            <td>{{ $data->third }}</td>
                            <td>{{ $data->forth }}</td>
                            <td>{{ $data->standingpoints }}</td>
                      
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>


        



        </div>

        <hr>
        <div class="row">

        <div class="col-4">

        <div class="card bg-light">
            <div class="card-body">
                <!-- <h4 class="card-title">Title</h4> -->

                <div class="mb-3">
                        <label for="" class="form-label text-dark">Sukan</label>
                        <select
                            class="form-select"
                            wire:model="sport_id"
                        >
                            <option selected>-- Sila Pilih --</option>
                            @foreach($sports as $index => $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                </div>

                <div class="mb-3">
                        <label for="" class="form-label text-dark">Rank</label>
                        <select
                            class="form-select"
                            wire:model="rank"
                        >
                            <option selected>-- Sila Pilih --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                        </select>
                </div>

                <div class="mb-3">
                        <label for="" class="form-label text-dark">Kontijen</label>
                        <select
                            class="form-select"
                            wire:model="contigent_id"
                        >
                            <option selected>-- Sila Pilih --</option>
                            @foreach($contigents as $index => $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                </div>


                <button type="button" class="btn btn-primary" wire:click="store">Hantar</button>



                
            </div>
        </div>
        

        </div>
        <div class="col-8">

        <div class="row">

        @foreach($sports as $sport)
            <div class="col-6">
            
            <h5>{{ $sport->name }}</h5>

            <table
            class="table table-sm table-bordered table-striped"
        >
            <thead>
                <tr class="table-dark text-center">
                    
                    <th scope="col" width="4%">Rank</th>
                    <th scope="col">Kontijen</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($results as $d)
                @if($d->sport->name == $sport->name)
                <tr class="text-center">
                    
                    <td>
                        <a href="javascript:void(0);" wire:click="update_rank('{{ $d->id }}')">{{ @$d->rank }}</a>
                        
                    
                    </td>
                    <td class="text-primary fw-bold">{{ @$d->contigent->name}}</td>
                    
                    <td width="25%">
                    <ul class="list-inline hstack gap-1 mb-0 text-end">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Update Rank">
                                                <a href="javascript:void(0);" class="text-success d-inline-block" wire:click="update_rank('{{ $d->id }}')">
                                                    <i class="ri-numbers-line fs-18"></i>
                                                </a>
                                                
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('{{ $d->id }}')">
                                                    <i class="ri-edit-box-line fs-18"></i>
                                                </a>
                                                
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete">
                                               
                                                <a href="javascript:void(0);" class="text-danger d-inline-block" wire:click="delete('{{ $d->id }}')">
                                                    <i class="ri-delete-bin-line fs-18"></i>
                                                </a>
                                            </li>
                                            
                                           
                                           
                                        </ul>
                    </td>
                </tr>
                @endif
                @empty<tr>No data</tr>
                @endforelse
               
            </tbody>
        </table>

        </div>
        @endforeach

            
        </div>

       


        </div>

        </div>
           
        </div>
    </div>
    
</div>


<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div wire:ignore.self
    class="modal fade"
    id="update"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    
    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    KEMASKINI 
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">

            <h6>SUKAN : {{@$name}}</h6>
            <h6>RANK : {{@$rank}}</h6>

              <div class="mb-3">
                        <label for="" class="form-label text-dark">KONTIJEN :</label>
                        <select
                            class="form-select"
                            wire:model="contigent_id"
                        >
                            <option selected>-- Sila Pilih --</option>
                            @isset($teams)
                            @foreach($teams as $index => $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                            @endisset
                        </select>
                </div>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Close
                </button>
                <button type="button" class="btn btn-primary" wire:click="store">Save</button>
            </div>
        </div>
    </div>
</div>




@section('script')
       

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                var modal = new bootstrap.Modal('#update');
                document.addEventListener('close-modal', () => {
                    modal.hide();
                });
                document.addEventListener('show-modal', () => {
                    modal.show();
                });

              

            });
        </script>
    @endsection


</div>
