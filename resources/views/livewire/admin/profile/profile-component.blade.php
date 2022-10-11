<div>
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Settings</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profile</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="met-profile">
                            <div class="row">
                                <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                    <div class="met-profile-main">
                                        <div class="met-profile-main-pic">
                                            @if ($profile->avatar)
                                                <img src="{{ asset('uploads/profile') }}/{{ $profile->avatar }}"
                                                    alt="" height="110" class="rounded-circle">
                                                <span class="met-profile_main-pic-change">
                                                    <i class="fas fa-camera"></i>
                                                </span>
                                            @else
                                                <img src="{{ asset('assets/front/images/default/profile.png') }}"
                                                    alt="" height="110" class="rounded-circle">
                                                <span class="met-profile_main-pic-change">
                                                    <i class="fas fa-camera"></i>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="met-profile_user-detail">
                                            <h5 class="met-user-name">{{ $profile->name }}</h5>
                                            <p class="mb-0 met-user-name-post">UI/UX Designer, India</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-4 ms-auto align-self-center">
                                    <ul class="list-unstyled personal-detail mb-0">
                                        <li class=""><i
                                                class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b>
                                                phone </b> : {{ $profile->phone }}</li>
                                        <li class="mt-2"><i
                                                class="las la-envelope text-secondary font-22 align-middle mr-2"></i>
                                            <b> Email </b> : {{ $profile->email }}
                                        </li>
                                        <li class="mt-2"><i
                                                class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b>
                                                Website </b> :
                                            <a href="" class="font-14 text-primary">example.com</a>
                                        </li>
                                    </ul>

                                </div>
                                <!--end col-->
                                <div class="col-lg-4 align-self-center">
                                    <div class="row">
                                        <div class="col-auto text-end border-end">
                                            <button type="button"
                                                class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mb-2">
                                                <i class="fab fa-facebook-f"></i>
                                            </button>
                                            <p class="mb-0 fw-semibold">Facebook</p>
                                            <h4 class="m-0 fw-bold">25k <span
                                                    class="text-muted font-12 fw-normal">Followers</span></h4>
                                        </div>
                                        <!--end col-->
                                        <div class="col-auto">
                                            <button type="button"
                                                class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm mb-2">
                                                <i class="fab fa-twitter"></i>
                                            </button>
                                            <p class="mb-0 fw-semibold">Twitter</p>
                                            <h4 class="m-0 fw-bold">58k <span
                                                    class="text-muted font-12 fw-normal">Followers</span></h4>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end f_profile-->
                    </div>
                    <!--end card-body-->
                    <div class="card-body p-0">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#Settings" role="tab"
                                    aria-selected="false">Settings</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane p-3 active" id="Settings" role="tabpanel">
                                <form wire:submit.prevent="storeData">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h4 class="card-title">Personal Information</h4>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end card-header-->
                                                <div class="card-body">
                                                    <div class="form-group mb-3 row">
                                                        <label
                                                            class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="text" wire:model="name">
                                                            @error('name')
                                                                <span class="text-danger"
                                                                    style="font-size: 12.5px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label
                                                            class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact
                                                            Phone</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i
                                                                        class="las la-phone"></i></span>
                                                                <input type="text" class="form-control"
                                                                    aria-describedby="basic-addon1" wire:model="phone">
                                                                @error('phone')
                                                                    <span class="text-danger"
                                                                        style="font-size: 12.5px;">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label
                                                            class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email
                                                            Address</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i
                                                                        class="las la-at"></i></span>
                                                                <input type="text" class="form-control"
                                                                    aria-describedby="basic-addon1" wire:model="email">
                                                                @error('email')
                                                                    <span class="text-danger"
                                                                        style="font-size: 12.5px;">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label
                                                            class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Country
                                                            Name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="text"
                                                                wire:model="country">
                                                            @error('country')
                                                                <span class="text-danger"
                                                                    style="font-size: 12.5px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Change Password</h4>
                                                </div>
                                                <!--end card-header-->
                                                <div class="card-body">
                                                    <div class="form-group mb-3 row">
                                                        <label
                                                         class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">New
                                                            Password</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="password"
                                                                wire:model="password">
                                                            @error('password')
                                                                <span class="text-danger"
                                                                    style="font-size: 12.5px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label
                                                            class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirm
                                                            Password</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="password"
                                                                wire:model="confirm_password">
                                                            @error('confirm_password')
                                                                <span class="text-danger"
                                                                    style="font-size: 12.5px;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Image Settings</h4>
                                                </div>
                                                <!--end card-header-->
                                                <div class="card-body">
                                                    <div class="form-group mb-3 row">
                                                        <label
                                                            class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Profile
                                                            Image</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control mb-2" type="file"
                                                                wire:model="avatar">
                                                            @if ($avatar)
                                                                <img src="{{ $avatar->temporaryUrl() }}"
                                                                    width="120" alt="">
                                                            @elseif ($new_avatar)
                                                                <img src="{{ asset('uploads/profile') }}/{{ $new_avatar }}"
                                                                    width="120" alt="">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                        </div> <!-- end col -->
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="form-group mb-3 row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                </div>
                                <!--end row-->
                            </form>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div><!-- container -->
</div>
