<x-student-master>
    @section('content')
        <section style="background-color: #eee;height: 100%">
            @include('vendor.sweetalert.alert')

            <div class="container py-5">
                <div class="row justify-content-center mb-3">

                        <i class="bx bx-search bx-sm "></i>
                    <form action="{{route('filterOpportunities')}}" class="col-md-6 col-xl-3 mb-3" id="search-form">
                        @csrf
                        <input type="text" class="form-control text-center" name="filter" id=""
                               onchange="searchFilter()" placeholder="search">
                    </form>
                    <form action="{{route('filterOpportunities')}}" class="col-md-6 col-xl-7 mb-3" id="filter-form">
                        @csrf
                        <select class="form-control text-center" name="filter" id=""
                                onchange="submitFilter()">
                            <option value="" disabled selected>Add Filter</option>
                            <option value="mobile">mobile</option>
                            <option value="web">web</option>
                            <option value="AI">AI</option>
                            <option value="all">all</option>
                        </select>
                    </form>
                    @if(array_key_first($request)==null)
                        @foreach ($opportunities as $item)
                            <div class="col-md-12 col-xl-10">
                                <div class="card shadow-0 border rounded-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                    <img
                                                        src='{{$item->photo}}'
                                                        class="w-100"
                                                    />
                                                    <a href="#!">
                                                        <div class="hover-overlay">
                                                            <div
                                                                class="mask"
                                                                style="background-color: rgba(253, 253, 253, 0.15);"
                                                            ></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xl-6">
                                                <h5>{{$item->name}}</h5>
                                                <div class="d-flex flex-row">
                                                    <div class=" mb-1 me-2">
                                                        @if($item->company->rate==1)
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                        @elseif($item->company->rate==2)
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                        @elseif($item->company->rate==3)
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                        @elseif($item->company->rate==4)
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star "></i>
                                                        @elseif($item->company->rate==5)
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star text-danger"></i>
                                                            <i class="fa fa-star text-danger"></i>
                                                        @else
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        @endif

                                                    </div>
                                                    <span>310</span>
                                                </div>
                                                <div class="mt-1 mb-0 text-muted small">
                                                    <span>{{$item->company->name}}</span>
                                                    <span class="text-primary"> • </span>
                                                    <span>{{$item->seats}}</span>
                                                    <span class="text-primary"> • </span>
                                                    <span>{{$item->major}}<br/></span>
                                                </div>

                                                <p class="text-truncate mb-4 mb-md-0">
                                                    {{$item->details}}
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                                <div class="d-flex flex-row align-items-center mb-1">
                                                    <h4 class="mb-1 me-1">{{$item->starting_date}}</h4>
                                                </div>
                                                <h6 class="{{$item->status=='available'?'text-success':'text-danger'}}">{{$item->status}}</h6>
                                                <div class="d-flex flex-column mt-4">
                                                    <a href="{{route('showToUser',$item->id)}}"
                                                       class="btn btn-primary btn-sm">Details</a>
                                                    <a href="{{route('clickRequest',$item->id)}}"
                                                       onclick="deleteConfirm('delele-product-form-39')" npm
                                                       class="btn btn-outline-primary btn-sm mt-2">
                                                        Send a request
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            <div class="d-flex justify-content-center mt-5">
                                {!! $opportunities->links() !!}
                            </div>
                    @else
                        <div class="row d-grid justify-content-center align-items-center" style="height: 100%;">
                            <div class="col-md-12 col-xl-10" style="margin-top:35vh;width: 100% ">
                                You Have an available Request!
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endsection
    @section('script')
            <script>
                const form = document.getElementById('filter-form');
                const form2 = document.getElementById('search-form');
                const submitFilter = ()=>{
                    form.submit();
                }
                const searchFilter = ()=>{
                    form2.submit();
                }
            </script>
    @endsection
</x-student-master>
