function processForm(){
  var profileFormObject = document.getElementById("profileForm");

  var name = profileFormObject.name.value;

  var email = profileFormObject.email.value;

  var phone = profileFormObject.phone.value;

  var blist = profileFormObject.elements["drink"];

  var blistChecked = [];

  var rating = profileFormObject.elements["rating"];

  var text = "";

  for(var i=0; i<blist.length; i++){
    if (blist[i].checked){
        blistChecked[blistChecked.length] = blist[i];
        text = text + blistChecked[blistChecked.length-1].value;
    }
  }

  if(blistChecked.length != 0 && rating.value != "")
  {
    var text = "Thank you for your feedback!";
  }
  else
  {
    var text = "Please choose the purchased drinks and rate!";
  }
  alert(text);
}