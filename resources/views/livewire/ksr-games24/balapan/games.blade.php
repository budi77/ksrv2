<div>
   
<div class="row">
    <div class='fw-bold h3 text-primary'> BALAPAN</div>
    <hr>


    <h4>STANDING</h4>

<div class="table-responsive">
        <table class="table table-primary table-bordered table-striped text-center">
            <thead class="">
                <tr class="bg-secondary ">
                    <th scope="col" class="bg-warning bg-gradient">#</th>
                    <th scope="col" class="bg-warning bg-gradient">Team</th>
                    <th scope="col" class="bg-warning bg-gradient">E</th>
                    <th scope="col" class="bg-warning bg-gradient">P</th>
                    <th scope="col" class="bg-warning bg-gradient">G</th>
                    <th scope="col" class="bg-warning bg-gradient">4</th>
                    <!-- <th scope="col" class="bg-warning bg-gradient">P</th> -->
                
                </tr>
            </thead>
            <tbody>
            @foreach($standings as $key => $data)
                <tr class="">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->blfirst }}</td>
                    <td>{{ $data->blsecond }}</td>
                    <td>{{ $data->blthird }}</td>
                    <td>{{ $data->blforth }}</td>
                    <!-- <td>{{ $data->standingpoints }}</td> -->
              
                </tr>
                @endforeach
               
            </tbody>
        </table>
</div>


</div>

<div class="row">

@foreach($sports as $sport)
    <div class="col-6">
    
    <h6>{{ $sport->name }}</h6>

    <table
    class="table table-sm table-bordered table-striped"
>
    <thead>
        <tr class="table-dark text-center">
            <!-- <th scope="col">#</th> -->
            <!-- <th scope="col">Sukan</th> -->
            <th scope="col" width="4%">Rank</th>
            <th scope="col">Kontigen</th>
        </tr>
    </thead>
    <tbody>
        @forelse($results as $d)
        <!-- @if($d->sport->name == $sport->name) -->
        <tr class="text-center">
            <!-- <td>{{ $loop->iteration}}</td> -->
            <!-- <td>{{ @$d->sport->name}}</td> -->
            <td>
                {{ @$d->rank }}
                
            
            </td>
            <td class="text-primary">{{ @$d->contigent->name}}</td>
            
            
        </tr>
        <!-- @endif -->
        @empty<td>No data</td>
        @endforelse
       
    </tbody>
</table>

</div>
@endforeach

    
</div>


</div>
