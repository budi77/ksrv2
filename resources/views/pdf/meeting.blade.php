<!DOCTYPE html>
<html>
<head>
    <title>MESYUARAT AGUNG KSR 2024</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
</head>
<body>
    <h1>SENARAI KEHADIRAN MESYUARAT AGUNG KSR</h1>
    <p>26 MAC 2024</p>
    <p>AUDITORIUM SPRM</p>
  
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Bahagian</th>
            <th>Tarikh/Masa Daftar</th>
        </tr>
        @foreach($results as $row)
        <tr class="">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ @$row->member->name }}</td>
                    <td>{{ @$row->member->bahagian->name }}</td>
                    <td>{{ @$row->created_at }}</td>
                </tr>
        @endforeach
    </table>
  
</body>
</html>