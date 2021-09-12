


App.controller('donatinController', function ($scope, $http, $location) {

//    var globlecart = baseurl + "Api/cartOperationShirtSingle/"+product_id;

    $scope.donationinput = {"amountarray": [50, 100, 200, 500],
        "selected_amount": 0, "other_amount": "", "isprocess": false,
        "showreceiver": false};
    $scope.selectAmount = function (selectedamount) {
        $scope.donationinput.selected_amount = selectedamount;
        $scope.donationinput.other_amount = "";
    }

    $scope.$watch("donationinput.other_amount", function (n, o) {
        if (n) {
            $scope.donationinput.selected_amount = n;
        }
    })

    $scope.donationSubmit = function () {
        $scope.donationinput.isprocess = true;
    }

    $scope.qucodeselect = {"title": "Pay Using PayMe", "image": "paymeqr.jpeg"};
    $scope.openQR = function (qrtype) {
        if (qrtype == "payme") {
            $scope.qucodeselect.title = "Pay Using PayMe";
            $scope.qucodeselect.image = "paymeqr.jpeg";
        } else {
            $scope.qucodeselect.title = "Pay Using FPS";
            $scope.qucodeselect.image = "fpsqr.jpeg";
        }
    }


});

