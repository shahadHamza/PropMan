@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <!---Internal Fancy uploader css-->
    <link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">
    <!-- Internal Select2 css -->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal  Datetimepicker-slider css -->
    <link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
    <!-- Internal Spectrum-colorpicker css -->
    <link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Add Contract</h4>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <!--div-->
                        <div class="card">
                            <form action="{{route('contracts.store')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    Add contract
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">

                                        <select class="form-control select-no-search" name="city" required>
                                            <option value="">city</option>
                                        @foreach($city as $c )
                                            <option value="{{$c->nameAr}}">{{$c->nameAr}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">

                                        <select class="form-control select-no-search" name="state_number" required>
                                            <option value="">state</option>
                                        @foreach(  $states as $c)
                                                <option value="{{$c->nameAr}}">{{$c->nameAr}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <input class="form-control" placeholder="property type" minlength="3" onkeydown="return /[a-z]/i.test(event.key)" required type="text" name="type">
                                    </div>
                                </div>

                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg">
                                        <input class="form-control" placeholder="property number" required  type="number" name="prop_number">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <input class="form-control" placeholder="Postal Code" required type="number" name="postal">
                                    </div>

                                </div>

                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg">
                                        <input class="form-control" placeholder="rent email" required type="email" name="email">
                                    </div>

                                    <div class="col-lg">
                                        <input class="form-control" placeholder="rent name" onkeydown="return /[a-z]/i.test(event.key)" minlength="3" required type="text" name="name">
                                    </div>
                                </div>


                                    <div class="row row-sm mg-t-20">
                                        <div class="input-group col-md-4">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                </div>
                                            </div><input class="form-control fc-datepicker" required placeholder="start Date" type="text" name="start">
                                        </div>
                                        <div class="input-group col-md-4">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                </div>
                                            </div><input class="form-control fc-datepicker" placeholder="end date" type="text" name="end">
                                        </div>
                                        <div class="col-lg">

                                            <select class="form-control select-no-search" name="process" required>

                                                <option value="1">annual</option>
                                                <option value="0">half annual</option>

                                            </select>
                                        </div>

                                    </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 mg-t-10">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title mb-1">Contract</h6>
                                                <div>
                                                    <input class="dropify" type="file" name="cont" accept=".pdf" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="row row-sm mg-t-20">

                                    <div class="form-group mb-0 mb-3 justify-content-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                </div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!-- Internal Select2 js-->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
    <script src="{{URL::asset('assets/js/select2.js')}}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
    <!-- Internal TelephoneInput js-->
    <script src="{{URL::asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>

    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <!-- Ionicons js -->
    <script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
    <!-- Internal form-elements js -->
    <script src="{{URL::asset('assets/js/form-elements.js')}}"></script>

@endsection
