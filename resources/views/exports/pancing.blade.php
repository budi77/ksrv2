<table>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">No KP</th>
        <th scope="col">No Tel</th>
        <th scope="col">Jantina</th>
        <th scope="col">Bahagian</th>
        <th scope="col">Ahli</th>
        <th scope="col">Saiz</th>
        <th scope="col">Tarikh Bayaran</th>
        <th scope="col">Jumlah Bayaran</th>
        {{-- <th scope="col">Resit</th> --}}
        <th scope="col">Tarikh Daftar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($results as $r)
        <tr class="">
            <td scope="row">{{ $loop->iteration }}</td>               
            <td>{{ @$r->nama }}</td>
            <td>{{ @$r->no_kp }}</td>
            <td>{{ @$r->ext2 }}</td>
            <td>{{ @$r->ext1 }}</td>
            <td>{{ @$r->department->name }}</td>
            <td>{{ @$r->ahli}}</td>
            <td>{{ @$r->ext1 }}</td>
            <td>{{ @$r->tarikh_bayaran }}</td>
            <td>{{ @$r->jumlah_bayaran }}</td>
            <td>{{ @$r->created_at }}</td>
        </tr>
     @endforeach
    </tbody>
</table>