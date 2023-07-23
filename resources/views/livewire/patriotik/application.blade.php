<div>
    @section('title') @lang('translation.starter')  @endsection
    @component('components.breadcrumb')
    @slot('li_1') Pages @endslot
    @slot('title') SENARAI BORANG PENYERTAAN @endslot
    @endcomponent


  <div class="row">

<div class="card">
    {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> --}}
    <div class="card-body">
        
<!-- Table Head -->
<table class="table align-middle table-nowrap mb-0">
    <thead class="table-light">
        <tr>
        <th scope="col">Kategori</th>
        <th scope="col">Nama Kumpulan</th>
        <th scope="col">Bahagian</th>
        <th scope="col">PIC</th>
        <th scope="col">Telefon</th>
        <th scope="col">Lagu</th>
        <th scope="col">Pautan</th>
        <th scope="col">Tarikh Daftar</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($results as $result)
    <tr>
        <td>{{ $result->penyertaan }}</td>
        <td>{{ $result->nama }}</td>
        <td>{{ $result->department->name }}</td>
        <td>{{ $result->extra1 }}</td>
        <td>{{ $result->telefon }}</td>
        <td>{{ $result->tajuk_lagu }}</td>
        <td><a name="" id="" class="btn btn-secondary btn-sm" href="#" role="button">Lihat</a></td>
        
        <td>{{ $result->created_at }}</td>
        <td>
            <div class="hstack gap-3 fs-15">
            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
            <a href="javascript:void(0);" class="link-success"><i class="ri-printer-line"></i></a>
            </div>
            </td>
    </tr>
    @endforeach
    
    
    </tbody>
    </table>


    </div>
</div>
    
  </div>

    @section('script')
  
    <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    @endsection
</div>
