@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!---Internal Owl Carousel css-->
    <link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <!---Internal  Multislider css-->
    <link href="{{URL::asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">
    <!--- Select2 css -->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
    @if(session()->has('add'))
        <div class="alert alert-success" role="alert">
            {{session()->get('add')}}
        </div>
    @endif
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Payments</h4>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title mg-b-0">Your payments</h4>
                                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                                    </div>
                                    <p class="tx-12 tx-gray-500 mb-2">All payments</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example1">
                                            <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">Contract #ID</th>
                                                <th class="wd-20p border-bottom-0">Rent amount</th>
                                                <th class="wd-15p border-bottom-0">Rent due date</th>
                                                <th class="wd-15p border-bottom-0">Last update date</th>
                                                <th class="wd-15p border-bottom-0">payment Status</th>
                                                @if(\Illuminate\Support\Facades\Auth::user()->type==0)
                                                    <th class="wd-15p border-bottom-0">Rent from</th>
                                                @endif
                                                @if(\Illuminate\Support\Facades\Auth::user()->type==1)
                                                <th class="wd-15p border-bottom-0">Tenant email</th>
                                                <th class="wd-15p border-bottom-0">actions</th>
                                                @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=0?>
                                            @foreach($payments as $x)
                                                    <?php $i++?>
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td>{{$x->price}}</td>
                                                    <td>{{$x->date}}</td>
                                                    <td>{{$x->updated_at}}</td>
                                                    <td>{{$x->state}}</td>
                                                    @if(\Illuminate\Support\Facades\Auth::user()->type==0)
                                                        <td>{{$x->user->email}}</td>
                                                    @endif
                                                    @if(\Illuminate\Support\Facades\Auth::user()->type==1)

                                                    <td>{{$x->rent}}</td>


                                                    <td><div class="btn-icon-list">
                                                            <a class="modal-effect" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8"
                                                            data-id="{{$x->id}}" data-email="{{$x->rent}}" data-amount="{{$x->price}}" data-date="{{$x->date}}"
                                                            >
                                                            <button class="btn btn-success btn-icon"><i class="typcn typcn-edit"></i>

                                                            </button></a>
                                                        </div>
                                                    </td>
                                                    @endif

                                                </tr>


                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/div-->

                        <!--/div-->
                    <div class="modal" id="modaldemo8">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Edit payment</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-lg">
                                        <div class="card  box-shadow-0 ">
                                            <div class="card-header">
                                                <h4 class="card-title mb-1">Details</h4>
                                            </div>
                                            <form action="{{route('update_payment')}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="id" value="id" id="id">
                                            <div class="card-body pt-0">

                                                    <div class="">
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Rent Email</label>
                                                            <input type="email" readonly class="form-control" id="email" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">amount</label>
                                                            <input type="number" readonly class="form-control" id="amount" placeholder="amount">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">date</label>
                                                            <input type="text" readonly class="form-control" id="date" placeholder="date">
                                                        </div>


                                                            <select class="form-control select-no-search" name="state" required>
                                                                <option value="unpaid">
                                                                    unpaid
                                                                </option>
                                                                <option value="paid">
                                                                    paid
                                                                </option>
                                                            </select>

                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-3 mb-0">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    </div>


				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection


@section('js')
    <!-- Internal Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!-- Internal Select2 js-->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!-- Internal Modal js-->
    <script src="{{URL::asset('assets/js/modal.js')}}"></script>

    <script>
        $('#modaldemo8').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var email = button.data('email')
            var amount = button.data('amount')
            var date = button.data('date')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #email').val(email);
            modal.find('.modal-body #amount').val(amount);
            modal.find('.modal-body #date').val(date);
        })
    </script>
@endsection
