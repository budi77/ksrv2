<div>

    <div class="row">
        <div class="col-4">
            <div class="card card-light">
                <div class="card-body">
                    <h4 class="card-title text-dark">MAKLUMAT KONTIGEN</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                            <label for="" class="form-label text-dark">Kumpulan</label>
                            <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="name">
                            </div>
                        </div>
                        <div class="col-6">
                                <div class="mb-3">
                            <label for="" class="form-label text-dark">Order</label>
                            <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="order">
                            </div>

                        </div>
                    </div>

                    <!-- {{ $sports }} -->

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
                        <label for="" class="form-label text-dark">Kontigen</label>
                        <select
                            class="form-select"
                            wire:model="contigent_id"
                        >
                            <option selected>-- Sila Pilih --</option>
                            @foreach($contigents as $index => $data)
                                <option value="{{$data->id}}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    
                   
                    <!-- <div class="mb-3">
                      <label for="" class="form-label">Ahli</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="members">
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="" wire:model="vip"/>
                        <label class="form-check-label" for=""> VIP </label>
                      </div>
                     
                      
                  
                    </div> -->
                    
                   
                   
                    <button type="button" class="btn btn-primary btn-block" wire:click="store">Hantar</button>
                </div>

            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SENARAI KUMPULAN MENGIKUT SUKAN</h4>
                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">Sukan</th>
                                    <th scope="col">Kumpulan</th>
                                    <th scope="col">Kedudukan</th>
                                    <th scope="col">Nama Pasukan</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse(@$results as $key => $data)
                                <tr class="">
                                    <td>{{ @$data->sport->name }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->order }}</td>
                                    <td>{{ @$data->contigent->code }}</td>
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



