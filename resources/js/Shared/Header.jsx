import React from 'react'

const Header = () => {
    return (
        <header className="main-header" id="header">
            <nav className="navbar navbar-expand-lg navbar-light" id="navbar">

                <button id="sidebar-toggler" className="sidebar-toggle">
                    <span className="sr-only">Toggle navigation</span>
                </button>
                <span className="page-title">
                    <a href="{{ route('dashboard') }}">dashboard</a></span>
                <div className="navbar-right ">
                    <ul className="nav navbar-nav">
                        <li className="custom-dropdown">
                            <button className="notify-toggler custom-dropdown-toggler">
                                <i className="mdi mdi-bell-outline icon"></i>
                                <span className="badge badge-xs rounded-circle">21</span>
                            </button>
                            <div className="dropdown-notify">
                                <header>
                                    <div className="nav nav-underline" id="nav-tab" role="tablist">
                                        <a className="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all"
                                            role="tab" aria-controls="nav-home" aria-selected="true">All (5)</a>
                                    </div>
                                </header>
                                <div className="" data-simplebar style={{ height: '325px' }}>
                                    <div className="tab-content" id="myTabContent">
                                        <div className="tab-pane fade show active" id="all" role="tabpanel"
                                            aria-labelledby="all-tabs">
                                            <div className="p-4 mb-0 media media-sm bg-light">
                                                <div className="media-sm-wrapper bg-primary">
                                                    <a href="user-profile.html">
                                                        <i className="mdi mdi-calendar-check-outline"></i>
                                                    </a>
                                                </div>
                                                <div className="media-body">
                                                    <a href="user-profile.html">
                                                        <span className="mb-0 title">New event added</span>
                                                        <span className="discribe">1/3/2014 (1pm - 2pm)</span>
                                                        <span className="time">
                                                            <time>10 min ago...</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>



                                            <div className="p-4 mb-0 media media-sm">
                                                <div className="media-sm-wrapper bg-info-dark">
                                                    <a href="user-profile.html">
                                                        <i className="mdi mdi-account-multiple-check"></i>
                                                    </a>
                                                </div>
                                                <div className="media-body">
                                                    <a href="user-profile.html">
                                                        <span className="mb-0 title">Add request</span>
                                                        <span className="discribe">Add Dany Jones as your contact.</span>
                                                        <div className="buttons">
                                                            <a href="#/"
                                                                className="text-white shadow-none btn btn-sm btn-success">
                                                                accept
                                                            </a>
                                                            {/* <a href="#" className="shadow-none btn btn-sm">delete</a> */}
                                                        </div>
                                                        <span className="time">
                                                            <time>6 hrs ago</time>...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <footer className="border-top dropdown-notify-footer">
                                    <div className="px-4 py-2 d-flex justify-content-between align-items-center">
                                        <span>Last updated 3 min ago</span>
                                        <a id="refress-button" href="#/"
                                            className="btn mdi mdi-cached btn-refress">tes</a>
                                    </div>
                                </footer>
                            </div>
                        </li>
                        <li className="dropdown user-menu">
                            <button className="dropdown-toggle nav-link" data-toggle="dropdown">

                                <img
                                    src=""
                                    alt=""
                                    className="user-image rounded-circle"
                                />

                                <span className="d-none d-lg-inline-block"> Admin</span>

                            </button>
                            <ul className="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a className="dropdown-link-item" href="{{ route('profile.show') }}">
                                        <i className="mdi mdi-account-outline"></i>
                                        <span className="nav-text">My Profile</span>
                                    </a>
                                </li>
                                <li className="dropdown-footer">
                                    <form method="POST" action="#/">


                                        <a className="dropdown-link-item" href="#/"
                                        >
                                            <i className="mdi mdi-logout"></i> Log Out
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    )
}

export default Header
