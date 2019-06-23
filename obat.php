
<?php include_once('header.php'); ?>

<div ng-app="myApp" ng-controller="cntrl">
    <center><span><strong>{{msg}}</strong></span></center>
    <form action="">
        <table>
            <tr>
                <td>Kode Obat</td>
                <td>:</td>
                <td>
                    <input type="text" ng-model="kodeobat" name="kodeobat" ng-disabled="obj.idisible">
                </td>
            </tr>
            <tr>
                <td>Nama Obat</td>
                <td>:</td>
                <td>
                    <input type="text" ng-model="namaobat" name="namaobat">
                </td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>:</td>
                <td>
                    <input type="text" ng-model="hargabeli" name="hargabeli">
                </td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>:</td>
                <td>
                    <input type="text" ng-model="hargajual" name="hargajual">
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td>
                    <input type="text" ng-model="jumlah" name="jumlah">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="3">
                    <input type="button" class="button" value="{{btnName}}" ng-click="insertObat()">
                    <input type="reset" class="button" value="Reset" ng-click="resetObat()">
                </td>
            </tr>
        </table>
    </form>

    <br>

    <label for="">Cari Data</label>
    <input type="text" ng-model="cariobat"><br><br>

    <!-- tabel untuk menampilkan data -->
    <table border="1" cellspacing="0" ng-init="TampilDataObat()">
        <tr>
            <th>Kode Obat</th>
            <th>Nama Obat</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Jumlah</th>
            <th>Action</th>
        </tr>
        <tr ng-repeat="tb_obat in data |filter:cariobat">
            <td>{{tb_obat.kode_obat}}</td>
            <td>{{tb_obat.nama_obat}}</td>
            <td>{{tb_obat.harga_beli}}</td>
            <td>{{tb_obat.harga_jual}}</td>
            <td>{{tb_obat.jumlah}}</td>
            <td>
                <button ng-click="deleteObat(tb_obat.kode_obat);">
                    Hapus
                </button>
                <button ng-click="editObat(tb_obat.kode_obat, tb_obat.nama_obat, tb_obat.harga_beli, 
                tb_obat.harga_jual, tb_obat.jumlah);">
                    Edit
                </button>
            </td>
        </tr>
    </table>
</div>

<script src="lib/angular.min.js"></script>
<script src="lib/obat.js"></script>

<?php include_once('footer.php'); ?>