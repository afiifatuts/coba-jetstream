<!-- ================ HEADER ===================== -->
<div class="page-wrapper">
    <!-- Header -->
    <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <!-- Sidebar toggle button -->
            <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <span class="page-title">
                <a href="{{ route('dashboard') }}">dashboard</a></span>
            <div class="navbar-right ">
                <ul class="nav navbar-nav">
                    <li class="custom-dropdown">
                        <button class="notify-toggler custom-dropdown-toggler">
                            <i class="mdi mdi-bell-outline icon"></i>
                            <span class="badge badge-xs rounded-circle">21</span>
                        </button>
                        <div class="dropdown-notify">
                            <header>
                                <div class="nav nav-underline" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all"
                                        role="tab" aria-controls="nav-home" aria-selected="true">All (5)</a>
                                </div>
                            </header>
                            <div class="" data-simplebar style="height: 325px;">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="all" role="tabpanel"
                                        aria-labelledby="all-tabs">
                                        <div class="media media-sm p-4 bg-light mb-0">
                                            <div class="media-sm-wrapper bg-primary">
                                                <a href="user-profile.html">
                                                    <i class="mdi mdi-calendar-check-outline"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">New event added</span>
                                                    <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                                    <span class="time">
                                                        <time>10 min ago...</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>



                                        <div class="media media-sm p-4 mb-0">
                                            <div class="media-sm-wrapper bg-info-dark">
                                                <a href="user-profile.html">
                                                    <i class="mdi mdi-account-multiple-check"></i>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="user-profile.html">
                                                    <span class="title mb-0">Add request</span>
                                                    <span class="discribe">Add Dany Jones as your contact.</span>
                                                    <div class="buttons">
                                                        <a href="#"
                                                            class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                                        <a href="#" class="btn btn-sm shadow-none">delete</a>
                                                    </div>
                                                    <span class="time">
                                                        <time>6 hrs ago</time>...
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <footer class="border-top dropdown-notify-footer">
                                <div class="d-flex justify-content-between align-items-center py-2 px-4">
                                    <span>Last updated 3 min ago</span>
                                    <a id="refress-button" href="javascript:"
                                        class="btn mdi mdi-cached btn-refress"></a>
                                </div>
                            </footer>
                        </div>
                    </li>
                    <!-- User Account -->
                    <li class="dropdown user-menu">
                        <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}"
                                    alt="{{ Auth::user()->name }}" class="user-image rounded-circle" />
                            @else
                                <span class="d-none d-lg-inline-block"> {{ Auth::user()->name }}</span>
                            @endif
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a class="dropdown-link-item" href="{{ route('profile.show') }}">
                                    <i class="mdi mdi-account-outline"></i>
                                    <span class="nav-text">My Profile</span>
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <a class="dropdown-link-item" href="{{ route('logout') }}"
                                        @click.prevent="$root.submit();">
                                        <i class="mdi mdi-logout"></i> Log Out
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
