<div>
    {{-- Be like water. --}}

    <div class="row g-3">
        <div class="col-xxl-6 col-sm-6">
            <div class="search-box">
                <input type="text" class="form-control search bg-light border-light"
                    placeholder="Cari ahli" wire:model="search">
                <i class="ri-search-line search-icon"></i>
            </div>
        </div>
    </div>


    <div class="table-responsive pt-3">
        <table class="table table-sm ">
            <thead class='bg-dark text-white'>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bahagian</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
                <tr class="">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>
                        <a href="javascript:void(0)" wire:click="show('{{ $result->id }}')" >
                            {{ $result->name }}
                        </a>
                       
                    </td>
                    <td>{{ $result->bahagian->name }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    {{ $results->links() }}

    
</div>
