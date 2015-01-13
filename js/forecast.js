
function fun(data, div_id) {
  var ctxBar = $(div_id).get(0).getContext("2d");
  var myBarChart = new Chart(ctxBar).Bar(data);
  
}