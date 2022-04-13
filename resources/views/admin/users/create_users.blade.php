{{--@dd('ahmad')--}}
<x-admin-master>


    @section('content')
        <form action="{{route('users.store')}}" method="post">
            @csrf
            <div class="col-md-6 m-auto mt-5 ">
                <div class="card mb-4">
                    <h5 class="card-header">Name</h5>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="User Name" aria-describedby="floatingInputHelp" name="name" />
                            <label for="floatingInput">Name</label>
                            <div id="floatingInputHelp" class="form-text">Try To Add New User</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="10$" aria-describedby="floatingInputHelp" name="user_id" />
                            <label for="floatingInput">User ID</label>
                            <div id="floatingInputHelp" class="form-text">Should be unique for each user</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="10$" aria-describedby="floatingInputHelp" name="password" />
                            <label for="floatingInput">Password</label>
                            <div id="floatingInputHelp" class="form-text">Should be 8 or more characters</div>
                        </div>
                    </div>

                    <div class="row justify-content-center m-2 w-100">
                        <div class="">
                            <button type="submit" class="btn btn-primary">add</button>
                        </div>
                    </div>
                </div>

            </div>

        </form>
    @endsection


</x-admin-master>
