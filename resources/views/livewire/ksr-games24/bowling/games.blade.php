<div>
   
<div class="row">
    <div class='fw-bold h3 text-primary'> BOWLING</div>
    <hr>
    <h4><i class="las la-table"></i> KEDUDUKAN PASUKAN</h4>

    <div
        class="table-responsive"
    >
        <table
            class="table table-bordered"
        >
            <thead>
                <tr class="bg-info">
                    <th scope="col" width="5%">RANK</th>
                    <th scope="col">TEAM</th>
                    <th scope="col">POINTS</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $r)
                <tr class="">
                    <td scope="row">{{ @$r->rank }}</td>
                    <td>{{ @$r->contigent->name }}</td>
                    <td>{{ @$r->points }}</td>
                    <td></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    


</div>
</div>
