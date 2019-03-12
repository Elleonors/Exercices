var input = document.getElementById("input");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   console.log(input.value)
  }
});