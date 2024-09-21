<div>
    <div class="container">

        <div class='fw-bold h3 ff-secondary text-center pt-2 cfs-22'> BOWLING</div>
        <div class='fw-bold h ff-secondary text-center '> {{ @$sport_id->venue }}</div>
        <div class="text-center h5"><a href="https://maps.app.goo.gl/se6h42VLWaP2CBem9"><i class="las la-map-marker-alt"></i> Google Maps</a></div>

        <hr>

<div class="row">




@foreach($sports->take(4) as $sport)
    <div class="col-12">
    
    <!-- <div class="text-center h6">{{ $sport->name }}</div> -->

    <table
    class="table table-sm  table-striped"
>
    <thead>
        <tr class="table-dark text-center">
           
            <th scope="col" width="4%">Rank</th>
            <th scope="col">Kontijen</th>
        </tr>
    </thead>
    <tbody class="bg-white">
        @forelse($results as $d)
        <tr class="text-center">
           
            <td>
                {{ @$d->rank }}
                
            
            </td>
            <td class="text-primary">{{ @$d->contigent->name}}</td>
            
            
        </tr>
        @empty<td>No data</td>
        @endforelse
       
    </tbody>
</table>

</div>
@endforeach



    </div>
</div>

