Highcharts.chart('chart', {
    chart: {
        type: 'column',
        backgroundColor: '#ffffff',
    },
    title: {
        text: 'Laporan Penjualan harian'
    },
    xAxis: {
        categories: [
            "senin","selasa","rabu","kamis","jumat","sabtu","minggu"
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Porsi'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} porsi</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Hari',
        data: [150,159,170,175,190,200,150]

    }]
});