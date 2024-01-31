<x-app-layout>
    <link href="plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />

    <div class="content-wrapper">
        <div class="content">

            <div class="card card-default">
                <div class="card-header">
                    <h2>Salary Master</h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Internal Id</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input class="errMsg form-control col-md-12" type="text"
                                            placeholder="Id Internal" id="bioId" data-toggle="modal"
                                            data-target="#salaryModal">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Name</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input class="errMsg form-control col-md-12" type="text"
                                            placeholder="Nama Karyawan" id="empName" disabled="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Eksternal Id</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input class="errMsg form-control col-md-12" type="text"
                                            placeholder="Id Eksternal" id="idEksternalNo">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Client Name</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="ptName" name="ptName"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Grup Payroll</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="payrollGroup" name="payrollGroup"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                            <option value="I">I</option>
                                            <option value="J">J</option>
                                            <option value="K">K</option>
                                            <option value="L">L</option>
                                            <option value="M">M</option>
                                            <option value="N">N</option>
                                            <option value="O">O</option>
                                            <option value="P">P</option>
                                            <option value="T">T</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Pontil Jakarta">Pontil Jakarta</option>
                                            <option value="Expatriates">Expatriates</option>
                                            <option value="4500914848">4500914848</option>
                                            <option value="4500915134">4500915134</option>
                                            <option value="4500923313">4500923313</option>
                                            <option value="4500940448">4500940448</option>
                                            <option value="4500941687">4500941687</option>
                                            <option value="4500947118">4500947118</option>
                                            <option value="4500892861">4500892861</option>
                                            <option value="4500899155">4500899155</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Placement</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="areaPenempatan" name="areaPenempatan"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="Banyuwangi">Banyuwangi</option>
                                            <option value="Gorontalo">Gorontalo</option>
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Jambi">Jambi</option>
                                            <option value="Lain-lain">Lain-lain</option>
                                            <option value="Manado">Manado</option>
                                            <option value="NCC_Dumptruck">NCC_Dumptruck</option>
                                            <option value="NCC_Original">NCC_Original</option>
                                            <option value="NCC_Telehandlers">NCC_Telehandlers</option>
                                            <option value="NCC_Var_01">NCC_Var_01</option>
                                            <option value="NCC_Var_02">NCC_Var_02</option>
                                            <option value="NCC_Var_03">NCC_Var_03</option>
                                            <option value="NCC_Var_04">NCC_Var_04</option>
                                            <option value="Papua">Papua</option>
                                            <option value="Samarinda">Samarinda</option>
                                            <option value="SCM_Memco">SCM_Memco</option>
                                            <option value="SCM_Mill_Expansion">SCM_Mill_Expansion</option>
                                            <option value="Sibolga">Sibolga</option>
                                            <option value="Sumbawa">Sumbawa</option>
                                            <option value="Timika">Timika</option>
                                            <!-- <option value="Jakarta">Jakarta</option>
                                            <option value="Papua">Papua</option>
                                            <option value="Sumbawa">Sumbawa</option>
                                            <option value="NCC_Sumbawa">NCC Sumbawa</option>
                                            <option value="Sibolga">Sibolga</option>
                                            <option value="Menado">Menado</option>
                                            <option value="Banyuwangi">Banyuwangi</option>
                                            <option value="Timika">Timika</option>
                                            <option value="Jambi">Jambi</option>
                                            <option value="Samarinda">Samarinda</option>
                                            <option value="Gorontalo">Gorontalo</option>
                                            <option value="lain-lain">Lain-Lain</option> -->
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Level</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="salaryLevel" name="salaryLevel"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="NP" data-basic='7097669.00'>NP</option>
                                            <option value="L1S" data-basic='7294826.00'>L1S</option>
                                            <option value="L2S" data-basic='7689141.00'>L2S</option>
                                            <option value="L3S" data-basic='8872086.00'>L3S</option>
                                            <option value="L4S" data-basic='10252188.00'>L4S</option>
                                            <option value="L1E" data-basic='7491983.00'>L1E</option>
                                            <option value="L2E" data-basic='8280613.00'>L2E</option>
                                            <option value="L3E" data-basic='9266401.00'>L3E</option>
                                            <option value="L4E" data-basic='10843660.00'>L4E</option>
                                            <option value="L5S" data-basic='25214072.00'>L5S</option>
                                            <option value="L6S" data-basic='32551974.00'>L6S</option>
                                            <option value="L7S" data-basic='49506860.00'>L7S</option>
                                            <option value="L5E" data-basic='30995016.00'>L5E</option>
                                            <option value="L6E" data-basic='36676406.00'>L6E</option>
                                            <option value="L7E" data-basic='55645070.00'>L7E</option>
                                            <option value="A5S" data-basic='28239744.00'>A5S</option>
                                            <option value="A5E" data-basic='34714420.00'>A5E</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Basic Salary</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="errMsg form-control currencyField"
                                            id="basicSalary" name="basicSalary" value="0"
                                            placeholder="Gaji Pokok" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Position Allowance</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="errMsg form-control currencyField"
                                            id="positionAllowance" name="positionAllowance" value="0"
                                            placeholder="Tunjangan Jabatan" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Housing & Transport Allowance</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="errMsg form-control currencyField"
                                            id="housingAllowance" name="housingAllowance" value="0"
                                            placeholder="Tunjangan Transport & Tinggal" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Is Remote Allowance</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="isRemoteLocation"
                                            name="isRemoteLocation" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Is Shift Bonus</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="isShiftBonus" name="isShiftBonus"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Is Allowance Economy</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="isAllowanceEconomy"
                                            name="isAllowanceEconomy" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Is Overtime Bonus</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="isOTBonus" name="isOTBonus"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Is Bonus Incentive</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="isIncentiveBonus"
                                            name="isIncentiveBonus" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Is Dev Incentive</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="isIncentiveDevBonus"
                                            name="isIncentiveDevBonus" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Is Production</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="isProductionBonus"
                                            name="isProductionBonus" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Is CC Payment</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="isCcPayment" name="isCcPayment"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Is Travel</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="isTravelBonus" name="isTravelBonus"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Is Overtime</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="isOverTime" name="isOverTime"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Bank Name</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <select class="errMsg form-control" id="bankName" name="bankName"
                                            required="">
                                            <!-- <option value="" disabled="" selected="">Pilih</option>
                                            <option value="BCA">BCA</option>
                                            <option value="BNI">BNI</option>
                                            <option value="BNI SYARIAH">BNI SYARIAH</option>
                                            <option value="BRI">BRI</option>
                                            <option value="BRI SYARIAH">BRI SYARIAH</option>
                                            <option value="BTN">BTN</option>
                                            <option value="CIMB NIAGA">CIMB NIAGA</option>
                                            <option value="DANAMON">DANAMON</option>
                                            <option value="MANDIRI">MANDIRI</option>
                                            <option value="MEGA">MEGA</option>
                                            <option value="MAYBANK">MAYBANK</option>
                                            <option value="PAPUA">PAPUA</option>
                                            <option value="None">None</option> -->
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Account Name</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="errMsg form-control" id="accountName"
                                            name="accountName" placeholder="Nama Pemilik Rekening" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Account No</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="errMsg form-control" id="accountNo"
                                            name="accountNo" placeholder="Nomor Rekening" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12">

                                <input type="button" class="btn btn-primary" id="saveSalary" name="saveSalary"
                                    value="Save">
                            </div>

                        </div>
                    </form>
                </div>
            </div>




            <div class="card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="salaryTable" class="table table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 120px;">Table Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 120px;">External Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 160px;">Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 100px;">Payroll Group</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 100px;">Client</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 100px;">Level</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 100px;">Basic Salary</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 100px;">Bank Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 170px;">Account Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 170px;">Account No</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <input type="button" class="btn btn-primary" id="viewData" name="viewData"
                            value="Display Data">
                        <input type="button" class="btn btn-primary" id="deleteData" name="deleteData"
                            value="Delete Data">
                    </div>
                </div>

                {{-- End of Card Wrapper Content  --}}
            </div>


            {{-- Education Modal  --}}
            <div class="modal fade" id="manpowerPlanModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " role="document">
                    <div class="modal-content">
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Classification</h5>
                        </div>
                        <div class="modal-body px-4">
                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <!-- Start Form PENDIDIKAN -->
                                    <form method="post" class="my_detail">
                                        <div class="form-group">
                                            <label class="control-label" for="position">Position</label>
                                            <select class="form-control" id="position" name="position"
                                                required="">
                                                <option value="" disabled="" selected="">Pilih
                                                </option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="ratePerDay">Rate Per Day</label>
                                            <input class="form-control" type="text" id="ratePerDay"
                                                name="ratePerDay" placeholder="Rate Per Day">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="totalLabour">Total Labour</label>
                                            <select class="errMsg form-control" id="totalLabour" name="totalLabour"
                                                required="">
                                                <option value="" disabled="" selected="">Select
                                                </option>
                                                <script type="text/javascript">
                                                    var tLabour = 1;
                                                    for (var i = tLabour; i <= 100; i++) {
                                                        if (i < 10) {
                                                            document.write("<option value='0" + i + "'>0" + i + "</option>");
                                                        } else {
                                                            document.write("<option value='" + i + "'>" + i + "</option>");
                                                        }
                                                    }
                                                </script>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="startDate">Start Date</label>
                                            <input class="errMsg form-control datepicker" type="date"
                                                id="startDate" placeholder="yyyy-mm-dd" required ="">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="endDate">End Date</label>
                                            <input class="errMsg form-control datepicker" type="date"
                                                id="endDate" name="endDate" placeholder="yyyy-mm-dd"
                                                required ="">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="totalDate">Total Date</label>
                                            <input class="form-control datepicker" type="text" id="totalDate"
                                                name="totalDate" readonly="">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="workLocation">Work Location</label>
                                            <input class="form-control" type="text" id="workLocation"
                                                name="workLocation" placeholder="Work Location">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="remarks">Remarks</label>
                                            <input class="form-control" type="text" id="remarks" name="remarks"
                                                placeholder="Remarks">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-danger btn-pill"
                                data-dismiss="modal">Cancel</button>
                            <input type="button" class="btn btn-primary btn-pill" id="saveEducation"
                                name="saveEducation" value="Save">
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Education Modal  --}}
        </div>

        <script src="plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

</x-app-layout>
