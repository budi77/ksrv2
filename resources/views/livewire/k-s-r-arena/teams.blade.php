<div>
    @section('title') KSR ARENA @endsection
    @component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title') KSR ARENA 2023  @endslot
    @endcomponent

    <div class="row">
        <div class="col-4">
            <div class="card">
                {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> --}}
                <div class="card-body">
                    <h4 class="card-title">MAKLUMAT PASUKAN</h4>
                    <div class="mb-3">
                      <label for="" class="form-label">Nama Pasukan</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="name">
                      {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Bahagian</label>
                        <select class="form-select" wire:model="department_id">
                            <option selected>-- Sila Pilih -</option>
                            @foreach($departments as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Sukan</label>
                        <select class="form-select" wire:model="sport">
                            <option selected>--Sila Pilih--</option>
                            <option value="Bola Jaring">Bola Jaring</option>
                            <option value="Bola Tampar">Bola Tampar</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary" wire:click="store">Hantar</button>
                </div>

            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BOLA JARING</h4>

                    <div class="table-responsive table-striped">
                        <table class="table table-sm">
                            <thead class="bg-info text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Pasukan</th>
                                    <th scope="col">Nama Bahagian</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($netball as $key => $data)
                                <tr class="">
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->department->name }}</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('{{ @$data->id }}')">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                           
                                           
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BOLA TAMPAR</h4>

                    <div class="table-responsive">
                        <table class="table table-sm table-striped">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Pasukan</th>
                                    <th scope="col">Nama Bahagian</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($volleyball as $key => $data)
                                <tr class="">
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->department->name }}</td>
                                    <td class="text-end">
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0);" class="text-warning d-inline-block" wire:click="edit('{{ @$data->id }}')">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            
                                            
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
