<?php {{include '../public_php/header.php';}}  ?>

<h2>Highest PM2.5 value of all time across all cities</h2>
<!-- prepare a DOME (with height and width) for Echarts -->
<div id="main" style="width: 600px;height:400px;"></div>

<br/>
<br/>

<h2>Highest average PM2.5 value on one city</h2>
<!-- prepare a DOME (with height and width) for Echarts -->
<div id="main1" style="width: 600px;height:400px;"></div>

<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));
    var myChart1 = echarts.init(document.getElementById('main1'));
    var uploadedDataURL = "../json/history_one.json";

    //app.title = 'City\'s History PM2.5 ranked by value';

    var option = {
        title: {
            text: 'PM2.5 (μg/m3)',
            left: '40%',
            top:  '15%'
        },
        color: ['#3398DB'],
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '30%',
            containLabel: true
        },
        xAxis : [
            {
                type : 'category',
                "axisLabel":{
                    interval: 0,
                    rotate: 90,
                    margin: 08
                },
                data : ['Daqing 02/07/2016', 'Langfang 02/08/2016','Daqing 02/06/2016','Wuhan 02/09/2016',
                    'Hefei 02/22/2016','Heze 02/10/2016','Quzhou 02/11/2016','Wuhan 02/23/2016','Quzhou 02/24/2016',
                    'Quzhou 02/25/2016','Heze  02/29/2016','Daqing 02/13/2016','Langfang 02/01/2016','Heze 02/05/2016',
                    'Hefei 02/03/2016','Quzhou 02/28/2016','Wuhan 02/04/2016','Heze 02/15/2016','Quzhou 02/14/2016',
                    'Langfang 02/26/2016','Daqing 02/17/2016','Hefei 02/20/2016','Heze 02/21/2016','Wuhan 02/16/2016',
                    'Quzhou 02/19/2016','Langfang 02/27/2016','Hefei 02/18/2016','Heze  02/02/2016','Wuhan 02/12/2016'],
                axisTick: {
                    alignWithLabel: false
                }
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'PM2.5',
                type:'bar',
                barWidth: '60%',
                data:[405,383,371,361,314,271,242,221,196,188,178,166,165,153,149,
                    142,138,132,128,118,116,105,99,98,77,73,62,52,49]
            }
        ]
    };

    var option1 = {
        title: {
            text: 'sum(PM2.5)/count(days)',
            left: '35%',
            top:  '15%'
        },
        color: ['#3398DB'],
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '30%',
            containLabel: true
        },
        xAxis : [
            {
                type : 'category',
                "axisLabel":{
                    interval: 0,
                    rotate: 90,
                    margin: 08
                },
                data : ['Daqing', 'Langfang', 'Wuhan', 'Quzhou', 'Hefei','Heze', 'Qinhuangdao', 'Shijiazhuang',
                    'Baodin', 'Changchun', 'Jilin', 'Haerbin', 'Tonghua', 'Jiamusi', 'Jilin', 'Luoyang',
                    'Zhengzhou', 'Laiwu', 'Beijing', 'Tianjin','Changsha'],
                axisTick: {
                    alignWithLabel: false
                }
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'PM2.5',
                type:'bar',
                barWidth: '60%',
                data:[324,299,272,240,186,184,178,140,131,130,121,120,104,103,91,90,75,73,66,54,28]
            }
        ]
    };

    myChart.setOption(option, true)
    myChart1.setOption(option1, true)
</script>


<?php
{{include '../public_php/sidebar_start.php';}}
{{include '../public_php/level_bar.php';}}
{{include '../public_php/date_bar.php';}}
{{include '../public_php/footer.php';}}
?>