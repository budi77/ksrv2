<div>

    <div class="row">
        <div class="col-4">
            <div class="card">
                {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> --}}
                <div class="card-body">
                    <h4 class="card-title">MAKLUMAT KONTIGEN</h4>
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="name">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Kod</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="code">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Ahli</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="members">
                    </div>
                    <div class="mb-3">
                      <!-- <label for="" class="form-label">VIP</label> -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="" wire:model="vip"/>
                        <label class="form-check-label" for=""> VIP </label>
                      </div>
                     
                      
                  
                    </div>
                    
                   
                   
                    <button type="button" class="btn btn-info" wire:click="store">Hantar</button>
                </div>

            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SENARAI KONTIGEN</h4>
                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kod</th>
                                    <th scope="col">Ahli</th>
                                    <th scope="col">VIP</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse(@$results as $key => $data)
                                <tr class="">
                                    <td>{{ $data->name }}</td>
                                    <td>{{ @$data->code }}</td>
                                    <td>{{ @$data->ext1 }}</td>
                                    <td>{{ @$data->vip }}</td>
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


