<!-- Modal -->
<div class="modal fade" id="modalPendidikanDetail" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <?php
                if ($penstatus == "Lulus") {
                    $statusakhir = $penakhir;
                } else if ($penstatus == "Belum Lulus") {
                    $statusakhir = "Saat ini";
                }
                ?>
                <h5 class="modal-title" id="staticBackdropLabel"><?= $pennama ?></h5>

                <button type="button" class="close bg-danger" id="closeModal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p align="justify"> Hi... <br>
                    Saya memulai pendidikan di <strong><?= $pennama ?></strong> yang beralamat di <strong><?= $penalamat ?></strong> ini dari tahun <strong><?= $penmulai ?></strong> hingga <strong><?= $statusakhir ?></strong>. <br>
                    Jurusan : <?= $penjurusan ?> <br>
                    Nilai : <?= $pennilai ?>
                </p>

            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<script>
    $('#closeModal').click(function(e) {
        e.preventDefault();
        $('#modalPendidikanDetail').modal('hide');
    });
</script>