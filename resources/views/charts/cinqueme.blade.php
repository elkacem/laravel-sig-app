var canvas = document.getElementById('barChart');
var data = {
labels: [@foreach ($res4['LIB'] as $key=>$re)
    '{{ $res4['LIB'][$key]  }}',
@endforeach],
datasets: [
{
label: "Nbr Crime",
backgroundColor: "rgba(255,99,132,0.2)",
borderColor: "rgba(255,99,132,1)",
borderWidth: 2,
hoverBackgroundColor: "rgba(255,99,132,0.4)",
hoverBorderColor: "rgba(255,99,132,1)",
data: [@foreach ($res4['LIB'] as $key=>$re)
    {{ $res4['NBRA'][$key] ?? '0' }},
@endforeach],
}
]
};
var option = {
animation: {
duration:7000
}

};


var myBarChart = Chart.Bar(canvas,{
data:data,
options:option
});








