<!-- main-header opened -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="logo-1" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="dark-logo-1" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-2" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="dark-logo-2" alt="logo"></a>
						</div>
						<div class="app-sidebar__toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
							<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
						</div>
					</div>
					<div class="main-header-right">
						<div class="nav nav-item  navbar-nav-right ml-auto">


							<div class="dropdown main-profile-menu nav nav-item nav-link">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="{{route('logout')}}"
                                       onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="bx bx-log-out"></i> Sign Out</a>
                                </form>
{{--								<a class="profile-user d-flex" href=""><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></a>--}}
{{--								<div class="dropdown-menu">--}}
{{--									<div class="main-header-profile bg-primary p-3">--}}
{{--										<div class="d-flex wd-100p">--}}

{{--											<div class="mr-3 my-auto">--}}
{{--												<h6>{{Auth()->user()->name}}</h6>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}

{{--								</div>--}}
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- /main-header -->
