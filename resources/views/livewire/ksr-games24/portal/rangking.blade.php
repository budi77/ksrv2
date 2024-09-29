<div>
    <div class="container">
    <div class="row pt-2">

<div class="h5 text-center pt-2"><i class="las la-medal"></i> KEDUDUKAN PINGAT</div>
<hr class="border-dashed">

<div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="">
                <tr class="bg-secondary ">
                    <th scope="col" class="bg-dark bg-gradient text-white">#</th>
                    <th scope="col" class="bg-dark bg-gradient text-start text-white">KONTIJEN</th>
                    <th scope="col" class="bg-dark bg-gradient text-white">E</th>
                    <th scope="col" class="bg-dark bg-gradient text-white">P</th>
                    <th scope="col" class="bg-dark bg-gradient text-white">G</th>
                    <th scope="col" class="bg-dark bg-gradient text-white">4th</th>
                    <th scope="col" class="bg-dark bg-gradient text-white">MATA</th>
                
                </tr>
            </thead>
            <tbody class="bg-white">
            @foreach($standings as $key => $data)
                <tr class="">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td class="text-start fw-bold"  >
                        <!-- Base Buttons -->
                        <button type="button" class="btn" style="background-color:{{ $data->ext2 }}"></button>

                        <!-- <span class="badge style="style="background-color:{{ $data->ext2 }}">ss</span> -->
                    {{ $data->code }}</td>
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





<div class="h6 text-center pt-2">KEPUTUSAN AKHIR MENGIKUT ACARA</div>

<hr class="border-dashed">
<div class="row">

@foreach($sports as $sport)
    <div class="col-6">
    
    <h6>{{ $sport->name }}</h6>

    <table
    class="table table-sm table-bordered table-striped"
>
    <thead>
        <tr class="bg-success text-center">
            <!-- <th scope="col">#</th> -->
            <!-- <th scope="col">Sukan</th> -->
            <th scope="col" width="4%">#</th>
            <th scope="col">Kontijen</th>
        </tr>
    </thead>
    <tbody>
        @forelse($results as $d)
        @if($d->sport->name == $sport->name)
        <tr class="text-center bg-white">
            <!-- <td>{{ $loop->iteration}}</td> -->
            <!-- <td>{{ @$d->sport->name}}</td> -->
            <td>
                {{ @$d->rank }}
                
            
            </td>
            <td class="text-primary">{{ @$d->contigent->name}}</td>
            
            
        </tr>
        @endif
        @empty<td></td>
        @endforelse
       
    </tbody>
</table>

</div>
@endforeach

    
</div>


</div>




</div>
