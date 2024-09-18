<div>

<div class="container">

<div class='fw-bold h3 ff-secondary text-center pt-2 cfs-22'> TARI TALI LELAKI</div>
<div class='fw-bold h ff-secondary text-center '> {{ @$sport_id->venue }}</div>
<div class="text-center h5"><a href="https://maps.app.goo.gl/YzGbdMz6GeJQRg2A6"><i class="las la-map-marker-alt"></i> Google Maps</a></div>

<hr>
<div class="row">

   


    <div class="text-center">

        <h5><i class="las la-calendar"></i> JADUAL & KEPUTUSAN PERLAWANAN</h5>
    </div>

<h6 class="text-primary"><i class="las las la-calendar-check"></i> PERINGKAT KUMPULAN</h6>

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
                <th scope="col"><i class="las la-calendar-day"></i></th>
                <th scope="col"><i class="las la-clock"></i></th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col" colspan="2">Keputusan</th>
                <!-- <th scope="col">Result2</th> -->
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($fixtures as $fixture)
            @if($fixture->stage == 'Kumpulan')
                <tr class="text-center">
                    <td scope="row">{{ $fixture->order }}</td>
                    <!-- <td>{{ $fixture->stage }}</td> -->
                    <td>{{ $fixture->ext2 }}</td>
                    <td>{{ $fixture->ext1 }}</td>
                    <td>{{ $fixture->court }}</td>
                    <td>{{ $fixture->contigent1->code }}</td>
                    <td>{{ $fixture->result1 }}</td>
                    <td>{{ $fixture->result2 }}</td>
                    <td>{{ $fixture->contigent2->code }}</td>
                    
                </tr>
            @endif
            @endforeach
           
        </tbody>
    </table>
</div>



<h6 class="text-primary"><i class="las las la-calendar-check"></i> PERINGKAT SEPARUH AKHIR</h6>

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
                <th scope="col"><i class="las la-calendar-day"></i></th>
                <th scope="col"><i class="las la-clock"></i></th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col" colspan="2">Keputusan</th>
                <!-- <th scope="col">Result2</th> -->
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($fixtures as $fixture)
            @if($fixture->stage == 'Separuh Akhir')
                <tr class="text-center">
                    <td scope="row">{{ $fixture->order }}</td>
                    <!-- <td>{{ $fixture->stage }}</td> -->
                    <td>{{ $fixture->ext2 }}</td>
                    <td>{{ $fixture->ext1 }}</td>
                    <td>{{ $fixture->court }}</td>
                    <td>{{ $fixture->contigent1->code }}</td>
                    <td>{{ $fixture->result1 }}</td>
                    <td>{{ $fixture->result2 }}</td>
                    <td>{{ $fixture->contigent2->code }}</td>
                    
                </tr>
            @endif
            @endforeach
           
        </tbody>
    </table>
</div>


<h6 class="text-primary"><i class="las las la-calendar-check"></i> PENENTUAN 3/4</h6>

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
                <th scope="col"><i class="las la-calendar-day"></i></th>
                <th scope="col"><i class="las la-clock"></i></th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col" colspan="2">Keputusan</th>
                <!-- <th scope="col">Result2</th> -->
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($fixtures as $fixture)
            @if($fixture->stage == 'Tempat 3 / 4')
                <tr class="text-center">
                    <td scope="row">{{ $fixture->order }}</td>
                    <!-- <td>{{ $fixture->stage }}</td> -->
                    <td>{{ $fixture->ext2 }}</td>
                    <td>{{ $fixture->ext1 }}</td>
                    <td>{{ $fixture->court }}</td>
                    <td>{{ $fixture->contigent1->code }}</td>
                    <td>{{ $fixture->result1 }}</td>
                    <td>{{ $fixture->result2 }}</td>
                    <td>{{ $fixture->contigent2->code }}</td>
                    
                </tr>
            @endif
            @endforeach
           
        </tbody>
    </table>
</div>


<h6 class="text-primary"><i class="las las la-calendar-check"></i> AKHIR</h6>

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
                <th scope="col"><i class="las la-calendar-day"></i></th>
                <th scope="col"><i class="las la-clock"></i></th>
                <th scope="col">glg</th>
                <th scope="col">Team1</th>
                <th scope="col" colspan="2">Keputusan</th>
                <!-- <th scope="col">Result2</th> -->
                <th scope="col">Team2</th>
               
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($fixtures as $fixture)
            @if($fixture->stage == 'Akhir')
                <tr class="text-center">
                    <td scope="row">{{ $fixture->order }}</td>
                    <!-- <td>{{ $fixture->stage }}</td> -->
                    <td>{{ $fixture->ext2 }}</td>
                    <td>{{ $fixture->ext1 }}</td>
                    <td>{{ $fixture->court }}</td>
                    <td>{{ $fixture->contigent1->code }}</td>
                    <td>{{ $fixture->result1 }}</td>
                    <td>{{ $fixture->result2 }}</td>
                    <td>{{ $fixture->contigent2->code }}</td>
                    
                </tr>
            @endif
            @endforeach
           
        </tbody>
    </table>
</div>




</div>

</div>
</div>



