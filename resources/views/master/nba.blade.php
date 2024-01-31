<x-app-layout>
    <div class="content-wrapper">
        <div class="content"><!-- For Components documentaion -->
            <div class="card card-default">
                <div class="px-6 py-4">
                    <div class="form-group col-sm-12 col-md-4">
                        <input class="form-control" type="text" id="searchByName" name="searchByName"
                            placeholder="Fill name and hit enter" width="100px">
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="biodataListTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 110px;">
                                        Biodata Id</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 118px;">
                                        Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 200px;">
                                        Address</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 130px;">
                                        Contact No</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 176px;">
                                        Position</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 120px;">Is
                                        Active</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 120px;">
                                        Black List</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100px;">Act
                                        Active</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 130px;">Act
                                        Black List</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
