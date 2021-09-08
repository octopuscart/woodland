


App.controller('donatinController', function ($scope, $http, $location) {

//    var globlecart = baseurl + "Api/cartOperationShirtSingle/"+product_id;

    $scope.donationinput = {"amountarray": [50, 100, 200, 500], "selected_amount": 0, "other_amount": "", "showreceiver":false};
    $scope.selectAmount = function (selectedamount) {
        $scope.donationinput.selected_amount = selectedamount;
        $scope.donationinput.other_amount = "";
    }

    $scope.$watch("donationinput.other_amount", function (n, o) {
        if (n) {
            $scope.donationinput.selected_amount = n;
        }
    })


});

