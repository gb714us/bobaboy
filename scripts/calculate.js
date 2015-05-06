var DRINK_COST = 3.00;
var BOBA_COST = .50;

function calculate()
{
	var total = 0;
	var elements = document.getElementsByClassName('order');
	for(var i = 0; i < elements.length; ++i)
	{
		var boba = 0;
		var drinks = elements[i].getElementsByTagName('select')[0].value;
		if (elements[i].getElementsByTagName('input')[0].checked)
		{
			boba = drinks * BOBA_COST;
		}

		total += drinks * DRINK_COST + boba;
	}
	
	var email = document.getElementById("orderForm").getElementsByTagName("input")[0].value;
	
	var emailRE = new RegExp(/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/);
	
	if(emailRE.test(email))
	{
		alert("Your total is $" + parseFloat(Math.round(total * 100)/ 100).toFixed(2));
		return true;
	}
	else{
		alert("Please enter a valid email address!");
		return false;
	}
}

function addToCart(number)
    {
        if (document.getElementById("select-" + number).value > 0){
            alert("Added to order!");
			return true;
		}
        else{
            alert("Please select a quantity!");
			return false;
		}
    }