$(document).ready(function(){
	$(".bottom-content-rows").css("display", "block");

	// Teams page waypoints
	if(thisPage.toLowerCase() == "team"){
		// Darrin Fong waypoint
		var waypoint2 = new Waypoint({
		  element: document.getElementById('darrinFong'),
		  handler: function(direction) {
		  	$('#darrinFong').css("visibility", "visible").addClass("animated slideInLeft");
		  	delete this;
		  },
		  offset: '100%'
		});

		// Benjamin Barault waypoint
		var waypoint2 = new Waypoint({
		  element: document.getElementById('benjaminBarault'),
		  handler: function(direction) {
		  	$('#benjaminBarault').css("visibility", "visible").addClass("animated slideInRight");
		  	delete this;
		  },
		  offset: '100%'
		});

		// Jacob Gagne waypoint
		var waypoint3 = new Waypoint({
		  element: document.getElementById('jacobGagne'),
		  handler: function(direction) {
		  	$('#jacobGagne').css("visibility", "visible").addClass("animated slideInLeft");
		  	delete this;
		  },
		  offset: '100%'
		});

		// Dylan Fernandes waypoint
		var waypoint4 = new Waypoint({
		  element: document.getElementById('dylanFernandes'),
		  handler: function(direction) {
		  	$('#dylanFernandes').css("visibility", "visible").addClass("animated slideInRight");
		  	delete this;
		  },
		  offset: '100%'
		});
	}

	// Home page waypoints
	if(thisPage.toLowerCase() == "home"){
		// Our vision waypoint
		var waypoint5 = new Waypoint({
		  element: document.getElementById('ourVision'),
		  handler: function(direction) {
		  	$('#ourVision').css("visibility", "visible").addClass("animated slideInRight");
		  	delete this;
		  },
		  offset: '100%'
		});

		// What we do waypoint
		var waypoint6 = new Waypoint({
		  element: document.getElementById('whatWeDo'),
		  handler: function(direction) {
		  	$('#whatWeDo').css("visibility", "visible").addClass("animated slideInLeft");
		  	delete this;
		  },
		  offset: '100%'
		});

		// What we use waypoint
		var waypoint7 = new Waypoint({
		  element: document.getElementById('whatWeUse'),
		  handler: function(direction) {
		  	$('#whatWeUse').css("visibility", "visible").addClass("animated slideInRight");
		  	delete this;
		  },
		  offset: '100%'
		});
	}
});

$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
});