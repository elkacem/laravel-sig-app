aDatasets1 =[
@foreach ($res['COMMUNE'] as $key=>$re)
    {{ $res['NBR'][$key] ?? '0' }},
@endforeach
];
var ctx = document.getElementById("areaChart");
var barChart = new Chart(ctx, {
type: 'bar',
data: {
labels: [
@foreach ($res['COMMUNE'] as $key=>$re)
    '{{ $res['COMMUNE'][$key]  }}',
@endforeach
],
datasets: [ {
label: 'Result',
fill:false,
data: aDatasets1,
backgroundColor: '#E91E63',
borderColor: [
'rgba(255,99,132,1)',
'rgba(255,99,132,1)',
'rgba(255,99,132,1)',
'rgba(255,99,132,1)',
'rgba(255,99,132,1)',
'rgba(255,99,132,1)',
],
borderWidth: 1
}
]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero:true
}
}]
},
title: {
display: true,
text: 'Nishi IT Institute'
},
responsive: true,

tooltips: {
callbacks: {
labelColor: function(tooltipItem, chart) {
return {
borderColor: 'rgb(255, 0, 20)',
backgroundColor: 'rgb(255,20, 0)'
}
}
}
},
legend: {
labels: {
// This more specific font property overrides the global property
fontColor: 'red',

}
}
}
});
