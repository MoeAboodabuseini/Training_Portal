<x-student-master>            <!-- / Navbar -->


@section('content')
    <!-- Content wrapper -->
        <div class="content-wrapper">

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">


                <h4 class="fw-bold py-3 mb-4">
                    <span class="text-muted fw-light">Student /</span> Account
                </h4>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills flex-column flex-md-row mb-3">
                            <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                                        class="bx bx-user me-1"></i> Account</a></li>
                        </ul>
                        <div class="card mb-4">
                            <h5 class="card-header">Profile Details</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="{{"../../".$user->photo}}" alt="user-avatar" class="d-block rounded"
                                         height="100" width="100" id="uploadedAvatar"/>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="card-body">
                                <form id="formAccountSettings" action="{{route('studentProfile')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label"> Name</label>
                                            <input class="form-control" type="text" id="firstName" name="firstName"
                                                   value="{{$user->name}}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="lastName" class="form-label">Major</label>
                                            <input class="form-control" type="text" name="major" id="lastName"
                                                   value="{{$user->major}}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input class="form-control" type="text" id="email" name="email"
                                                   value="{{$user->email?$user->email:""}}" {{$user->phone?"":'required'}}/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="user_id" class="form-label">ID</label>
                                            <input type="text" class="form-control" id="user_id" name="user_id"
                                                   value="{{$user->user_id}}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">Jo (+962)</span>
                                                <input type="text" id="phoneNumber" name="phone" class="form-control"
                                                       value="{{$user->phone?$user->phone:""}}" {{$user->phone?"":'required'}} />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="address" name="location"
                                                   value="{{$user->location?$user->location:""}}" {{$user->phone?"":'required'}}/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="hours" class="form-label">Hours</label>
                                            <input type="text" class="form-control" id="hours" name="hours"
                                                   value="{{$user->hours}}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="GPA" class="form-label">GPA</label>
                                            <input type="text" class="form-control" id="GPA" name="GPA"
                                                   value="{{$user->GPA}}" disabled/>
                                        </div>
                                        <!-- Basic -->
                                        <div class="col-md-6 mb-4">
                                            <label for="TagifyBasic" class="form-label">Skills</label>
                                            <input id="TagifyBasic" class="form-control" name="skills"
                                                   required value="{{$str}}"/>
                                        </div>

                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                        <button type="reset" class="btn btn-label-secondary" onclick="formReset()">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /Account -->
                        </div>
                    </div>
                </div>


            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>






    @endsection
</x-student-master>
