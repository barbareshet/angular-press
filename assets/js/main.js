/**
 * Created by ido on 5/1/2017.
 */

angular.module('app', ['ngRoute'])
    .config(function ($routeProvider, $locationProvider) {
        $locationProvider.html5Mode(true);

        $routeProvider
            .when('/', {
                templateUrl: myLocalized.partials + 'main.html',
                controller: 'Main'
            });
    })
    .controller ('Main', function ($scope, $http, $routeParams) {
    console.log('ok');
        $http.get('/wp-json/wp/v2/posts').then(function(res) {
            console.log(res);
            // return;
        $scope.posts = res;
            // console.log(res);
    });
});