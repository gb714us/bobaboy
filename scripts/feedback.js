function processForm(){
  var profileFormObject = document.getElementById("profileForm");

  var name = profileFormObject.getElementsByTagName("input")[0].value;
  
  var email = profileFormObject.getElementsByTagName("input")[1].value;

  var phone = profileFormObject.getElementsByTagName("input")[2].value;

  var blist = document.getElementsByName("drink[]");

  var blistChecked = [];

  var rating = document.getElementsByName("rating");
  var selectedRating = "";
  var text = "";

  for(var i=0; i<blist.length; i++){
    if (blist[i].checked){
        blistChecked[blistChecked.length] = blist[i];
    }
  }
  
  for(var i=0; i<rating.length; i++)
  {
    if(rating[i].checked)
    {
      selectedRating = rating[i].value;
    }
  }

  if(name == "" || phone == "" || email == "")
  {
    text = "Please fill in your contact information!";
    alert(text);  
    return false;
  }
  else
  {
    var nameRE = new RegExp(/[a-zA-Z]([\s,.'-a-zA-Z])?$/);
    var emailRE = new RegExp(/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/);
    var phoneRE = new RegExp(/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/);

    if(nameRE.test(name) && emailRE.test(email) && phoneRE.test(phone))
    {
      if(blistChecked.length != 0 && selectedRating != "")
      {
        text = "Thank you for your feedback!";
        return true;
      }
      else
      {
        text = "You forgot to select your order or your rating!";
      }
      alert(text);
      return false;
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
      return false;
    }
  }

}