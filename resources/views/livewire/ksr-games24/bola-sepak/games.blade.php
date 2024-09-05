<div>

<div class="row">

<div class='fw-bold h3 text-primary'> BOLA SEPAK</div>
<hr>
<div class="row">
    <h4><i class="las la-table"></i> KEDUDUKAN PASUKAN</h4>

    <div class="col-6 pt-2">
    <h6>KUMPULAN A</h5>
            <div class="table-responsive">
                <table class="table table-secondary table-bordered table-striped text-center">
                    <thead class="bg-secondary ">
                        <tr class="bg-secondary ">
                            <th scope="col" class="bg-secondary bg-gradient">#</th>
                            <th scope="col" class="bg-secondary bg-gradient">Team</th>
                            <th scope="col" class="bg-secondary bg-gradient">W</th>
                            <th scope="col" class="bg-secondary bg-gradient">D</th>
                            <th scope="col" class="bg-secondary bg-gradient">L</th>
                            <th scope="col" class="bg-secondary bg-gradient">GF</th>
                            <th scope="col" class="bg-secondary bg-gradient">GA</th>
                            <th scope="col" class="bg-secondary bg-gradient">GD</th>
                            <th scope="col" class="bg-secondary bg-gradient">P</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($a as $key => $data)
                        <tr class="">
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->bswon }}</td>
                            <td>{{ $data->bstied }}</td>
                            <td>{{ $data->bslost }}</td>
                            <td>{{ $data->bsgoal }}</td>
                            <td>{{ $data->bsagainst }}</td>
                            <td>{{ $data->bsgoaldifference  }} </td>
                            <td>{{ $data->bspoints }}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>


    </div>
   
    <div class="col-6 pt-2">

    <h6>KUMPULAN B</h5>
            <div class="table-responsive">
                <table class="table table-warning table-bordered table-striped text-center">
                    <thead >
                        <tr>
                            <th scope="col" class="bg-warning bg-gradient">#</th>
                            <th scope="col" class="bg-warning bg-gradient">Team</th>
                            <th scope="col" class="bg-warning bg-gradient">W</th>
                            <th scope="col" class="bg-warning bg-gradient">D</th>
                            <th scope="col" class="bg-warning bg-gradient">L</th>
                            <th scope="col" class="bg-warning bg-gradient">GF</th>
                            <th scope="col" class="bg-warning bg-gradient">GA</th>
                            <th scope="col" class="bg-warning bg-gradient">GD</th>
                            <th scope="col" class="bg-warning bg-gradient">P</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($b as $key => $data)
                        <tr class="">
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->bswon }}</td>
                            <td>{{ $data->bstied }}</td>
                            <td>{{ $data->bslost }}</td>
                            <td>{{ $data->bsgoal }}</td>
                            <td>{{ $data->bsagainst }}</td>
                            <td>{{ $data->bsgoaldifference  }} </td>
                            <td>{{ $data->bspoints }}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
    </div>
</div>





</div>

<hr>

<div class="row">
    <div class="col-4">
        <div class="card card-light">
            <div class="card-header bg-light">
                    <h6 class="card-title mb-0 ">MAKLUMAT PERLAWANAN</h6>
            </div> 
            <div class="card-body">
            <div class="mb-3">
                            <label for="" class="form-label text-dark">Peringkat</label>
                            <select class="form-select" wire:model="stage">
                                <option selected>--Sila Pilih--</option>
                                <option value="Kumpulan">Kumpulan</option>
                                <option value="Suku Akhir">Suku Akhir</option>
                                <option value="Separuh Akhir">Separuh Akhir</option>
                                <option value="Tempat 3 / 4">Tempat ke 3 / 4</option>
                                <option value="Akhir">Akhir</option>
                            </select>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label text-dark">Order</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            wire:model="order"
                        />
                    </div>
                    
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label text-dark">Court</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            wire:model="court"
                        />
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label text-dark">Date</label>
                        <select
                            class="form-select "
                            name=""
                            id=""
                            wire:model="mdate"
                        >
                            <option selected>-- Pilih --</option>
                            <option value="27/9">28/9</option>
                            <option value="28/9">29/9</option>
                            <option value="29/9">30/9</option>
                        </select>
                    </div>
                    
                    
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label text-dark">Time</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            wire:model="mtime"
                        />
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label text-dark">Kontigen 1</label>
                    <select
                        class="form-select"
                        name=""
                        id=""
                        wire:model="contigent1"
                    >
                        <option selected>-- Pilih --</option>
                        @foreach($contigents as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                </div>

                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label text-dark">Keputusan 1</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            wire:model="result1"
                        />
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                <div class="mb-3">
                    <label for="" class="form-label text-dark">Kontigen 2</label>
                    <select
                        class="form-select"
                        name=""
                        id=""
                        wire:model="contigent2"
                    >
                        <option selected>-- Pilih --</option>
                        @foreach($contigents as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                </div>

                </div>
                <div class="col-6">

                <div class="mb-3">
                    <label for="" class="form-label text-dark">Keputusan 2</label>
                    <input
                        type="text"
                        class="form-control"
                        name=""
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        wire:model="result2"
                    />
                </div>
                
                </div>
            </div>
              
                
           
                <button type="button" class="btn btn-primary" wire:click="store">Hantar</button>

                
            </div>
        </div>

    </div>
    <div class="col-8">

    <h4>JADUAL PERLAWANAN</h4>

    <div
        class="table-responsive"
    >
        <table
            class="table table-sm table-bordered table-striped"
        >
            <thead>
                <tr class="table-dark text-center">
                    <th scope="col">#</th>
                    <th scope="col">Peringkat</th>
                    <th scope="col">Tarikh</th>
                    <th scope="col">Jam</th>
                    <th scope="col">glg</th>
                    <th scope="col">Team1</th>
                    <th scope="col">Result1</th>
                    <th scope="col">Team2</th>
                    <th scope="col">Result2</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($fixtures as $fixture)
                <tr class="text-center">
                    <td scope="row">{{ $fixture->order }}</td>
                    <td>{{ $fixture->stage }}</td>
                    <td>{{ $fixture->ext2 }}</td>
                    <td>{{ $fixture->ext1 }}</td>
                    <td>{{ $fixture->court }}</td>
                    <td>{{ $fixture->contigent1->name }}</td>
                    <td>{{ $fixture->result1 }}</td>
                    <td>{{ $fixture->contigent2->name }}</td>
                    <td>{{ $fixture->result2 }}</td>
                    <td>
                    <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('{{ $fixture->id }}')">
                                                    <i class="ri-pencil-fill fs-16"></i>
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

