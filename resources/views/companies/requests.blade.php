<x-company-master>
    @section('style')
        <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css"/>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    @endsection
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Manage Requests /</span> View  Requests
            </h4>


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
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>#id</th>
                            <th>Company</th>
                            <th>User</th>
                            <th>Opportunity</th>
                            <th>Status</th>
                            <th>Send At</th>
                            <th>Status edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($requests as $request)
                            <tr>
                                <td>{{$request->id}}</td>
                                <td>{{$request->company_id}}</td>
                                <td>{{$request->user_id}}</td>
                                <td>{{$request->opportunity_id}}</td>
                                <td>{{$request->status}}</td>
                                <td>{{$request->created_at}}</td>
                                <td>
                                    <form action="{{route('update_request',$request->id)}}" method="post" id="status_form">
                                        @csrf
                                        @method('PUT')
                                        @if($request->status==1)
                                        <select name="status" id="" onchange="formSubmit()">
                                            <option selected disabled>Choose one</option>
                                            <option value="4">ACCEPT</option>
                                            <option value="3">REJECT</option>
                                        </select>
                                        @else
                                            You cant Edit This
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#id</th>
                            <th>Company</th>
                            <th>User</th>
                            <th>Opportunity</th>
                            <th>Status</th>
                            <th>Send At</th>
                            <th>Status edit</th>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>

            @endsection
            @section('script')
                <script>
                    $(document).ready(function () {
                        $('#example').DataTable();
                    });
                </script>
                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
                <script>
                    const form = document.getElementById('status_form');
                    const formSubmit = ()=>{
                        form.submit();
                    }
                </script>
    @endsection

</x-company-master>
