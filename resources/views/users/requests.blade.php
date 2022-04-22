<x-student-master>
    @section('content')
<div class="col-xl-12 w-75 m-auto" >
    <h6 class="text-muted">Basic</h6>
    <div class="nav-align-top mb-4">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">In Process</button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">Rejected</button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="false">Accepted</button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                <div class="card-datatable text-nowrap">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>#id</th>
                            <th>Agreed ID</th>
                            <th>item</th>
                            <th>Notes</th>
                            <th>Data Send</th>
                            <th>Status</th>
                            <th>Status edit</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($inProcess as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->agreed_id}}</td>
                                <td>{{$item->item?$item->item:''}}</td>
                                <td>{{$item->notes?$item->notes:''}}</td>
                                <td>{{$item->status?$item->status:''}}</td>
                                <td>{{$item->created_at?$item->created_at:''}}</td>

                                <td>
                                    <a href="{{route('edit_opp',$item->id)}}">
                                        <button type="button" class="btn rounded-pill btn-label-info">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('destroy_opp',$item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn rounded-pill btn-label-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach




                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#id</th>
                            <th>Agreed ID</th>
                            <th>item</th>
                            <th>Notes</th>
                            <th>Data Send</th>
                            <th>Status</th>
                            <th>Status edit</th>
                            <th>Edit</th>
                        </tr>
                        </tfoot>
                    </table>
                    </table>
                </div>

            </div>
            <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                <div class="card-datatable text-nowrap">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>#id</th>
                            <th>Agreed ID</th>
                            <th>Report</th>
                            <th>Notes</th>
                            <th>Data Send</th>
                            <th>Status</th>
                            <th>Status edit</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rejected as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->agreed_id}}</td>
                                <td>{{$item->item?$item->item:''}}</td>
                                <td>{{$item->notes?$item->notes:''}}</td>
                                <td>{{$item->status?$item->status:''}}</td>
                                <td>{{$item->created_at?$item->created_at:''}}</td>

                                <td>
                                    <a href="{{route('edit_opp',$item->id)}}">
                                        <button type="button" class="btn rounded-pill btn-label-info">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('destroy_opp',$item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn rounded-pill btn-label-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach




                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#id</th>
                            <th>Agreed ID</th>
                            <th>Report</th>
                            <th>Notes</th>
                            <th>Data Send</th>
                            <th>Status</th>
                            <th>Status edit</th>
                            <th>Edit</th>
                        </tr>
                        </tfoot>
                    </table>
                    </table>
                </div>

            </div>
            <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
                <div class="card-datatable text-nowrap">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>#id</th>
                            <th>Agreed ID</th>
                            <th>Report</th>
                            <th>Notes</th>
                            <th>Data Send</th>
                            <th>Status</th>
                            <th>Status edit</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($accepted as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->agreed_id}}</td>
                                <td>{{$item->item?$item->item:''}}</td>
                                <td>{{$item->notes?$item->notes:''}}</td>
                                <td>{{$item->status?$item->status:''}}</td>
                                <td>{{$item->created_at?$item->created_at:''}}</td>

                                <td>
                                    <a href="{{route('edit_opp',$item->id)}}">
                                        <button type="button" class="btn rounded-pill btn-label-info">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('destroy_opp',$item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn rounded-pill btn-label-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach




                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#id</th>
                            <th>Agreed ID</th>
                            <th>Report</th>
                            <th>Notes</th>
                            <th>Data Send</th>
                            <th>Status</th>
                            <th>Status edit</th>
                            <th>Edit</th>
                        </tr>
                        </tfoot>
                    </table>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
    @endsection
        </x-student-master>
