var app = angular.module('myApp', []);

app.controller('cntrl', function ($scope, $http) {
    $scope.obj = {
        'idisable': false
    };
    $scope.btnName = "Simpan";

    $scope.resetObat = function () {
        $scope.obj.idisable = false;
        $scope.btnName = "Simpan";
        $scope.msg = null;
    }

    $scope.insertObat = function () {
        $http.post("inputObat.php", {
            'KODEOBAT': $scope.kodeobat,
            'NAMAOBAT': $scope.namaobat,
            'HARGABELI': $scope.hargabeli,
            'HARGAJUAL': $scope.hargajual,
            'JUMLAH': $scope.jumlah,
            'btnName': $scope.btnName
        }).then(function () {
            $scope.msg = "Data Berhasil Disimpan";
            $scope.TampilDataObat();
        })
    }

    // proses untuk menampilkan data dari file tampilObat.php
    $scope.TampilDataObat = function () {
        $http.get("tampilObat.php").then(function (response) {
            $scope.data = response.data;
        });
    }

    // proses untuk delete data dari file hapus.php
    $scope.deleteObat = function (kodeobat) {
        var konfirmasi = confirm("Apakah anda ingin menghapus data ini ?");

        if (konfirmasi === true) {
            $http.post("hapusObat.php", {
                'KODEOBAT': kodeobat
            }).then(function () {
                $scope.msg = "Data Berhasil Dihapus";
                $scope.TampilDataObat();
                // alert('berhasil');
            })
        } else {
            alert('data batal dihapus');
        }
    }

    // proses menampilkan data saat di update
    $scope.editObat = function (KODEOBAT, NAMAOBAT, HARGABELI, HARGAJUAL, JUMLAH) {
        $scope.kodeobat = KODEOBAT;
        $scope.namaobat = NAMAOBAT;
        $scope.hargabeli = HARGABELI;
        $scope.hargajual = HARGAJUAL;
        $scope.jumlah = JUMLAH;
        $scope.btnName = "Update";
    }
})