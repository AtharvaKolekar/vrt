var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;

  if (prevScrollpos < currentScrollPos && window.innerWidth>1000) {
    document.getElementById("header").style.top = "-140px";
    // document.getElementById("header").style.backdropFilter = "blur(0px)";
  } else {
    document.getElementById("header").style.top = "0px";
    // document.getElementById("header").style.backdropFilter = "blur(1px)";
  }
  prevScrollpos = currentScrollPos;


}

var t = false
function menu() {
  if(t){
    document.getElementById("nav").style.width = "0%";
    t = false
  }
  else{
    document.getElementById("nav").style.width = "100%";
    t = true
  }

}

document.querySelectorAll('#nav a').forEach(e => e.addEventListener('click', () => {
  document.getElementById("nav").style.width = "0%";
  document.querySelector('#label input').checked = false;
  t = false
}))