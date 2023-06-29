<?= $this->extend('Admin/pages'); ?>
<?= $this->Section('main'); ?>
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item active">Setup Airport Guides</li>
</ol>

<h1 class="page-header">
    Setup Airport Guides <b>KNO Aviasi</b>
</h1>
<?php switch ($act) {
    default: ?>
        <div class="row">
            <div class="col-xl-12 col-lg-6">
                <div class="panel panel-inverse" data-sortable-id="index-2">
                    <div class="panel-heading">
                        <button type="button" onclick="addData(module, '/add');" class="btn btn-xs btn-green"> Tambah Data <i class="fa fa-plus-circle"></i></button>
                        <h4 class="panel-title"></h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"></a>
                        </div>
                    </div>
                    <div class="panel-body bg-light">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Type Activity</label>
                                <select class="form-control" name="activity_type" id="activity_type" onchange="getDatatable();">
                                    <option value="1">NEWS</option>
                                    <option value="2">EVENT</option>
                                    <option value="3">GALLERY</option>
                                    <option value="4">SLIDE</option>
                                    <option value="5">MILESTONE</option>
                                    <option value="6">CAREERS</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Date Activity</label>
                                <input type="date" class="form-control" id="activity_date" name="activity_date" value="<?= date("Y-m-d"); ?>">
                            </div>
                            <div class="col-md-3">
                                <label>Type</label>
                                <select class="form-control" name="type" id="type" onchange="getDatatable();">
                                    <option value="1">AIRPORT GUIDE</option>
                                    <option value="2">PASSENGER DEPARTURE GUIDE</option>
                                    <option value="3">PASSENGER ARRIVAL GUIDE</option>
                                    <option value="4">TO AIRPORT GUIDE</option>
                                    <option value="5">FROM AIRPORT GUIDE</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Terminal ID</label>
                                <select class="form-control" name="mst_terminal_id" id="mst_terminal_id">
                                    <option value="">All</option>
                                </select>
                            </div>
                            <div class="col-md-12 table-responsive pt-2">
                                <table id="viewData1" class="table table-bordered table-sm table-hover" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="10%;">NO</th>
                                            <th>NAME</th>
                                            <th>NAMA SINGKAT</th>
                                            <th>DESCRIPTION</th>
                                            <th>ICON</th>
                                            <th>TYPE</th>
                                            <th>IMAGE URL</th>
                                            <th width="5%;">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        break;
    case 'add': ?>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse panel-hover-icon" data-sortable-id="ui-widget-7">
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">Tambah Data Setup Airport Guides</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="#" name="formData" id="formData">
                            <div class="row">
                                <div class="d-none">
                                    <input type="text" id="id" name="id" value="0">
                                </div>
                                <div class="col-md-9">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Name">
                                </div>
                                <div class="col-md-3">
                                    <label>Nama Singkat</label>
                                    <input type="text" class="form-control" id="nama_singkat" name="nama_singkat" autofocus placeholder="Masukkan Nama Singkat">
                                </div>
                                <div class="col-md-2">
                                    <label>Icon</label>
                                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Masukkan Icon">
                                </div>
                                <div class="col-md-3">
                                    <label>Type</label>
                                    <select class="form-control" name="type" id="type">
                                        <option value="1">AIRPORT GUIDE</option>
                                        <option value="2">PASSENGER DEPARTURE GUIDE</option>
                                        <option value="3">PASSENGER ARRIVAL GUIDE</option>
                                        <option value="4">TO AIRPORT GUIDE</option>
                                        <option value="5">FROM AIRPORT GUIDE</option>
                                    </select>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <div class="panel panel-success m-b-0">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Description</h4>
                                        </div>
                                        <div class="panel-body p-0">
                                            <textarea class="summernote" id="description" name="content"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label>Upload Images Airport Guides</label> <span class="text-danger">*</span>
                                    <div class="input-group input-group-sm">
                                        <div class="custom-file btn-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" accept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <div class="text-center">
                                        <img id='img-upload' />
                                    </div>
                                </div>

                                <div class="col-md-12 pt-2">
                                    <button type="button" class="btn btn-success" id="SimpanData" name="SimpanData">Simpan Data <i class="fa fa-check-circle"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php
        break;
    case 'edit': ?>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                    <span class="d-sm-none">Ubah Data Setup Airport Guides</span>
                    <span class="d-sm-block d-none">Ubah Data Setup Airport Guides</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#default-tab-2" data-toggle="tab" class="nav-link">
                    <span class="d-sm-none">Tambah Data Setup Airport Guides Detail</span>
                    <span class="d-sm-block d-none">Tambah Data Setup Airport Guides Detail</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="default-tab-1">
                <form method="#" name="formData" id="formData">
                    <div class="row">
                        <div class="d-none">
                            <input type="text" id="id" name="id" value="<?= $result->id; ?>">
                        </div>
                        <div class="col-md-9">
                            <label>Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Name" value="<?= $result->name; ?>">
                        </div>
                        <div class="col-md-3">
                            <label>Nama Singkat</label>
                            <input type="text" class="form-control" id="nama_singkat" name="nama_singkat" value="<?= $result->nama_singkat; ?>" placeholder="Masukkan Nama Singkat">
                        </div>
                        <div class="col-md-2">
                            <label>Icon</label>
                            <input type="text" class="form-control" id="icon" name="icon" placeholder="Masukkan Icon" value="<?= $result->icon; ?>">
                        </div>
                        <div class="col-md-3">
                            <label>Type</label>
                            <select class="form-control" name="type" id="type">
                                <option value="1" <?= $result->type == '1' ? 'selected' : ''; ?>>AIRPORT GUIDE</option>
                                <option value="2" <?= $result->type == '2' ? 'selected' : ''; ?>>PASSENGER DEPARTURE GUIDE</option>
                                <option value="3" <?= $result->type == '3' ? 'selected' : ''; ?>>PASSENGER ARRIVAL GUIDE</option>
                                <option value="4" <?= $result->type == '4' ? 'selected' : ''; ?>>TO AIRPORT GUIDE</option>
                                <option value="5" <?= $result->type == '5' ? 'selected' : ''; ?>>FROM AIRPORT GUIDE</option>
                            </select>
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="panel panel-success m-b-0">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Description</h4>
                                </div>
                                <div class="panel-body p-0">
                                    <textarea class="summernote" id="description" name="content"><?= $result->description; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label>Upload Images Airport Guides</label> <span class="text-danger">*</span>
                            <div class="input-group input-group-sm">
                                <div class="custom-file btn-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" accept="image/*">
                                    <label class="custom-file-label" for="exampleInputFile"><?= $result->image_url; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="text-center">
                                <img id='img-upload' src="https://knoapi.serasijayanusantara.com/assets/assetsairportguide?fileid=<?= $result->image_url; ?>" />
                            </div>
                        </div>


                        <div class="col-md-12 pt-2">
                            <button type="button" class="btn btn-success" id="SimpanData" name="SimpanData">Simpan Data <i class="fa fa-check-circle"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="default-tab-2">
                <form method="#" name="formDataDetail" id="formDataDetail">
                    <div class="row">
                        <div class="d-none">
                            <input type="text" id="iddetail" name="iddetail" value="0">
                        </div>
                        <div class="col-md-3">
                            <label>Terminal ID</label>
                            <select class="form-control" name="mst_terminal_id" id="mst_terminal_id" onchange="getpagingairportguidedetail();">
                                <option value="">All</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Airport Guide ID</label>
                            <input type="text" class="form-control" id="mst_airport_guide_id" name="mst_airport_guide_id" value="<?= $result->id; ?>" readonly>
                        </div>
                        <div class="col-md-2">
                            <label>Location Count</label>
                            <input type="number" class="form-control" id="location_count" name="location_count" min="1" value="1">
                        </div>
                        <div class="col-md-5">
                            <label>Location Name</label>
                            <input type="text" class="form-control" id="location_name" name="location_name" placeholder="Location Name">
                        </div>
                        <div class="col-md-12 pt-2">
                            <button type="button" class="btn btn-indigo" id="SimpanDataDetail" name="SimpanDataDetail">Simpan Data <i class="fa fa-check-circle"></i></button>
                        </div>

                        <div class="col-xl-12 col-lg-6 pt-5">
                            <div class="panel panel-inverse" data-sortable-id="index-2">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Data Detail Airport Guides</h4>
                                    <div class="panel-heading-btn">
                                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"></a>
                                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"></a>
                                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"></a>
                                    </div>
                                </div>
                                <div class="panel-body bg-light">
                                    <div class="row">
                                        <div class="col-md-12 table-responsive pt-2">
                                            <table class="table table-bordered table-sm table-hover" width="100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th width="10%;">NO</th>
                                                        <th>LOCATION COUNT</th>
                                                        <th>LOCATION NAME</th>
                                                        <th>TERMINAL ID</th>
                                                        <th width="5%;">AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="ShowDetail"></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

<?php
        break;
} ?>


<script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
<?= $this->endSection(); ?>;