// jQuery

var NUM_PROJECTS = 7;
var pages = new Array(NUM_PROJECTS);
// array of page paths in correct order for navigation
var pages = [
  "../projects/interactive_video.php",
  "../projects/human_computation.php",
  "../projects/story_to_go.php",
  "../projects/predicting_propagation.php",  
  "../projects/cellular_automaton.php",
  "../projects/emergenes.php",
  "../projects/the_essence.php",
];
// append home page front and back for nav looping
var homepage = "../portfolio.php";
pages = [homepage].concat(pages).concat([homepage]);

$(document).ready(function(){
  // set click nav handlers prev and next
  var curIdx = parseInt($("header > .title").attr("id"));  
  if ( curIdx < 1 ) {
    exit("title id must be > 0");
  }
  else if ( curIdx > NUM_PROJECTS ) {
    exit("title id must be =< NUM_PROJECTS");
  }
  else {
    $("header > .prev").attr("href", pages[curIdx-1]);
    $("header > .next").attr("href", pages[curIdx+1]);
  };
  
  // set click nav handler home
  // TODO
  // console.log();
  // $(".home").css()

  // strech border-top
  if (document.referrer.indexOf(homepage) != -1 ) {
    // navigation from homepage
    $("body").animate({
        borderWidth: "50px"
      }, 500);
  }
  else {
    $("body").css("borderWidth", "50px");
  }
  
  
  
  
});