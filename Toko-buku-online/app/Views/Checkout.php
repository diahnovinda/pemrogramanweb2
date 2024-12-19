<?= $this->extend('layout');?>

<?= $this->section('main')?>

<div class="container">
    <h3>Review dan Submit Order</h3>
    <hr> 
    <table>
        <tr>
            <td>i want to die but i want eat topokki</td>
            <td>@1</td>
            <td>Rp99.000</td>
        </tr>
    </table>
    <h3 class="mt-3">Total</h3>
    <hr> 
    <span>Rp95.000</span>
    <h3 class="mt-3">Alamat Pengiriman</h3>
    <hr> 
    <p>Jl Simp. Sungai Duren, Mr. Jambi</p>
    <h3 class="mt-3">Metode Pembayaran</h3>
    <hr> 
    <p>Transfer Bank</p>
    <p>No Rekening: Diah Novinda, BCA : 19110513</p>
    <div class="mt-5">
        <form action="<?= base_url('submit')?>" method="POST">
        <button type="submit" class="btn btn-success">Submit Order</button>
        </form>
    </div>
</div>

<?= $this->endSection()?>