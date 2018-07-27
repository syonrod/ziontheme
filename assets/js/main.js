var menuContainer = document.querySelector(".menu");
var closeAbout = document.querySelector("#close-about");
var list = document.getElementById("list-icons");
var menuNames = ["Home", "About Us", "Portfolio", "Blog", "Contact Us"];
var itemsName = ["fa-home", "fa-users", "fa-briefcase", "fa-book", "fa-phone"];
var count = 0;
var today = new Date();
var todayTime = new Date();
var dd = today.getDate();
var mmt = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
var hh = today.getHours();
var mm = today.getMinutes();
var ss = today.getSeconds();


$(closeAbout).click(function(){
  $(".about").hide();
})



$(".about").draggable({
        handle: $(".about-header"),
        containment: ".container-fluid"
    });

//Font Awesome Icons
for(var i = 0; i < list.children.length; i++){
  list.children[i].classList.add("icon-" + i); //li
  list.children[i].firstChild.children[0].classList.add(itemsName[i]);
}

//open and close menu
$("#menu-icon").click(function(){
  $(menuContainer).toggle();
});



//Time
function currentDate(){
    if(dd<10) {
        dd = '0'+dd
    } 
    
    if(mm<10) {
        mm = '0'+mm
    } 
    
    today = dd + '/' + mmt + '/' + yyyy;
    
    return today;
}

function checkTime(i) {
    if (i < 10) {
      i = "0" + i;
    }
    return i;
  }

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    // add a zero in front of numbers<10
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
    t = setTimeout(function() {
      startTime()
    }, 500);
  }


startTime();
document.getElementById("date").innerHTML = currentDate();
//time ends

//Search Filter

function myFunction() {
  var input, filter, table, li, h5, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  li = table.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    h5 = li[i].getElementsByTagName("h5")[0];
    if (h5) {
      if (h5.innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }       
  }
}



