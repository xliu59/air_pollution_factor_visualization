<?php  {{include '../public_php/header.php';}}  ?>

<h2>One-City Hourly Pollution Index Data</h2>
<!-- prepare a DOME (with height and width) for Echarts -->
<div id="main" style="width: 600px;height:400px;"></div>

<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        tooltip: {
            formatter: "{a} <br/>{c}"
        },
        toolbox: {
            show: true,
            feature: {
                restore: {
                    show: true
                },
                saveAsImage: {
                    show: true
                }
            }
        },
        series: [{
            name: 'now:',
            type: 'gauge',
            z: 3,
            min: 0,
            max: 600,
            splitNumber: 10,
            radius: '50%',
            axisLine: { // 坐标轴线
                lineStyle: { // 属性lineStyle控制线条样式
                    width: 10
                }
            },
            axisTick: { // 坐标轴小标记
                length: 15, // 属性length控制线长
                lineStyle: { // 属性lineStyle控制线条样式
                    color: 'auto'
                }
            },
            splitLine: { // 分隔线
                length: 20, // 属性length控制线长
                lineStyle: { // 属性lineStyle（详见lineStyle）控制线条样式
                    color: 'auto'
                }
            },
            title: {
                textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                    fontWeight: 'bolder',
                    fontSize: 15,
                    fontStyle: 'italic'
                }
            },
            detail: {
                textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                    fontWeight: 'bolder',
                    fontSize: 12
                }
            },
            data: [{
                value: 40,
                name: 'PM2.5'
            }]
        }, {
            name: 'now:',
            type: 'gauge',
            min: 0,
            max: 50,
            splitNumber: 10,
            radius: '35%',
            center: ['20%', '55%'], // 默认全局居中
            endAngle: 45,
            axisLine: { // 坐标轴线
                lineStyle: { // 属性lineStyle控制线条样式
                    width: 8
                }
            },
            axisTick: { // 坐标轴小标记
                length: 12, // 属性length控制线长
                lineStyle: { // 属性lineStyle控制线条样式
                    color: 'auto'
                }
            },
            splitLine: { // 分隔线
                length: 12, // 属性length控制线长
                lineStyle: { // 属性lineStyle（详见lineStyle）控制线条样式
                    color: 'auto'
                }
            },
            pointer: {
                width: 5
            },
            title: {
                offsetCenter: [0, '-30%'], // x, y，单位px
                textStyle: {
                    fontWeight: 'bolder',
                    fontSize: 15,
                    fontStyle: 'italic'
                }
            },
            detail: {
                textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                    fontWeight: 'bolder',
                    fontSize: 15
                }
            },
            data: [{
                value: 1.5,
                name: 'AQI'
            }]
        }, {
            name: 'now',
            type: 'gauge',
            min: 0,
            max: 2,
            center: ['80%', '55%'], // 默认全局居中
            radius: '35%',
            startAngle: 135,
            endAngle: -45,
            splitNumber: 1,
            axisLine: { // 坐标轴线
                lineStyle: { // 属性lineStyle控制线条样式
                    width: 8
                }
            },
            axisTick: { // 坐标轴小标记
                splitNumber: 2,
                length: 10, // 属性length控制线长
                lineStyle: { // 属性lineStyle控制线条样式
                    color: 'auto'
                }
            },
            axisLabel: {
                formatter: function(v) {
                    switch (v + '') {
                        case '0':
                            return 'good';
                        case '1':
                            return 'mid';
                        case '2':
                            return 'hazard';
                    }
                }
            },
            splitLine: { // 分隔线
                length: 5, // 属性length控制线长
                lineStyle: { // 属性lineStyle（详见lineStyle）控制线条样式
                    color: 'auto'
                }
            },
            pointer: {
                width: 2
            },
            title: {
                textStyle: {
                    fontWeight: 'bolder',
                    fontSize: 12,
                    fontStyle: 'italic'
                }
            },
            detail: {
                textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                    fontWeight: 'bolder',
                    fontSize: 10,
                },
                formatter: function(v) {
                    switch (v + '') {
                        case '0':
                            return 'Good';
                        case '1':
                            return 'Mid';
                        case '2':
                            return 'Hazard';
                    }
                }
            },
            data: [{
                value: 1,
                name: 'pollution level'
            }]
        }, ]
    };


    option.series[0].data[0].value = 550;
    option.series[1].data[0].value = 24;
    option.series[2].data[0].value = 1;
    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option, true);

</script>


<?php
{{include '../public_php/sidebar_start.php';}}
{{include '../public_php/level_bar.php';}}
{{include '../public_php/date_bar.php';}}
{{include '../public_php/footer.php';}}
?>