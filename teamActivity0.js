function togVis()
{
   var results = document.getElementById("display");
   if (results.style.visibility == "hidden")
      results.style.visibility = "visible";
   else
      results.style.visibility = "hidden";
}

function handleUpdateClick(){
	var text = document.getElementById("input").value;
	var color = document.getElementById("color").value;
	
	if (confirm("Are you sure you want ot make this change?") == true){
		appendText(text);
		updateColor(color);		
	}
}

function appendText(text){
	document.getElementById("display").innerHTML = text;
}

function updateColor(color){
	document.getElementById("display").style.backgroundColor= color;
}