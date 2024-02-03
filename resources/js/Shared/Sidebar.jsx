import { Link } from '@inertiajs/react'
import React from 'react'

const Sidebar = () => {
    return (
        <aside className="navbar navbar-vertical navbar-expand-lg" data-bs-theme="light">
            <div className="container-fluid">
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>
                <h1 className="navbar-brand navbar-brand-autodark">
                    <a href=".">
                        <img src="/assets/logo.svg" width="110" height="32" alt="Tabler" className="navbar-brand-image" />
                    </a>
                </h1>
                <div className="flex-row navbar-nav d-lg-none">
                    <div className="nav-item d-none d-lg-flex me-3">
                        <div className="btn-list">
                            <a href="https://github.com/tabler/tabler" className="btn" target="_blank" rel="noreferrer">

                                <svg xmlns="http://www.w3.org/2000/svg" className="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                                Source code
                            </a>
                            <a href="https://github.com/sponsors/codecalm" className="btn" target="_blank" rel="noreferrer">

                                <svg xmlns="http://www.w3.org/2000/svg" className="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                                Sponsor
                            </a>
                        </div>
                    </div>
                    <div className="d-none d-lg-flex">
                        <a href="?theme=dark" className="px-0 nav-link hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
                            data-bs-placement="bottom">

                            <svg xmlns="http://www.w3.org/2000/svg" className="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                        </a>
                        <a href="?theme=light" className="px-0 nav-link hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
                            data-bs-placement="bottom">

                            <svg xmlns="http://www.w3.org/2000/svg" className="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                        </a>
                        <div className="nav-item dropdown d-none d-md-flex me-3">
                            <a href="#" className="px-0 nav-link" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">

                                <svg xmlns="http://www.w3.org/2000/svg" className="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                                <span className="badge bg-red"></span>
                            </a>
                            <div className="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                                <div className="card">
                                    <div className="card-header">
                                        <h3 className="card-title">Last updates</h3>
                                    </div>
                                    <div className="list-group list-group-flush list-group-hoverable">
                                        <div className="list-group-item">
                                            <div className="row align-items-center">
                                                <div className="col-auto"><span className="status-dot status-dot-animated bg-red d-block"></span></div>
                                                <div className="col text-truncate">
                                                    <a href="#" className="text-body d-block">Example 1</a>
                                                    <div className="d-block text-muted text-truncate mt-n1">
                                                        Change deprecated html tags to text decoration classes (#29604)
                                                    </div>
                                                </div>
                                                <div className="col-auto">
                                                    <a href="#" className="list-group-item-actions">

                                                        <svg xmlns="http://www.w3.org/2000/svg" className="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="list-group-item">
                                            <div className="row align-items-center">
                                                <div className="col-auto"><span className="status-dot d-block"></span></div>
                                                <div className="col text-truncate">
                                                    <a href="#" className="text-body d-block">Example 2</a>
                                                    <div className="d-block text-muted text-truncate mt-n1">
                                                        justify-content:between ⇒ justify-content:space-between (#29734)
                                                    </div>
                                                </div>
                                                <div className="col-auto">
                                                    <a href="#" className="list-group-item-actions show">

                                                        <svg xmlns="http://www.w3.org/2000/svg" className="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="list-group-item">
                                            <div className="row align-items-center">
                                                <div className="col-auto"><span className="status-dot d-block"></span></div>
                                                <div className="col text-truncate">
                                                    <a href="#" className="text-body d-block">Example 3</a>
                                                    <div className="d-block text-muted text-truncate mt-n1">
                                                        Update change-version.js (#29736)
                                                    </div>
                                                </div>
                                                <div className="col-auto">
                                                    <a href="#" className="list-group-item-actions">

                                                        <svg xmlns="http://www.w3.org/2000/svg" className="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="list-group-item">
                                            <div className="row align-items-center">
                                                <div className="col-auto"><span className="status-dot status-dot-animated bg-green d-block"></span></div>
                                                <div className="col text-truncate">
                                                    <a href="#" className="text-body d-block">Example 4</a>
                                                    <div className="d-block text-muted text-truncate mt-n1">
                                                        Regenerate package-lock.json (#29730)
                                                    </div>
                                                </div>
                                                <div className="col-auto">
                                                    <a href="#" className="list-group-item-actions">

                                                        <svg xmlns="http://www.w3.org/2000/svg" className="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="nav-item dropdown">
                        <a href="#" className="p-0 nav-link d-flex lh-1 text-reset" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span className="avatar avatar-sm" style={{ backgroundImage: "url(/assets/icons/000m.jpg)" }}></span>
                            <div className="d-none d-xl-block ps-2">
                                <div>Paweł Kuna</div>
                                <div className="mt-1 small text-muted">UI Designer</div>
                            </div>
                        </a>
                        <div className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="#" className="dropdown-item">Status</a>
                            <a href="./profile.html" className="dropdown-item">Profile</a>
                            <a href="#" className="dropdown-item">Feedback</a>
                            <div className="dropdown-divider"></div>
                            <a href="./settings.html" className="dropdown-item">Settings</a>
                            <a href="./sign-in.html" className="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                <div className="collapse navbar-collapse" id="sidebar-menu">
                    <ul className="navbar-nav pt-lg-3">
                        <li className="nav-item">
                            <a className="nav-link" href="./" >
                                <span className="nav-link-icon d-md-none d-lg-inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" className="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                                </span>
                                <span className="nav-link-title">
                                    Home
                                </span>
                            </a>
                        </li>
                        <li className="nav-item dropdown">
                            <a className="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                                <span className="nav-link-icon d-md-none d-lg-inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" className="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /><path d="M16 5.25l-8 4.5" /></svg>
                                </span>
                                <span className="nav-link-title">
                                    Interface
                                </span>
                            </a>
                            <div className="dropdown-menu">
                                <div className="dropdown-menu-columns">
                                    <div className="dropdown-menu-column">
                                        <a className="dropdown-item" href="./accordion.html">
                                            Accordion
                                        </a>
                                        <a className="dropdown-item" href="./blank.html">
                                            Blank page
                                        </a>
                                        <a className="dropdown-item" href="./badges.html">
                                            Badges
                                            <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a className="dropdown-item" href="./buttons.html">
                                            Buttons
                                        </a>
                                        <div className="dropend">
                                            <a className="dropdown-item dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                                                Cards
                                                <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <div className="dropdown-menu">
                                                <a href="./cards.html" className="dropdown-item">
                                                    Sample cards
                                                </a>
                                                <a href="./card-actions.html" className="dropdown-item">
                                                    Card actions
                                                    <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                                </a>
                                                <a href="./cards-masonry.html" className="dropdown-item">
                                                    Cards Masonry
                                                </a>
                                            </div>
                                        </div>
                                        <a className="dropdown-item" href="./colors.html">
                                            Colors
                                        </a>
                                        <a className="dropdown-item" href="./datagrid.html">
                                            Data grid
                                            <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a className="dropdown-item" href="./datatables.html">
                                            Datatables
                                            <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a className="dropdown-item" href="./dropdowns.html">
                                            Dropdowns
                                        </a>
                                        <a className="dropdown-item" href="./modals.html">
                                            Modals
                                        </a>
                                        <a className="dropdown-item" href="./maps.html">
                                            Maps
                                        </a>
                                        <a className="dropdown-item" href="./map-fullsize.html">
                                            Map fullsize
                                        </a>
                                        <a className="dropdown-item" href="./maps-vector.html">
                                            Vector maps
                                            <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a className="dropdown-item" href="./navigation.html">
                                            Navigation
                                        </a>
                                        <a className="dropdown-item" href="./charts.html">
                                            Charts
                                        </a>
                                        <a className="dropdown-item" href="./pagination.html">

                                            Pagination
                                        </a>
                                    </div>
                                    <div className="dropdown-menu-column">
                                        <a className="dropdown-item" href="./placeholder.html">
                                            Placeholder
                                        </a>
                                        <a className="dropdown-item" href="./steps.html">
                                            Steps
                                            <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a className="dropdown-item" href="./stars-rating.html">
                                            Stars rating
                                            <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a className="dropdown-item" href="./tabs.html">
                                            Tabs
                                        </a>
                                        <a className="dropdown-item" href="./tables.html">
                                            Tables
                                        </a>
                                        <a className="dropdown-item" href="./carousel.html">
                                            Carousel
                                            <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a className="dropdown-item" href="./lists.html">
                                            Lists
                                        </a>
                                        <a className="dropdown-item" href="./typography.html">
                                            Typography
                                        </a>
                                        <a className="dropdown-item" href="./offcanvas.html">
                                            Offcanvas
                                        </a>
                                        <a className="dropdown-item" href="./markdown.html">
                                            Markdown
                                        </a>
                                        <a className="dropdown-item" href="./dropzone.html">
                                            Dropzone
                                            <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a className="dropdown-item" href="./lightbox.html">
                                            Lightbox
                                            <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a className="dropdown-item" href="./tinymce.html">
                                            TinyMCE
                                            <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a className="dropdown-item" href="./inline-player.html">
                                            Inline player
                                            <span className="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <div className="dropend">
                                            <a className="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                                                Authentication
                                            </a>
                                            <div className="dropdown-menu">
                                                <a href="./sign-in.html" className="dropdown-item">
                                                    Sign in
                                                </a>
                                                <a href="./sign-in-link.html" className="dropdown-item">
                                                    Sign in link
                                                </a>
                                                <a href="./sign-in-illustration.html" className="dropdown-item">
                                                    Sign in with illustration
                                                </a>
                                                <a href="./sign-in-cover.html" className="dropdown-item">
                                                    Sign in with cover
                                                </a>
                                                <a href="./sign-up.html" className="dropdown-item">
                                                    Sign up
                                                </a>
                                                <a href="./forgot-password.html" className="dropdown-item">
                                                    Forgot password
                                                </a>
                                                <a href="./terms-of-service.html" className="dropdown-item">
                                                    Terms of service
                                                </a>
                                                <a href="./auth-lock.html" className="dropdown-item">
                                                    Lock screen
                                                </a>
                                            </div>
                                        </div>
                                        <div className="dropend">
                                            <a className="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                                                <svg xmlns="http://www.w3.org/2000/svg" className="icon icon-inline me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 14l6 0" /></svg>
                                                Error pages
                                            </a>
                                            <div className="dropdown-menu">
                                                <a href="./error-404.html" className="dropdown-item">
                                                    404 page
                                                </a>
                                                <a href="./error-500.html" className="dropdown-item">
                                                    500 page
                                                </a>
                                                <a href="./error-maintenance.html" className="dropdown-item">
                                                    Maintenance page
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
    )
}

export default Sidebar
