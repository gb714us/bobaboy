function processForm(){
  var profileFormObject = document.getElementById("profileForm");

  var name = profileFormObject.name.value;

  var email = profileFormObject.email.value;

  var phone = profileFormObject.phone.value;

  var position = profileFormObject.position.options[profileFormObject.position.selectedIndex].text;

  var blist = profileFormObject.elements["drink"];

  for(var i=0; i<blist.length; i++){
    if (blist[i].checked){
      var beverage = blist[i].value;
      break;
    }
  }

  var text = position + " " + name + " wants their Replicator default to be " + beverage;

  alert(text);
}