<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/">
                {{-- <img src="{{ asset('assets/images/logo.png') }}" alt="Mono"> --}}
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
                            <li class=" {{ Request::is('master/rte') ? 'active' : '' }} ">
                                <a class="sidenav-item-link" href="{{ url('/master/rte') }}">
                                    <span class="nav-text">Requisition To Employee (RTE)</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('master/msl') ? 'active' : '' }} ">
                                <a class="sidenav-item-link" href="{{ url('/master/msl') }}">
                                    <span class="nav-text">Salary Master</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('master/mba') ? 'active' : '' }} ">
                                <a class="sidenav-item-link" href="{{ url('/master/mba') }}">
                                    <span class="nav-text">Bank Account</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('master/msp') ? 'active' : '' }} ">
                                <a class="sidenav-item-link" href="{{ url('/master/msp') }}">
                                    <span class="nav-text">Salary Level Master</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('master/dob') ? 'active' : '' }} ">
                                <a class="sidenav-item-link" href="{{ url('/master/dob') }}">
                                    <span class="nav-text">Loan</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('master/msc') ? 'active' : '' }} ">
                                <a class="sidenav-item-link" href="{{ url('/master/msc') }}">
                                    <span class="nav-text">Contract Master</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('master/plh') ? 'active' : '' }} ">
                                <a class="sidenav-item-link" href="{{ url('/master/plh') }}">
                                    <span class="nav-text">Daily Worker</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('master/cmp') ? 'active' : '' }} ">
                                <a class="sidenav-item-link" href="{{ url('/master/cmp') }}">
                                    <span class="nav-text"> Closing Payroll</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('master/mrc') ? 'active' : '' }} ">
                                <a class="sidenav-item-link" href="{{ url('/master/mrc') }}">
                                    <span class="nav-text"> Roster Check Id</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="section-title ">
                    Transactions
                </li>
                <li class="has-sub {{ Request::is('transaction*') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#menu-transactions" aria-expanded="false" aria-controls="menu-transactions">
                        <i class="mdi mdi-chart-pie"></i>
                        <span class="nav-text">Transactions</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ Request::is('transaction*') ? 'show' : '' }}" id="menu-transactions"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class=" {{ Request::is('transaction/sti') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/sti') }}">
                                    <span class="nav-text">Sumbawa TS Import</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/sts') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/sts') }}">
                                    <span class="nav-text">Sumbawa TS Process</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/cki') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/cki') }}">
                                    <span class="nav-text">Cipta Kridatama TS Import</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/ckp') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/ckp') }}">
                                    <span class="nav-text">Cipta Kridatama TS Process</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/bti') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/bti') }}">
                                    <span class="nav-text"> Banyuwangi TS Import</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/bts') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/bts') }}">
                                    <span class="nav-text"> Banyuwangi TS Process</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/gti') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/gti') }}">
                                    <span class="nav-text">Gorontalo TS Import</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/gts') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/gts') }}">
                                    <span class="nav-text">Gorontalo TS Process</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/tti') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/tti') }}">
                                    <span class="nav-text">Timika TS Import</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/tts') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/tts') }}">
                                    <span class="nav-text">Timika TS Process</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/dmb') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/dmb') }}">
                                    <span class="nav-text">Demobilization
                                    </span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/tdb') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/tdb') }}">
                                    <span class="nav-text">RTE Demob
                                    </span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('transaction/rit') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/transaction/rit') }}">
                                    <span class="nav-text">Roster TS Import
                                    </span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="section-title">
                    Reports
                </li>
                <li class="has-sub {{ Request::is('report*') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#menu-reports" aria-expanded="false" aria-controls="menu-reports">
                        <i class="mdi mdi-file-document-box-multiple-outline"></i>
                        <span class="nav-text">Reports</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ Request::is('report*') ? 'show' : '' }}" id="menu-reports"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class=" {{ Request::is('report/sdi') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/sdi') }}">
                                    <span class="nav-text">Sumbawa Invoice</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/ckv') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/ckv') }}">
                                    <span class="nav-text">Cipta Kridatama Invoice</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/ilc') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/ilc') }}">
                                    <span class="nav-text">Invoice Client</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/plc') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/plc') }}">
                                    <span class="nav-text">Pajak PPh 21 LCP</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/bis') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/bis') }}">
                                    <span class="nav-text">Banyuwangi Invoice</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/gis') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/gis') }}">
                                    <span class="nav-text">Gorontalo Invoice</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/dcl') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/dcl') }}">
                                    <span class="nav-text">Data Crews LCP</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/lar') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/lar') }}">
                                    <span class="nav-text">List Active</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/tdi') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/tdi') }}">
                                    <span class="nav-text">Timika Invoice</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/itc') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/itc') }}">
                                    <span class="nav-text">Employee Income Tax Calculation</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/csv') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/csv') }}">
                                    <span class="nav-text">Export To CSV</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/rbc') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/rbc') }}">
                                    <span class="nav-text">Contract Bonus</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/kla') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/kla') }}">
                                    <span class="nav-text">Employee Active List</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/srp') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/srp') }}">
                                    <span class="nav-text">Summary Payroll</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/clr') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/clr') }}">
                                    <span class="nav-text">Candidate Data</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/edt') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/edt') }}">
                                    <span class="nav-text"> Employee Data</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/prs') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/prs') }}">
                                    <span class="nav-text">Daily Worker</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/bev') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/bev') }}">
                                    <span class="nav-text">Biodata Evaluation</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/bxl') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/bxl') }}">
                                    <span class="nav-text">Biodata Export List</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/dlc') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/dlc') }}">
                                    <span class="nav-text"> Data Contract List</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/ebl') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/ebl') }}">
                                    <span class="nav-text"> Export BPJS List</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/rtp') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/rtp') }}">
                                    <span class="nav-text"> RTE Report</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/mpd') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/mpd') }}">
                                    <span class="nav-text"> Man Power Data</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/rsm') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/rsm') }}">
                                    <span class="nav-text"> Report Salary Master</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/hoc') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/hoc') }}">
                                    <span class="nav-text"> History Of Contract</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('report/hut') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/hut') }}">
                                    <span class="nav-text"> History Update Biodata</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="section-title">
                    Settings
                </li>
                <li class="has-sub {{ Request::is('admin*') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#menu-admin" aria-expanded="false" aria-controls="menu-admin">
                        <i class="mdi mdi-account"></i>
                        <span class="nav-text">Admin</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ Request::is('admin*') ? 'show' : '' }}" id="menu-admin"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class=" {{ Request::is('admin/usr') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/usr') }}">
                                    <span class="nav-text">User</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('admin/acs') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/report/acs') }}">
                                    <span class="nav-text">Akses Menu</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub {{ Request::is('utilities*') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#menu-utilities" aria-expanded="false" aria-controls="menu-utilities">
                        <i class="mdi mdi-square-edit-outline"></i>
                        <span class="nav-text">Utilities</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ Request::is('utilities*') ? 'show' : '' }}" id="menu-utilities"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class=" {{ Request::is('utilities/pwc') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/utilities/pwc') }}">
                                    <span class="nav-text">Ganti Password</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub {{ Request::is('helper*') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#menu-helper" aria-expanded="false" aria-controls="menu-helper">
                        <i class="mdi mdi-square-edit-outline"></i>
                        <span class="nav-text">Helper</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ Request::is('helper*') ? 'show' : '' }}" id="menu-helper"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class=" {{ Request::is('helper/inf') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/helper/inf') }}">
                                    <span class="nav-text">Informasi Aplikasi</span>
                                </a>
                            </li>
                            <li class=" {{ Request::is('helper/inf') ? 'active' : '' }} ">
                                <a class="sidenav-item-link " href="{{ url('/helper/inf') }}">
                                    <span class="nav-text">Allowance Template</span>
                                </a>
                            </li>



                        </div>
                    </ul>
                </li>


            </ul>

        </div>

        {{-- <div class="sidebar-footer">
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
        </div> --}}
    </div>
</aside>
