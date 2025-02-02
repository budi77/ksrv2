<div>
    @section('title') KSR ARENA @endsection
    @component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title') KSR ARENA 2023  @endslot
    @endcomponent

    <div class="row">

    <div class='fw-bold h3'><i class=" las la-volleyball-ball"></i> BOLA TAMPAR</div>

    <div class="card">
        <div class="card-header fw-bold">
            KEDUDUKAN PASUKAN
        </div>
        <div class="card-body">
        

        <div class="row">
            <div class="col-md-6">
            <h6>KUMPULAN A</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="bg-success">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Team</th>
                            <th scope="col">W</th>
                            <th scope="col">D</th>
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
            </div></div>
            <div class="col-md-6">
                        <h6>KUMPULAN B</h5>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="bg-success">
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
            </div></div>
            <div class="col-md-6">
                        <h6>KUMPULAN C</h5>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="bg-success">
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
                    @foreach($c as $key => $data)
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
            </div></div>
            <div class="col-md-6">
                        <h6>KUMPULAN D</h5>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="bg-success">
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
                    @foreach($d as $key => $data)
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
            </div></div>
        </div>

            
            
        </div>
        {{-- <div class="card-footer text-muted">
            Footer
        </div> --}}
    </div>

        <div class="col-4">
<div class="card bg-info">
            <div class="card-header bg-info">
                    <h6 class="card-title mb-0 ">MAKLUMAT PERLAWANAN</h6>
            </div>                
            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">NO PERLAWANAN</label>
                        <input type="text"
                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="match">
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                            <label for="" class="form-label">PERINGKAT</label>
                            <select class="form-select" wire:model="ext1">
                                <option selected>--Sila Pilih--</option>
                                <option value="Kumpulan">Kumpulan</option>
                                <option value="Suku Akhir">Suku Akhir</option>
                                <option value="Separuh Akhir">Separuh Akhir</option>
                                <option value="Tempat 3 / 4">Tempat ke 3 / 4</option>
                                <option value="Akhir">Akhir</option>
                            </select>
                        </div>
                    </div>

                    
                </div>

                  <div class="row">

                    <div class="col-md-6">
                      
                    <div class="mb-3">
                        <label for="" class="form-label">PASUKAN 1</label>
                        <select class="form-select" wire:model="team1">
                            <option selected>-- Sila Pilih -</option>
                            @foreach($teams as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                           @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="col-md-6">
                     <div class="mb-3">
                        <label for="" class="form-label">PASUKAN 2</label>
                        <select class="form-select" wire:model="team2">
                            <option selected>-- Sila Pilih -</option>
                            @foreach($teams as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                           @endforeach
                        </select>
                    </div>
                    </div>

                    
                </div>

                 <div class="row">

                    <div class="col-md-6">
                      
                    <div class="mb-3">
                      <label for="" class="form-label">SKOR PASUKAN 1</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="result1">
                    </div>
                    </div>
                    <div class="col-md-6">
                    
                    <div class="mb-3">
                      <label for="" class="form-label">SKOR PASUKAN 2</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="result2">
                    </div>
                    </div>

                    
                </div>
                    
                    
                    
                
                   
                   
                   
                    <button type="button" class="btn btn-primary" wire:click="store">Hantar</button>
                </div>


            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">PERINGKAT KUMPULAN</h4>

                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Peringkat</th>
                                    <th scope="col">Pasukan 1</th>
                                    <th scope="col">Skor 1</th>
                                    <th scope="col">Skor 2</th>
                                    <th scope="col">Pasukan 2</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($groups as $key => $data)
                                <tr class="">
                                    <td>{{ $data->match }} </td>
                                    <td>{{ $data->ext1 }} </td>
                                    <td>{{ @$data->team1->name }}</td>
                                    <td>{{ @$data->result1 }}</td>
                                    <td>{{ @$data->result2 }}</td>
                                    <td>{{ @$data->team2->name }}</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('{{ @$data->id }}')">
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

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SUKU AKHIR</h4>

                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Peringkat</th>
                                    <th scope="col">Pasukan 1</th>
                                    <th scope="col">Skor 1</th>
                                    <th scope="col">Skor 2</th>
                                    <th scope="col">Pasukan 2</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($quarters as $key => $data)
                                <tr class="">
                                    <td>{{ $data->match }} </td>
                                    <td>{{ $data->ext1 }} </td>
                                    <td>{{ @$data->team1->name }}</td>
                                    <td>{{ @$data->result1 }}</td>
                                    <td>{{ @$data->result2 }}</td>
                                    <td>{{ @$data->team2->name }}</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('{{ @$data->id }}')">
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

                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SEPARUH AKHIR</h4>

                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Peringkat</th>
                                    <th scope="col">Pasukan 1</th>
                                    <th scope="col">Skor 1</th>
                                    <th scope="col">Skor 2</th>
                                    <th scope="col">Pasukan 2</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($semis as $key => $data)
                                <tr class="">
                                    <td>{{ $data->match }} </td>
                                    <td>{{ $data->ext1 }} </td>
                                    <td>{{ @$data->team1->name }}</td>
                                    <td>{{ @$data->result1 }}</td>
                                    <td>{{ @$data->result2 }}</td>
                                    <td>{{ @$data->team2->name }}</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('{{ @$data->id }}')">
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

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">TEMPAT 3 / 4</h4>

                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Peringkat</th>
                                    <th scope="col">Pasukan 1</th>
                                    <th scope="col">Skor 1</th>
                                    <th scope="col">Skor 2</th>
                                    <th scope="col">Pasukan 2</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($three as $key => $data)
                                <tr class="">
                                    <td>{{ $data->match }} </td>
                                    <td>{{ $data->ext1 }} </td>
                                    <td>{{ @$data->team1->name }}</td>
                                    <td>{{ @$data->result1 }}</td>
                                    <td>{{ @$data->result2 }}</td>
                                    <td>{{ @$data->team2->name }}</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('{{ @$data->id }}')">
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


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">AKHIR</h4>

                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Peringkat</th>
                                    <th scope="col">Pasukan 1</th>
                                    <th scope="col">Skor 1</th>
                                    <th scope="col">Skor 2</th>
                                    <th scope="col">Pasukan 2</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($final as $key => $data)
                                <tr class="">
                                    <td>{{ $data->match }} </td>
                                    <td>{{ $data->ext1 }} </td>
                                    <td>{{ @$data->team1->name }}</td>
                                    <td>{{ @$data->result1 }}</td>
                                    <td>{{ @$data->result2 }}</td>
                                    <td>{{ @$data->team2->name }}</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('{{ @$data->id }}')">
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

    </div>
</div>



