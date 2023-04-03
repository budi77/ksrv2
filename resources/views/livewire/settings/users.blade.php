<div>
   
@section('title') Pengguna Sistem @endsection

{{-- @component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Pengguna Sistem  @endslot
@endcomponent --}}
<div class="d-flex align-items-center">
    <h5 class="card-title mb-0 flex-grow-1"></h5>
    <div class="flex-shrink-0">
        <button class="btn btn-primary add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i
                class="ri-add-line align-bottom me-1"></i> Tambah</button>
        {{-- <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i
                class="ri-delete-bin-2-line"></i></button> --}}
    </div>
</div>
<br>
<!-- Table Head -->
<table class="table align-middle table-nowrap mb-0">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">E-mel</th>
            <th scope="col">Bahagian</th>
            <th scope="col">Process</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            
            <td><a href="javascript:void(0);" class="link-success">Confirmed</a></td>
        </tr>
        @endforeach
       
    </tbody>
</table>


@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
</div>
