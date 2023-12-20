<div>
    <?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?>
    Kemaskini Pembayaran
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?>
    Kemaskini Pembayaran
    <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div
        class="row justify-content-center align-items-top"
    >
        <div class="col-4">
            <div class="card">
                
                <div class="card-body">
                <div class="text-center">
                    <h5 class="fw-semibold"><?php echo e(@$member_name); ?></h5>
                    <h5 class="text-muted"> <?php echo e(@$department); ?></h5>
                </div>
                

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
                        <option value="TUNAI" <?php if($mode == 'TUNAI'): echo 'selected'; endif; ?>>TUNAI</option>
                        <option value="KOSPERA" <?php if($mode == 'KOSPERA'): echo 'selected'; endif; ?>>KOSPERA</option>
                        
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tarikh Bayaran</label>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.date-picker','data' => ['id' => 'date','class' => 'form-control','wire:model' => 'payment_date','autocomplete' => 'off','value' => '','placeholder' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('date-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'date','class' => 'form-control','wire:model' => 'payment_date','autocomplete' => 'off','value' => '','placeholder' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                </div>
                
                <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                        <?php if($editmode): ?>
                        <a href="javascript:void(0);" class="btn btn-success" wire:click="update()"><i class="ri-save-3-line align-bottom me-1"></i> Simpan</a>
                        <a href="javascript:void(0);" class="btn btn-light"  wire:click="clear()"><i class="ri-refresh-line align-bottom me-1"></i> Reset</a>
                        <?php endif; ?>
                        <?php if($deletemode): ?>
                        <a href="javascript:void(0);" class="btn btn-light"  wire:click="clear()"><i class="ri-refresh-line align-bottom me-1"></i> Reset</a>

                        <a href="javascript:void(0);" class="btn btn-danger" wire:click="confirmed()"><i class="ri-delete-bin-line align-bottom me-1"></i> Padam</a>
                        <?php endif; ?>
                </div>
                
                

                    
                </div>
            </div>
        
        </div>
        <div class="col-8">

        <div class="card table-card">
            
            <div class="card-body">
            <div class="mb-3">
                <input
                    type="text"
                    class="form-control border-0"
                    wire:model="search"
                    aria-describedby="helpId"
                    placeholder="Taip di sini untuk carian nama"
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
                <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="">
                        
                        <td><?php echo e(@$data->member->name); ?></td>
                        <td><?php echo e(@$data->department->name); ?></td>
                        <td><?php echo e(@$data->year); ?></td>
                        <td><?php echo e(@$data->value); ?></td>
                        <td><?php echo e(@$data->mode); ?></td>
                        <td><?php echo e(@$data->payment_date); ?></td>
                        <td>
                        <a href="javascript:void(0);" class="text-primary d-inline-block" wire:click="show('<?php echo e($data->id); ?>')">
                            <i class="ri-eye-fill fs-16"></i>
                        </a>
                        <a href="javascript:void(0);" class="text-danger d-inline-block" wire:click="delete('<?php echo e($data->id); ?>')">
                            <i class="ri-delete-bin-line fs-16"></i>
                        </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>


            </table>
                    <?php echo e($fees->links()); ?>

        </div>
               
            </div>
        </div>
        
        
        
        
        </div>
        
    
</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/yuran/kemaskini.blade.php ENDPATH**/ ?>