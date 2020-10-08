var ctx = document.getElementById("mypiechart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'pie',
data: {
labels: [
@foreach ($res1['LIB_TYPE'] as $key=>$re)
    '{{ $res1['LIB_TYPE'][$key]  }}',
@endforeach
],
datasets: [{
backgroundColor: [
"#2ecc71",
"#3498db",
"#95a5a6",
"#9b59b6",
"#f1c40f",
"#e74c3c",
"#34495e"



],
data: [
@foreach ($res1['LIB_TYPE'] as $key=>$re)
    {{ $res1['NBR'][$key] ?? '0' }},
@endforeach]
}]
}
});
