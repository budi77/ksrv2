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
                    <h4 class="card-title">MAKLUMAT KUMPULAN</h4>
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="name">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Susunan</label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="" wire:model="order">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Sukan</label>
                        <select class="form-select" wire:model="sport">
                            <option selected>--Sila Pilih--</option>
                            <option value="Bola Jaring">Bola Jaring</option>
                            <option value="Bola Tampar">Bola Tampar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pasukan</label>
                        <select class="form-select" wire:model="team_id">
                            <option selected>-- Sila Pilih -</option>
                            @foreach($teams as $data)
                            <option value="{{ $data->id }}">{{ $data->name }} - {{ $data->sport }}</option>
                           @endforeach
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

                    <div class="table-responsive ">
                        <table class="table table-sm table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Kod Pasukan</th>
                                    <th scope="col">Nama Pasukan</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($netball as $key => $data)
                                <tr class="">
                                    <td>{{ $data->name }} {{ $data->order }}</td>
                                    <td>{{ @$data->team->name }}</td>
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

                    <div class="row">
                        <div class="col-6">

                            <div class="table-responsive table-striped">
                                <table class="table table-sm table-striped">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th scope="col">Kod Pasukan</th>
                                            <th scope="col">Nama Pasukan</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($A as $key => $data)
                                        <tr class="">
                                            <td>{{ $data->name }} {{ $data->order }}</td>
                                            <td>{{ @$data->team->name }}</td>
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
                        <div class="col-6">

                            <div class="table-responsive table-striped">
                                <table class="table table-sm table-striped">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th scope="col">Kod Pasukan</th>
                                            <th scope="col">Nama Pasukan</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($B as $key => $data)
                                        <tr class="">
                                            <td>{{ $data->name }} {{ $data->order }}</td>
                                            <td>{{ @$data->team->name }}</td>
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

                    <div class="row">
                        <div class="col-6">

                            <div class="table-responsive table-striped">
                                <table class="table table-sm table-striped">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th scope="col">Kod Pasukan</th>
                                            <th scope="col">Nama Pasukan</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($C as $key => $data)
                                        <tr class="">
                                            <td>{{ $data->name }} {{ $data->order }}</td>
                                            <td>{{ @$data->team->name }}</td>
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
                        <div class="col-6">

                            <div class="table-responsive table-striped">
                                <table class="table table-sm table-striped">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th scope="col">Kod Pasukan</th>
                                            <th scope="col">Nama Pasukan</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($D as $key => $data)
                                        <tr class="">
                                            <td>{{ $data->name }} {{ $data->order }}</td>
                                            <td>{{ @$data->team->name }}</td>
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

                   
                </div>
            </div>
        </div>

    </div>
</div>

