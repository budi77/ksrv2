<div>

    <div class="row">
        <div class="col-4">
            <div class="card">
                {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> --}}
                <div class="card-body">
                    <h4 class="card-title">MAKLUMAT ACARA SUKAN</h4>
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="name">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Venue</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="venue">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Icon</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="icon">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">PIC 1</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="pic1">
                    </div>
                    
                   
                   
                    <button type="button" class="btn btn-info" wire:click="store">Hantar</button>
                </div>

            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SUKAN</h4>
                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Nama Sukan</th>
                                    <th scope="col">Venue</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">PIC 1</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse(@$results as $key => $data)
                                <tr class="">
                                    <td>{{ $data->name }}</td>
                                    <td>{{ @$data->venue }}</td>
                                    <td>{{ @$data->icon }}</td>
                                    <td>{{ @$data->pic1 }}</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('{{ $data->id }}')">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                           
                                           
                                        </ul>
                                    </td>
                                </tr>
                                @empty
                                <td>No data</td>
                                @endforelse
                               
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

          
        </div>

    </div>
</div>


