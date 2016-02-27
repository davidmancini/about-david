app.controller("AngularFormController", ["$scope", function($scope) {
	/**
	 * State variable to store alerts generated from submit event
	 * @type {Array}
	 **/
	$scope.alerts = [];

	/**
	 * State variable that keeps track of data entered
	 * @type {Object}
	 **/
	$scope.formData = {name:null, email:null, phone: null, website:null, comment:null};

	/**
	 * Method to reset form data when submit and cancel buttons are pressed
	 **/
	$scope.reset = function() {
		$scope.formData = {name:null, email:null, phone: null, website:null, comment:null};
		$scope.quoteForm.$setUntouched();
		$scope.quoteForm.$setPristine();
	};

	/**
	 * Method to process action from submit button
	 *
	 * @param formData object containing submitted form data
	 * @param validated true if pressed validation, false if not
	 **/
	$scope.submit = function(formData, validated) {
		if(validated === true){
			$scope.alerts[0] = {
				type:"success",
				msg: "You've submitted the form. It doesn't do anything yet, so.....just email me."
			};
		} else {
			$scope.alerts[0] = {
				type: "danger",
				msg: "Please make sure you've entered everything correctly and try again."
			};
		}
		$scope.reset();
	};
}]);