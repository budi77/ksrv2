<div>

<div class="row">

<div class='fw-bold h3 text-primary'> BADMINTON</div>
<hr>
<div class="row">
    <h4><i class="las la-table"></i> KEDUDUKAN PASUKAN</h4>

    <div class="col-6 pt-2">
    <h6>KUMPULAN A</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Team</th>
                            <th scope="col">W</th>
                            <th scope="col">L</th>
                            <th scope="col">GF</th>
                            <th scope="col">GA</th>
                            <th scope="col">GD</th>
                            <th scope="col">P</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($a as $key => $data)
                        <tr class="">
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->won }}</td>
                            {{-- <td>{{ $data->tied }}</td> --}}
                            <td>{{ $data->lost }}</td>
                            <td>{{ $data->goal }}</td>
                            <td>{{ $data->against }}</td>
                            <td>{{ $data->goaldifference  }} </td>
                            <td>{{ $data->volleypoints }}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>


    </div>
    <div class="col-6 pt-2">

    <h6>KUMPULAN B</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Team</th>
                            <th scope="col">W</th>
                            <th scope="col">L</th>
                            <th scope="col">GF</th>
                            <th scope="col">GA</th>
                            <th scope="col">GD</th>
                            <th scope="col">P</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($b as $key => $data)
                        <tr class="">
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $data->contigent->name }}</td>
                            <td>{{ $data->won }}</td>
                            {{-- <td>{{ $data->tied }}</td> --}}
                            <td>{{ $data->lost }}</td>
                            <td>{{ $data->goal }}</td>
                            <td>{{ $data->against }}</td>
                            <td>{{ $data->goaldifference  }} </td>
                            <td>{{ $data->volleypoints }}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
    </div>
</div>





</div>

<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header bg-info">
                    <h6 class="card-title mb-0 ">MAKLUMAT PERLAWANAN</h6>
            </div> 
            <div class="card-body">
            <div class="mb-3">
                            <label for="" class="form-label">Peringkat</label>
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
                        <label for="" class="form-label">Order</label>
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
                        <label for="" class="form-label">Court</label>
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
                        <label for="" class="form-label">Date</label>
                        <select
                            class="form-select "
                            name=""
                            id=""
                            wire:model="mdate"
                        >
                            <option selected>-- Pilih --</option>
                            <option value="27/9">27/9</option>
                            <option value="28/9">28/9</option>
                            <option value="29/9">29/9</option>
                        </select>
                    </div>
                    
                    
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Time</label>
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
                    <label for="" class="form-label">Kontigen 1</label>
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
                        <label for="" class="form-label">Keputusan 1</label>
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
                    <label for="" class="form-label">Kontigen 2</label>
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
                    <label for="" class="form-label">Keputusan 2</label>
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
    <div class="col-8"></div>
</div>



</div>
