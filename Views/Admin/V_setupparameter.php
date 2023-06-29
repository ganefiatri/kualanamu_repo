<?= $this->extend('Admin/pages'); ?>
<?= $this->Section('main'); ?>
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item active">Setup Parameter</li>
</ol>

<h1 class="page-header">
    Setup Parameter <b>KNO Aviasi</b>
</h1>

<div class="row">
    <div class="col-xl-12">
        <?php
        switch ($act) {
            default: ?>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                            <span class="d-sm-none">Company Profile</span>
                            <span class="d-sm-block d-none">Company Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#default-tab-2" data-toggle="tab" class="nav-link">
                            <span class="d-sm-none">FAQ</span>
                            <span class="d-sm-block d-none">FAQ</span>
                        </a>
                    </li>
                </ul>


                <div class="tab-content">

                    <div class="tab-pane fade active show" id="default-tab-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-inverse panel-hover-icon" data-sortable-id="ui-widget-7">
                                    <div class="panel-heading ui-sortable-handle">
                                        <h4 class="panel-title">Company Profile</h4>
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Nama Perusahaan</label>
                                                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" autofocus placeholder="Masukkan Nama Perusahaan">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Instagram</label>
                                                <input type="text" class="form-control" id="nama_ig" name="nama_ig" placeholder="Masukkan Nama Instagram">
                                            </div>
                                            <div class="col-md-4">
                                                <label>&nbsp;</label>
                                                <input type="text" class="form-control" id="url_ig" name="url_ig" placeholder="Masukkan url Instagram">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Email Perusahaan</label>
                                                <input type="text" class="form-control" id="email_perusahaan" name="email_perusahaan" placeholder="Masukkan Email Perusahaan">
                                            </div>
                                            <div class="col-md-3">
                                                <label>No. HP Perusahaan</label>
                                                <input type="text" class="form-control" id="no_hp_perusahaan" name="no_hp_perusahaan" placeholder="Masukkan No. HP Perusahaan">
                                            </div>
                                            <div class="col-md-12">
                                                <label>Tentang Perusahaan</label>
                                                <textarea class="form-control" name="tentang_perusahaan" id="tentang_perusahaan" rows="4" placeholder="Masukkan Tentang Perusahaan"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Alamat Perusahaan</label>
                                                <textarea class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" rows="4" placeholder="Masukkan Alamat Perusahaan"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Kabupaten/Kota</label>
                                                <input type="text" class="form-control" id="kab_kota" name="kab_kota" placeholder="Masukkan Kabupaten/Kota Perusahaan">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Youtube</label>
                                                <input type="text" class="form-control" id="nama_youtube" name="nama_youtube" placeholder="Masukkan Nama Youtube">
                                            </div>
                                            <div class="col-md-4">
                                                <label>&nbsp;</label>
                                                <input type="text" class="form-control" id="url_youtube" name="url_youtube" placeholder="Masukkan url Youtube">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Twitter</label>
                                                <input type="text" class="form-control" id="nama_twitter" name="nama_twitter" placeholder="Masukkan Nama Twitter">
                                            </div>
                                            <div class="col-md-4">
                                                <label>&nbsp;</label>
                                                <input type="text" class="form-control" id="url_twitter" name="url_twitter" placeholder="Masukkan url Twitter">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" id="nama_fb" name="nama_fb" placeholder="Masukkan Nama Facebook">
                                            </div>
                                            <div class="col-md-4">
                                                <label>&nbsp;</label>
                                                <input type="text" class="form-control" id="url_fb" name="url_fb" placeholder="Masukkan url Facebook">
                                            </div>
                                            <div class="col-md-2">
                                                <label>Linkedin</label>
                                                <input type="text" class="form-control" id="nama_linkedin" name="nama_linkedin" placeholder="Masukkan Nama Linkedin">
                                            </div>
                                            <div class="col-md-4">
                                                <label>&nbsp;</label>
                                                <input type="text" class="form-control" id="url_linkedin" name="url_linkedin" placeholder="Masukkan url Linkedin">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-right m-b-0">
                            <a href="javascript:;" class="btn btn-white m-r-5">Default</a>
                            <a href="#" class="btn btn-primary" id="SimpanData">Simpan</a>
                        </p>
                    </div>


                    <div class="tab-pane fade" id="default-tab-2">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6">
                                <div class="panel panel-inverse" data-sortable-id="index-2">
                                    <div class="panel-heading">
                                        <button type="button" onclick="addData(module, '/addFAQ');" class="btn btn-xs btn-green"> Tambah Data <i class="fa fa-plus-circle"></i></button>
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
                                                <table id="viewDataFAQ" class="table table-bordered table-sm table-hover" width="100%">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th width="10%;">NO</th>
                                                            <th>QUESTION</th>
                                                            <th>ANSWER</th>
                                                            <th>URUTAN</th>
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
                    </div>

                </div>
            <?php
                break;
            case "addFAQ": ?>
                <div class="panel panel-inverse panel-hover-icon" data-sortable-id="ui-widget-7">
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">Tambah Data FAQ</h4>
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
                                <div class="col-md-11">
                                    <label>Question</label>
                                    <input type="text" class="form-control" id="question" name="question" autofocus placeholder="Masukkan Question">
                                </div>
                                <div class="col-md-1">
                                    <label>Urutan</label>
                                    <input type="number" class="form-control" id="orderfaq" name="orderfaq" min="1" value="1">
                                </div>
                                <div class="col-md-12">
                                    <label>Answer</label>
                                    <textarea class="form-control" name="answer" id="answer" rows="4" placeholder="Masukkan Answer"></textarea>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <button type="button" class="btn btn-success" id="SimpanDataFAQ" name="SimpanDataFAQ">Simpan Data <i class="fa fa-check-circle"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            <?php
                break;
            case "editFAQ": ?>
                <div class="panel panel-inverse panel-hover-icon" data-sortable-id="ui-widget-7">
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">Edit Data FAQ</h4>
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
                                <div class="col-md-11">
                                    <label>Question</label>
                                    <input type="text" class="form-control" id="question" name="question" autofocus value="<?= $result->question; ?>" placeholder="Masukkan Question">
                                </div>
                                <div class="col-md-1">
                                    <label>Urutan</label>
                                    <input type="number" class="form-control" id="orderfaq" name="orderfaq" value="<?= $result->orderfaq; ?>" min="1">
                                </div>
                                <div class="col-md-12">
                                    <label>Answer</label>
                                    <textarea class="form-control summernote" name="answer" id="answer" rows="4" placeholder="Masukkan Answer"><?= $result->answer; ?></textarea>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <button type="button" class="btn btn-success" id="SimpanDataFAQ" name="SimpanDataFAQ">Simpan Data <i class="fa fa-check-circle"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

        <?php
                break;
        }
        ?>

    </div>
</div>

<script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
<?= $this->endSection(); ?>;