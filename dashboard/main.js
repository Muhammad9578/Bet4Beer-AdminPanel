var config = {
  apiKey: "AIzaSyB6v1Mall_xlx7BurRamvI7PFiJHnxPoAA",
    authDomain: "bet4beers.firebaseapp.com",
    databaseURL: "https://bet4beers.firebaseio.com",
    projectId: "bet4beers",
    storageBucket: "bet4beers.appspot.com",
    
};

firebase.initializeApp(config);
var db = firebase.database();

var new_html = '';
var new_other = '';



function decline(asb){
 
 if (asb.id !=null && asb.id !="") {

var r = confirm("Are you sure to Decline ?");
if (r == true) {
  var chk = firebase.database().ref('ScreenShots/'+asb.id).update({status:'declined'});
  if (chk) {
    alert('Declined Successfully ');
    location.reload();
  }
} else {
  txt = "Cancel!";
}
 }
  
}


function approve(asb){
 
 if (asb.id !=null && asb.id !="") {

var r = confirm("Are you sure to Approve ?");
if (r == true) {
  var chk = firebase.database().ref('ScreenShots/'+asb.id).update({status:'approved'});
  if (chk) {
    alert('Approved Successfully ');
    location.reload();
  }
} else {
  txt = "Cancel!";
}
 }
  
}


window.onload=loadList;

function loadList() {
  var reviews = document.getElementById('reviews');
var displayList = db.ref('/ScreenShots');

displayList.on('child_added', (data) => {
  
  if (data.val().status=="pending" || data.val().status=="pendding" || data.val().status=="Pendding" || data.val().status=="Pending") {
    new_html +='<tr style="font-size: 15px;text-align: center;">';

  new_html +='<td>'+data.val().userName+'</td>';
  new_html +='<td>'+data.val().email+'</td>';

  new_html +='<td><img style="border-radius:15px; cursor: pointer; width=200px; height:160px;" onclick="return showPopup(this)" src="'+data.val().screenShotImage+'"  /></td>';
  new_html +='<td>'+
        '<button  class="btn btn-success btn-rounded" style="margin-left:2px;margin-right:2px;margin-top:2px;" id="'+data.key+'" value="'+data.val().uid+'" onclick="return approve(this)" type="submit">Approve</button>'+
        '<button  class="btn btn-danger btn-rounded" style="margin-left:2px;margin-right:2px;margin-top:2px;" id="'+data.key+'" value="'+data.val().uid+'" onclick="return decline(this)" type="submit">Decline</button>'+
         
      '</td>';

      new_html +='</tr>';
  $('#reviews').html(new_html);

  }else if (data.val().status=="approved" || data.val().status=="Approved" || data.val().status=="declined" || data.val().status=="Declined") {
    new_other +='<tr style="font-size: 15px;text-align: center;">';

  new_other +='<td>'+data.val().userName+'</td>';
  new_other +='<td>'+data.val().email+'</td>';

  new_other +='<td><img style="border-radius:15px; cursor: pointer; width=160px; height:140px;" onclick="return showPopup(this)" src="'+data.val().screenShotImage+'"  /></td>';
  new_other +='<td style="text-align:center;">';

        if (data.val().status=="approved" || data.val().status=="Approved") {
          new_other += '<div id="approved" style="margin-left:2px;margin-right:2px;margin-top:2px;">Approved</div>';
        }else if (data.val().status=="declined" || data.val().status=="Declined") {
          new_other += '<div id="declined" style="margin-left:2px;margin-right:2px;margin-top:2px;">Declined</div>';
        }
      new_other +='</td></tr>';

  $('#others').html(new_other);

  }
});
}
  
//setInterval(function(){ new_html=''; loadList(); }, 5000);
 