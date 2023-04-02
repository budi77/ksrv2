<div>

<?php $__env->startSection('title'); ?>
Tetapan Sistem
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-n4 mx-n4">
                <div class="bg-soft-info">
                    <div class="card-body pb-0 px-4">
                        <div class="row mb-3">
                            <div class="col-md">
                                <div class="row align-items-center g-3">
                                    <div class="col-md-auto">
                                        <div class="avatar-md">
                                            <div class="avatar-title bg-white rounded-circle">
                                                <img src="<?php echo e(URL::asset('assets/images/brands/slack.png')); ?>" alt=""
                                                    class="avatar-xs">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div>
                                            <h4 class="fw-bold">Tetapan Sistem</h4>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="hstack gap-1 flex-wrap">
                                    <button type="button" class="btn py-0 fs-16 favourite-btn active">
                                        <i class="ri-star-fill"></i>
                                    </button>
                                    <button type="button" class="btn py-0 fs-16 text-body">
                                        <i class="ri-share-line"></i>
                                    </button>
                                    <button type="button" class="btn py-0 fs-16 text-body">
                                        <i class="ri-flag-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#project-overview"
                                    role="tab">
                                    Bahagian
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#project-documents" role="tab">
                                    Gabungan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#project-activities" role="tab">
                                    Pengguna Sistem
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- end card body -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content text-muted">
                <div class="tab-pane fade show active" id="project-overview" role="tabpanel">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.departments', [])->html();
} elseif ($_instance->childHasBeenRendered('l338543171-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l338543171-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338543171-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338543171-0');
} else {
    $response = \Livewire\Livewire::mount('settings.departments', []);
    $html = $response->html();
    $_instance->logRenderedChild('l338543171-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 
                    
                    <!-- end row -->
                </div>
                <!-- end tab pane -->
                <div class="tab-pane fade" id="project-documents" role="tabpanel">
                    

                    
                </div>
                <!-- end tab pane -->
                <div class="tab-pane fade" id="project-activities" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Activities</h5>
                            <div class="acitivity-timeline py-3">
                                <div class="acitivity-item d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?php echo e(URL::asset('assets/images/users/avatar-1.jpg')); ?>" alt=""
                                            class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Oliver Phillips <span
                                                class="badge bg-soft-primary text-primary align-middle">New</span></h6>
                                        <p class="text-muted mb-2">We talked about a project on linkedin.</p>
                                        <small class="mb-0 text-muted">Today</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                        <div class="avatar-title bg-soft-success text-success rounded-circle">
                                            N
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Nancy Martino <span
                                                class="badge bg-soft-secondary text-secondary align-middle">In
                                                Progress</span></h6>
                                        <p class="text-muted mb-2"><i class="ri-file-text-line align-middle ms-2"></i>
                                            Create new project Buildng product</p>
                                        <div class="avatar-group mb-2">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-bs-original-title="Christi">
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar-4.jpg')); ?>" alt=""
                                                    class="rounded-circle avatar-xs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-bs-original-title="Frank Hook">
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar-3.jpg')); ?>" alt=""
                                                    class="rounded-circle avatar-xs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-bs-original-title=" Ruby">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                        R
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                data-bs-original-title="more">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle">
                                                        2+
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <small class="mb-0 text-muted">Yesterday</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?php echo e(URL::asset('assets/images/users/avatar-2.jpg')); ?>" alt=""
                                            class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Natasha Carey <span
                                                class="badge bg-soft-success text-success align-middle">Completed</span>
                                        </h6>
                                        <p class="text-muted mb-2">Adding a new event with attachments</p>
                                        <div class="row">
                                            <div class="col-xxl-4">
                                                <div class="row border border-dashed gx-2 p-2 mb-2">
                                                    <div class="col-4">
                                                        <img src="<?php echo e(URL::asset('assets/images/small/img-2.jpg')); ?>"
                                                            alt="" class="img-fluid rounded" />
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-4">
                                                        <img src="<?php echo e(URL::asset('assets/images/small/img-3.jpg')); ?>"
                                                            alt="" class="img-fluid rounded" />
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-4">
                                                        <img src="<?php echo e(URL::asset('assets/images/small/img-4.jpg')); ?>"
                                                            alt="" class="img-fluid rounded" />
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <small class="mb-0 text-muted">25 Nov</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?php echo e(URL::asset('assets/images/users/avatar-6.jpg')); ?>" alt=""
                                            class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Bethany Johnson</h6>
                                        <p class="text-muted mb-2">added a new member to velzon dashboard</p>
                                        <small class="mb-0 text-muted">19 Nov</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs acitivity-avatar">
                                            <div class="avatar-title rounded-circle bg-soft-danger text-danger">
                                                <i class="ri-shopping-bag-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Your order is placed <span
                                                class="badge bg-soft-danger text-danger align-middle ms-1">Out of
                                                Delivery</span></h6>
                                        <p class="text-muted mb-2">These customers can rest assured their order has been
                                            placed.</p>
                                        <small class="mb-0 text-muted">16 Nov</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?php echo e(URL::asset('assets/images/users/avatar-7.jpg')); ?>" alt=""
                                            class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Lewis Pratt</h6>
                                        <p class="text-muted mb-2">They all have something to say beyond the words on the
                                            page. They can come across as casual or neutral, exotic or graphic. </p>
                                        <small class="mb-0 text-muted">22 Oct</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs acitivity-avatar">
                                            <div class="avatar-title rounded-circle bg-soft-info text-info">
                                                <i class="ri-line-chart-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Monthly sales report</h6>
                                        <p class="text-muted mb-2"><span class="text-danger">2 days left</span>
                                            notification to submit the monthly sales report. <a href="javascript:void(0);"
                                                class="link-warning text-decoration-underline">Reports Builder</a></p>
                                        <small class="mb-0 text-muted">15 Oct</small>
                                    </div>
                                </div>
                                <div class="acitivity-item d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="<?php echo e(URL::asset('assets/images/users/avatar-8.jpg')); ?>" alt=""
                                            class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">New ticket received <span
                                                class="badge bg-soft-success text-success align-middle">Completed</span>
                                        </h6>
                                        <p class="text-muted mb-2">User <span class="text-secondary">Erica245</span>
                                            submitted a ticket.</p>
                                        <small class="mb-0 text-muted">26 Aug</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!-- end tab pane -->
                <div class="tab-pane fade" id="project-team" role="tabpanel">
                    <div class="row g-4 mb-3">
                        <div class="col-sm">
                            <div class="d-flex">
                                <div class="search-box me-2">
                                    <input type="text" class="form-control" placeholder="Search member...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#inviteMembersModal"><i class="ri-share-line me-1 align-bottom"></i>
                                    Invite Member</button>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="team-list list-view-filter">
                        <div class="card team-box">
                            <div class="card-body px-4">
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="flex-shrink-0 me-2">
                                                    <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                        <i class="ri-star-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar-2.jpg')); ?>" alt=""
                                                    class="img-fluid d-block rounded-circle" />
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1">Nancy Martino</h5>
                                                </a>
                                                <p class="text-muted mb-0">Team Leader & HR</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">225</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">197</h5>
                                                <p class="text-muted mb-0">Tasks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col">
                                        <div class="text-end">
                                            <a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                class="btn btn-light view-btn">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card team-box">
                            <div class="card-body px-4">
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="flex-shrink-0 me-2">
                                                    <button type="button" class="btn fs-16 p-0 favourite-btn active">
                                                        <i class="ri-star-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <div class="avatar-title bg-soft-danger text-danger rounded-circle">
                                                    HB
                                                </div>
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1">Henry Baird</h5>
                                                </a>
                                                <p class="text-muted mb-0">Full Stack Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">352</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">376</h5>
                                                <p class="text-muted mb-0">Tasks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col">
                                        <div class="text-end">
                                            <a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                class="btn btn-light view-btn">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card team-box">
                            <div class="card-body px-4">
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="flex-shrink-0 me-2">
                                                    <button type="button" class="btn fs-16 p-0 favourite-btn active">
                                                        <i class="ri-star-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar-3.jpg')); ?>" alt=""
                                                    class="img-fluid d-block rounded-circle" />
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1">Frank Hook</h5>
                                                </a>
                                                <p class="text-muted mb-0">Project Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">164</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">182</h5>
                                                <p class="text-muted mb-0">Tasks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col">
                                        <div class="text-end">
                                            <a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                class="btn btn-light view-btn">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card team-box">
                            <div class="card-body px-4">
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="flex-shrink-0 me-2">
                                                    <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                        <i class="ri-star-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar-8.jpg')); ?>" alt=""
                                                    class="img-fluid d-block rounded-circle" />
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1">Jennifer Carter</h5>
                                                </a>
                                                <p class="text-muted mb-0">UI/UX Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">225</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">197</h5>
                                                <p class="text-muted mb-0">Tasks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col">
                                        <div class="text-end">
                                            <a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                class="btn btn-light view-btn">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card team-box">
                            <div class="card-body px-4">
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="flex-shrink-0 me-2">
                                                    <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                        <i class="ri-star-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <div class="avatar-title bg-soft-success text-success rounded-circle">
                                                    ME
                                                </div>
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1">Megan Elmore</h5>
                                                </a>
                                                <p class="text-muted mb-0">Team Leader & Web Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">201</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">263</h5>
                                                <p class="text-muted mb-0">Tasks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col">
                                        <div class="text-end">
                                            <a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                class="btn btn-light view-btn">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card team-box">
                            <div class="card-body px-4">
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="flex-shrink-0 me-2">
                                                    <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                        <i class="ri-star-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar-4.jpg')); ?>" alt=""
                                                    class="img-fluid d-block rounded-circle" />
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1">Alexis Clarke</h5>
                                                </a>
                                                <p class="text-muted mb-0">Backend Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">132</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">147</h5>
                                                <p class="text-muted mb-0">Tasks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col">
                                        <div class="text-end">
                                            <a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                class="btn btn-light view-btn">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card team-box">
                            <div class="card-body px-4">
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="flex-shrink-0 me-2">
                                                    <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                        <i class="ri-star-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <div class="avatar-title bg-soft-info text-info rounded-circle">
                                                    NC
                                                </div>
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1">Nathan Cole</h5>
                                                </a>
                                                <p class="text-muted mb-0">Front-End Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">352</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">376</h5>
                                                <p class="text-muted mb-0">Tasks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col">
                                        <div class="text-end">
                                            <a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                class="btn btn-light view-btn">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card team-box">
                            <div class="card-body px-4">
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="flex-shrink-0 me-2">
                                                    <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                        <i class="ri-star-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar-7.jpg')); ?>" alt=""
                                                    class="img-fluid d-block rounded-circle" />
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1">Joseph Parker</h5>
                                                </a>
                                                <p class="text-muted mb-0">Team Leader & HR</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">64</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">93</h5>
                                                <p class="text-muted mb-0">Tasks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col">
                                        <div class="text-end">
                                            <a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                class="btn btn-light view-btn">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card team-box">
                            <div class="card-body px-4">
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="flex-shrink-0 me-2">
                                                    <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                        <i class="ri-star-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar-5.jpg')); ?>" alt=""
                                                    class="img-fluid d-block rounded-circle" />
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1">Erica Kernan</h5>
                                                </a>
                                                <p class="text-muted mb-0">Web Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">345</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">298</h5>
                                                <p class="text-muted mb-0">Tasks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col">
                                        <div class="text-end">
                                            <a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                class="btn btn-light view-btn">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card team-box">
                            <div class="card-body px-4">
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="flex-shrink-0 me-2">
                                                    <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                        <i class="ri-star-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <div class="avatar-title border bg-light text-primary rounded-circle">
                                                    DP
                                                </div>
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1">Donald Palmer</h5>
                                                </a>
                                                <p class="text-muted mb-0">Wed Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">97</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">135</h5>
                                                <p class="text-muted mb-0">Tasks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col">
                                        <div class="text-end">
                                            <a href="<?php echo e(URL::asset('/pages-profile')); ?>"
                                                class="btn btn-light view-btn">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!-- end team list -->

                    <div class="row g-0 text-center text-sm-start align-items-center mb-3">
                        <div class="col-sm-6">
                            <div>
                                <p class="mb-sm-0">Showing 1 to 10 of 12 entries</p>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-sm-6">
                            <ul
                                class="pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                                <li class="page-item disabled"> <a href="#" class="page-link"><i
                                            class="mdi mdi-chevron-left"></i></a> </li>
                                <li class="page-item"> <a href="#" class="page-link">1</a> </li>
                                <li class="page-item active"> <a href="#" class="page-link">2</a> </li>
                                <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                                <li class="page-item"> <a href="#" class="page-link">4</a> </li>
                                <li class="page-item"> <a href="#" class="page-link">5</a> </li>
                                <li class="page-item"> <a href="#" class="page-link"><i
                                            class="mdi mdi-chevron-right"></i></a> </li>
                            </ul>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
                <!-- end tab pane -->
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <!-- Modal -->
    <div class="modal fade" id="inviteMembersModal" tabindex="-1" aria-labelledby="inviteMembersModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header p-3 ps-4 bg-soft-success">
                    <h5 class="modal-title" id="inviteMembersModalLabel">Members</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="search-box mb-3">
                        <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                        <i class="ri-search-line search-icon"></i>
                    </div>

                    <div class="mb-4 d-flex align-items-center">
                        <div class="me-2">
                            <h5 class="mb-0 fs-13">Members :</h5>
                        </div>
                        <div class="avatar-group justify-content-center">
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Brent Gonzalez">
                                <div class="avatar-xs">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-3.jpg')); ?>" alt=""
                                        class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Sylvia Wright">
                                <div class="avatar-xs">
                                    <div class="avatar-title rounded-circle bg-secondary">
                                        S
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Ellen Smith">
                                <div class="avatar-xs">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-4.jpg')); ?>" alt=""
                                        class="rounded-circle img-fluid">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mx-n4 px-4" data-simplebar style="max-height: 225px;">
                        <div class="vstack gap-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-2.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-14 mb-0"><a href="#" class="text-body d-block">Nancy Martino</a>
                                    </h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <div class="avatar-title bg-soft-danger text-danger rounded-circle">
                                        HB
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-14 mb-0"><a href="#" class="text-body d-block">Henry Baird</a>
                                    </h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-3.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-14 mb-0"><a href="#" class="text-body d-block">Frank Hook</a></h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-4.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-14 mb-0"><a href="#" class="text-body d-block">Jennifer Carter</a>
                                    </h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <div class="avatar-title bg-soft-success text-success rounded-circle">
                                        AC
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-14 mb-0"><a href="#" class="text-body d-block">Alexis Clarke</a>
                                    </h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-7.jpg')); ?>" alt=""
                                        class="img-fluid rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-14 mb-0"><a href="#" class="text-body d-block">Joseph Parker</a>
                                    </h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                        </div>
                        <!-- end list -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light w-xs" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success w-xs">Invite</button>
                </div>
            </div>
            <!-- end modal-content -->
        </div>
        <!-- modal-dialog -->
    </div>
    <!-- end modal -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/js/pages/project-overview.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
</div>
<?php /**PATH C:\laragon\www\ksrv2\resources\views/livewire/settings/index.blade.php ENDPATH**/ ?>