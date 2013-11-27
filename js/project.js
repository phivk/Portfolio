// jQuery

// var NUM_PROJECTS = 8;
// var pages = new Array(NUM_PROJECTS);
// array of page paths in correct order for navigation
var pages = [
  "../projects/popathon.php",
  "../projects/game_of_life_canvas.php",
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
  // TODO remove title id from html page and base indexing on pages array
  // TODO FIX not working!
  var curIdx = 0;
  var curURL = document.URL;
  var curURLSubStrings = document.URL.split("/");
  var curPage = curURLSubStrings[curURLSubStrings.length - 1];
  
  for (var i=0; i < pages.length; i++) {
    var pageSubstrings = pages[i].split("/");
    if (pageSubstrings[pageSubstrings.length - 1] === curPage) {
      curIdx = i;
    }; 
  };
  
  // check  0 < curIdx <= NUM_PROJECTS
  // Idx 0 and [pages.length] reserved for homepagelink
  if ( curIdx < 1 ) {
    exit("title id must be > 0");
  }
  else if ( curIdx > pages.length ) {
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