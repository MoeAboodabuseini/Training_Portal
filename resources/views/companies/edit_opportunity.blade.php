{{--@dd('ahmad')--}}
<x-company-master>

    @include('sweetalert::alert')
    @section('content')
        <form action="{{route('update_opp',$opportunity->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-6 m-auto mt-5 ">
                <div class="card mb-4">
                    <h5 class="card-header">Name</h5>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="opportunity Name" aria-describedby="floatingInputHelp" name="name" value="{{$opportunity->name}}"/>
                            <label for="floatingInput">Opportunity Name</label>
                            <div id="floatingInputHelp" class="form-text">Try To Add New Opportunity</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="web/mobile/etc.." aria-describedby="floatingInputHelp" name="major" value="{{$opportunity->major}}"/>
                            <label for="floatingInput">Major</label>
                            <div id="floatingInputHelp" class="form-text">Field of The Opportunity</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="15" aria-describedby="floatingInputHelp" name="seats" value="{{$opportunity->seats}}"/>
                            <label for="floatingInput">Available Seats</label>
                            <div id="floatingInputHelp" class="form-text">How many Students You need</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="super" aria-describedby="floatingInputHelp" name="supervisor_name" value="{{$opportunity->supervisor_name}}"/>
                            <label for="floatingInput">Supervisor Name</label>
                            <div id="floatingInputHelp" class="form-text">supervisor name</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="0777777777" aria-describedby="floatingInputHelp" name="supervisor_phone" value="{{$opportunity->supervisor_phone}}"/>
                            <label for="floatingInput">Supervisor Phone</label>
                            <div id="floatingInputHelp" class="form-text">supervisor phone</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="sup@gmail.com" aria-describedby="floatingInputHelp" name="supervisor_email" value="{{$opportunity->supervisor_email}}"/>
                            <label for="floatingInput">Supervisor Email</label>
                            <div id="floatingInputHelp" class="form-text">supervisor email</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <input type="file" class="form-control" id="floatingInput" placeholder="png/jpg/any" aria-describedby="floatingInputHelp" name="photo" value="{{$opportunity->photo}}"/>
                            <label for="floatingInput">Image</label>
                            <div id="floatingInputHelp" class="form-text">Image</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="floatingInput" placeholder="12/12/2020" aria-describedby="floatingInputHelp" name="starting_date" value="{{$opportunity->starting_date}}"/>
                            <label for="floatingInput">Starting Date</label>
                            <div id="floatingInputHelp" class="form-text">starting date</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <select type="date" class="form-control" id="floatingInput" placeholder="12/12/2020" aria-describedby="floatingInputHelp" name="status" value="{{$opportunity->status}}">
                                <option value="available">available</option>
                                <option value="unavailable">not available</option>
                            </select>>
                            <label for="floatingInput">Starting Date</label>
                            <div id="floatingInputHelp" class="form-text">starting date</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-floating">
                            <textarea type="date"  class="form-control"  style="height: 200px" id="floatingInput" placeholder="some information about the opportunite " aria-describedby="floatingInputHelp" name="details" >{{$opportunity->details}}</textarea>
                            <label for="floatingInput">Details</label>
                            <div id="floatingInputHelp" class="form-text">details</div>
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


</x-company-master>
