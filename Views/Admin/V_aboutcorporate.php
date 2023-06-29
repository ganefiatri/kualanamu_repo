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
                            <div class="col-md-12 table-responsive pt-2">
                                <table id="viewData1" class="table table-bordered table-sm table-hover" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="10%;">NO</th>
                                            <th>NAME</th>
                                            <th>DESCRIPTION</th>
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
                        <h4 class="panel-title">Tambah Data Setup About Corporate</h4>
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
                                <div class="col-md-12">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Name">
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
    case "edit": ?>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                    <span class="d-sm-none">Ubah Data Setup About Corporate</span>
                    <span class="d-sm-block d-none">Ubah Data Setup About Corporate</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#default-tab-2" data-toggle="tab" class="nav-link">
                    <span class="d-sm-none">Tambah Data Setup About Corporate Detail</span>
                    <span class="d-sm-block d-none">Tambah Data Setup About Corporate Detail</span>
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
                        <div class="col-md-12">
                            <label>Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Name" value="<?= $result->name; ?>">
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="panel panel-success m-b-0">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Description</h4>
                                </div>
                                <div class="panel-body p-0">
                                    <textarea class="summernote" id="description" name="content"><?= $result->value; ?></textarea>
                                </div>
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
                        <div class="col-md-2">
                            <label>About Corporate ID</label>
                            <input type="text" class="form-control" id="mst_about_corporate_id" name="mst_about_corporate_id" value="<?= $result->id; ?>" readonly>
                        </div>
                        <div class="col-md-10">
                            <label>Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="panel panel-success m-b-0">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Description</h4>
                                </div>
                                <div class="panel-body p-0">
                                    <textarea class="summernote" id="description_dt" name="content"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-2">
                            <button type="button" class="btn btn-indigo" id="SimpanDataDetail" name="SimpanDataDetail">Simpan Data <i class="fa fa-check-circle"></i></button>
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