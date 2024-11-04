
/*

** This file will contain all the function involving in email
*/

// WHen email send button is submitted
$("#email_submit").click(()=>{
$("#email_alert").html("Please Wait....");
submit_email();

});

/*

** works on email submit button
*/
function submit_email(){
  // Records all attributes
  var to=$("#email_from").val();
  var subject = $("#email_subject").val();
  var message = HTMLcode;
  var data=to+"_____"+subject+"_____"+message;
  AJAXcall("send_Email",data,"email_alert");
}



/*

** Recive data from other functions and sends ajax request
*/

function AJAXcall(title,data,notice){
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
if (this.readyState==4 && this.status==200) {
$("#"+notice).html(this.response);
}
  };
xhttp.open("GET","emails.php?"+title+"="+data,true);
xhttp.send();
}
