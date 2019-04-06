<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="user-pro">
                <a href="#" class="waves-effect">
                  <img src="{{ asset('public/admin/images/avatar.jpg') }}" alt="{{ auth()->user()->name }}" class="img-circle">
                  <span class="hide-menu">{{ auth()->user()->name }}<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('admin.get.profile') }}"><i class="ti-user"></i> {{ __('lang.profile') }} </a></li>
                    <li><a href="{{ route('mails.index', 0) }}"><i class="ti-email"></i> Inbox</a></li>
                    <li><a href="{{ route('setting.index') }}"><i class="ti-settings"></i> Site Setting</a></li>
                    <li>
                      <a href="javascript:void(0)"
                         onclick="event.preventDefault(); document.getElementById('side-bar-logout-form').submit();">
                         <i class="fa fa-power-off"></i>
                          {{ __('Logout') }}
                          <form id="side-bar-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </a>
                    </li>
                </ul>
            </li>
            <li class="nav-small-cap m-t-10"> --- Main Navigation </li>

            <li>
              <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                <i class="fa fa-dashboard fa-fw"></i>
                <span class="hide-menu"> {{ __('lang.dashboard') }} </span>
              </a>
            </li>

            <li>
              <a href="{{ route('admins.index') }}" class="waves-effect">
                <i class="fa fa-users fa-fw"></i>
                <span class="hide-menu"> {{ __('lang.admins') }} </span>
              </a>
            </li>

            <li>
              <a href="{{ route('categories.index') }}" class="waves-effect">
                <i class="fa fa-folder fa-fw"></i>
                <span class="hide-menu"> {{ __('lang.categories') }} </span>
              </a>
            </li>

            <li>
                <a href="{{ route('countries.index') }}" class="waves-effect">
                    <i class="fa fa-folder fa-fw"></i>
                    <span class="hide-menu"> {{ __('lang.countries') }} </span>
                </a>
            </li>

            <li>
                <a href="{{ route('markets.index') }}" class="waves-effect">
                    <i class="fa fa-folder fa-fw"></i>
                    <span class="hide-menu"> {{ __('lang.markets') }} </span>
                </a>
            </li>
            <li>
                <a href="{{ route('conferances.index') }}" class="waves-effect">
                    <i class="fa fa-folder fa-fw"></i>
                    <span class="hide-menu"> {{ __('lang.conferances') }} </span>
                </a>
            </li>
            <li>
                <a href="{{ route('courses.index') }}" class="waves-effect">
                    <i class="fa fa-folder fa-fw"></i>
                    <span class="hide-menu"> {{ __('lang.courses') }} </span>
                </a>
            </li>

            <li>
                <a href="{{ route('services.index') }}" class="waves-effect">
                    <i class="fa fa-folder fa-fw"></i>
                    <span class="hide-menu"> {{ __('lang.services') }} </span>
                </a>
            </li>
            <li>
                <a href="{{ route('periods.index') }}" class="waves-effect">
                    <i class="fa fa-folder fa-fw"></i>
                    <span class="hide-menu"> {{ __('lang.periods') }} </span>
                </a>
            </li>

            <li>
                <a href="{{ route('types.index') }}" class="waves-effect">
                    <i class="fa fa-folder fa-fw"></i>
                    <span class="hide-menu"> {{ __('lang.types') }} </span>
                </a>
            </li>

            <?php
            $banner='banner';
            $category='category';
            $franchise='franchise';
            $commercial_concession="Commercial_concession";
            $questions='questions';
            $terms='terms';
            ?>
            <li>
                <a href="{{ url('admin-panel/page/'.$commercial_concession) }}" class="waves-effect">
                    <i class="fa fa-home fa-fw"></i>
                    <span class="hide-menu"> {{ __('lang.commercial_concession') }} </span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin-panel/page/'.$questions) }}" class="waves-effect">
                    <i class="fa fa-home fa-fw"></i>
                    <span class="hide-menu"> {{ __('lang.questions') }} </span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin-panel/page/'.$terms) }}" class="waves-effect">
                    <i class="fa fa-home fa-fw"></i>
                    <span class="hide-menu"> {{ __('lang.terms') }} </span>
                </a>
            </li>


            <li>
              <a href="{{ url('admin-panel/images/0/'.$banner) }}" class="waves-effect">
                <i class="fa fa-home fa-fw"></i>
                <span class="hide-menu"> {{ __('lang.banners') }} </span>
              </a>
            </li>





            <li>
              <a href="#" class="waves-effect">
                <i class="fa fa-envelope fa-fw"></i>
                <span class="hide-menu"> {{ __('lang.mails') }}
                  <span class="fa arrow"></span>
                </span>
              </a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('mails.index', 0) }}"> {{ __('lang.notseen_mails') }} </a></li>
                    <li><a href="{{ route('mails.index', 1) }}"> {{ __('lang.seen_mails') }} </a></li>
                    <li><a href="{{ route('mails.index', 2) }}"> {{ __('lang.replied_mails') }} </a></li>
                </ul>
            </li>

            <li>
              <a href="{{ route('setting.index') }}" class="waves-effect">
                <i class="fa fa-cogs fa-fw"></i>
                <span class="hide-menu"> {{ __('lang.setting') }} </span>
              </a>
            </li>
        </ul>
    </div>
</div>
