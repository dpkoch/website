var app = angular.module('pubApp', []);

app.filter('author', function() {
  return function(x) {
    first_names = x.first_name.split(" ");
    initials = '';
    for (i = 0; i < first_names.length; i++) {
      initials = initials.concat(first_names[i].substr(0,1).toUpperCase());
    }
    return initials + ' ' + x.last_name;
  };
});

app.filter('source', function() {
  return function(x) {
    return x.source + ' (' + x.year + ')';
  };
});

app.controller('pubCtrl', function($scope, $http) {
  $http.get("/apps/mendeley/publications.php").then(function(response) {
    $scope.articles = response.data.articles;

    // get array of unique years
    $scope.years = [];
    for (i = 0; i < $scope.articles.length; i++)
    {
      if (!$scope.years.some(function(x) { return x == $scope.articles[i].year; })) {
        $scope.years.push($scope.articles[i].year);
      }
    }
  })
});