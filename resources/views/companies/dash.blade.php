
<x-company-master>
    @section('style')
        <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    @endsection
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Manage Users /</span> View All Users
            </h4>
            <a href="{{route('users.create')}}"> <button class="btn rounded-pill btn-dark mb-2">Create New User</button> </a>

            <!-- Ajax Sourced Server-side -->
            <div class="card" style="width: fit-content">
                <h5 class="card-header">Users Table</h5>
                @if(Session('user_deleted'))
                    <div class="alert alert-danger alert-dismissible col-6" role="alert">
                        <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">User Deleted!!</h6>
                        <p class="mb-0">Aww yeah, you successfully Deleted the user.</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>

                    </div>
                @elseif(Session('user_updated'))
                    <div class="alert alert-primary alert-dismissible" role="alert">
                        <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Edit User</h6>
                        <p class="mb-0">You successfully Edited the user.</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif
                <div class="card-datatable text-nowrap">

                </div>
            </div>

            @endsection
            @section('script')
                <script>
                    $(document).ready(function() {
                        $('#example').DataTable();
                    });
                </script>
                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    @endsection

</x-company-master>
