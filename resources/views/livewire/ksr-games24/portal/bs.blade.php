<div>

<div class="container">

<div class='fw-bold h3 text-primary'> BOLA SEPAK</div>
<hr>
<div class="row">
    <h5><i class="las la-table"></i> KEDUDUKAN PASUKAN</h5>

    <div class="col pt-2">
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
   
    <div class="col pt-2">

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


    <h5><i class="las la-table"></i> JADUAL & KEPUTUSAN PERLAWANAN</h5>

<div
    class="table-responsive"
>
    <table
        class="table table-sm table-bordered table-striped"
    >
        <thead>
            <tr class="table-dark text-center">
                <th scope="col">#</th>
                <!-- <th scope="col">Peringkat</th> -->
                <th scope="col">Tarikh</th>
                <th scope="col">Jam</th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col">Result1</th>
                <th scope="col">Team2</th>
                <th scope="col">Result2</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($fixtures as $fixture)
            <tr class="text-center">
                <td scope="row">{{ $fixture->order }}</td>
                <!-- <td>{{ $fixture->stage }}</td> -->
                <td>{{ $fixture->ext2 }}</td>
                <td>{{ $fixture->ext1 }}</td>
                <td>{{ $fixture->court }}</td>
                <td>{{ $fixture->contigent1->name }}</td>
                <td>{{ $fixture->result1 }}</td>
                <td>{{ $fixture->contigent2->name }}</td>
                <td>{{ $fixture->result2 }}</td>
                
            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>



</div>





</div>
</div>
