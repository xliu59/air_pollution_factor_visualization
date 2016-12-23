<?php {{include '../public_php/header.php';}}  ?>

    <h2>One-City History Pm2.5 Tendency</h2>
    <!-- prepare a DOME (with height and width) for Echarts -->
    <div id="main" style="width: 600px;height:400px;"></div>

    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));
        var uploadedDataURL = "../json/history_one.json";

        $.getJSON(uploadedDataURL, function (data) {
            myChart.setOption(option = {
                title: {
                    text: 'Beijing AQI'
                },
                tooltip: {
                    trigger: 'axis'
                },
                xAxis: {
                    data: data.map(function (item) {
                        return item[0];
                    })
                },
                yAxis: {
                    splitLine: {
                        show: false
                    }
                },
                toolbox: {
                    left: 'center',
                    feature: {
                        dataZoom: {
                            yAxisIndex: 'none'
                        },
                        restore: {},
                        saveAsImage: {}
                    }
                },
                dataZoom: [{
                    startValue: '2014-06-01'
                }, {
                    type: 'inside'
                }],
                visualMap: {
                    top: 10,
                    right: 10,
                    pieces: [{
                        gt: 0,
                        lte: 50,
                        color: '#096'
                    }, {
                        gt: 50,
                        lte: 100,
                        color: '#ffde33'
                    }, {
                        gt: 100,
                        lte: 150,
                        color: '#ff9933'
                    }, {
                        gt: 150,
                        lte: 200,
                        color: '#cc0033'
                    }, {
                        gt: 200,
                        lte: 300,
                        color: '#660099'
                    }, {
                        gt: 300,
                        color: '#7e0023'
                    }],
                    outOfRange: {
                        color: '#999'
                    }
                },
                series: {
                    name: 'Beijing P',
                    type: 'line',
                    data: data.map(function (item) {
                        return item[1];
                    }),
                    markLine: {
                        silent: true,
                        data: [{
                            yAxis: 50
                        }, {
                            yAxis: 100
                        }, {
                            yAxis: 150
                        }, {
                            yAxis: 200
                        }, {
                            yAxis: 300
                        }]
                    }
                }
            });
        });
    </script>

    <br/>

    <h2>One-City History Pollution-Day Proportion</h2>
    <div id="main1" style="width: 600px;height:400px;"></div>


    <script type="text/javascript">
        var myChart1 = echarts.init(document.getElementById('main1'));
        var option1 = {

            title: {
                text: 'PM2.5 Level (μg/m3)',
                left: 'center',
                top: 20,
                textStyle: {
                    color: '#ccc'
                }
            },

            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },

            visualMap: {
                show: false,
                min: 0,
                max: 80
            },
            series : [
                {
                    name:'PM2.5 Level',
                    type:'pie',
                    radius : '55%',
                    center: ['50%', '50%'],
                    data:[
                        {value:15, name:'0-50'},
                        {value:45, name:'50-100'},
                        {value:65, name:'100-150'},
                        {value:54, name:'150-200'},
                        {value:44, name:'200-250'},
                        {value:7, name:'250-300'},
                        {value:2, name:'300-350'}
                    ],
                    roseType: 'angle',
                    label: {
                        normal: {
                            textStyle: {
                                color: 'black',
                                fontWeight: 'bolder'
                            }
                        }
                    },
                    labelLine: {
                        normal: {
                            lineStyle: {
                                color: 'red'
                            },
                            smooth: 0.2,
                            length: 10,
                            length2: 20
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: '#c23531',
                            shadowBlur: 40,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };
        myChart1.setOption(option1, true)
    </script>


<?php
{{include '../public_php/sidebar_start.php';}}
{{include '../public_php/level_bar.php';}}
{{include '../public_php/date_bar.php';}}
{{include '../public_php/footer.php';}}
?>