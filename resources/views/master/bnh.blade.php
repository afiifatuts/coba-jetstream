<x-app-layout>
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="px-6 py-4">
                    <button type="button" id="addBiodata" name="addBiodata" class="btn btn-primary">Add</button>
                    <button type="button" id="saveBiodata" name="saveBiodata" class="btn btn-primary">Save</button>

                </div>
            </div>
            <div class="card card-default">
                <div class="card-header">
                    <h2>Biodata Input</h2>
                </div>
                <div class="card-body">
                    <div class="collapse" id="collapse-input-musk">
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium" for="">ID Card Number</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-card-details"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="idNo" name="idNo"
                                            placeholder="Nomor KTP 16 Digit" min="0" max="16"
                                            required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Full Name</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="fullName" name="fullName"
                                            placeholder="Full Name" required="" autofocus="">
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Place Of Birth</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="birthPlace" name="birthPlace"
                                            placeholder="Tempat Lahir" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Date Of Birth</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-calendar" id="basic-addon1"></span>
                                        </div>
                                        <input type="Date" class="form-control" id="birthDate" name="birthDate"
                                            placeholder="Tanggal Lahir" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Nationality</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-earth" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="nationality" name="nationality"
                                            placeholder="Warga Negara" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Gender
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-gender-male-female"
                                                id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="gender" name="gender" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Ethnic
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-earth" id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="etnics" name="etnics" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="Jawa">Jawa</option>
                                            <option value="Sunda">Sunda</option>
                                            <option value="Melayu">Melayu</option>
                                            <option value="Manado">Manado</option>
                                            <option value="Batak">Batak</option>
                                            <option value="Toraja">Toraja</option>
                                            <option value="Papua">Papua</option>
                                            <option value="Padang">Padang</option>
                                            <option value="Lain">Lain-Lain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">City
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-earth" id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="cityAddress" name="cityAddress"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">ID Card Address
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-card-details"
                                                id="basic-addon1"></span>
                                        </div>

                                        <input type="text" class="form-control" id="idAddress" name="idAddress"
                                            placeholder="Alamat KTP" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Current Address
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-earth" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="currentAddress"
                                            name="currentAddress" placeholder="Alamat Sekarang" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Living Status
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-earth" id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="livingStatus" name="livingStatus"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="Milik Pribadi">Milik Pribadi</option>
                                            <option value="Milik Orang Tua">Milik Orang Tua</option>
                                            <option value="Rumah Kontrakan">Rumah Kontrakan</option>
                                            <option value="Indekost">Indekost</option>
                                            <option value="None">None</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Religion
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-earth" id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="religion" name="religion" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Khonghucu">Khonghucu</option>
                                            <option value="Lain">Lain-Lain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Driving License
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-earth" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="driveLicence"
                                            name="driveLicence" placeholder="A,B,C,..">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Marital Status
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-earth" id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="maritalStatus" name="maritalStatus"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="TK0">TK-0</option>
                                            <option value="TK1">TK-1</option>
                                            <option value="TK2">TK-2</option>
                                            <option value="TK3">TK-3</option>
                                            <option value="K0">K-0</option>
                                            <option value="K1">K-1</option>
                                            <option value="K2">K-2</option>
                                            <option value="K3">K-3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Taxpayer No
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-server-security"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="npwpNo" name="npwpNo"
                                            placeholder="Nomor NPWP" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">BPJS No
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-card-details"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="bpjsNo" name="bpjsNo"
                                            placeholder="Nomor BPJS">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium">Group Position
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-group"
                                                id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="groupPosition" name="groupPosition"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> Position
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account-group"
                                                id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="appliedPosition" name="appliedPosition"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> Height
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-human-male"
                                                id="basic-addon1"></span>
                                        </div>
                                        <input type="number" class="form-control" id="height" name="height"
                                            min="0" placeholder="Tinggi Badan" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> Weight
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-human" id="basic-addon1"></span>
                                        </div>
                                        <input type="number" class="form-control" id="weight" name="weight"
                                            min="0" placeholder="Berat Badan" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> Color Blindness
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-glasses" id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="colorBlindness" name="colorBlindness">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="1">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> Blood Type
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-hospital" id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="bloodType" name="bloodType" required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                            <option value="None">None</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> Phone Number
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-phone" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="cellNo" name="cellNo"
                                            placeholder="Nomor HP" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> Telephone Number
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-phone" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" id="telpNo" name="telpNo"
                                            placeholder="Nomor Telepon" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> Email
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-email" id="basic-addon1"></span>
                                        </div>
                                        <input type="email" class="form-control" id="emailAddress"
                                            name="emailAddress" placeholder="Alamat Email" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> Point Of Hire
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-email" id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="pointOfHire" name="pointOfHire"
                                            required="">
                                            <option value="" disabled="" selected="">Pilih</option>
                                            <option value="L">Local</option>
                                            <option value="NL">Non Local</option>
                                            <option value="NP">Non Papua</option>
                                            <option value="PO">Papua Others</option>
                                            <option value="PO">Papua 7 Ethnic</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> CV Date
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-email" id="basic-addon1"></span>
                                        </div>
                                        <input type="Date" class="form-control" id="cvDate" name="cvDate"
                                            placeholder="Tanggal CV" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> Staff / Non Staff
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-email" id="basic-addon1"></span>
                                        </div>
                                        <select class="form-control" id="staffingStatus" name="staffingStatus"
                                            required="">
                                            <option value="" disabled="">Pilih</option>
                                            <option value="0" selected="">Non Staff</option>
                                            <option value="1">Staff</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="mb-0">
                                    <label class="text-dark font-weight-medium"> Date Of Hire
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-email" id="basic-addon1"></span>
                                        </div>
                                        <input type="Date" class="form-control" id="dateOfHire" name="dateOfHire"
                                            placeholder="Tanggal PKWT" required="">
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
                                <a class="nav-link active" data-toggle="pill" href="#ed" role="tab"
                                    aria-controls="nav-tabs" aria-selected="true">Educations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tr" role="tab"
                                    aria-controls="tr" aria-selected="false">Trainings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#ex" role="tab"
                                    aria-controls="ex" aria-selected="false">Experiences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#fa" role="tab"
                                    aria-controls="fa" aria-selected="false">Family Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#la" role="tab"
                                    aria-controls="la" aria-selected="false">Languages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#or" role="tab"
                                    aria-controls="or" aria-selected="false">Organizations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#re" role="tab"
                                    aria-controls="re" aria-selected="false">References</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#qa" role="tab"
                                    aria-controls="qa" aria-selected="false">Qualification</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="ed" role="tabpanel"
                                aria-labelledby="ed">
                                <input type="button" class="btn btn-primary btn-sm newEducation mb-2"
                                    id="addEducation" name="addEducation" data-toggle="modal"
                                    data-target="#educationModal" value="Add Detail">

                                <table class="table table-hover table-bordered" id="educationTable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 139px;">Institution</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 118px;">Major</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 169px;">Year</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">City</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Certificate</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 138px;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td scope="row">1</td>
                                        <td>Lucia</td>
                                        <td>Christ</td>
                                        <td>@Lucia</td>
                                        <td>@Lucia</td>
                                        <th class="text-center">

                                            <a href="#">
                                                <i class="mdi mdi-close text-danger"></i>
                                            </a>

                                        </th>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tr" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <input type="button" class="btn btn-primary btn-sm mb-2" id="addTraining"
                                    name="addTraining" data-toggle="modal" data-target="#trainingModal"
                                    value="Add Detail">
                                <table class="table table-hover table-bordered" id="trainingTable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 139px;">Institution</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 118px;">Major</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 169px;">Year</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">City</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Certificate</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 138px;">Delete</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="ex" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <input type="button" class="btn btn-primary btn-sm mb-2" id="addExperience"
                                    name="addExperience" data-toggle="modal" data-target="#experienceModal"
                                    value="Add Detail">
                                <table class="table table-hover table-bordered" id="experienceTable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 139px;">Company</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 118px;">Position</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 130px;">Join Date</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 100px;">Current</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 150px;">End Of Working</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 150px;">Basic Salary</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 130px;">Allowance</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Job Desc</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 195px;">Quit Reason</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 195px;">Information</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120px;">Delete</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="fa" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <input type="button" class="btn btn-primary btn-sm mb-2" id="addFamily"
                                    name="addFamily" data-toggle="modal" data-target="#familyModal"
                                    value="Add Detail">
                                <table class="table table-hover table-bordered" id="familyTable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 139px;">Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 118px;">Relationship</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 169px;">Date Of Birth</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Education</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Occupation</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 138px;">Delete</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="la" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <input type="button" class="btn btn-primary btn-sm mb-2" id="addLanguage"
                                    name="addLanguage" data-toggle="modal" data-target="#languageModal"
                                    value="Add Detail">
                                <table class="table table-hover table-bordered" id="languageTable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 139px;">Language</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 118px;">Writing</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 169px;">Oral</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Information</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 138px;">Delete</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="or" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <input type="button" class="btn btn-primary btn-sm mb-2" id="addOrganization"
                                    name="addOrganization" data-toggle="modal" data-target="#organizationModal"
                                    value="Add Detail">
                                <table class="table table-hover table-bordered" id="organizationTable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 139px;">Organization</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 169px;">Year</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Position</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 138px;">Delete</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="re" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <input type="button" class="btn btn-primary btn-sm mb-2" id="addReference"
                                    name="addReference" data-toggle="modal" data-target="#referenceModal"
                                    value="Add Detail">
                                <table class="table table-hover table-bordered" id="referenceTable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 139px;">Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 118px;">Relationsship</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 169px;">Address</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 176px;">Contact No</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 138px;">Delete</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="qa" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <input type="button" class="btn btn-primary btn-sm mb-2" id="addQualification"
                                    name="addQualification" data-toggle="modal" data-target="#qualificationModal"
                                    value="Add Detail">
                                <table class="table table-hover table-bordered" id="qualificationTable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 150px;">Qualification</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 100px;">Year Period</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 100px;">Certificate</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 100px;">Delete</th>
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
            <div class="modal fade" id="educationModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " role="document">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header px-4">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add Education</h5>
                            </div>
                            <div class="modal-body px-4">
                                <div class="row mb-2">
                                    <div class="col-lg-12">
                                        <!-- Start Form PENDIDIKAN -->
                                        <form method="post" class="my_detail">
                                            <div class="form-group">
                                                <label class="control-label" for="schoolName">Institution</label>
                                                <input class="form-control" type="text" id="schoolName"
                                                    name="schoolName" placeholder="Nama Lembaga">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label" for="educationMajor">Major</label>
                                                <input class="form-control" type="text" id="educationMajor"
                                                    name="educationMajor" placeholder="Nama Jurusan">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label" for="educationYear">Year</label>
                                                <select class="form-control" id="educationYear" name="educationYear">
                                                    <option value="" disabled="" selected="">Pilih
                                                    </option>
                                                    <script type="text/javascript">
                                                        var dt = new Date();
                                                        var startYear = dt.getFullYear();
                                                        var endYear = startYear - 80;
                                                        for (var i = startYear; i >= endYear; i--) {
                                                            document.write("<option value='" + i + "'>" + i + "</option>");
                                                        }
                                                    </script>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="educationCity">City</label>
                                                <input class="form-control" type="text" id="educationCity"
                                                    name="educationCity" placeholder="Nama Kota">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label" for="isCertified">Certificate</label><br>
                                                <input type="checkbox" checked="" id="isCertified"
                                                    name="isCertified" value="1">
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
                        </form>
                    </div>
                </div>
            </div>
            {{-- End Education Modal  --}}


            {{-- Start Training Modal  --}}
            <div class="modal fade" id="trainingModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " role="document">
                    <div class="modal-content">
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Trainings</h5>
                        </div>
                        <div class="modal-body px-4">

                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <!-- Start Form TRAINING -->
                                    <form method="post" class="my_detail">
                                        <div class="form-group">
                                            <label class="control-label" for="instituteName">Institution</label>
                                            <input class="form-control" type="text" id="instituteName"
                                                name="instituteName" placeholder="Nama Lembaga">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="classesField">Field</label>
                                            <input class="form-control" type="text" id="classesField"
                                                name="classesField" placeholder="Bidang Training">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="trainingYear">Year</label>
                                            <select class="form-control" id="trainingYear" name="trainingYear">
                                                <option value="" disabled="" selected="">Pilih</option>
                                                <script type="text/javascript">
                                                    var dt = new Date();
                                                    var startYear = dt.getFullYear();
                                                    var endYear = startYear - 80;
                                                    for (var i = startYear; i >= endYear; i--) {
                                                        document.write("<option value='" + i + "'>" + i + "</option>");
                                                    }
                                                </script>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="trainingCity">City</label>
                                            <input class="form-control" type="text" id="trainingCity"
                                                name="trainingCity" placeholder="Nama Kota">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label"
                                                for="isTrainingCertified">Certificate</label><br>
                                            <input type="checkbox" checked="" id="isTrainingCertified"
                                                name="isTrainingCertified">
                                        </div>
                                    </form>
                                    <!-- End Form TRAINING -->
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-danger btn-pill"
                                data-dismiss="modal">Cancel</button>
                            <input type="button" class="btn btn-primary btn-pill" id="saveTraining"
                                name="saveTraining" value="Save">
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Training Modal  --}}

            {{-- Start Experience Modal  --}}
            <div class="modal fade" id="experienceModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " role="document">
                    <div class="modal-content">
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Experience</h5>
                        </div>
                        <div class="modal-body px-4">

                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <!-- Start Form Experience -->
                                    <form method="post" class="my_detail">
                                        <div class="form-group">
                                            <label class="control-label" for="experienceCompanyName">Company<code
                                                    id="experienceCompanyNameErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="text" id="experienceCompanyName"
                                                name="experienceCompanyName" placeholder="Nama Perusahaan">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="experiencePosition">Position<code
                                                    id="experiencePositionErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="text" id="experiencePosition"
                                                name="experiencePosition" placeholder="Nama Jabatan">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="startWorkDate">Join Date<code
                                                    id="startWorkDateErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="date" id="startWorkDate"
                                                name="startWorkDate" placeholder="Tanggal Bergabung">
                                        </div>

                                        <div class="form-group">
                                            <!-- <label class="control-label" for="isCurrentWork">Masih Bekerja</label><br> -->
                                            <input type="checkbox" checked="" id="isCurrentWork"
                                                name="isCurrentWork" value="1"><b> Current</b>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="endWorkDate">Quit Date</label>
                                            <input class="form-control" type="date" id="endWorkDate"
                                                name="endWorkDate" placeholder="Tanggal Keluar">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="experienceBasicSalary">Basic
                                                Salary<code id="experienceBasicSalaryErr" class="errMsg"><span> :
                                                        Required
                                                        Angka</span></code></label>
                                            <input class="form-control" type="number" min="0.00"
                                                step="0.50" id="experienceBasicSalary"
                                                name="experienceBasicSalary" placeholder="Gaji Pokok">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="experienceAllowance">Allowance</label>
                                            <input class="form-control" type="number" min="0.00"
                                                step="0.50" id="experienceAllowance" name="experienceAllowance"
                                                placeholder="Nilai Tunjangan">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="jobDesc">Jobs<code id="jobDescErr"
                                                    class="errMsg"><span> : Required</span></code></label>
                                            <input class="form-control" type="text" id="jobDesc"
                                                name="jobDesc" placeholder="Job Desc">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="resignReason">Quit Reason<code
                                                    id="resignReasonErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <select class="form-control" id="resignReason" name="resignReason">
                                                <option value="" disabled="" selected="">Pilih
                                                </option>
                                                <option value="Resign">Resign</option>
                                                <option value="Contract Completed">Contract Completed</option>
                                                <option value="Terminated">Terminated</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="addInfo">Information</label>
                                            <input class="form-control" type="text" id="addInfo"
                                                name="addInfo" placeholder="Keterangan">
                                        </div>
                                    </form>
                                    <!-- End Form Experience -->
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-danger btn-pill"
                                data-dismiss="modal">Cancel</button>
                            <input type="button" class="btn btn-primary btn-pill" id="saveExperience"
                                name="saveExperience" value="Save">
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Experience Modal  --}}

            {{-- Start Family Modal  --}}
            <div class="modal fade" id="familyModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " role="document">
                    <div class="modal-content">
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Family</h5>
                        </div>
                        <div class="modal-body px-4">

                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <!-- Start Form FAMILY -->
                                    <form method="post" class="my_detail">

                                        <div class="form-group">
                                            <label class="control-label" for="familyName">Name<code
                                                    id="familyNameErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="text" id="familyName"
                                                name="familyName" placeholder="Nama Keluarga">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="familyRelation">Relationship<code
                                                    id="familyRelationErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="text" id="familyRelation"
                                                name="familyRelation" placeholder="Hubungan Keluarga">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="familyDateOfBirth">Date Of Birth<code
                                                    id="familyDateOfBirthErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="date" id="familyDateOfBirth"
                                                name="familyDateOfBirth" placeholder="Tanggal Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="familyEducation">Education<code
                                                    id="familyEducationErr" class="errMsg"><span> : Wajib
                                                        Dipilih</span></code></label>
                                            <select class="form-control" id="familyEducation"
                                                name="familyEducation">
                                                <option value="" disabled="" selected="">Pilih
                                                </option>
                                                <option value="None">None</option>
                                                <option value="TK">TK</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMU">SMU</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="familyOccupation">Occupation</label>
                                            <input class="form-control" type="text" id="familyOccupation"
                                                name="familyOccupation" placeholder="Nama Pekerjaan">
                                        </div>
                                    </form>
                                    <!-- End Form FAMILY -->
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-danger btn-pill"
                                data-dismiss="modal">Cancel</button>
                            <input type="button" class="btn btn-primary btn-pill" id="saveFamily"
                                name="saveFamily" value="Save">
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Family Modal  --}}

            {{-- Start Language Modal  --}}
            <div class="modal fade" id="languageModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " role="document">
                    <div class="modal-content">
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Language</h5>
                        </div>
                        <div class="modal-body px-4">

                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <!-- Start Form BAHASA -->
                                    <form method="post" class="my_detail">
                                        <div class="form-group">
                                            <label class="control-label" for="languageName">Language<code
                                                    id="languageNameErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <select class="form-control" id="languageName" name="languageName">
                                                <option value="" disabled="" selected="">Pilih
                                                </option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Inggris">Inggris</option>
                                                <option value="Mandarin">Mandarin</option>
                                                <option value="Lain">Lain</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="written">Writing<code
                                                    id="writtenErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <select class="form-control" id="written" name="written">
                                                <option value="" disabled="" selected="">Pilih
                                                </option>
                                                <option value="S">Sedang</option>
                                                <option value="CB">Cukup Baik</option>
                                                <option value="B">Baik</option>
                                                <option value="SB">Sangat Baik</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="oral">Oral<code id="oralErr"
                                                    class="errMsg"><span> : Required</span></code></label>
                                            <select class="form-control" id="oral" name="oral">
                                                <option value="" disabled="" selected="">Pilih
                                                </option>
                                                <option value="S">Sedang</option>
                                                <option value="CB">Cukup Baik</option>
                                                <option value="B">Baik</option>
                                                <option value="SB">Sangat Baik</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="languageInfo">Information</label>
                                            <input class="form-control" type="text" id="languageInfo"
                                                name="languageInfo" placeholder="Keterangan">
                                        </div>
                                    </form>
                                    <!-- End Form BAHASA -->
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-danger btn-pill"
                                data-dismiss="modal">Cancel</button>
                            <input type="button" class="btn btn-primary btn-pill" id="saveLanguage"
                                name="saveLanguage" value="Save">
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Language Modal  --}}

            {{-- Start Organization Modal  --}}
            <div class="modal fade" id="organizationModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " role="document">
                    <div class="modal-content">
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Organization</h5>
                        </div>
                        <div class="modal-body px-4">

                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <!-- Start Form ORGANISASI -->
                                    <form method="post" class="my_detail">
                                        <div class="form-group">
                                            <label class="control-label" for="organizationName">Organization Name
                                                <code id="organizationNameErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="text" id="organizationName"
                                                name="organizationName" placeholder="Nama Organisasi">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="organizationYear">Year<code
                                                    id="organizationYearErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <select class="form-control" id="organizationYear"
                                                name="organizationYear">
                                                <option value="" disabled="" selected="">Pilih
                                                </option>
                                                <script type="text/javascript">
                                                    var dt = new Date();
                                                    var startYear = dt.getFullYear();
                                                    var endYear = startYear - 80;
                                                    for (var i = startYear; i >= endYear; i--) {
                                                        document.write("<option value='" + i + "'>" + i + "</option>");
                                                    }
                                                </script>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="organizationPosition">Position<code
                                                    id="organizationPositionErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="text" id="organizationPosition"
                                                name="organizationPosition" placeholder="Posisi">
                                        </div>
                                    </form>
                                    <!-- End Form ORGANISASI -->
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-danger btn-pill"
                                data-dismiss="modal">Cancel</button>
                            <input type="button" class="btn btn-primary btn-pill" id="saveOrganization"
                                name="saveOrganization" value="Save">
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Organization Modal  --}}

            {{-- Start References Modal  --}}
            <div class="modal fade" id="referenceModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " role="document">
                    <div class="modal-content">
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Reference</h5>
                        </div>
                        <div class="modal-body px-4">

                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <!-- Start Form REFERENSI -->
                                    <form method="post" class="my_detail">
                                        <div class="form-group">
                                            <label class="control-label" for="referenceName">Name<code
                                                    id="referenceNameErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="text" id="referenceName"
                                                name="referenceName" placeholder="Nama Referensi">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="referenceRelation">Relationship<code
                                                    id="referenceRelationErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="text" id="referenceRelation"
                                                name="referenceRelation" placeholder="Hubungan">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="referenceAddress">Address</label>
                                            <input class="form-control" type="text" id="referenceAddress"
                                                name="referenceAddress" placeholder="Alamat Referensi">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="referenceContact">Contact No<code
                                                    id="referenceContactErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="text" id="referenceContact"
                                                name="referenceContact" placeholder="No Kontak">
                                        </div>
                                    </form>
                                    <!-- End Form REFERENSI -->
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-danger btn-pill"
                                data-dismiss="modal">Cancel</button>
                            <input type="button" class="btn btn-primary btn-pill" id="saveReference"
                                name="saveReference" value="Save">
                        </div>
                    </div>
                </div>
            </div>
            {{-- End References Modal  --}}

            {{-- Start Qualification Modal  --}}
            <div class="modal fade" id="qualificationModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " role="document">
                    <div class="modal-content">
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add Qualification</h5>
                        </div>
                        <div class="modal-body px-4">

                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <!-- Start Form REFERENSI -->
                                    <form method="post" class="my_detail">
                                        <div class="form-group">
                                            <label class="control-label" for="qualification">Qualification<code
                                                    id="qualificationErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <input class="form-control" type="text" id="qualification"
                                                name="qualification" placeholder="Kualifikasi">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="qualificationYear">Year Period<code
                                                    id="qualificationYearErr" class="errMsg"><span> :
                                                        Required</span></code></label>
                                            <select class="form-control" id="qualificationYear"
                                                name="qualificationYear">
                                                <option value="" disabled="" selected="">Pilih
                                                </option>
                                                <script type="text/javascript">
                                                    var dt = new Date();
                                                    var startYear = dt.getFullYear();
                                                    var endYear = startYear - 80;
                                                    for (var i = startYear; i >= endYear; i--) {
                                                        document.write("<option value='" + i + "'>" + i + "</option>");
                                                    }
                                                </script>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label"
                                                for="isQualificationCertified">Certificate</label><br>
                                            <input type="checkbox" checked="" id="isQualificationCertified"
                                                name="isQualificationCertified">
                                        </div>

                                    </form>
                                    <!-- End Form REFERENSI -->
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-danger btn-pill"
                                data-dismiss="modal">Cancel</button>
                            <input type="button" class="btn btn-primary btn-pill" id="saveQualification"
                                name="saveQualification" value="Save">
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Qualification Modal  --}}




        </div>


</x-app-layout>
