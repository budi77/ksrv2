<div>
   
<div class="row">
    <div class='fw-bold h3 text-primary'> BALAPAN</div>
    <hr>


    <h4>STANDING</h4>

<div class="table-responsive">
        <table class="table table-primary table-sm table-bordered table-striped text-center">
            <thead class="">
                <tr class="bg-secondary ">
                    <th scope="col" class="bg-warning bg-gradient">#</th>
                    <th scope="col" class="bg-warning bg-gradient">Team</th>
                    <th scope="col" class="bg-warning bg-gradient">E</th>
                    <th scope="col" class="bg-warning bg-gradient">P</th>
                    <th scope="col" class="bg-warning bg-gradient">G</th>
                    <th scope="col" class="bg-warning bg-gradient">4</th>
                    <!-- <th scope="col" class="bg-warning bg-gradient">P</th> -->
                
                </tr>
            </thead>
            <tbody>
            @foreach($standings as $key => $data)
                <tr class="">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->blfirst }}</td>
                    <td>{{ $data->blsecond }}</td>
                    <td>{{ $data->blthird }}</td>
                    <td>{{ $data->blforth }}</td>
                    <!-- <td>{{ $data->standingpoints }}</td> -->
              
                </tr>
                @endforeach
               
            </tbody>
        </table>
</div>


</div>

<div class="row">

@foreach($sports as $sport)
    <div class="col-6">
    
    <h6>{{ $sport->name }}</h6>

    <table
    class="table table-sm table-bordered table-striped"
>
    <thead>
        <tr class="table-dark text-center">
            <th scope="col" width="4%">Rank</th>
            <th scope="col">Kontigen</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        @forelse($results as $d)
        @if($d->sport->name == $sport->name)

        <tr class="text-center">
           
            <td>
                {{ @$d->rank }}
                
            </td>
            <td class="text-primary">{{ @$d->contigent->name}}</td>

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

        @empty<td>No data</td>
        @endforelse
       
    </tbody>
</table>

</div>
@endforeach

    
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
                        <label for="" class="form-label text-dark">KONTIGEN :</label>
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
