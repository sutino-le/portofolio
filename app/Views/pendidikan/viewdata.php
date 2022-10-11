<?= $this->extend('main/layout'); ?>

<?= $this->section('judul') ?>
<?= $judul ?>
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>
<?= $subjudul ?>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>

<style>
    h6:hover {
        cursor: pointer;
        color: black;
    }
</style>

<div class="row mt-2">

    <?php
    foreach ($tampildata as $rowdetail) :
    ?>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <?php
                    if ($rowdetail['penstatus'] == "Lulus") {
                        $statusakhir = $rowdetail['penakhir'];
                    } else if ($rowdetail['penstatus'] == "Belum Lulus") {
                        $statusakhir = "Sekarang";
                    }
                    ?>
                    <h6 class="text-white"><?= $rowdetail['penjenjang'] ?></h6>
                    <h6 class="text-white"><?= $rowdetail['pennama'] ?></h6>
                    <h1 class="font-light text-white">
                        <img src="<?= base_url() ?>/upload/<?= $rowdetail['penlogo'] ?>" alt="Harihari" width="100px" height="100px">
                    </h1>
                    <h7 class="text-white"><?= $rowdetail['penmulai'] ?> - <?= $statusakhir ?></h7>
                    <h6 class="text-white" onclick="lihatdetail('<?= $rowdetail['penid'] ?>')">Lihat Detail</h6>
                </div>
            </div>
        </div>
    <?php
    endforeach
    ?>

</div>

<div class="viewmodal" style="display: none;"></div>

<script>
    // tombol edit foto
    function lihatdetail(id) {
        $.ajax({
            type: "post",
            url: "<?= base_url() ?>/pendidikan/pendidikandetail/" + id,
            dataType: "json",
            success: function(response) {
                if (response.data) {
                    $('.viewmodal').html(response.data).show();
                    $('#modalPendidikanDetail').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + '\n' + thrownError);
            }
        });
    }
</script>

<?= $this->endSection('isi') ?>