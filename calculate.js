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

	alert("Your total is $" + parseFloat(Math.round(total * 100)/ 100).toFixed(2))
}

function addToCart(number)
    {
        if (document.getElementById("select-" + number).value > 0)
            alert("Added to order!");
        else
            alert("Please select a quantity!")
    }