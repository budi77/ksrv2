<div>
    <div class="container">

        <div class='fw-bold h3 ff-secondary text-center pt-2 cfs-22'> BALAPAN</div>
        <div class='fw-bold h ff-secondary text-center '> {{ @$sport_id->venue }}</div>
        <div class="text-center h5"><a href="https://maps.app.goo.gl/NvkvA1UPi2k9zMdS7"><i class="las la-map-marker-alt"></i> Google Maps</a></div>

        <hr>

<div class="row">


<div class="table-responsive">
        <table class="table table-primary table-striped text-center">
            <thead class="">
                <tr class="bg-secondary ">
                    <th scope="col" class="bg-warning bg-gradient">#</th>
                    <th scope="col" class="bg-warning bg-gradient text-start">KONTIJEN</th>
                    <th scope="col" class="bg-warning bg-gradient">E</th>
                    <th scope="col" class="bg-warning bg-gradient">P</th>
                    <th scope="col" class="bg-warning bg-gradient">G</th>
                    <th scope="col" class="bg-warning bg-gradient">4th</th>
                    <th scope="col" class="bg-warning bg-gradient">P</th>
                
                </tr>
            </thead>
            <tbody>
            @foreach($standings as $key => $data)
                <tr class="">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td class="text-start">{{ $data->name }}</td>
                    <td>{{ $data->blfirst }}</td>
                    <td>{{ $data->blsecond }}</td>
                    <td>{{ $data->blthird }}</td>
                    <td>{{ $data->blforth }}</td>
                    <td>{{ $data->blstandingpoints }}</td>
              
                </tr>
                @endforeach
               
            </tbody>
        </table>
</div>

<hr>

@foreach($sports as $sport)
    <div class="col-6">
    
    <div class="text-center h6">{{ $sport->name }}</div>

    <table
    class="table table-sm  table-striped table-success"
>
    <thead>
        <tr class="table-dark text-center">
           
            <th scope="col" width="4%">Rank</th>
            <th scope="col">Kontijen</th>
        </tr>
    </thead>
    <tbody class="bg-white">
        @forelse($results as $d)
        @if($d->sport->name == $sport->name)
        <tr class="text-center">
           
            <td>
                {{ @$d->rank }}
                
            
            </td>
            <td class="text-primary">{{ @$d->contigent->name}}</td>
            
            
        </tr>
        @endif
        @empty<td>No data</td>
        @endforelse
       
    </tbody>
</table>

</div>
@endforeach



    </div>
</div>
