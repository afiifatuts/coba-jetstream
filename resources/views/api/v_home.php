<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');

  if( (is_null($this->session->userdata('hris_user_id'))) && (is_null($this->session->userdata('hris_user_password'))) )
  {
    $data['loginMsg'] = '';
    $this->load->view('login', $data);
    exit(0);
  }

  $isMasterExists = false;
  $isTransactionExists = false;
  $isUtilitiesExists = false;
  $isReportsExists = false;
  $isAdminExists = false;
  $menus = $this->session->userdata('my_menu');

  if(isset($menus))   
  {     

      if(in_array("STO",$menus) || in_array("ILP",$menus) || in_array("KFI",$menus) || in_array("MBA",$menus) || in_array("MSP",$menus) || in_array("MSL",$menus) 
        || in_array("NBA",$menus) || in_array("BNH",$menus) || in_array("DOB",$menus) || in_array("MSC",$menus) || in_array("PLH",$menus) || in_array("RTE",$menus)
        || in_array("CMP",$menus) || in_array("MRC",$menus))
      {
        $isMasterExists = true;
      }

      /*if(in_array("IST",$menus) || in_array("OST",$menus) || in_array("SLS",$menus) || in_array("SLC",$menus)) 
      {
        $isTransactionExists = true;
      }*/

      if(in_array("STI",$menus) || in_array("STS",$menus) || in_array("TTI",$menus) || in_array("TTS",$menus) || in_array("BTI",$menus) || in_array("BTS",$menus) 
        || in_array("DMB", $menus) || in_array("TDB", $menus) || in_array("RIT",$menus) || in_array("GTI",$menus) || in_array("GTS",$menus))  
      {
        $isTransactionExists = true;
      }

      /*if(in_array("",$menus)) 
      {
        $isUtilitiesExists = true;
      }*/

      if(in_array("SDI",$menus) || in_array("PLC",$menus) || in_array("TDI",$menus) || in_array("RBC",$menus) || in_array("KLA",$menus) || in_array("SRP",$menus) || in_array("CLR",$menus) 
        || in_array("NBL",$menus) || in_array("ITC",$menus) || in_array("CSV",$menus) || in_array("BXL",$menus) || in_array("DLC",$menus) || in_array("MPD",$menus)
        || in_array("EDT",$menus) || in_array("PRS",$menus) || in_array("EBL",$menus) || in_array("BIS",$menus) || in_array("DCL",$menus) || in_array("LAR",$menus)
        || in_array("PLH",$menus) || in_array("RTP",$menus) || in_array("BAH",$menus) || in_array("RSM",$menus) || in_array("HOC",$menus) || in_array("HUT",$menus)
        || in_array("ILC",$menus) || in_array("HPT",$menus) || in_array("GIS",$menus) )
      {
        $isReportsExists = true;
      }

      if(in_array("USR",$menus) || in_array("ACS",$menus))
      {
        $isAdminExists = true;
      }
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>HRIS System ACC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main.css">
    <!-- UI Plugin -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery-ui.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- Loading Animate -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/my-loader.css"/>
    
    <!-- BIODATA MASTER -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/my-loader.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive-tabs.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style-responsive-tabs.css"/>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">HRIS</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('home/detail/pwc') ?>"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url() ?>login/out"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <?php $this->load->view('sidebar'); ?>
    <main class="app-content my-content">
      <div class="app-title">
        <div>
          <?php 
            switch ($my_content) {
              case 'bnh':
                  echo '<h1><i class="fa fa-dashboard"></i> Biodata Master</h1>';
                break;
              case 'nba':
                  echo '<h1><i class="fa fa-dashboard"></i> Biodata Activation</h1>';
                break;
              case 'msl':
                  echo '<h1><i class="fa fa-dashboard"></i> Salary Master</h1>';
                break;
              case 'msp':
                  echo '<h1><i class="fa fa-dashboard"></i> Salary Level Master</h1>';
                break;
              case 'mba':
                  echo '<h1><i class="fa fa-dashboard"></i> Bank Account</h1>';
                break;
              case 'rte':
                  echo '<h1><i class="fa fa-dashboard"></i> Requisition To Employee (RTE) </h1>';
                break;
              case 'plh':
                  echo '<h1><i class="fa fa-dashboard"></i> Daily Workers</h1>';
                break;
              case 'cmp':
                  echo '<h1><i class="fa fa-dashboard"></i> Closing Payroll</h1>';
                break;
              case 'mrc':
                  echo '<h1><i class="fa fa-dashboard"></i> Roster Check Id </h1>';
                break;
              case 'prs':
                  echo '<h1><i class="fa fa-dashboard"></i> Daily Workers Report </h1>';
                break;
              case 'msc':
                  echo '<h1><i class="fa fa-dashboard"></i> Contract Master</h1>';
                break;

              case 'dob':
                  echo '<h1><i class="fa fa-dashboard"></i> Loan</h1>';
                break; 

              case 'kfi':
                  echo '<h1><i class="fa fa-dashboard"></i> Key Performance Indicator</h1>';
                break;

              case 'sti':
                  echo '<h1><i class="fa fa-dashboard"></i> Sumbawa Timesheet Import</h1>';
                break;

              case 'sed':
                  echo '<h1><i class="fa fa-dashboard"></i> Salary Edit</h1>';
                break;

              case 'cki':
                  echo '<h1><i class="fa fa-dashboard"></i> Cipta Kridatama Timesheet Process</h1>';
                break;

              case 'ckp':
                  echo '<h1><i class="fa fa-dashboard"></i> Cipta Kridatama Timesheet Import</h1>';
                break;
                
              case 'ckv':
                  echo '<h1><i class="fa fa-dashboard"></i> Cipta Kridatama Invoice</h1>';
                break;

              case 'sti':
                  echo '<h1><i class="fa fa-dashboard"></i> Sumbawa Timesheet Import</h1>';
                break;

              case 'gti':
                  echo '<h1><i class="fa fa-dashboard"></i> Gorontalo Timesheet Import</h1>';
                break;

              case 'gts':
                  echo '<h1><i class="fa fa-dashboard"></i> Gorontalo Timesheet Process</h1>';
                break;
    
              case 'hpt':
                  echo '<h1><i class="fa fa-dashboard"></i> Hold Payment</h1>';
                break;

              case 'tti':
                  echo '<h1><i class="fa fa-dashboard"></i> Timika Timesheet Import</h1>';
                break;
              case 'tgt':
                echo '<h1>Timika THR Simulation</a></h1>';
                break;
              case 'tts':
                  echo '<h1><i class="fa fa-dashboard"></i> Timika Timesheet Process</h1>';
                break;

              case 'csv':
                  echo '<h1><i class="fa fa-dashboard"></i> Export To CSV</h1>';
                break;
                
              case 'rbc':
                  echo '<h1><i class="fa fa-dashboard"></i> Contract Bonus</h1>';
                break;

              case 'kla':
                  echo '<h1><i class="fa fa-dashboard"></i> Employee Active List</h1>';
                break;

              case 'srp':
                  echo '<h1><i class="fa fa-dashboard"></i> Summary Payroll</h1>';
                break;

              case 'clr':
                  echo '<h1><i class="fa fa-dashboard"></i> Candidate Data</h1>';
                break;

              case 'edt':
                  echo '<h1><i class="fa fa-dashboard"></i> Employee Data</h1>';
                break;

              case 'plc':
                echo '<h1><i class="fa fa-dashboard"></i> Pajak PPh 21 LCP</h1>';
                break;

              case 'bev':
                echo '<h1><i class="fa fa-dashboard"></i> Biodata Evaluation</h1>';
                break;

              case 'bxl':
                  echo '<h1><i class="fa fa-dashboard"></i> Biodata Export List</h1>';
                break;

              case 'dlc':
                  echo '<h1><i class="fa fa-dashboard"></i> Data Contract List</h1>';
                break;

              case 'mis':
                echo '<h1><i class="fa fa-dashboard"></i> Martabe Invoice </h1>';
                break;

              case 'bis':
                  echo '<h1><i class="fa fa-dashboard"></i> Banyuwangi Invoice </h1>';
                break;

              case 'gis':
                  echo '<h1><i class="fa fa-dashboard"></i> Gorontalo Invoice </h1>';
                break;

              case 'dcl':
                  echo '<h1><i class="fa fa-dashboard"></i> Data Crews LCP</h1>';
                break;

              case 'lar':
                  echo '<h1><i class="fa fa-dashboard"></i> List Active Report</h1>';
                break;

              case 'mpd':
                  echo '<h1><i class="fa fa-dashboard"></i> Man Power Data</h1>';
                break;
              case 'dmb':
                  echo '<h1><i class="fa fa-dashboard"></i> Demobilization</h1>';
                break;
              case 'rtp':
                  echo '<h1><i class="fa fa-dashboard"></i> RTE Report</h1>';
                break;
              case 'ebl':
                  echo '<h1><i class="fa fa-dashboard"></i> Export BPJS List</h1>';
                break;
              case 'tdb':
                  echo '<h1><i class="fa fa-dashboard"></i> RTE Demob</h1>';
                break;
              case 'bah':
                  echo '<h1><i class="fa fa-dashboard"></i> Bank Account History</h1>';
                break;
              case 'mrc':
                echo '<li class="breadcrumb-item"><a href="#">Roster Check Id</a></li>';
                break;
              case 'rit':
                  echo '<h1><i class="fa fa-dashboard"></i> Roster Timesheet Import</h1>';
                break;
              case 'rsm':
                  echo '<h1><i class="fa fa-dashboard"></i> Report Salary master</h1>';
                break;
              case 'hoc':
                  echo '<h1><i class="fa fa-dashboard"></i> History Of Contract</h1>';
                break;
              case 'hut':
                  echo '<h1><i class="fa fa-dashboard"></i> History Update Biodata</h1>';
                break;

              default;
                  echo '<h1><i class="fa fa-dashboard"></i> Dashboard</h1>';
            }            
        ?> 
          
          <!-- <p>A free and open source Bootstrap 4 admin template</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>

          <?php 
            switch ($my_content) {

              case 'nba':
                echo '<li class="breadcrumb-item"><a href="#">Biodata Activation</a></li>';
                break;
              case 'bnh':
                echo '<li class="breadcrumb-item"><a href="#">Biodata Master</a></li>';
                break;
              case 'msl':
                echo '<li class="breadcrumb-item"><a href="#">Salary Master</a></li>';
                break;
              case 'mba':
                echo '<li class="breadcrumb-item"><a href="#">Bank Account</a></li>';
                break; 
              case 'rte':
                echo '<li class="breadcrumb-item"><a href="#">Requisition To Employee (RTE)</a></li>';
                break;  
              case 'msp':
                echo '<li class="breadcrumb-item"><a href="#">Salary Level Master</a></li>';
                break;
              case 'plh':
                echo '<li class="breadcrumb-item"><a href="#">Daily Workers</a></li>';
                break;
              case 'cmp':
                echo '<li class="breadcrumb-item"><a href="#">Closing Payrol</a></li>';
                break;
              case 'prs':
                echo '<li class="breadcrumb-item"><a href="#">Daily Workers Report</a></li>';
                break;

              case 'msc':
                echo '<li class="breadcrumb-item"><a href="#">Contract Master</a></li>';
                break;

              case 'dob':
                echo '<li class="breadcrumb-item"><a href="#">Loan</a></li>';
                break;

              case 'sed':
                  echo '<li class="breadcrumb-item"><a href="#"> Salary Edit</a></li>';
                break;

              case 'cki':
                  echo '<li class="breadcrumb-item"><a href="#"> Cipta Kridatama Timesheet Process</a></li>';
                break;

              case 'ckp':
                  echo '<li class="breadcrumb-item"><a href="#"> Cipta Kridatama Timesheet Import</a></li>';
                break;
                
              case 'ckv':
                  echo '<li class="breadcrumb-item"><a href="#"> Cipta Kridatama Invoice</a></li>';
                break;

              case 'kfi':
                echo '<li class="breadcrumb-item"><a href="#">Sumbawa Timesheet Import</a></li>';
                break;  

              case 'sti':
                echo '<li class="breadcrumb-item"><a href="#">Sumbawa Timesheet Import</a></li>';
                break;

              case 'sts':
                echo '<li class="breadcrumb-item"><a href="#">Sumbawa Timesheet Process</a></li>';
                break;
              case 'hpt':
                echo '<li class="breadcrumb-item"><a href="#">Hold Payment</a></li>';
                break;
              case 'bti':
                echo '<li class="breadcrumb-item"><a href="#">Banyuwangi Timesheet Import</a></li>';
                break;
              case 'bts':
                echo '<li class="breadcrumb-item"><a href="#">Banyuwangi Timesheet Process</a></li>';
                break;   
              case 'gti':
                echo '<li class="breadcrumb-item"><a href="#">Gorontalo Timesheet Import</a></li>';
                break;
              case 'gts':
                echo '<li class="breadcrumb-item"><a href="#">Gorontalo Timesheet Process</a></li>';
                break; 
              case 'sdi':
                echo '<li class="breadcrumb-item"><a href="#">Sumbawa Invoice</a></li>';
                break;
              case 'ilc':
                echo '<li class="breadcrumb-item"><a href="#">Invoice Client</a></li>';
                break;
              case 'mis':
                echo '<li class="breadcrumb-item"><a href="#">Martabe Invoice</a></li>';
                break;
              case 'bis':
                echo '<li class="breadcrumb-item"><a href="#">Banyuwangi Invoice</a></li>';
                break;
              case 'gis':
                echo '<li class="breadcrumb-item"><a href="#">Gorontalo Invoice</a></li>';
                break;
              case 'dcl':
                echo '<li class="breadcrumb-item"><a href="#">Data Crews LCP</a></li>';
                break;
              case 'lar':
                echo '<li class="breadcrumb-item"><a href="#">List Active Report</a></li>';
                break;

              case 'tti':
                echo '<li class="breadcrumb-item"><a href="#">Timika Timesheet Import</a></li>';
                break;  

              case 'tts':
                echo '<li class="breadcrumb-item"><a href="#">Timika Timesheet Process</a></li>';
                break;
              case 'tgt':
                echo '<li class="breadcrumb-item"><a href="#">Timika THR Simulation</a></li>';
                break;
              case 'tdi':
                echo '<li class="breadcrumb-item"><a href="#">Timika Invoice</a></li>';
                break;

              case 'itc':
                echo '<li class="breadcrumb-item"><a href="#">Employee Income Tax Calculation</a></li>';
                break;

              case 'csv':
                echo '<li class="breadcrumb-item"><a href="#">Export to CSV</a></li>';
                break;

              case 'rbc':
                echo '<li class="breadcrumb-item"><a href="#">Contract Bonus</a></li>';
                break;

              case 'kla':
                echo '<li class="breadcrumb-item"><a href="#">Employee Active List</a></li>';
                break;

              case 'srp':
                echo '<li class="breadcrumb-item"><a href="#">Summary Payroll</a></li>';
                break;

              case 'clr':
                echo '<li class="breadcrumb-item"><a href="#">Candidate Data</a></li>';
                break;

              case 'edt':
                echo '<li class="breadcrumb-item"><a href="#">Employee Data</a></li>';
                break;
                
              case 'plc':
                echo '<li class="breadcrumb-item"><a href="#">Pajak PPh 21 LCP</a></li>';
                break;

              case 'bev':
                echo '<li class="breadcrumb-item"><a href="#">Biodata Evaluation</a></li>';
                break;

              case 'bxl':
                echo '<li class="breadcrumb-item"><a href="#">Biodata Export List</a></li>';
                break;

              case 'dlc':
                echo '<li class="breadcrumb-item"><a href="#">Data Contract List</a></li>';
                break;

              case 'mpd':
                echo '<li class="breadcrumb-item"><a href="#">Man Power Data</a></li>';
                break;
              case 'dmb':
                echo '<li class="breadcrumb-item"><a href="#">Demobilization</a></li>';
                break;
              case 'rtp':
                echo '<li class="breadcrumb-item"><a href="#">RTE Report</a></li>';
                break;
               case 'ebl':
                echo '<li class="breadcrumb-item"><a href="#">Man Power Data</a></li>';
                break;
              case 'tdb':
                echo '<li class="breadcrumb-item"><a href="#">RTE Demob</a></li>';
                break;
              case 'bah':
                echo '<li class="breadcrumb-item"><a href="#">Bank Account History</a></li>';
                break;
              case 'mrc':
                echo '<li class="breadcrumb-item"><a href="#">Roster Check Id</a></li>';
                break;
              case 'rit':
                echo '<li class="breadcrumb-item"><a href="#">Roster Timesheet Import</a></li>';
                break;
              case 'rsm':
                echo '<li class="breadcrumb-item"><a href="#">Report Salary Master</a></li>';
                break;
              case 'hoc':
                echo '<li class="breadcrumb-item"><a href="#">History Of Contract</a></li>';
                break;
              case 'hut':
                echo '<li class="breadcrumb-item"><a href="#">History Update Biodata</a></li>';
                break;

              default:
                break;
            }            
        ?>  
          
        </ul>
      </div>
      <!-- DINAMIC CONTENT IS HERE -->
      <div class="row">
        <?php 
            switch ($my_content) {
              case 'bnh':
                $this->load->view('masters/v_biodata');
                break;
              case 'nba':
                $this->load->view('masters/v_biodata_activation');
                break;
              case 'msl':
                $this->load->view('masters/v_salary');
                break;
              case 'mba':
                $this->load->view('masters/v_bank_account');
                break;
              case 'rte':
                $this->load->view('masters/v_rte_master');
                break;
              case 'plh':
                $this->load->view('masters/v_plh_agincourt');
                break;
              case 'cmp':
                $this->load->view('reports/v_closing_payroll');
                break;
              
              case 'msp':
                $this->load->view('masters/v_salary_level');
                break;

              case 'msc':
                $this->load->view('masters/v_contract_input');
                break;
              case 'dob':
                $this->load->view('masters/v_loan');
                break;

              case 'kfi':
                $this->load->view('masters/v_kpi');
                break;

              case 'sed':
                $this->load->view('masters/v_salary_edit');
                break;

              case 'sti':
                $this->load->view('transactions/sumbawa/v_timesheet_import');
                break;
              case 'sts':
                $this->load->view('transactions/sumbawa/v_roster_process');
                break;
              case 'cki':
                $this->load->view('transactions/ck/v_timesheet_import');
                break;
              case 'ckp':
                $this->load->view('transactions/ck/v_roster_process');
                break;
              case 'ckv':
                $this->load->view('transactions/ck/v_invoice');
                break;
              case 'hpt':
                $this->load->view('reports/v_hold_payment');
                break;
              case 'sdi':
                $this->load->view('transactions/sumbawa/v_invoice');
                break;
              case 'ilc':
                $this->load->view('reports/v_invoice_client');
                break;
              case 'bti':
                $this->load->view('transactions/banyuwangi/v_timesheet_import');
                break;
              case 'bts':
                $this->load->view('transactions/banyuwangi/v_roster_process');
                break;
              case 'gti':
                $this->load->view('transactions/gorontalo/v_timesheet_import');
                break;
              case 'gts':
                $this->load->view('transactions/gorontalo/v_roster_process');
                break;
              case 'mis':
                $this->load->view('reports/v_martabe_invoice');
                break;
              case 'bis':
                $this->load->view('transactions/banyuwangi/v_invoice');
                break;
              case 'gis':
                $this->load->view('transactions/gorontalo/v_invoice');
                break;
              case 'dcl':
                $this->load->view('reports/v_data_crews_lcp');
                break;
              case 'lar':
                $this->load->view('reports/v_list_active');
                break;
              case 'tti':
                $this->load->view('transactions/timika/v_timesheet_import');
                break;
              case 'tts':
                $this->load->view('transactions/timika/v_roster_process');
                break;
              case 'tgt':
                $this->load->view('transactions/timika/v_get_thr');
                break;
              case 'tdi':
                $this->load->view('transactions/timika/v_invoice');
                break;
              case 'itc':
                $this->load->view('reports/v_tax_calculation');
                break;
              case 'dmb':
                $this->load->view('transactions/demob/v_trn_demobilization');
                break;
              case 'tdb':
                $this->load->view('transactions/demob/v_rte_plh_demob');
                break;
              case 'csv':
                $this->load->view('reports/v_export_csv');
                break;
              case 'rbc':
                $this->load->view('reports/v_contract_bonus');
                break;
              case 'kla':
                $this->load->view('reports/v_active_list');
                break;
              case 'srp':
                $this->load->view('reports/v_summary_payroll');
                break;
              case 'clr':
                $this->load->view('reports/v_candidate_list');
                break;
              case 'edt':
                $this->load->view('reports/v_employee_data');
                break;
              case 'prs':
                $this->load->view('reports/v_plh_reports');
                break;
              case 'plc':
                $this->load->view('reports/v_pajak_lcp');
                break;
              case 'bev':
                $this->load->view('reports/v_biodata_evaluation');
                break;
              case 'bxl':
                $this->load->view('reports/v_biodata_export');
                break;
              case 'bah':
                $this->load->view('reports/v_bank_acc_hist');
                break;
              case 'mrc':
                $this->load->view('masters/v_roster_check_id');
                break;
              case 'rit':
                $this->load->view('transactions/roster/v_roster_ts_import');
                break;
              case 'dlc':
                $this->load->view('reports/v_contract_list');
                break;
              case 'mpd':
                $this->load->view('reports/v_man_power');
                break;
              case 'rtp':
                $this->load->view('reports/v_rte_report');
                break;
              case 'ebl':
                $this->load->view('reports/v_bpjs_list');
                break;
              case 'usr':
                $this->load->view('admin/v_users');
                break;
              case 'acs':
                $this->load->view('admin/v_usermenu');
                break;
              case 'pwc':
                $this->load->view('admin/v_password');
                break;
              case 'rsm':
                $this->load->view('reports/v_report_salary');
                break;
              case 'hoc':
                $this->load->view('reports/v_history_contract');
                break;
              case 'hut':
                $this->load->view('reports/v_history_update_biodata');
                break;
              case 'inf':
              ?>
                  <!-- <h3 style="color: #475188">SYSTEM INFORMATION</h3> -->
                    <table style="font-size: 17px; color: blue; margin-left: 20px">
                      <tr>
                        <td>PHP Version</td>
                        <td>&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo phpversion(); ?></td>
                      </tr>

                      <tr>
                        <td>PHP Framework</td>
                        <td>&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo CI_VERSION ?></td>
                      </tr> 

                      <!-- <tr>
                        <td>Database</td>
                        <td>&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo GetDbVersion(); ?></td>
                      </tr> -->

                      <tr>
                        <td>HTML Framework</td>
                        <td>&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;Bootstrap 4</td>
                      </tr>

                      <!-- <tr>
                        <td>Web Server</td>
                        <td>&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;Centos 6 (XML Writer Required)</td>
                      </tr>

                      <tr>
                        <td>Database Server</td>
                        <td>&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->db->hostname;  ?></td>
                      </tr>

                      <tr>
                        <td>Database Name</td>
                        <td>&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->db->database;  ?></td>
                      </tr> -->

                      <tr>
                        <td>Update Version</td>
                        <td>&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;V.21.01.01</td>
                      </tr>
                    </table>
                    
              <?php                  
                
                break;   

              default:
                # code...
                break;
            }            
        ?>        
      </div>
      
      <div class="row">
        
      </div>
    </main>

    <!-- Data table plugin-->
    <!-- Essential javascripts for application to work-->

    <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url() ?>assets/js/plugins/pace.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/jquery-ui.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <!-- The javascript plugin to display notify-->
    <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-notify.min.js"></script>

    <!-- BIODATA MASTER -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.responsiveTabs.js"></script>
    
    <?php 
            switch ($my_content) {
              case 'bnh':
                $this->load->view('masters/js/biodata_script');
              break;
              case 'nba':
                $this->load->view('masters/js/biodata_activation_script');
              break;
              case 'msl':
                $this->load->view('masters/js/salary_script');
              break;
              case 'msp':
                $this->load->view('masters/js/salary_level_script');
              break;
              case 'mba':
                $this->load->view('masters/js/bank_account_script');
              break;
              case 'rte':
                $this->load->view('masters/js/rte_master_script');
              break;
              case 'kfi':
                $this->load->view('masters/js/kpi_script');
              break;
              case 'sed':
                $this->load->view('masters/js/salary_edit_script');
              break;
              case 'plh':
                $this->load->view('masters/js/plh_agincourt_script');
              break;
              case 'cmp':
                  $this->load->view('reports/js/closing_payroll_script');
              break;
              
              case 'msc':
                $this->load->view('masters/js/contract_input_script');
              break;
              case 'dob':
                $this->load->view('masters/js/loan_script');
              break;

              case 'sti':
                $this->load->view('transactions/sumbawa/js/timesheet_import_script');
              break;

              case 'dmb':
                $this->load->view('transactions/demob/js/trn_demobilization_script');
              break;
              case 'tdb':
                $this->load->view('transactions/demob/js/rte_plh_demob_script');
              break;

              case 'sts':
                $this->load->view('transactions/sumbawa/js/roster_process_script');
                echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;
              case 'hpt':
                $this->load->view('reports/js/hold_payment_script');
                echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'sdi':
                $this->load->view('transactions/sumbawa/js/invoice_script');
                // echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'ilc':
                $this->load->view('reports/js/invoice_client_script');
                // echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'bti':
                $this->load->view('transactions/banyuwangi/js/timesheet_import_script');
              break;

              case 'bts':
                $this->load->view('transactions/banyuwangi/js/roster_process_script');
                echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'gti':
                $this->load->view('transactions/gorontalo/js/timesheet_import_script');
              break;

              case 'cki':
                $this->load->view('transactions/ck/js/timesheet_import_script');
                break;
              case 'ckp':
                $this->load->view('transactions/ck/js/roster_process_script');
                break;
              case 'ckv':
                $this->load->view('transactions/ck/js/invoice_script');
                break;

              case 'gts':
                $this->load->view('transactions/gorontalo/js/roster_process_script');
                echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'mis':
                $this->load->view('reports/js/martabe_invoice_script');
              break;
              
              case 'bis':
                $this->load->view('transactions/banyuwangi/js/invoice_script');
                // echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'gis':
                $this->load->view('transactions/gorontalo/js/invoice_script');
                // echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'dcl':
                  $this->load->view('reports/js/data_crews_lcp_script');
              break;

              case 'lar':
                  $this->load->view('reports/js/list_active_script');
              break;

              case 'tti':
                $this->load->view('transactions/timika/js/timesheet_import_script');
              break;

              case 'tts':
                $this->load->view('transactions/timika/js/roster_process_script');
                echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;
              case 'tgt':
                $this->load->view('transactions/timika/js/get_thr_js');
                break;
              case 'tdi':
                $this->load->view('transactions/timika/js/invoice_script');
                // echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'itc':
                $this->load->view('reports/js/tax_calculation_script');
                // echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'csv':
                $this->load->view('reports/js/export_csv_script');
                // echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'rbc':
                $this->load->view('reports/js/contract_bonus_script');
                // echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;
              case 'bah':
                $this->load->view('reports/js/bank_acc_hist_script');
              break;

              case 'kla':
                $this->load->view('reports/js/active_list_script');
                // echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'srp':
                $this->load->view('reports/js/summary_payroll_script');
                // echo "<script type='text/javascript'>$('#payroll').DataTable();</script>";
              break;

              case 'clr':
                $this->load->view('reports/js/candidate_list_script');
              break;

              case 'edt':
                $this->load->view('reports/js/employee_data_script');
              break;

              case 'prs':
                $this->load->view('reports/js/plh_reports_script');
              break;
              case 'plc':
                $this->load->view('reports/js/pajak_lcp_script');
                break;
              case 'bev':
                $this->load->view('reports/js/biodata_evaluation_script');
              break;

              case 'bxl':
                $this->load->view('reports/js/biodata_export_script');
              break;

              case 'dlc':
                $this->load->view('reports/js/contract_list_script');
              break;

              case 'mpd':
                $this->load->view('reports/js/man_power_script');
              break;

              case 'rtp':
                $this->load->view('reports/js/rte_report_script');
              break;

              case 'ebl':
                  $this->load->view('reports/js/bpjs_list_script');
              break;
              
              case 'usr':
                  $this->load->view('admin/js/users_script'); 
              break;

              case 'acs':
                  $this->load->view('admin/js/usermenu_script'); 
              break;

              case 'pwc':
                  $this->load->view('admin/js/password_script'); 
              break;

              case 'mrc':
                $this->load->view('masters/js/roster_check_id_script');
              break;

              case 'rit':
                $this->load->view('transactions/roster/js/roster_ts_import_script');
              break;

              case 'rsm':
                $this->load->view('reports/js/report_salary_script');
              break;

              case 'hoc':
                $this->load->view('reports/js/history_contract_script');
              break;

              case 'hut':
                $this->load->view('reports/js/history_update_biodata_script');
              break;

              default:
                # code...
              break;
            }            
    ?> 
    

    <!-- Google analytics script-->
    <!-- <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script> -->
  </body>
</html>