<?= $this->extend('layout'); ?>

<?= $this->section('main'); ?>
<div class="container p-5">
    <div class="alert alert-success">
        <strong>success!</strong> Order Anda telah berhasil di proses.
        silahkan konfirmasi pembayaran Anda ke whatsapp Admin
        <a href="https://wa.me/6282289075164" class="btn
        btn-success">Hubungi</a>
    </div>
</div>
<? $this->endSection()?>