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
            || in_array("DMB", $menus) || in_array("TDB", $menus) || in_array("RIT",$menus)  || in_array("CKI",$menus)  || in_array("CKP",$menus))  
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
            || in_array("ILC",$menus) || in_array("HPT",$menus) || in_array("MIS",$menus)  || in_array("CKV",$menus))
        {
            $isReportsExists = true;
        }

        if(in_array("USR",$menus) || in_array("ACS",$menus))
        {
            $isAdminExists = true;
        }
    }
    $url1 = '';
    $url2 = '';
    $url3 = '';
    if(!empty($this->uri->segment('1'))) {
        $url1 = $this->uri->segment('1').'/';
    }
    if(!empty($this->uri->segment('2'))) {
        $url2 = $this->uri->segment('2').'/';
    }
    if(!empty($this->uri->segment('3'))) {
        $url3 = $this->uri->segment('3');
    }
?>
<script>
function changeVersion() {
    var version = document.getElementById("app_version").value;
    if (version == '1') {
        window.location = "<?= base_url('../hr3s2022/home');?>";
    }
    if (version == '3') {
        window.location = "<?= base_url('../pajak/home');?>";
    }
    if (version == '4') {
        window.open("http://sis.sangati.co/payroll-staff/home/auth?inputUser=<?= base64_encode($this->session->userdata('hris_user_id'));?>&inputPassword=<?= base64_encode($this->session->userdata('hris_user_password'))?>");
    }
}
</script>
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
            src="<?php echo base_url() ?>assets/images/mrc.bmp" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><?php echo $this->session->userdata('hris_user_id'); ?></p>
            <p class="app-sidebar__user-designation">User Login</p>
        </div>
    </div>
    <ul class="app-menu">
        <?php if(in_array("HRV",$menus)) {?>
        <li class="treeview container">
            <div class="form-group">
                <select class="form-control" onchange="changeVersion()" name="app_version" id="app_version">
                    <option value="2" selected>HRIS >= 2023</option>
                    <option value="4">PAYROLL STAFF</option>
                    <option value="1">HRIS 2021-2022</option>
                    <option value="3">PAJAK</option>
                </select>
            </div>
        </li>
        <?php }?>
        <li>
            <a class="app-menu__item <?= $this->uri->segment('3') == '' ? 'active' : ''?>"
                href="<?php echo base_url() ?>home">
                <i class="app-menu__icon fa fa-home"></i>
                <span class="app-menu__label">Home</span>
            </a>
        </li>

        <!-- START MASTERS MENU -->
        <?php if($isMasterExists == true) : ?>
        <li class="treeview <?php if(in_array($this->uri->segment('3'), [
                'bnh', 'nba', 'rte', 'msl', 'mba', 'msp', 
                'dob', 'msc', 'kfi', 'plh', 'cmp', 'mrc'
            ])){ echo 'is-expanded'; }?>">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-laptop"></i>
                <span class="app-menu__label">Masters</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">

                <?php if(in_array("BNH",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'bnh' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/bnh">
                        <i class="icon fa fa-circle-o"></i> Biodata Master
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("NBA",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'nba' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/nba">
                        <i class="icon fa fa-circle-o"></i> Biodata Activation
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("RTE",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'rte' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/rte">
                        <i class="icon fa fa-circle-o"></i> Requisition To Employee (RTE)
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("MSL",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'msl' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/msl">
                        <i class="icon fa fa-circle-o"></i> Salary Master
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("MBA",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'mba' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/mba">
                        <i class="icon fa fa-circle-o"></i> Bank Account
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("MSP",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'msp' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/msp">
                        <i class="icon fa fa-circle-o"></i> Salary Level Master
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("DOB",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'dob' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/dob">
                        <i class="icon fa fa-circle-o"></i> Loan
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("MSC",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'msc' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/msc">
                        <i class="icon fa fa-circle-o"></i> Contract Master
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("KFI",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'kfi' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/kfi">
                        <i class="icon fa fa-circle-o"></i> Key Performance Indicator
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("ILP",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'ilp' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/ilp">
                        <i class="icon fa fa-circle-o"></i> Price
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("PLH",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'plh' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/plh">
                        <i class="icon fa fa-circle-o"></i> Daily Worker
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("CMP",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'cmp' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/cmp">
                        <i class="icon fa fa-circle-o"></i> Closing Payroll
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("MRC",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'mrc' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/mrc">
                        <i class="icon fa fa-circle-o"></i> Roster Check Id
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <!-- END MASTERS MENU -->

        <!-- START TRANSACTIONS MENU -->
        <?php if($isTransactionExists == true) : ?>
        <li class="treeview <?php if(in_array($this->uri->segment('3'), [
                'sti','sts','bti','bts','tti','tts','dmb','tdb','rit','gti','gts','cki','ckp'
            ])){ echo 'is-expanded'; }?>">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list"></i>
                <span class="app-menu__label">Transactions</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">

                <?php if(in_array("STI",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'sti' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/sti">
                        <i class="icon fa fa-circle-o"></i> Sumbawa TS Import
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("STS",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'sts' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/sts">
                        <i class="icon fa fa-circle-o"></i> Sumbawa TS Process
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("CKI",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'cki' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/cki">
                        <i class="icon fa fa-circle-o"></i> Cipta Kridatama TS Import
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("CKP",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'ckp' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/ckp">
                        <i class="icon fa fa-circle-o"></i> Cipta Kridatama TS Process
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("BTI",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'bti' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/bti">
                        <i class="icon fa fa-circle-o"></i> Banyuwangi TS Import
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("BTS",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'bts' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/bts">
                        <i class="icon fa fa-circle-o"></i> Banyuwangi TS Process
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("GTI",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'gti' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/gti">
                        <i class="icon fa fa-circle-o"></i> Gorontalo TS Import
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("GTS",$menus)):?>
                <li>
                    <a class="treeview-item  <?= $this->uri->segment('3') == 'gts' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/gts">
                        <i class="icon fa fa-circle-o"></i> Gorontalo TS Process
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("TTI",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'tti' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/tti">
                        <i class="icon fa fa-circle-o"></i> Timika TS Import
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("TTS",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'tts' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/tts">
                        <i class="icon fa fa-circle-o"></i> Timika TS Process
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("DMB",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'dmb' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/dmb">
                        <i class="icon fa fa-circle-o"></i> Demobilization
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("TDB",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'tdb' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/tdb">
                        <i class="icon fa fa-circle-o"></i> RTE Demob
                    </a>
                </li>
                <?php endif; ?>

                <?php if(in_array("RIT",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'rit' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/rit">
                        <i class="icon fa fa-circle-o"></i> Roster TS Import
                    </a>
                </li>
                <?php endif; ?>

            </ul>
        </li>
        <?php endif; ?>
        <!-- END TRANSACTIONS MENU -->

        <!-- START REPORTS MENU -->
        <?php if($isReportsExists == true) : ?>
        <li class="treeview <?php if(in_array($this->uri->segment('3'), [
                'sdi','plc','ilc','bis','dcl','lar','tdi','csv','rbc','kla','srp',
                'clr','edt','prs','bev','bxl','dlc','ebl','rtp','mpd','rsm','hoc',
                'hut','hpt','gis','itc','mis','ckv'
            ])){ echo 'is-expanded'; }?>">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-file-text"></i>
                <span class="app-menu__label">Reports</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <?php if(in_array("STK",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'stk' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/stk">
                        <i class="icon fa fa-circle-o"></i> Stok Barang
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("STH",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'sth' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/sth">
                        <i class="icon fa fa-circle-o"></i> Pergerakan Stok
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("SDI",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'sdi' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/sdi">
                        <i class="icon fa fa-circle-o"></i> Sumbawa Invoice
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("CKV",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'ckv' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/ckv">
                        <i class="icon fa fa-circle-o"></i> Cipta Kridatama Invoice
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("ILC",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'ilc' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/ilc">
                        <i class="icon fa fa-circle-o"></i> Invoice Client
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("PLC",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'plc' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/plc">
                        <i class="icon fa fa-circle-o"></i> Pajak PPh 21 LCP
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("MIS",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'mis' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/mis">
                        <i class="icon fa fa-circle-o"></i> Martabe Invoice
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("BIS",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'bis' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/bis">
                        <i class="icon fa fa-circle-o"></i> Banyuwangi Invoice
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("GIS",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'gis' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/gis">
                        <i class="icon fa fa-circle-o"></i> Gorontalo Invoice
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("DCL",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'dcl' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/dcl">
                        <i class="icon fa fa-circle-o"></i> Data Crews LCP
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("LAR",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'lar' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/lar">
                        <i class="icon fa fa-circle-o"></i> List Active
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("TDI",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'tdi' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/tdi">
                        <i class="icon fa fa-circle-o"></i> Timika Invoice
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("ITC",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'itc' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/itc">
                        <i class="icon fa fa-circle-o"></i> Employee Income Tax Calculation
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("CSV",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'csv' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/csv">
                        <i class="icon fa fa-circle-o"></i> Export To CSV
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("RBC",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'rbc' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/rbc">
                        <i class="icon fa fa-circle-o"></i> Contract Bonus
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("KLA",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'kla' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/kla">
                        <i class="icon fa fa-circle-o"></i> Employee Active List
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("SRP",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'srp' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/srp">
                        <i class="icon fa fa-circle-o"></i> Summary Payroll
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("CLR",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'clr' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/clr">
                        <i class="icon fa fa-circle-o"></i> Candidate Data
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("EDT",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'edt' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/edt">
                        <i class="icon fa fa-circle-o"></i> Employee Data
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("PRS",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'prs' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/prs">
                        <i class="icon fa fa-circle-o"></i> Daily Worker
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("BEV",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'bev' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/bev">
                        <i class="icon fa fa-circle-o"></i> Biodata Evaluation
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("BXL",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'bxl' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/bxl">
                        <i class="icon fa fa-circle-o"></i> Biodata Export List
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("DLC",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'dlc' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/dlc">
                        <i class="icon fa fa-circle-o"></i> Data Contract List
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("EBL",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'ebl' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/ebl">
                        <i class="icon fa fa-circle-o"></i> Export BPJS List
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("RTP",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'rtp' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/rtp">
                        <i class="icon fa fa-circle-o"></i> RTE Report
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("BAH",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'bah' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/bah">
                        <i class="icon fa fa-circle-o"></i> Bank Account History
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("MPD",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'mpd' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/mpd">
                        <i class="icon fa fa-circle-o"></i> Man Power Data
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("RSM",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'rsm' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/rsm">
                        <i class="icon fa fa-circle-o"></i> Report Salary Master
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("HOC",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'hoc' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/hoc">
                        <i class="icon fa fa-circle-o"></i> History Of Contract
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("HUT",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'hut' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/hut">
                        <i class="icon fa fa-circle-o"></i> History Update Biodata
                    </a>
                </li>
                <?php endif; ?>
                <?php if(in_array("HPT",$menus)):?>
                <li>
                    <a class="treeview-item <?= $this->uri->segment('3') == 'hpt' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/hpt">
                        <i class="icon fa fa-circle-o"></i> Holding Payment
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <!-- END REPORTS MENU -->

        <!-- START ADMIN MENU -->
        <?php if($isAdminExists == true) : ?>
        <li class="treeview  <?php if(in_array($this->uri->segment('3'), [
                'usr','acs'
            ])){ echo 'is-expanded'; }?>">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-laptop"></i>
                <span class="app-menu__label">Admin</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <?php if(in_array("USR",$menus)):?>
                <li><a class="treeview-item <?= $this->uri->segment('3') == 'usr' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/usr">
                        <i class="icon fa fa-circle-o"></i> User</a>
                </li>
                <?php endif; ?>
                <?php if(in_array("ACS",$menus)):?>
                <li><a class="treeview-item <?= $this->uri->segment('3') == 'acs' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/acs">
                        <i class="icon fa fa-circle-o"></i> Akses Menu</a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <!-- END ADMIN MENU -->

        <li class="treeview  <?php if(in_array($this->uri->segment('3'), [
                'pwc'
            ])){ echo 'is-expanded'; }?>">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-wrench"></i>
                <span class="app-menu__label">Utilities</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item <?= $this->uri->segment('3') == 'pwc' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/pwc">
                        <i class="icon fa fa-circle-o"></i> Ganti Password</a>
                </li>
                <!-- <li><a class="treeview-item" href="widgets.html">
              <i class="icon fa fa-circle-o"></i> Widgets</a>
            </li> -->
            </ul>
        </li>

        <li class="treeview  <?php if(in_array($this->uri->segment('3'), [
                'inf'
            ])){ echo 'is-expanded'; }?>">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-question-circle"></i>
                <span class="app-menu__label">Helper</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="#">
                        <i class="icon fa fa-circle-o"></i> Bantuan</a>
                </li>
                <li><a class="treeview-item <?= $this->uri->segment('3') == 'inf' ? 'active' : '';?>"
                        href="<?php echo base_url() ?>home/detail/inf">
                        <i class="icon fa fa-circle-o"></i> Informasi Aplikasi</a>
                </li>
                <li><a class="treeview-item" href="<?php echo base_url() ?>template/PTLSMB201901.xlsx">
                        <i class="icon fa fa-circle-o"></i> Timesheet Template</a>
                </li>
                <li><a class="treeview-item" href="<?php echo base_url() ?>template/ALWPTLSMB201901.xlsx">
                        <i class="icon fa fa-circle-o"></i> Allowance Template</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>