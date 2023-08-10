<!DOCTYPE html>
<html>
<head>
    <title>BORANG PENYERTAAN PERTANDINGAN NYANYIAN LAGU PATRIOTIK SEMPENA SAMBUTAN ULANGTAHUN SPRM KE 56 TAHUN 2023.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- <link href="{{ URL::asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" /> --}}

<style>
  body {
    font-family: Verdana, Arial, sans-serif;
  }
  table, th, td {
  border: 1px solid;
  padding: 10px;
  table-layout: fixed;

}
</style>
</head>

<body>
    
    <div class="text-center">
        {{-- <img src="{{ URL::asset('assets/images/KSR.png') }}" alt="" height="90"> --}}

        <h6>PERTANDINGAN NYANYIAN LAGU PATRIOTIK SEMPENA SAMBUTAN ULANGTAHUN SPRM KE 56 TAHUN 2023.</h6>
    </div>
    <hr>
    {{-- {{ $result['nama'] }} --}}
    <p class="text-center">Maklumat Penyertaan</p>


    <div class="table-responsive">
      <table class="table table-primary">
        
        <tbody>
          <tr class="">
            <td scope="row" style="width:30%" class="fw-bold">KATEGORI</td>
            <td>{{ $result['penyertaan'] }}</td>
          </tr>
          <tr class="">
            <td scope="row" class="fw-bold">NAMA PESERTA / KUMPULAN</td>
            <td>{{ $result['nama'] }}</td>
          </tr>
          <tr class="">
            <td scope="row" class="fw-bold">BILANGAN PESERTA</td>
            <td>{{ $result['penyanyi'] }}</td>
          </tr>
          <tr class="">
            <td scope="row" class="fw-bold">BAHAGIAN</td>
            <td>{{ $result['department']['name'] }}</td>
          </tr>
          <tr class="">
            <td scope="row" class="fw-bold">ALAMAT PEJABAT</td>
            <td>{{ $result['alamat'] }}</td>
          </tr>
          <tr class="">
            <td scope="row" class="fw-bold">PEGAWAI DIHUBUNGI</td>
            <td>{{ $result['extra1'] }}</td>
          </tr>
          <tr class="">
            <td scope="row" class="fw-bold">TELEFON</td>
            <td>{{ $result['telefon'] }}</td>
          </tr>
          <tr class="">
            <td scope="row" class="fw-bold">EMEL</td>
            <td>{{ $result['emel'] }}</td>
          </tr>
          <tr class="">
            <td scope="row" class="fw-bold">TAJUK LAGU</td>
            <td>{{ $result['tajuk_lagu'] }}</td>
          </tr>
          <tr class="">
            <td scope="row" class="fw-bold">PAUTAN VIDEO</td>
            <td  style="word-break:break-all; word-wrap:break-word;">{{ $result['pautan'] }}</td>
          </tr>
          <tr class="">
            <td scope="row" class="fw-bold">TIMESTAMP DAFTAR</td>
            <td>{{ Carbon\Carbon::parse($result['created_at'])->format('d-m-Y h:i:s A') }}</td>
          </tr>
        </tbody>

      </table>
    </div>
    

    

  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>