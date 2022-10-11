<?= $this->extend('main/layout'); ?>

<?= $this->section('judul') ?>
<?= $judul ?>
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>
<?= $subjudul ?>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>

<div class="text-center">
    <img src="<?= base_url() ?>/upload/sutino.png" alt="sutino" class="rounded-circle">
    <h2>Sutino S.Kom</h2>
    <img src="<?= base_url() ?>/upload/garis.png" alt="garis" srcset="">
    <h4>HR & GA</h4>
    <img src="<?= base_url() ?>/upload/garis.png" alt="garis" srcset="">
</div>

<?= $this->endSection('isi') ?>