var options = {
type: 'line',
data: {
labels: [@foreach ($res2['ANNE'] as $key=>$re)
    '{{ $res2['ANNE'][$key]  }}',
@endforeach],
datasets: [
{
label: 'Nombre des crimes',
data: [@foreach ($res2['ANNE'] as $key=>$re)
    {{ $res2['NBR1'][$key] ?? '0' }},
@endforeach],
borderWidth: 1
},
]
},
options: {
scales: {
yAxes: [{
ticks: {
reverse: false
}
}]
}
}
};

var lineCanvas = document.getElementById("chartJSContainer");

var ctx = lineCanvas.getContext('2d');
var lineChart = new Chart(ctx, options);

console.log("INSIDE lineChart::")
console.log(lineChart)

lineCanvas.onclick = function (e) {
console.log("INSIDE lineChart::")
console.log(lineChart)

var firstPoint  = lineChart.getElementAtEvent(e);
console.log("firstPoint::")
console.log( firstPoint )

if (firstPoint) {
console.log("lineChart.data::")
console.log( lineChart.data )
var first_point_index= firstPoint._index
console.log("+1 first_point_index::")
console.log( first_point_index )

var firstPoint_dataset_index= firstPoint._datasetIndex
console.log("+2 first_point_index::")
console.log( first_point_index )

var label = lineChart.data.labels[firstPoint._index];
console.log("+3 label::")
console.log( label )

var value = lineChart.data.datasets[firstPoint._datasetIndex].data[firstPoint._index];
alert( "label::"+(label) + "  value::"+(value) )
}
} // lineChart.onclick = function(e) {









