<?php {{include '../public_php/header.php';}}  ?>

<h2>Natrual conditions's influence on air PM2.5 dencity</h2><br/>
<!-- prepare a DOME (with height and width) for Echarts -->
<div id="main1" style="width: 600px;height:400px;"></div>
<div id="main2" style="width: 600px;height:400px;"></div>

<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例

    var myChart1 = echarts.init(document.getElementById('main1'));
    var myChart2 = echarts.init(document.getElementById('main2'));
    var uploadedDataURL = "../json/history_one.json";

    var colors = ['#5793f3', '#d14a61'];

    var option1 = {
        title: {
            text: 'yearly average PM2.5 & yearly car ownership '
        },
        color: colors,

        tooltip: {
            trigger: 'axis'
        },
        grid: {
            right: '20%'
        },
        toolbox: {
            feature: {
                dataView: {show: true, readOnly: false},
                restore: {show: true},
                saveAsImage: {show: true}
            }
        },
        legend: {
            data:['Car ownership','Yearly Average PM2.5'],
            top: '10%',
            left: '25%'
        },
        xAxis: [
            {
                type: 'category',
                axisTick: {
                    alignWithLabel: true
                },
                data: ['02/01/2016','02/01/2016','02/01/2016','02/01/2016',
                    '02/01/2016','02/01/2016','02/01/2016','02/01/2016',
                    '02/01/2016','02/01/2016','02/01/2016','02/01/2016']
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: 'Car owned',
                min: 0,
                max: 10,
                position: 'right',
                axisLine: {
                    lineStyle: {
                        color: colors[0]
                    }
                },
                axisLabel: {
                    formatter: '{value} ml'
                }
            },
            {
                type: 'value',
                name: 'PM2.5',
                min: 0,
                max: 500,
                position: 'left',
                axisLine: {
                    lineStyle: {
                        color: colors[1]
                    }
                },
                axisLabel: {
                    formatter: '{value}'
                }
            }
        ],
        series: [
            {
                name:'Car ownership',
                type:'bar',
                data:[2.0, 4.9, 7.0, 2.2, 5.6, 6.7, 5.6, 2.2, 2.6, 1.0, 6.4, 3.3]
            },
            {
                name:'Yealy Average PM2.5',
                type:'line',
                yAxisIndex: 1,
                data:[220, 160, 23, 145, 53, 15.2, 45, 168, 199, 335, 12.0, 83]
            }
        ]
    };

    var option2 = {
        title: {
            text: 'yearly average PM2.5 &yearly number of factories ',
        },
        color: colors,

        tooltip: {
            trigger: 'axis'
        },
        grid: {
            right: '20%'
        },
        toolbox: {
            feature: {
                dataView: {show: true, readOnly: false},
                restore: {show: true},
                saveAsImage: {show: true}
            }
        },
        legend: {
            data:['Number of factories','Yearly Average PM2.5'],
            top: '10%',
            left: '25%'
        },
        xAxis: [
            {
                type: 'category',
                axisTick: {
                    alignWithLabel: true
                },
                data: ['02/01/2016','02/01/2016','02/01/2016','02/01/2016',
                    '02/01/2016','02/01/2016','02/01/2016','02/01/2016',
                    '02/01/2016','02/01/2016','02/01/2016','02/01/2016']
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: 'humber of factories',
                min: 0,
                max: 10,
                position: 'right',
                axisLine: {
                    lineStyle: {
                        color: colors[0]
                    }
                },
                axisLabel: {
                    formatter: '{value} ml'
                }
            },
            {
                type: 'value',
                name: 'PM2.5',
                min: 0,
                max: 500,
                position: 'left',
                axisLine: {
                    lineStyle: {
                        color: colors[1]
                    }
                },
                axisLabel: {
                    formatter: '{value}'
                }
            }
        ],
        series: [
            {
                name:'Number of factories',
                type:'bar',
                data:[2.0, 4.9, 7.0, 2.2, 5.6, 6.7, 5.6, 2.2, 2.6, 1.0, 6.4, 3.3]
            },
            {
                name:'Yearly Average PM2.5',
                type:'line',
                yAxisIndex: 1,
                data:[220, 160, 23, 145, 53, 15.2, 45, 168, 199, 335, 12.0, 83]
            }
        ]
    };


    myChart1.setOption(option1, true)
    myChart2.setOption(option2, true)
</script>



<?php
{{include '../public_php/sidebar_start.php';}}
{{include '../public_php/level_bar.php';}}
{{include '../public_php/date_bar.php';}}
{{include '../public_php/footer.php';}}
?>
<h1>Emission source & Pollution</h1>
<h1>Factory nuMber& Pollution</h1>
