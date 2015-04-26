function togVis()
{
   var results = document.getElementById("results");
   if (results.style.visibility == "hidden")
      results.style.visibility = "visible";
   else
      results.style.visibility = "hidden";
}
function update()
{
   var results = document.getElementById("results");

   var proceed;
   proceed = confirm("Are you sure you want to proceed?");

   if( proceed == true)
   {
   results.style.background = document.getElementById("color").value;
       results.innerHTML = results.innerHTML +
          document.getElementById("to_append").value;
   }
