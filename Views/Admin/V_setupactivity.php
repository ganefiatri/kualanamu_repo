<?= $this->extend('Admin/pages'); ?>
<?= $this->Section('main'); ?>
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item active">Setup Activity</li>
</ol>

<h1 class="page-header">
    Setup Activity <b>KNO Aviasi</b>
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
                            <div class="col-md-12 table-responsive pt-2">
                                <table id="viewData1" class="table table-bordered table-sm table-hover" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="10%;">NO</th>
                                            <th>TITLE</th>
                                            <th>DESCRIPTION</th>
                                            <th>DATE</th>
                                            <th>URUTAN</th>
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
                        <h4 class="panel-title">Tambah Data Setup Activity</h4>
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
                                    <label>Title</label>
                                    <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan title"> -->
                                    <textarea class="form-control" id="title" name="title" rows="3" placeholder="Masukkan title"></textarea>
                                </div>
                                <div class="col-md-3">
                                    <label>Type Activity</label>
                                    <select class="form-control" name="activity_type" id="activity_type">
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
                                <div class="col-md-4">
                                    <label>Video URL</label>
                                    <input type="text" class="form-control" id="video_url" name="video_url" placeholder="Masukkan Video URL">
                                </div>
                                <div class="col-md-1">
                                    <label>Urutan</label>
                                    <input type="number" class="form-control" id="urutan" name="urutan" min="1" value="1">
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
                                    <label>Upload Images Activity</label> <span class="text-danger">*</span>
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
    case "edit": ?>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse panel-hover-icon" data-sortable-id="ui-widget-7">
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">Ubah Data Setup Activity</h4>
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
                                    <label>Title</label>
                                    <textarea class="form-control" id="title" name="title" rows="3" placeholder="Masukkan title"><?= $result->title; ?></textarea>
                                </div>
                                <div class="col-md-3">
                                    <label>Type Activity</label>
                                    <select class="form-control" name="activity_type" id="activity_type">
                                        <option value="1" <?= $result->activity_type == '1' ? 'selected' : ''; ?>>NEWS</option>
                                        <option value="2" <?= $result->activity_type == '2' ? 'selected' : ''; ?>>EVENT</option>
                                        <option value="3" <?= $result->activity_type == '3' ? 'selected' : ''; ?>>GALLERY</option>
                                        <option value="4" <?= $result->activity_type == '4' ? 'selected' : ''; ?>>SLIDE</option>
                                        <option value="5" <?= $result->activity_type == '5' ? 'selected' : ''; ?>>MILESTONE</option>
                                        <option value="6" <?= $result->activity_type == '6' ? 'selected' : ''; ?>>CAREERS</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label>Date Activity</label>
                                    <input type="date" class="form-control" id="activity_date" name="activity_date" value="<?= $result->activity_date; ?>">
                                </div>
                                <div class="col-md-4">
                                    <label>Video URL</label>
                                    <input type="text" class="form-control" id="video_url" name="video_url" placeholder="Masukkan Video URL" value="<?= $result->video_url; ?>">
                                </div>
                                <div class="col-md-1">
                                    <label>Urutan</label>
                                    <input type="number" class="form-control" id="urutan" name="urutan" min="1" value="<?= $result->urutan; ?>">
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
                                    <label>Upload Images Activity</label> <span class="text-danger">*</span>
                                    <div class="input-group input-group-sm">
                                        <div class="custom-file btn-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" accept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile"><?= $result->image_url; ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <div class="text-center">
                                        <img id='img-upload' src="https://knoapi.serasijayanusantara.com/assets/assetsactivity?fileid=<?= $result->image_url; ?>" />
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