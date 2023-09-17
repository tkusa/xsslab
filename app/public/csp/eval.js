

function update_eval() {
  var form = document.getElementById("form");
  var val = form.value;
  var ev = eval(val);
  var result = document.getElementById("result");
  result.innerText = ev;
}


var form = document.getElementById("form");
form.addEventListener('change', update_eval);