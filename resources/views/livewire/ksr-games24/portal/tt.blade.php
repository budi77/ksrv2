<div>
    <div class="container">

        <div class='fw-bold h3 ff-secondary text-center pt-2 cfs-22'> TARIK TALI LELAKI & WANITA</div>
        <div class='fw-bold h ff-secondary text-center '> {{ @$sport_id->venue }}</div>
        <div class="text-center h5"><a href="https://maps.app.goo.gl/nnWwiVou4MkpiKEv9"><i class="las la-map-marker-alt"></i> Google Maps</a></div>

        <hr>

<div class="row">




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
    <tbody>
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
