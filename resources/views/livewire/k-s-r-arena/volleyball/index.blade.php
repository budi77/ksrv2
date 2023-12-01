<div wire:poll.visible>
    {{-- Stop trying to control. --}}
    <div class="container-fluid pt-4">
        <div class="card">

            <div class="card-body">
                <div class="text-center">
                    <div class="mx-auto avatar-md mb-3">
                                    <img src="https://ksr.sprm.gov.my/assets/images/KSR.png" alt="" class="img-fluid rounded-circle">
                    </div>
                        <h2 class=" mb-1">KSR ARENA 2023</h2>
                        {{-- <p class=" mb-0 text-muted fw-bold">KEJOHANAN SUKAN ANTARA BAHAGIAN & SPRM LEMBAH KLANG</p> --}}
                        <p class=" mb-0 text-muted">TAMAN PANCARONA, PRESINT 18, PUTRAJAYA</p>
                </div>

                <hr>
                    <div class='fw-bold h3 text-center'> BOLA TAMPAR</div>

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
                                        <th scope="col">D</th>
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
                                        <th scope="col">D</th>
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
                                        <th scope="col">D</th>
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


       







<hr>

                <div class="text-center">KEPUTUSAN PERLAWANAN</div>

                <div class="table-fluid">
                <table class="table table-bordered table-striped text-center table-sm">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Team</th>
                            <th scope="col">Keputusan</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($groups as $key => $data)
                        <tr class="">
                            <td scope="row">{{ $data->match }}</td>
                            <td>{{ $data->team1->name }} vs {{ $data->team2->name }}</td>
                            <td>{{ $data->result1 }} : {{ $data->result2 }}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>

                <div class="text-center">SUKU AKHIR</div>

                <div class="table-fluid">
                <table class="table table-bordered table-striped text-center table-sm">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Team</th>
                            <th scope="col">Keputusan</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($quarters as $key => $data)
                        <tr class="">
                            <td scope="row">{{ $data->match }}</td>
                            <td>{{ $data->team1->name }} vs {{ $data->team2->name }}</td>
                            <td>{{ $data->result1 }} : {{ $data->result2 }}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>

                <div class="text-center">SEPARUH AKHIR</div>

                <div class="table-fluid">
                <table class="table table-bordered table-striped text-center table-sm">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Team</th>
                            <th scope="col">Keputusan</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($semis as $key => $data)
                        <tr class="">
                            <td scope="row">{{ $data->match }}</td>
                            <td>{{ $data->team1->name }} vs {{ $data->team2->name }}</td>
                            <td>{{ $data->result1 }} : {{ $data->result2 }}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>

                <div class="text-center">AKHIR</div>

                <div class="table-fluid">
                <table class="table table-bordered table-striped text-center table-sm">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Team</th>
                            <th scope="col">Keputusan</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($final as $key => $data)
                        <tr class="">
                            <td scope="row">{{ $data->match }}</td>
                            <td>{{ $data->team1->name }} vs {{ $data->team2->name }}</td>
                            <td>{{ $data->result1 }} : {{ $data->result2 }}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>

            </div>
        </div>
    </div>
</div>


