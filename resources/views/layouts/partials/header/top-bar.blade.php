<div id="top-bar">

	<div class="container clearfix">
		<div class="col_half nobottommargin clearfix">

			<div class="top-links">
				{{-- {!! $menu_top->asUl() !!} --}}
				<ul>
 					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" src="/flags/{{ LaravelLocalization::getCurrentLocale() }}.png"> &nbsp; &nbsp;
                            <span class="username">{{ LaravelLocalization::getCurrentLocaleName() }}</span>

                        </a>
                        <ul class="dropdown-menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
		                        <li>
			                        <a href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{$localeCode}}">
				                        <img alt="" src="/flags/{{$localeCode}}.png">&nbsp; &nbsp;{{{ $properties['native'] }}} </a>

		                        </li>
                            @endforeach
                        </ul>
       				</li>


					{{-- <li> <a href="{{ url('/' . getLang()) }}">Home</a> </li> --}}
					<ul class="nav navbar-nav navbar-right">
						{{-- @if (Sentinel::guest()) --}}
						<li> <a href="{{ url('/' . getLang()) }}/admin/login">Login</a> </li>
						<li> <a href="{{ url('/' . getLang()) }}/admin/register">Register</a> </li>
						{{-- @else --}}
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							 {{-- {!! Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name !!} --}}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li> <a href="{{ url('/admin/logout') }}">Logout</a> </li>
							</ul>
						</li>
<li> <a href="{!! url('/' . getLang()) !!}/admin">ADMIN</a> </li>

						{{-- @endif --}}

					</ul>
					{{-- <li> <a href="{{ url('/' . getLang(). '/faqs/') }}">FAQs</a> </li> --}}
					{{-- <li> <a href="{{ url('/' . getLang(). '/contact/') }}">Contact</a> </li> --}}
					<li>
						<a href="javascriptvoid();">Dealer Locations</a>
						<ul>
							<li> <a href="{!! url('/' . getLang(). '/') !!}#">Australia</a> </li>
							<li> <a href="{!! url('/' . getLang(). '/') !!}#">Canada</a> </li>
							<li> <a href="{!! url('/' . getLang(). '/') !!}#">Europe</a> </li>
							<li> <a href="{!! url('/' . getLang(). '/') !!}#">South Africal</a> </li> </ul>
					</li>

				</ul>
			</div>
			<!-- .top-links end -->
		</div>
		<div class="col_half fright col_last clearfix nobottommargin">

			<div id="top-social">
				<ul>
					<li> <a href="#" class="si-facebook"> <span class="ts-icon"> <i class="icon-facebook"></i> </span> <span class="ts-text">Facebook</span> </a> </li>
					<li> <a href="#" class="si-twitter"> <span class="ts-icon"> <i class="icon-twitter"></i> </span> <span class="ts-text">Twitter</span> </a> </li>
					<li> <a href="#" class="si-dribbble"> <span class="ts-icon"> <i class="icon-dribbble"></i> </span> <span class="ts-text">Dribbble</span> </a> </li>
					<li> <a href="#" class="si-github"> <span class="ts-icon"> <i class="icon-github-circled"></i> </span> <span class="ts-text">Github</span> </a> </li>
					<li> <a href="#" class="si-pinterest"> <span class="ts-icon"> <i class="icon-pinterest"></i> </span> <span class="ts-text">Pinterest</span> </a> </li>
					<li> <a href="#" class="si-instagram"> <span class="ts-icon"> <i class="icon-instagram2"></i> </span> <span class="ts-text">Instagram</span> </a> </li>
					<li> <a href="tel:18002640644" class="si-call"> <span class="ts-icon"> <i class="icon-call"></i> </span> <span class="ts-text">+1 (800) 264-0644</span> </a> </li>
					<li> <a href="mailto:contact@graceframe.com" class="si-email3"> <span class="ts-icon"> <i class="icon-envelope-alt"></i> </span> <span class="ts-text">contact@graceframe.com</span> </a> </li>
				</ul>
			</div>
			<!-- #top-social end -->
		</div>
	</div>
</div>
<!-- #top-bar end -->