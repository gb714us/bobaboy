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
    }
  }

  if(name == "" || phone == "" || email == "")
  {
    text = "Please fill in your contact information!";
    alert(text);  
    return;
  }
  else
  {
    var nameRE = new RegExp(/[a-zA-Z]([\s,.'-a-zA-Z])?$/);
    var emailRE = new RegExp(/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/);
    var phoneRE = new RegExp(/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/);

    if(nameRE.test(name) && emailRE.test(email) && phoneRE.test(phone))
    {
      if(blistChecked.length != 0 && rating.value != "")
      {
        text = "Thank you for your feedback!";
      }
      else
      {
        text = "You forgot to select your order or your rating!";
      }
      alert(text);
      return;
    }
    else
    {
      if(!nameRE.test(name))
      {
        text = "Name is invalid";
      }
      else if(!emailRE.test(email))
      {
        text = "Email is invalid";
      }
      else if(!phoneRE.test(phone))
      {
        text = "Phone is invalid";
      }
      alert(text);
      return;
    }
  }

}