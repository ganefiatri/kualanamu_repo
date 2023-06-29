<?= $this->extend('Admin/pages'); ?>
<?= $this->Section('main'); ?>
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item active">Setup Airlines</li>
</ol>

<h1 class="page-header">
    Setup Airlines <b>KNO Aviasi</b>
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
                                            <th>IATA</th>
                                            <th>ICAO</th>
                                            <th>AIRLINE NAME</th>
                                            <th>CALL SIGN</th>
                                            <th>COUNTRY</th>
                                            <th>COMPANY URL</th>
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
                        <h4 class="panel-title">Tambah Data Setup Airlines</h4>
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
                                    <label>Airlines Name</label>
                                    <input type="text" class="form-control" id="airline_name" name="airline_name" placeholder="Masukkan Airlines Name">
                                </div>
                                <div class="col-md-2">
                                    <label>Country</label>
                                    <input type="text" class="form-control" id="country" name="country" autofocus placeholder="Masukkan Country">
                                </div>
                                <div class="col-md-4">
                                    <label>Call Sign</label>
                                    <input type="text" class="form-control" id="callsign" name="callsign" placeholder="Masukkan Call Sign">
                                </div>
                                <div class="col-md-1">
                                    <label>IATA</label>
                                    <input type="text" class="form-control" id="iata" name="iata" placeholder="Masukkan IATA">
                                </div>
                                <div class="col-md-1">
                                    <label>ICAO</label>
                                    <input type="text" class="form-control" id="icao" name="icao" placeholder="Masukkan ICAO">
                                </div>
                                <div class="col-md-4">
                                    <label>Company URL</label>
                                    <input type="text" class="form-control" id="company_url" name="company_url" placeholder="Masukkan Company URL">
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
            </div>
        </div>
    <?php
        break;
    case 'edit': ?>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse panel-hover-icon" data-sortable-id="ui-widget-7">
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">Edit Data Setup Airlines</h4>
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
                                    <input type="text" id="id" name="id" value="<?= $result->id; ?>">
                                </div>
                                <div class="col-md-12">
                                    <label>Airlines Name</label>
                                    <input type="text" class="form-control" id="airline_name" name="airline_name" autofocus placeholder="Masukkan Airlines Name" value="<?= $result->airline_name; ?>">
                                </div>
                                <div class="col-md-2">
                                    <label>Country</label>
                                    <input type="text" class="form-control" id="country" name="country" placeholder="Masukkan Country" value="<?= $result->country; ?>">
                                </div>
                                <div class="col-md-4">
                                    <label>Call Sign</label>
                                    <input type="text" class="form-control" id="callsign" name="callsign" placeholder="Masukkan Call Sign" value="<?= $result->callsign; ?>">
                                </div>
                                <div class="col-md-1">
                                    <label>IATA</label>
                                    <input type="text" class="form-control" id="iata" name="iata" placeholder="Masukkan IATA" value="<?= $result->iata; ?>">
                                </div>
                                <div class="col-md-1">
                                    <label>ICAO</label>
                                    <input type="text" class="form-control" id="icao" name="icao" placeholder="Masukkan ICAO" value="<?= $result->icao; ?>">
                                </div>
                                <div class="col-md-4">
                                    <label>Company URL</label>
                                    <input type="text" class="form-control" id="company_url" name="company_url" placeholder="Masukkan Company URL" value="<?= $result->company_url; ?>">
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
                                        <img id='img-upload' src="https://knoapi.serasijayanusantara.com/assets/assetsairlines?fileid=<?= $result->image_url; ?>" />
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
} ?>


<script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
<?= $this->endSection(); ?>;