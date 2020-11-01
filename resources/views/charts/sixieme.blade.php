aDatasets1 =[
@foreach ($res5['DAIRA'] as $key=>$re)
    {{ $res5['NBRP'][$key] ?? '0' }},
@endforeach
];
var ctx = document.getElementById("pieChart");
var barChart = new Chart(ctx, {
type: 'bar',
data: {
labels: [
@foreach ($res5['DAIRA'] as $key=>$re)
    '{{ $res5['DAIRA'][$key]  }}',
@endforeach
],
datasets: [ {
label: 'Nombre',
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
text: 'Nombre des postePolice par daira'
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
