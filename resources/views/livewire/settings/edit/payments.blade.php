<div>
    {{-- Stop trying to control. --}}

    {{-- {{ $records }} --}}
    <h5>REKOD PEMBAYARAN :</h5>
    <div class="table-responsive pt-4">
        <table class="table table-sm table-striped">
            <thead class="bg-warning">
                <tr>
                    <th scope="col">Nama/Bahagian</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tarikh Bayaran</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @isset($records)
                @forelse($records as $record)
                <tr class="">
                    <td scope="row">
                        <div>{{ $record->member->name }}</div>
                        <div class="text-muted">{{ $record->member->bahagian->name }}</div>
                    </td>
                    <td>{{ $record->year }}</td>
                    <td>{{ $record->value }}</td>
                    <td>{{ $record->year }}</td>
                </tr>

                @empty
                <p>No data</p>
                    
               

                @endforelse
                @endisset
               
            </tbody>
        </table>
    </div>
    
</div>
