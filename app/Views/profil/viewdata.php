<?= $this->extend('main/layout'); ?>

<?= $this->section('judul') ?>
<?= $judul ?>
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>
<?= $subjudul ?>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>

<div class="card">
    <div class="card-body wizard-content mt-5">

        <div class="row">
            <div class="col-md-4 text-center mb-2   ">
                <img src="<?= base_url() ?>/upload/sutino.png" alt="" srcset="">
            </div>
            <div class="col-md-8">

                <div class="form-group row">
                    <label class="col-md-3" for="disabledTextInput">Nama Panggilan</label>
                    <div class="col-md-9">
                        <input type="text" id="disabledTextInput" class="form-control" value="Tino" disabled />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3" for="disabledTextInput">Nama Lengkap</label>
                    <div class="col-md-9">
                        <input type="text" id="disabledTextInput" class="form-control" value="Sutino S.Kom" disabled />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3" for="disabledTextInput">Tempat/Tanggal Lahir</label>
                    <div class="col-md-9">
                        <input type="text" id="disabledTextInput" class="form-control" value="Bumi Agung Wates / 12 Januari 1992" disabled />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3" for="disabledTextInput">Hobby</label>
                    <div class="col-md-9">
                        <input type="text" id="disabledTextInput" class="form-control" value="Futsal, Badminton, Traveling" disabled />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3" for="disabledTextInput">Kewarganegaraan</label>
                    <div class="col-md-9">
                        <input type="text" id="disabledTextInput" class="form-control" value="WNI" disabled />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3" for="disabledTextInput">SIM</label>
                    <div class="col-md-9">
                        <input type="text" id="disabledTextInput" class="form-control" value="C" disabled />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3" for="disabledTextInput">Alamat Domisili</label>
                    <div class="col-md-9">
                        <textarea class="form-control" readonly>Jl. Mawar No. 41C, RT/RW 004/008, Srengseng, Kembangan, Jakarta Barat</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3" for="disabledTextInput">Email</label>
                    <div class="col-md-9">
                        <input type="text" id="disabledTextInput" class="form-control" value="sutino.skom@gmail.com" disabled />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3" for="disabledTextInput">WhatsApp</label>
                    <div class="col-md-9">
                        <input type="text" id="disabledTextInput" class="form-control" value="+6285810100913" disabled />
                    </div>
                </div>

            </div>
        </div>

        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><strong><u>Skill</u></strong></h4>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>HTML</strong></span>
                            <div class="ms-auto">
                                <span>90%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 90%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>PHP</strong></span>
                            <div class="ms-auto">
                                <span>80%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>CSS</strong></span>
                            <div class="ms-auto">
                                <span>70%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>JS</strong></span>
                            <div class="ms-auto">
                                <span>70%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>MySQL</strong></span>
                            <div class="ms-auto">
                                <span>80%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>Code Igniter 4</strong></span>
                            <div class="ms-auto">
                                <span>80%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>Microsoft Excel</strong></span>
                            <div class="ms-auto">
                                <span>80%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>Microsoft Word</strong></span>
                            <div class="ms-auto">
                                <span>80%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>Microsoft Power Point</strong></span>
                            <div class="ms-auto">
                                <span>80%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="d-flex no-block align-items-center mt-3">
                            <span><strong>Instal Komputer</strong></span>
                            <div class="ms-auto">
                                <span>90%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="d-flex no-block align-items-center mt-3">
                            <span><strong>LAN</strong></span>
                            <div class="ms-auto">
                                <span>70%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>Photoshop</strong></span>
                            <div class="ms-auto">
                                <span>80%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>Shoftware</strong></span>
                            <div class="ms-auto">
                                <span>80%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex no-block align-items-center">
                            <span><strong>Hardware</strong></span>
                            <div class="ms-auto">
                                <span>60%</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>



<?= $this->endSection('isi') ?>