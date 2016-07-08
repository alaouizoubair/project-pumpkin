
angular.module('PumpkinApp',['ngMaterial', 'ngMessages', 'material.svgAssetsCache'])

.config(function($mdThemingProvider){
	$mdThemingProvider.theme('docs-dark','default')
		.primaryPalette('yellow')
		.dark();
})

.controller('AppCtrl', function($scope) {
	$scope.user = {
      title: 'Developer',
      email: 'ipsum@lorem.com',
      firstName: '',
      lastName: '',
      company: 'Google',
      address: '1600 Amphitheatre Pkwy',
      city: 'Mountain View',
      state: 'CA',
      biography: '',
      postalCode: '94043'
    };
});
