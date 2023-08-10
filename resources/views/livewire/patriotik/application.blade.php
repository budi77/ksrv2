<div>
    @section('title') @lang('translation.starter')  @endsection
    @component('components.breadcrumb')
    @slot('li_1') Pages @endslot
    @slot('title') SENARAI BORANG PENYERTAAN @endslot
    @endcomponent


  <div class="row">

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
        <tbody class="bg-white">
        @foreach($results as $result)
        <tr>
            <td>{{ $result->penyertaan }}</td>
            <td>{{ $result->nama }}</td>
            <td>{{ $result->department->name }}</td>
            <td>{{ $result->extra1 }}</td>
            <td>{{ $result->telefon }}</td>
            <td>{{ $result->tajuk_lagu }}</td>
            <td>
                <a href="{{ $result->pautan }}" class="link-dark fs-20" target="_blank"><i class="ri-vidicon-line"></i></a>
    
                {{-- <a name="" id="" class="btn btn-secondary btn-sm" href="#" role="button">Lihat</a> --}}
            </td>
            
            <td>{{ Carbon\Carbon::parse($result->created_at)->format('d-m-Y h:i:s A') }}</td>
            <td>
                <div class="hstack gap-3 fs-15">
                {{-- <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a> --}}
                <a href="{{ route('pdf.patriotik', $result->id) }}" class="link-success" target="_blank"><i class="ri-printer-line"></i></a>
                {{-- <a href="javascript:void(0);" class="link-danger" onclick="return confirm('Are you sure?');" wire:click="delete({{ $result->id }})"><i class="ri-delete-bin-2-line"></i></a> --}}
                </div>
                </td>
        </tr>
        @endforeach
        
        
        </tbody>
        </table>
    
    

    
  </div>

    @section('script')
  
    <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    @endsection
</div>
