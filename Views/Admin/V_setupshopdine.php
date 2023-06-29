<?= $this->extend('Admin/pages'); ?>
<?= $this->Section('main'); ?>
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item active">Setup Shop & Dine</li>
</ol>

<h1 class="page-header">
    Setup Shop & Dine <b>KNO Aviasi</b>
</h1>
<?php
switch ($act) {
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
                            <div class="col-md-12 table-responsive pt-2">
                                <table id="viewData1" class="table table-bordered table-sm table-hover" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="10%;">NO</th>
                                            <th>NAME</th>
                                            <th>DESCRIPTION</th>
                                            <th>CATEGORY ID</th>
                                            <th>CATEGORY NAME</th>
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
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                    <span class="d-sm-none">Tambah Data Setup Airlines</span>
                    <span class="d-sm-block d-none">Tambah Data Setup Airlines</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="default-tab-1">
                <form method="#" name="formData" id="formData">
                    <div class="row">
                        <div class="d-none">
                            <input type="text" id="id" name="id" value="0">
                            <input type="text" id="mst_shopdine_category_id_hide" name="mst_shopdine_category_id_hide" value="">
                        </div>
                        <div class="col-md-8">
                            <label>Shop & Dine Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Shop & Dine">
                        </div>
                        <div class="col-md-4">
                            <label>Category Shop & Dine</label>
                            <select class="form-control" id="mst_shopdine_category_id" name="mst_shopdine_category_id"></select>
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
                            <label>Upload Images Airlines</label> <span class="text-danger">*</span>
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

    <?php
        break;

    case 'edit': ?>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                    <span class="d-sm-none">Ubah Data Setup Airlines</span>
                    <span class="d-sm-block d-none">Ubah Data Setup Airlines</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#default-tab-2" data-toggle="tab" class="nav-link">
                    <span class="d-sm-none">Tambah Data Setup Airlines Detail</span>
                    <span class="d-sm-block d-none">Tambah Data Setup Airlines Detail</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="default-tab-1">
                <form method="#" name="formData" id="formData">
                    <div class="row">
                        <div class="d-none">
                            <input type="text" id="id" name="id" value="<?= $result->id; ?>">
                            <input type="text" id="mst_shopdine_category_id_hide" name="mst_shopdine_category_id_hide" value="<?= $result->mst_shopdine_category_id; ?>">
                        </div>
                        <div class="col-md-8">
                            <label>Shop & Dine Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $result->name; ?>" placeholder="Masukkan Shop & Dine">
                        </div>
                        <div class="col-md-4">
                            <label>Category Shop & Dine</label>
                            <select class="form-control" id="mst_shopdine_category_id" name="mst_shopdine_category_id"></select>
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
                            <label>Upload Images Airlines</label> <span class="text-danger">*</span>
                            <div class="input-group input-group-sm">
                                <div class="custom-file btn-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" accept="image/*">
                                    <label class="custom-file-label" for="exampleInputFile"><?= $result->image_url; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="text-center">
                                <img id='img-upload' src="https://knoapi.serasijayanusantara.com/assets/assetsshopdine?fileid=<?= $result->image_url; ?>" />
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
                            <select class="form-control" name="mst_terminal_id" id="mst_terminal_id" onchange="getpagingshopdinedetail();">
                                <option value="">All</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Shopdine ID</label>
                            <input type="text" class="form-control" id="mst_shopdine_id" name="mst_shopdine_id" value="<?= $result->id; ?>" readonly>
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
                                    <h4 class="panel-title">Data Detail Shop Dine</h4>
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
}
?>


<script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
<?= $this->endSection(); ?>;