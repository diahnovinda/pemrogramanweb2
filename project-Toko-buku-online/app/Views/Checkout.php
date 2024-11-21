<?= $this->extend('layout'); ?>

<?= $this->section('main'); ?>

<div class="container">
    <h3>Review dan Submit Order</h3>
    <hr />
    <table>
        <tr>
            <td>Bumi Manusia</td>
            <td>@1</td>
            <td>56.000</td>  
        </tr>
    </table>
    <h3 class="mt-3">Total</h/3>
    <hr />
    <span>Rp56.000</span>
    <h3 class="mt-3">Alamat Pengirim</h3>
    <hr />
    <p> Jl simp. Sungai Duren, Mr. jambi</p>
    <h3 class="mt-3">Metode bayar</h3>
    <hr />
    <p>Transfer Bank</p>
    <p>No Rekening: Na jaemin, BCA, 13080019</p>
    <div class="mt-5">
        <form action="<? base_url('submit')?>" method="POST"></form>
        <button type="submit" class="btn btn-success">submit Order</button>
    </div>

</div>

<?= $this->endSection(); ?>
