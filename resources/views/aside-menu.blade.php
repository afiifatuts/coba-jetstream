<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Mono">
                <span class="brand-name">HRIS</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="{{ Request::is('dashboard*') ? 'active' : '' }}">
                    <a class="sidenav-item-link" href="{{ url('/dashboard') }}">
                        <i class="mdi mdi-home"></i>
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li class="section-title ">
                    Master
                </li>
                <li class="has-sub {{ Request::is('master*') ? 'active expand' : '' }}  ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#menu-masters" aria-expanded="false" aria-controls="menu-masters">
                        <i class="mdi mdi-folder-outline"></i>
                        <span class="nav-text">Master</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ Request::is('master*') ? 'show' : '' }}   " id="menu-masters"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class=" {{ Request::is('master/bnh') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/master/bnh') }}">
                                    <span class="nav-text">Biodata Master</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('master/nba') ? 'active' : '' }} ">
                                <a class="sidenav-item-link" href="{{ url('/master/nba') }}">
                                    <span class="nav-text">Biodata Activation</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="breadcrumb.html">
                                    <span class="nav-text">Breadcrumb</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="card.html">
                                    <span class="nav-text">Card</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="carousel.html">
                                    <span class="nav-text">Carousel</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="collapse.html">
                                    <span class="nav-text">Collapse</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="editor.html">
                                    <span class="nav-text">Editor</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="list-group.html">
                                    <span class="nav-text">List Group</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="modal.html">
                                    <span class="nav-text">Modal</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="pagination.html">
                                    <span class="nav-text">Pagination</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="popover-tooltip.html">
                                    <span class="nav-text">Popover & Tooltip</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="progress-bar.html">
                                    <span class="nav-text">Progress Bar</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="spinner.html">
                                    <span class="nav-text">Spinner</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="switches.html">
                                    <span class="nav-text">Switches</span>
                                </a>
                            </li>


                            <li>
                                <a class="sidenav-item-link" href="tab.html">
                                    <span class="nav-text">Tab</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="toaster.html">
                                    <span class="nav-text">Toaster</span>

                                </a>
                            </li>





                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#icons" aria-expanded="false" aria-controls="icons">
                                    <span class="nav-text">Icons</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="icons">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="material-icons.html">Material Icon</a>
                                        </li>

                                        <li>
                                            <a href="flag-icons.html">Flag Icon</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>




                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#forms" aria-expanded="false" aria-controls="forms">
                                    <span class="nav-text">Forms</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="forms">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="basic-input.html">Basic Input</a>
                                        </li>

                                        <li>
                                            <a href="input-group.html">Input Group</a>
                                        </li>

                                        <li>
                                            <a href="checkbox-radio.html">Checkbox & Radio</a>
                                        </li>

                                        <li>
                                            <a href="form-validation.html">Form Validation</a>
                                        </li>

                                        <li>
                                            <a href="form-advance.html">Form Advance</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>




                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#maps" aria-expanded="false" aria-controls="maps">
                                    <span class="nav-text">Maps</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="maps">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="google-maps.html">Google Map</a>
                                        </li>

                                        <li>
                                            <a href="vector-maps.html">Vector Map</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>




                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#widgets" aria-expanded="false" aria-controls="widgets">
                                    <span class="nav-text">Widgets</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="widgets">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="widgets-general.html">General Widget</a>
                                        </li>

                                        <li>
                                            <a href="widgets-chart.html">Chart Widget</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>



                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="mdi mdi-chart-pie"></i>
                        <span class="nav-text">Charts</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="charts" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="apex-charts.html">
                                    <span class="nav-text">Apex Charts</span>

                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="section-title">
                    Pages
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#users" aria-expanded="false" aria-controls="users">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">User</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="users" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li>
                                <a class="sidenav-item-link" href="user-profile.html">
                                    <span class="nav-text">User Profile</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="user-activities.html">
                                    <span class="nav-text">User Activities</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="user-profile-settings.html">
                                    <span class="nav-text">User Profile Settings</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="user-account-settings.html">
                                    <span class="nav-text">User Account Settings</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="user-planing-settings.html">
                                    <span class="nav-text">User Planing Settings</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="user-billing.html">
                                    <span class="nav-text">User billing</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="user-notify-settings.html">
                                    <span class="nav-text">User Notify Settings</span>

                                </a>
                            </li>




                        </div>
                    </ul>
                </li>





                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#authentication" aria-expanded="false" aria-controls="authentication">
                        <i class="mdi mdi-account"></i>
                        <span class="nav-text">Authentication</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="authentication" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li>
                                <a class="sidenav-item-link" href="sign-in.html">
                                    <span class="nav-text">Sign In</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="sign-up.html">
                                    <span class="nav-text">Sign Up</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="reset-password.html">
                                    <span class="nav-text">Reset Password</span>

                                </a>
                            </li>




                        </div>
                    </ul>
                </li>





                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#other-page" aria-expanded="false" aria-controls="other-page">
                        <i class="mdi mdi-file-multiple"></i>
                        <span class="nav-text">Other pages</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="other-page" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li>
                                <a class="sidenav-item-link" href="invoice.html">
                                    <span class="nav-text">Invoice</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="404.html">
                                    <span class="nav-text">404 page</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="page-comingsoon.html">
                                    <span class="nav-text">Coming Soon</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="page-maintenance.html">
                                    <span class="nav-text">Maintenance</span>

                                </a>
                            </li>




                        </div>
                    </ul>
                </li>





                <li class="section-title">
                    Documentation
                </li>





                <li>
                    <a class="sidenav-item-link" href="getting-started.html">
                        <i class="mdi mdi-airplane"></i>
                        <span class="nav-text">Getting Started</span>
                    </a>
                </li>





                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#customization" aria-expanded="false" aria-controls="customization">
                        <i class="mdi mdi-square-edit-outline"></i>
                        <span class="nav-text">Customization</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="customization" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li>
                                <a class="sidenav-item-link" href="navbar-customization.html">
                                    <span class="nav-text">Navbar</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="sidebar-customization.html">
                                    <span class="nav-text">Sidebar</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="styling.html">
                                    <span class="nav-text">Styling</span>

                                </a>
                            </li>




                        </div>
                    </ul>
                </li>



            </ul>

        </div>

        <div class="sidebar-footer">
            <div class="sidebar-footer-content">
                <ul class="d-flex">
                    <li>
                        <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i
                                class="mdi mdi-settings"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" title="No chat messages"><i
                                class="mdi mdi-chat-processing"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>