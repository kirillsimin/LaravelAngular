/*
* Init Angular
*
********************************************************************************/
var formApp = angular.module('formApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

/*
* Form Controller
********************************************************************************/
formApp.controller('formController', function($scope, $http) {
    $scope.newReview = {};
    $scope.message = {};

    /*
    * Submit review
    ********************************************************************************/
    $scope.validateForm = function() {
        console.log($scope.newReview.text);
        if ($scope.newReview.text !== undefined) {
            $scope.submitReview();
        } else {
            $scope.message.text = "Say something...";
        }
    }

    /*
    * Submit review
    ********************************************************************************/
    $scope.submitReview = function() {
        $http({
            method  : 'POST',
            url     : '/store',
            params  : $scope.newReview,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
        })
        .then(function(response) {
            if (response.data.success == true) {
                $scope.newReview.text = "";
                $scope.message.text = response.data.message;
                $scope.loadReviews();
            } else {
                $scope.message.text = "Whoops... Something went wrong.";
            }
        });
    };

    /*
    * Load reviews
    ********************************************************************************/
    $scope.loadReviews = function() {
        $http({
            method  : 'GET',
            url     : '/display',
        })
        .then(function(data) {
            $scope.reviews = data.data;
        });
    };
});
//# sourceMappingURL=all.js.map
