<div>
    <div class="container">
    <div class="row pt-2">

<div class="h5 text-center pt-2"><i class="las la-medal"></i> KEDUDUKAN PINGAT</div>
<hr class="border-dashed">

<div class="table-responsive">
        <table class="table table-warning table-bordered table-striped text-center">
            <thead class="">
                <tr class="bg-secondary ">
                    <th scope="col" class="bg-warning bg-gradient">#</th>
                    <th scope="col" class="bg-warning bg-gradient text-start">PASUKAN</th>
                    <th scope="col" class="bg-warning bg-gradient">E</th>
                    <th scope="col" class="bg-warning bg-gradient">P</th>
                    <th scope="col" class="bg-warning bg-gradient">G</th>
                    <th scope="col" class="bg-warning bg-gradient">4</th>
                    <th scope="col" class="bg-warning bg-gradient">MATA</th>
                
                </tr>
            </thead>
            <tbody>
            @foreach($standings as $key => $data)
                <tr class="">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td class="text-start">{{ $data->code }}</td>
                    <td>{{ $data->first }}</td>
                    <td>{{ $data->second }}</td>
                    <td>{{ $data->third }}</td>
                    <td>{{ $data->forth }}</td>
                    <td>{{ $data->standingpoints }}</td>
              
                </tr>
                @endforeach
               
            </tbody>
        </table>
</div>

</div>





<div class="h5 text-center pt-2">KEPUTUSAN AKHIR</div>

<hr class="border-dashed">
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
        @if($d->sport->name == $sport->name)
        <tr class="text-center">
            <!-- <td>{{ $loop->iteration}}</td> -->
            <!-- <td>{{ @$d->sport->name}}</td> -->
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




</div>