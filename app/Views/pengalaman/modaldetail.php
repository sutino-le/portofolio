<!-- Modal -->
<div class="modal fade" id="modalPengalamanDetail" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <?php
                if ($status == "Keluar") {
                    $statusakhir = date('F-Y', strtotime($end));
                } else if ($status == "Aktif") {
                    $statusakhir = "Sekarang";
                }
                ?>
                <h5 class="modal-title" id="staticBackdropLabel"><?= $jobtitle . '<br>' . $perusahaan ?><br>
                    <?= date('F-Y', strtotime($start)) ?> - <?= $statusakhir ?>
                </h5>

                <button type="button" class="close" id="closeModal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= $deskripsi ?>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<script>
    $('#closeModal').click(function(e) {
        e.preventDefault();
        $('#modalPengalamanDetail').modal('hide');
    });
</script>