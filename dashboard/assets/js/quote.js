/*

** This page will Deal all function for quote Page
*/

$(document).ready(()=>{
// When Fresh Page
AJAX("showall","");

});

// Show New Quotes
$("#NewMenu").click(()=>{
  $("#Newdraft").removeClass("active");
  $("#Newreject").removeClass("active");
  $("#NewAll").removeClass("active");
$("#NewMenu").addClass("active");
AJAX('data','New');
});

// Show Drafted Quotes

$("#Newdraft").click(()=>{
  $("#NewMenu").removeClass("active");
  $("#Newreject").removeClass("active");
  $("#NewAll").removeClass("active");
$("#Newdraft").addClass("active");
AJAX('data','Draft');
});

// Show Rejected Quotes

$("#Newreject").click(()=>{
  $("#NewMenu").removeClass("active");
  $("#Newdraft").removeClass("active");
  $("#NewAll").removeClass("active");
$("#Newreject").addClass("active");
AJAX('data','Reject');
});

// Show All Quotes

$("#NewAll").click(()=>{
  $("#NewMenu").removeClass("active");
  $("#Newreject").removeClass("active");
  $("#Newdraft").removeClass("active");

$("#NewAll").addClass("active");
AJAX("showall","");
});
function AJAX(title,data){
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
    if (this.readyState==4 && this.status==200) {
      $("#quotations").html(this.response);

    }
  };
  xhttp.open("GET","quote.php?"+title+"="+data,true);
  xhttp.send();
}
