var prefix = "images/front/front";
var imageArr = new Array(7);
var current = 0;

for (var i = 0; i < 7; ++i)
{
	imageArr[i] = prefix + (i + 1) + ".jpg";
}

function rotate()
{
	var holder = document.getElementById("pic_container");
	holder.src = imageArr[current];
	++current;

	if (current == 6) current = 0;

}

function start()
{
	document.getElementById("pic_container").src = imageArr[current];
	setInterval('rotate()', 5000);
}