<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">

                    {{-- Dashboard --}}
                    <li class="{{ Request::is('*dashboard*') ? 'active' : '' }}">
                        <a href="/dashboard">
                            <i class="fad fa-columns"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    @if (Auth::user()->role === 'admin')
                        <li class="{{ Request::is('*control*') ? 'active' : '' }}">
                            <a href="{{ url('/user-control') }}">
                                <i class="fa-duotone fa-users"></i>
                                <span>User Control</span>
                            </a>
                        </li>

                        <li class="{{ Request::is('*log*') ? 'active' : '' }}">
                            <a href="{{ url('/user-log') }}">
                                <i class="fa-duotone fa-user-secret"></i>
                                <span>User Log</span>
                            </a>
                        </li>
                    @endif

                    <li class="{{ Request::is('*dhf*') ? 'active' : '' }}">
                        <a href="{{ url('/dhf') }}">
                            <i class="fa-duotone fa-mosquito"></i>
                            <span>CP DHF</span>
                        </a>
                    </li>

                    @if (Auth::user()->role !== 'pelaksana')
                        <li class="{{ Request::is('*tbp*') ? 'active' : '' }}">
                            <a href="{{ url('/tbp') }}">
                                <i class="fa-duotone fa-lungs"></i>
                                <span>CP TB Paru</span>
                            </a>
                        </li>
                    @endif

                    <li class="{{ Request::is('*katarak*') ? 'active' : '' }}">
                        <a href="{{ url('/katarak') }}">
                            <i class="fa-duotone fa-eye-low-vision"></i>
                            <span>CP Katarak Senilis</span>
                        </a>
                    </li>

                    @if (Auth::user()->role !== 'pelaksana')
                        <li class="{{ Request::is('*kemoterapi*') ? 'active' : '' }}">
                            <a href="{{ url('/kemoterapi') }}">
                                <i class="fa-duotone fa-bed-pulse"></i>
                                <span>CP Kemoterapi Mammae</span>
                            </a>
                        </li>
                    @endif

                    <li class="{{ Request::is('*diare*') ? 'active' : '' }}">
                        <a href="{{ url('/diare') }}">
                            <i class="fa-duotone fa-bacteria"></i>
                            <span>CP Diare Akut Pada Anak</span>
                        </a>
                    </li>

                    @if (Auth::user()->role !== 'pelaksana')
                        <li class="{{ Request::is('*hemodialisis*') ? 'active' : '' }}">
                            <a href="{{ url('/hemodialisis') }}">
                                <i class="fa-duotone fa-droplet"></i>
                                <span>CP Hemodialisis</span>
                            </a>
                        </li>
                    @endif

                    <li class="{{ Request::is('*gastroenteritis*') ? 'active' : '' }}">
                        <a href="{{ url('/gastroenteritis') }}">
                            <i class="fa-duotone fa-stomach"></i>
                            <span>CP Gastroenteritis</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <div class="sidebar-footer">
        <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span
                class="icon-Settings-2"></span></a>
        <a href="mailbox.html" class="link" data-bs-toggle="tooltip" title="Email"><span
                class="icon-Mail"></span></a>
        <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span
                class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
    </div>
</aside>
