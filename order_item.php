<?php 
include "proses/connect.php";

$query = mysqli_query($conn, "SELECT *, SUM(harga*jumlah) AS harganya FROM tb_list_order
LEFT JOIN tb_order ON tb_order.id_order = tb_list_order.kode_order
LEFT JOIN tb_daftar_menu ON tb_daftar_menu.id = tb_list_order.menu
GROUP BY id_list_order
HAVING tb_list_order.kode_order = $_GET[order]");

$kode = $_GET['order'];
$meja = $_GET['meja'];
$pelanggan = $_GET['pelanggan'];

while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
    // $kode = $record['id_order'];
    // $meja = $record['meja'];
    // $pelanggan = $record['pelanggan'];
}

$select_menu = mysqli_query($conn, "SELECT id,nama_menu FROM tb_daftar_menu");
?>
<div class="col-lg-9  mt-2">
    <div class="card">
    <div class="card-header">
    Halaman Order Item
    </div>
    <div class="card-body">
        <a href="order" class="btn btn-info mb-3"><i class="bi bi-arrow-left"></i></a>
    <div class="row">
                    <div class="col-lg-3">
        <div class="form-floating mb-3">
    <input disabled type="text" class="form-control" id="kodeorder" value="<?php echo $kode; ?>">
    <label for="uploadFoto">Kode Order</label>
</div>
</div>
<div class="col-lg-2">
<div class="form-floating mb-3">
    <input disabled type="text" class="form-control" id="meja" value="<?php echo $meja; ?>"> 
    <label for="uploadFoto">Meja</label>
</div>
</div>
<div class="col-lg-3">
<div class="form-floating mb-3">
    <input disabled type="text" class="form-control" id="pelanggan" value="<?php echo $pelanggan; ?>"> 
    <label for="uploadFoto">Pelanggan</label>
</div>
</div>
</div>
            <!-- Modal Tambah Item Baru-->
<div class="modal fade" id="tambahItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu Makanan dan Minuman</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="needs-validation" novalidate action="proses/proses_edit_orderitem.php" method="POST">
                <input type="hidden" name="id" value=" <?php echo $row['id_list_order']?>">
                <input type="hidden" name="kode_order" value=" <?php echo $kode?>">
                <input type="hidden" name="meja" value=" <?php echo $meja?>">
                <input type="hidden" name="pelanggan" value=" <?php echo $pelanggan?>">
                <div class="row">
                    <div class="col-lg-8">
        <div class="form-floating mb-3">
            <select class="form-select" name="menu" id="">
                <option selected hidden value="">Pilih Menu</option>
                <?php 
                foreach($select_menu as $value){
                    echo "<option value=$value[id]>$value[nama_menu]</option>";
                }
                ?>
            </select>
    <label for="menu">Menu Makanan/Minuman</label>
    <div class="invalid-feedback">
        Pilih Menu.
        </div>
</div>
</div>
<div class="col-lg-4">
<div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="Jumlah Porsi" name="jumlah" required>
    <label for="floatingInput">Jumlah Porsi</label>
    <div class="invalid-feedback">
        Masukan Jumlah Porsi.
        </div>
</div>
</div>
</div>
<div class="row">
                <div class="col-lg-12">
        <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Catatan" name="catatan">
    <label for="floatingPassword">Catatan</label>
</div>
</div>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="edit_orderitem_validate" value="12345">Save changes</button>
        </div>
</form>
        </div>
    </div>
</div>
</div>
<!-- Akhir Modal Tambah Item Baru-->
<?php
    if(empty($result)){
        echo "Data Menu makanan atau minuman tidak ada";
    }else{ 
foreach ($result as $row) {
    ?>
    <!-- Modal Edit-->
    <div class="modal fade" id="ModalEdit<?php echo $row['id_list_order']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu Makanan dan Minuman</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_edit_orderitem.php" method="POST">
                <input type="hidden" name="kode_order" value=" <?php echo $kode?>">
                <input type="hidden" name="meja" value=" <?php echo $meja?>">
                <input type="hidden" name="pelanggan" value=" <?php echo $pelanggan?>">
                <div class="row">
                    <div class="col-lg-8">
        <div class="form-floating mb-3">
            <select class="form-select" name="menu" id="">
                <option selected hidden value="">Pilih Menu</option>
                <?php 
                foreach($select_menu as $value){
                    if($row['menu'] == $value['id']){
                        echo "<option selected value=$value[id]>$value[nama_menu]</option>";
                    }else{
                        echo "<option value=$value[id]>$value[nama_menu]</option>";
                    }
                }
                ?>
            </select>
    <label for="menu">Menu Makanan/Minuman</label>
    <div class="invalid-feedback">
        Pilih Menu.
        </div>
</div>
</div>
<div class="col-lg-4">
<div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="Jumlah Porsi" name="jumlah" required value="<?php echo $row['jumlah'] ?>">
    <label for="floatingInput">Jumlah Porsi</label>
    <div class="invalid-feedback">
        Masukan Jumlah Porsi.
        </div>
</div>
</div>
</div>
<div class="row">
                <div class="col-lg-12">
        <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Catatan" name="catatan" value="<?php echo $row['catatan'] ?>">
    <label for="floatingPassword">Catatan</label>
</div>
</div>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="edit_orderitem_validate" value="12345">Save changes</button>
        </div>
</form>
        </div>
    </div>
</div>
</div>
    <!-- Akhir Modal Edit-->

        <!-- Modal Delete-->
        <div class="modal fade" id="ModalDelete<?php echo $row['id_list_order']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Hapus Data User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_delete_menu.php" method="POST">
            <input type="hidden" value="<?php echo $row['id']?>" name="id">
            <input type="hidden" value="<?php echo $row['foto']?>" name="foto">
                <div class="col-lg-12">
                    Apakah anda ingin menghapus menu <b><?php echo $row['nama_menu'] ?></b>
                </div> 
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="input_user_validate" value="12345">Hapus Ngabb</button>
        </div>
</form>
        </div>
    </div>
</div>
</div>
    <!-- Akhir Modal Delete-->
    
    <?php
}   

    ?>
        <div class="table-responsive">
    <table class="table table-hover">
    <thead>
    <tr class="text-nowrap">
        <th scope="col">Menu</th>
        <th scope="col">Harga</th>
        <th scope="col">Qty</th>
        <th scope="col">Status</th>
        <th scope="col">Catatan</th>
        <th scope="col">Total</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php
    $total =0;
    foreach ($result as $row) {
    ?>
    <tr>
        <td><?php echo $row['nama_menu'] ?></td>
        <td><?php echo number_format($row['harga'], 0, ',', '.') ?> </td>
        <td><?php echo $row['jumlah'] ?></td>
        <td><?php echo $row['status'] ?></td>
        <td><?php echo $row['catatan'] ?></td>
        <td><?php echo number_format($row['harganya'], 0, ',', '.') ?> </td>
        <td>
            <div class="d-flex">
            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id_list_order']?>"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id_list_order']?>"><i class="bi bi-trash"></i></button>
            </div>
        </td>
    </tr>
    <?php
    $total +=$row['harganya'];

    }
    ?>
    <tr>
        <td colspan="5" class="fw-bold">
            Total Harga
        </td>
        <td class="fw-bold">
            <?php echo number_format($total, 0, ',', '.') ?>
        </td>
    </tr>
    </tbody>
</table>
</div>
<?php
    }
?>
<div>
    <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#tambahItem"><i class="bi bi-plus-circle-fill"></i> Item</button>
    <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#bayar"><i class="bi bi-cash-coin"></i> Bayar</button>
</div>
    </div>
</div>
    </div>



