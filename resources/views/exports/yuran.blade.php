<table>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Bahagian</th>
        <th scope="col">Tahun</th>
        <th scope="col">Jumlah Bayaran</th>
        <th scope="col">Tarikh Bayaran</th>
       
    </tr>
    </thead>
    <tbody>
    @foreach($results as $r)
        <tr class="">
            <td scope="row">{{ $loop->iteration }}</td>               
            <td>{{ @$r->member->name }}</td>
            <td>{{ @$r->department->name }}</td>
            <td>{{ @$r->year }}</td>
            <td>{{ @$r->value }}</td>
            <td>{{ @$r->payment_date }}</td>
            
        </tr>
     @endforeach
    </tbody>
</table>