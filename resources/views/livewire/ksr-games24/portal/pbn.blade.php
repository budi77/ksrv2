<div>
    <div class="container">

        <div class='fw-bold h3 ff-secondary text-center pt-2 cfs-22'> PERBARISAN</div>
        <div class='fw-bold h ff-secondary text-center '> {{ @$sport->venue }}</div>
        <div class="text-center h5"><a href="https://maps.app.goo.gl/Fwe1B6UvRZRXXnm6A"><i class="las la-map-marker-alt"></i> Google Maps</a></div>

        <hr>

        <div class="h4 text-center pt-2">KEPUTUSAN AKHIR</div>


        <div
            class="table-responsive"
        >
            <table
                class="table table-striped table-bordered"
            >
                <thead>
                    <tr class="bg-success text-white">
                        <th scope="col" width="5%">RANK</th>
                        <th scope="col">KONTIJEN</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($results as $result)
                    <tr class="">
                        <td scope="row">{{ $result->rank }}</td>
                        <td>{{ @$result->contigent->name }}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        



    </div>
</div>


