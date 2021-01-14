$(function () {
  $("#navbarToggle").blur(function (event) {
    var screenwidth = window.innerWidth;
    if(screenwidth <768){
      $("#collapsable-nav").collapse('hide');
    }
  });
});

var switchMenuToActive = function () {
  // Remove 'active' from home button
  var classes = document.querySelector("#navHomeButton").className;
  classes = classes.replace(new RegExp("active", "g"), "");
  document.querySelector("#navHomeButton").className = classes;

  // Add 'active' to menu button if not already there
  classes = document.querySelector("#navCourseButton").className;
  if (classes.indexOf("active") == -1) {
    classes += " active";
    document.querySelector("#navCourseButton").className = classes;
  }
};