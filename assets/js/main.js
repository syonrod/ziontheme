var menu = document.getElementById("menu");
var today = new Date();
var todayTime = new Date();
var dd = today.getDate();
var mmt = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
var hh = today.getHours();
var mm = today.getMinutes();
var ss = today.getSeconds();

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


$("#menu").click(function(){
  $(".the-menu").toggle();
});

// $(document).click(function(e) 
// {
//   if($(".the-menu").is(:visible))
// });

