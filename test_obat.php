<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test List Obat</title>

    <script src="lib/angular.min.js"></script>
</head>

<body>

    <div ng-app="myApp" ng-controller="obatController">
        <table>
            <tr ng-repeat="x in medicines">
                <td>{{ x.kode_obat }}</td>
                <td>{{ x.nama_obat }}</td>
            </tr>
        </table>
    </div>

    <script>
        var app = angular.module('myApp', []);
        app.controller('obatController', function($scope, $http) {
            $http.get("tampilObat.php").then(function(data) {
                $scope.medicines = data.data;
            });
        });
    </script>

</body>

</html>