let scrollIndicator = document.getElementById('mouseScrollIcon')
var scrollImageShown = true;

window.onscroll = function(){
  if(window.pageYOffset >= 1 && scrollImageShown == true){
    scrollIndicator.setAttribute("id", "mouseScrollIconDisabled")
    scrollImageShown = false
  }
  else if(window.pageYOffset < 1 && scrollImageShown == false){
    scrollIndicator.setAttribute("id", "mouseScrollIcon")
    scrollImageShown = true
  }
}