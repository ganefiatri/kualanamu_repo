<?= $this->extend('Admin/pages'); ?>
<?= $this->Section('main'); ?>
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item active">Setup Airports</li>
</ol>

<h1 class="page-header">
    Setup Airports <b>KNO Aviasi</b>
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
                                            <th>COUNTRY CODE</th>
                                            <th>REGION NAME</th>
                                            <th>IATA</th>
                                            <th>ICAO</th>
                                            <th>LATITUDE</th>
                                            <th>LONGITUDE</th>
                                            <th>AIRPORT</th>
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
                        <h4 class="panel-title">Tambah Data Setup Airports</h4>
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
                                <div class="col-md-2">
                                    <label>Country Code</label>
                                    <input type="text" class="form-control" id="country_code" name="country_code" autofocus placeholder="Masukkan Country Code">
                                </div>
                                <div class="col-md-4">
                                    <label>Region Name</label>
                                    <input type="text" class="form-control" id="region_name" name="region_name" placeholder="Masukkan Region Name">
                                </div>
                                <div class="col-md-1">
                                    <label>IATA</label>
                                    <input type="text" class="form-control" id="iata" name="iata" placeholder="Masukkan IATA">
                                </div>
                                <div class="col-md-1">
                                    <label>ICAO</label>
                                    <input type="text" class="form-control" id="icao" name="icao" placeholder="Masukkan ICAO">
                                </div>
                                <div class="col-md-2">
                                    <label>Latitude</label>
                                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Masukkan Latitude">
                                </div>
                                <div class="col-md-2">
                                    <label>Longitude</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Masukkan Longitude">
                                </div>
                                <div class="col-md-12">
                                    <label>Airport</label>
                                    <input type="text" class="form-control" id="airport" name="airport" placeholder="Masukkan Airport">
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
                        <h4 class="panel-title">Edit Data Setup Airports</h4>
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
                                <div class="col-md-2">
                                    <label>Country Code</label>
                                    <input type="text" class="form-control" id="country_code" name="country_code" value="<?= $result->country_code; ?>" placeholder="Masukkan Country Code">
                                </div>
                                <div class="col-md-4">
                                    <label>Region Name</label>
                                    <input type="text" class="form-control" id="region_name" name="region_name" value="<?= $result->region_name; ?>" placeholder="Masukkan Region Name">
                                </div>
                                <div class="col-md-1">
                                    <label>IATA</label>
                                    <input type="text" class="form-control" id="iata" name="iata" value="<?= $result->iata; ?>" placeholder="Masukkan IATA">
                                </div>
                                <div class="col-md-1">
                                    <label>ICAO</label>
                                    <input type="text" class="form-control" id="icao" name="icao" value="<?= $result->icao; ?>" placeholder="Masukkan ICAO">
                                </div>
                                <div class="col-md-2">
                                    <label>Latitude</label>
                                    <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $result->latitude; ?>" placeholder="Masukkan Latitude">
                                </div>
                                <div class="col-md-2">
                                    <label>Longitude</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $result->longitude; ?>" placeholder="Masukkan Longitude">
                                </div>
                                <div class="col-md-12">
                                    <label>Airport</label>
                                    <input type="text" class="form-control" id="airport" name="airport" value="<?= $result->airport; ?>" placeholder="Masukkan Airport">
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
}
?>


<script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
<?= $this->endSection(); ?>;