<?php {{include '../public_php/header.php';}}  ?>

<h2>Natrual conditions's influence on air PM2.5 dencity</h2><br/>
<!-- prepare a DOME (with height and width) for Echarts -->
<div id="main1" style="width: 600px;height:400px;"></div>
<br/>
<div id="main2" style="width: 600px;height:400px;"></div>

<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例

    var myChart1 = echarts.init(document.getElementById('main1'));
    var myChart2 = echarts.init(document.getElementById('main2'));

    var uploadedDataURL = "../json/history_one.json";

    var colors = ['#5793f3', '#d14a61'];

    var option1 = {
        title: {
            text: 'pm2.5 and date of the week',
            subtext: '',
            textStyle: {
                color: "#666",
                fontSize: 18,
                fontWeight: "bold"
            }
        },
        tooltip :false,
        /* tooltip: {
         trigger: 'axis'
         },*/
        grid: {
            top:'20%',
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: [{
            type: 'category',
            data: ['07/20 周三', '07/21 周五', '07/22 周六',
                '07/23 周日', '07/24 周一', '07/25 周二',
                '07/26 周三', '07/27 周四', '07/28 周五',
                '07/29 周六', '07/30 周日', '07/31 周一'],
            splitLine: {
                show: false
            },
            axisTick: {
                alignWithLabel: true
            },
            axisLine: {
                show: true,
                lineStyle: {
                    color: "#666",
                }
            },
        }],
        yAxis: [{
            type: 'value',
            splitLine: {
                show: false,
            },
            splitArea: {
                //show: true,
                show:false,
            },
            axisLine: {
                show: true,
                lineStyle: {
                    color: "#666",
                }
            },
        }],

        series: [{
            name: 'PM2.5',
            type: 'bar',
            label: {
                normal: {
                    show: true,
                    position: 'top'
                }
            },
            itemStyle: {
                normal: {
                    color: function(d) {
                        return "#" + Math.floor(Math.random() * (256 * 256 * 256 - 1)).toString(16);
                        //return "#cee3f6";
                    }
                }
            },
            data: [32, 25, 39, 26, 28, 70, 75, 82, 48, 58, 16, 32],
        }]
    };

    var option2 = {
        title: {
            text: 'pm2.5 and holidays',
            subtext: '',
            textStyle: {
                color: "#666",
                fontWeight: "bold",
                fontSize: 18
            }
        },
        tooltip :false,
        /* tooltip: {
         trigger: 'axis'
         },*/
        grid: {
            top:'20%',
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: [{
            type: 'category',
            data: ['07/20 周三', '07/21 周五', '07/22 周六',
                '07/23 周日', '07/24 周一', '07/25 周二',
                '07/26 周三', '07/27 周四', '07/28 周五',
                '07/29 周六', '07/30 周日', '07/31 周一'],
            splitLine: {
                show: false
            },
            axisTick: {
                alignWithLabel: true
            },
            axisLine: {
                show: true,
                lineStyle: {
                    color: "#666",
                }
            },
        }],
        yAxis: [{
            type: 'value',
            splitLine: {
                show: false,
            },
            splitArea: {
                //show: true,
                show:false,
            },
            axisLine: {
                show: true,
                lineStyle: {
                    color: "#666",
                }
            },
        }],

        series: [{
            name: 'PM2.5',
            type: 'bar',
            label: {
                normal: {
                    show: true,
                    position: 'top'
                }
            },
            itemStyle: {
                normal: {
                    color: function(d) {
                        return "#" + Math.floor(Math.random() * (256 * 256 * 256 - 1)).toString(16);
                        //return "#cee3f6";
                    }
                }
            },
            data: [32, 25, 39, 26, 28, 70, 75, 82, 48, 58, 16, 32],
        }]
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
<h2>pollution and date of the week </h2>
<h2>pollution and holidays</h2>
