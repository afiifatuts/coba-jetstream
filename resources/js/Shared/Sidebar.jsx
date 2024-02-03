import { Link } from '@inertiajs/react'
import React from 'react'

const Sidebar = () => {
    return (
        <aside className="left-sidebar sidebar-dark" id="left-sidebar">
            <div id="sidebar" className="sidebar sidebar-with-footer">

                <div className="app-brand">
                    <a href="/">
                        <span className="brand-name">HRIS</span>
                    </a>
                </div>
                <div className="sidebar-left" data-simplebar style={{ height: '100%' }}>
                    <ul className="nav sidebar-inner" id="sidebar-menu">
                        <li className="active">
                            <Link className="sidenav-item-link" href="/dashboard">
                                <i className="mdi mdi-home"></i>
                                <span className="nav-text">Home</span>
                            </Link>
                        </li>
                        <li className="section-title ">
                            Master
                        </li>
                        <li className="has-sub active expand">
                            <a
                                className="sidenav-item-link"
                                href='#/'
                                data-toggle="collapse"
                                data-target="#menu-masters"
                                aria-expanded="false"
                                aria-controls="menu-masters">
                                <i className="mdi mdi-folder-outline"></i>
                                <span className="nav-text">Master</span> <b className="caret"></b>
                            </a>
                            <ul className="collapse show" id="menu-masters"
                                data-parent="#sidebar-menu">
                                <div className="sub-menu">
                                    <li className="active">
                                        <Link className="sidenav-item-link " href="/master">
                                            <span className="nav-text">
                                                Biodata Master
                                            </span>
                                        </Link>
                                    </li>
                                    <li className="">
                                        <a className="sidenav-item-link" href="{{ url('/master/nba') }}">
                                            <span className="nav-text">Biodata Activation</span>
                                        </a>
                                    </li>
                                    <li className="">
                                        <a className="sidenav-item-link" href="{{ url('/master/rte') }}">
                                            <span className="nav-text">Requisition To Employee (RTE)</span>
                                        </a>
                                    </li>
                                    <li className=" {{ Request::is('master/msl') ? 'active' : '' }} ">
                                        <a className="sidenav-item-link" href="{{ url('/master/msl') }}">
                                            <span className="nav-text">Salary Master</span>
                                        </a>
                                    </li>
                                    <li className=" {{ Request::is('master/mba') ? 'active' : '' }} ">
                                        <a className="sidenav-item-link" href="{{ url('/master/mba') }}">
                                            <span className="nav-text">Bank Account</span>
                                        </a>
                                    </li>
                                    <li className=" {{ Request::is('master/msp') ? 'active' : '' }} ">
                                        <a className="sidenav-item-link" href="{{ url('/master/msp') }}">
                                            <span className="nav-text">Salary Level Master</span>
                                        </a>
                                    </li>
                                    <li className=" {{ Request::is('master/dob') ? 'active' : '' }} ">
                                        <a className="sidenav-item-link" href="{{ url('/master/dob') }}">
                                            <span className="nav-text">Loan</span>
                                        </a>
                                    </li>
                                    <li className=" {{ Request::is('master/msc') ? 'active' : '' }} ">
                                        <a className="sidenav-item-link" href="{{ url('/master/msc') }}">
                                            <span className="nav-text">Contract Master</span>
                                        </a>
                                    </li>
                                    <li className=" {{ Request::is('master/plh') ? 'active' : '' }} ">
                                        <a className="sidenav-item-link" href="{{ url('/master/plh') }}">
                                            <span className="nav-text">Daily Worker</span>
                                        </a>
                                    </li>
                                    <li className=" {{ Request::is('master/cmp') ? 'active' : '' }} ">
                                        <a className="sidenav-item-link" href="{{ url('/master/cmp') }}">
                                            <span className="nav-text"> Closing Payroll</span>
                                        </a>
                                    </li>
                                    <li className=" {{ Request::is('master/mrc') ? 'active' : '' }} ">
                                        <a className="sidenav-item-link" href="{{ url('/master/mrc') }}">
                                            <span className="nav-text"> Roster Check Id</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
    )
}

export default Sidebar
