<div>
   
<div class="row">
    <div class='fw-bold h3 text-primary'> BOWLING</div>
    <hr>
    <h4><i class="las la-table"></i> KEDUDUKAN PASUKAN</h4>

    <div class="row">
        <div class="col-4">

       <div class="card card-light">
            <div class="card-header bg-light">
                <h6 class="card-title mb-0 ">KEPUTUSAN</h6>
            </div>
        <div class="card-body">

        <div class="mb-3">
            <label for="" class="form-label text-dark">Rank</label>
            <input
                type="text"
                class="form-control"
                name=""
                id=""
                aria-describedby="helpId"
                placeholder=""
                wire:model="rank"
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label text-dark">Kontigen</label>
                <select
                        class="form-select"
                        name=""
                        id=""
                        wire:model="contigent_id"
                    >
                        <option selected>-- Pilih --</option>
                        @foreach($contigents as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label text-dark">Points</label>
            <input
                type="text"
                class="form-control"
                name=""
                id=""
                aria-describedby="helpId"
                placeholder=""
                wire:model="points"
            />
        </div>

        
        
            
        </div>
       </div>
       
       <button type="button" class="btn btn-primary" wire:click="store">Hantar</button>

            
        </div>
        <div class="col-8">

        <div
        class="table-responsive"
    >
        <table
            class="table table-bordered"
        >
            <thead>
                <tr class="bg-info">
                    <th scope="col" width="5%">RANK</th>
                    <th scope="col">TEAM</th>
                    <th scope="col" class="text-center">POINTS</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $r)
                <tr class="">
                    <td scope="row">{{ @$r->rank }}</td>
                    <td>{{ @$r->contigent->name }}</td>
                    <td class="text-center">{{ @$r->points }}</td>
                    <td class="text-center">
                    <ul class="list-inline hstack gap-1 mb-0 text-end">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Update Rank">
                        <a href="javascript:void(0);" class="text-success d-inline-block" wire:click="edit('{{ $r->id }}')">
                            <i class="ri-edit-box-line fs-18"></i>
                        </a>
                                                
                    </li>
                           
                                           
                </ul>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
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
                
                    <label for="" class="form-label">Rank</label>
                    <input
                        type="text"
                        class="form-control"
                        name=""
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        wire:model="rank"
                    />
                </div>
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

                <div class="mb-3">
                    <label for="" class="form-label">Points</label>
                    <input
                        type="text"
                        class="form-control"
                        name=""
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        wire:model="points"
                    />
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
