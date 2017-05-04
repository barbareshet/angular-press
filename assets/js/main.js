/**
 * Created by ido on 5/1/2017.
 */

angular.module('app', ['ngRoute','ngSanitize'])
    .config(function ($routeProvider, $locationProvider) {
        $locationProvider.html5Mode(true);

        $routeProvider
            .when('/', {
                templateUrl: myLocalized.partials + 'main.html',
                controller: 'Main'
            })
            .when('/:slug', {
                templateUrl: myLocalized.partials + 'content.html',
                controller: 'Content'
            });
    })
    .controller ('Main', function ($scope, $http, $routeParams) {
    console.log('ok');
        $http.get('/angwp/wp-json/wp/v2/sites').then(function(res) {
            // console.log(res);
            // return;
        $scope.sites = res.data;
            console.log(res.data);
        });
    })
    .controller('Content', function($scope, $http, $routeParams) {
        $http.get('/angwp/wp-json/wp/v2/sites/?filter[name]' + $routeParams.slug).then(function(res){
            $scope.site = res[0];
        });
    });