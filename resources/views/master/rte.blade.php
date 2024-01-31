<x-app-layout>
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="px-6 py-4">
                    <input type="button" class="btn btn-primary" id="saveBiodata" name="saveBiodata" value="Save">
                </div>
            </div>


            <div class="card card-default">
                <div class="card-header">
                    <h2>Requisition To Employee (RTE) Input</h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">RTE Number</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="rteNumber" name="rteNumber"
                                            placeholder="RTE Number" required="" autofocus="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Department</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-server-security"
                                                id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="dept" name="dept" required="">
                                            <option value="" disabled="" selected="">Select</option>
                                            <option value="Exploration">Exploration</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Date (Month) Required
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-calendar" id="basic-addon1"></span>
                                        </div>
                                        <input type="date" class="form-control" id="dateRequired" name="dateRequired"
                                            required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Company Employing The Labour
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-earth" id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="company" name="company" required="">
                                            <option value="" disabled="" selected="">Select</option>
                                            <option value="Sangati Soerya Sejahtera">PT Sangati Soerya Sejahtera
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Labour Source
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-earth" id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="labourSource" name="labourSource"
                                            required="">
                                            <option value="" disabled="" selected="">Select</option>
                                            <option value="Ex FTC During Lapse Time Break">Ex FTC During Lapse Time
                                                Break
                                            </option>
                                            <option value="Ex Daily Worker">Ex Daily Worker</option>
                                            <option value="New Daily Worker">New Daily Worker</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>




            <div class="card card-default">
                <div class="card-body">
                    <div class="border p-6">
                        <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#mp" role="tab"
                                    aria-controls="nav-tabs" aria-selected="true">Manpower Plan and Job
                                    Establishment</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="mp" role="tabpanel"
                                aria-labelledby="ed">
                                <input type="button" class="btn btn-primary btn-sm newEducation mb-2"
                                    id="addManpowerPlan" name="addManpowerPlan" data-toggle="modal"
                                    data-target="#manpowerPlanModal" value="Add Detail">
                                <table class="table table-hover table-bordered" id="manpowerPlanTable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 139px;">Position</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 118px;">Rate Per Day</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 169px;">Total Labour</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Start Date</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">End Date</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Total Date</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Work Location</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Remarks</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 138px;">Delete</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>


                        </div>
                    </div>
                    {{-- End of Content  --}}
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


</x-app-layout>
