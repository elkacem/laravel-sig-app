var ctx = document.getElementById("donutChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'pie',
data: {
labels: [
@foreach ($res3['NATIONALITE'] as $key=>$re)
    '{{ $res3['NATIONALITE'][$key]  }}',
@endforeach
],
datasets: [{
backgroundColor: [
"#2ecc71",
"#3498db",
"#95a5a6",
],
data: [
@foreach ($res3['NATIONALITE'] as $key=>$re)
    {{ $res3['NBRN'][$key] ?? '0' }},
@endforeach]
}]
}
});
