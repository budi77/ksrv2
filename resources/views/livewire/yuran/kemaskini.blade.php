<div>
    @component('components.breadcrumb')
    @slot('li_1')
    Kemaskini Pembayaran
    @endslot
    @slot('title')
    Kemaskini Pembayaran
    @endslot
    @endcomponent


    <div
        class="row justify-content-center align-items-top"
    >
        <div class="col-4">
            <div class="card">
                {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title" /> --}}
                <div class="card-body">

                <h6>Nama : {{ @$member_name }}</h6>
                <h6>Bahagian : {{ @$department }}</h6>

                <br>

                <div class="mb-3">
                    <label for="" class="form-label">Tahun</label>
                    <input
                        type="text"
                        class="form-control"
                        wire:model="year"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jumlah Bayaran</label>
                    <input
                        type="text"
                        class="form-control"
                        wire:model="value"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Cara Bayaran</label>
                    <select
                        class="form-select"
                        wire:model="mode"
                    >
                        <option selected>-- Pilih --</option>
                        <option value="TUNAI" @selected($mode == 'TUNAI')>TUNAI</option>
                        <option value="KOSPERA" @selected($mode == 'KOSPERA')>KOSPERA</option>
                        
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tarikh Bayaran</label>
                    <x-date-picker id="date" class="form-control" wire:model="payment_date" autocomplete="off" value="" placeholder="" />

                </div>
                
                <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                        @if($editmode)
                        <a href="javascript:void(0);" class="btn btn-success" wire:click="update()"><i class="ri-save-3-line align-bottom me-1"></i> Simpan</a>
                        <a href="javascript:void(0);" class="btn btn-light"  wire:click="clear()"><i class="ri-refresh-line align-bottom me-1"></i> Reset</a>
                        @endif
                        @if($deletemode)
                        <a href="javascript:void(0);" class="btn btn-light"  wire:click="clear()"><i class="ri-refresh-line align-bottom me-1"></i> Reset</a>

                        <a href="javascript:void(0);" class="btn btn-danger" wire:click="confirmed()"><i class="ri-delete-bin-line align-bottom me-1"></i> Padam</a>
                        @endif
                </div>
                
                

                    
                </div>
            </div>
        
        </div>
        <div class="col-8">

        <div class="card table-card">
            {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title" /> --}}
            <div class="card-body">
            <div class="mb-3">
                <input
                    type="text"
                    class="form-control form-control-sm col-4"
                    wire:model="search"
                    aria-describedby="helpId"
                    placeholder="Carian Nama"
                />
            </div>
            
            <div
            class="table-responsive"
        >
            <table
                class="table table-sm table-striped"
            >
                <thead class="table-light">
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Nama</th>
                        <th scope="col">Bahagian</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Cara Bayaran</th>
                        <th scope="col">Tarikh Bayaran</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($fees as $key => $data)
                    <tr class="">
                        {{-- <td scope="row">{{ $loop->iteration }}</td> --}}
                        <td>{{ @$data->member->name }}</td>
                        <td>{{ @$data->department->name }}</td>
                        <td>{{ @$data->year }}</td>
                        <td>{{ @$data->value }}</td>
                        <td>{{ @$data->mode }}</td>
                        <td>{{ @$data->payment_date }}</td>
                        <td>
                        <a href="javascript:void(0);" class="text-primary d-inline-block" wire:click="show('{{$data->id}}')">
                            <i class="ri-eye-fill fs-16"></i>
                        </a>
                        <a href="javascript:void(0);" class="text-danger d-inline-block" wire:click="delete('{{$data->id}}')">
                            <i class="ri-delete-bin-line fs-16"></i>
                        </a>
                        </td>
                    </tr>
                @endforeach
                    
                </tbody>


            </table>
                    {{ $fees->links() }}
        </div>
               
            </div>
        </div>
        
        
        
        
        </div>
        
    
</div>
