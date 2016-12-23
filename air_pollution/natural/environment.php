<?php {{include '../public_php/header.php';}}  ?>

<h2>Natrual conditions's influence on air PM2.5 dencity</h2><br/>
<!-- prepare a DOME (with height and width) for Echarts -->
<div id="main1" style="width: 600px;height:400px;"></div>
<div id="main2" style="width: 600px;height:400px;"></div>
<div id="main3" style="width: 600px;height:400px;"></div>
<div id="main4" style="width: 600px;height:400px;"></div>
<div id="main5" style="width: 600px;height:400px;"></div>

<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例

    var myChart1 = echarts.init(document.getElementById('main1'));
    var myChart2 = echarts.init(document.getElementById('main2'));
    var myChart3 = echarts.init(document.getElementById('main3'));
    var myChart4 = echarts.init(document.getElementById('main4'));
    var myChart5 = echarts.init(document.getElementById('main5'));
    var uploadedDataURL = "../json/history_one.json";

    var colors = ['#5793f3', '#d14a61'];

    var option1 = {
        title: {
            text: 'wind speed & PM2.5 level'
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
            data:['Wind Speed','Daily Average PM2.5'],
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
                name: 'Wind Speed',
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
                name:'Wind Speed',
                type:'line',
                data:[2.0, 4.9, 7.0, 2.2, 5.6, 6.7, 5.6, 2.2, 2.6, 1.0, 6.4, 3.3]
            },
            {
                name:'Daily Average PM2.5',
                type:'line',
                yAxisIndex: 1,
                data:[220, 160, 23, 145, 53, 15.2, 45, 168, 199, 335, 12.0, 83]
            }
        ]
    };

    var option2 = {
        title: {
            text: 'humidity & PM2.5 level'
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
            data:['humidity','Daily Average PM2.5'],
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
                name: 'humidity',
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
                name:'humidity',
                type:'line',
                data:[2.0, 4.9, 7.0, 2.2, 5.6, 6.7, 5.6, 2.2, 2.6, 1.0, 6.4, 3.3]
            },
            {
                name:'Daily Average PM2.5',
                type:'line',
                yAxisIndex: 1,
                data:[220, 160, 23, 145, 53, 15.2, 45, 168, 199, 335, 12.0, 83]
            }
        ]
    };

    var option3 = {
        title: {
            text: 'precipitation & PM2.5 level'
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
            data:['precipitation','Daily Average PM2.5'],
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
                name: 'precipitation',
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
                name:'precipitation',
                type:'line',
                data:[2.0, 4.9, 7.0, 2.2, 5.6, 6.7, 5.6, 2.2, 2.6, 1.0, 6.4, 3.3]
            },
            {
                name:'Daily Average PM2.5',
                type:'line',
                yAxisIndex: 1,
                data:[220, 160, 23, 145, 53, 15.2, 45, 168, 199, 335, 12.0, 83]
            }
        ]
    };

    var option4 = {
        title: {
            text: 'temperature & PM2.5 level'
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
            data:['temperature','Daily Average PM2.5'],
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
                name: 'temperature',
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
                name:'temperature',
                type:'line',
                data:[2.0, 4.9, 7.0, 2.2, 5.6, 6.7, 5.6, 2.2, 2.6, 1.0, 6.4, 3.3]
            },
            {
                name:'Daily Average PM2.5',
                type:'line',
                yAxisIndex: 1,
                data:[220, 160, 23, 145, 53, 15.2, 45, 168, 199, 335, 12.0, 83]
            }
        ]
    };

    var option5 = {
        title: {
            text: 'air pressure & PM2.5 level'
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
            data:['air pressure','Daily Average PM2.5'],
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
                name: 'air pressure',
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
                name:'air pressure',
                type:'line',
                data:[2.0, 4.9, 7.0, 2.2, 5.6, 6.7, 5.6, 2.2, 2.6, 1.0, 6.4, 3.3]
            },
            {
                name:'Daily Average PM2.5',
                type:'line',
                yAxisIndex: 1,
                data:[220, 160, 23, 145, 53, 15.2, 45, 168, 199, 335, 12.0, 83]
            }
        ]
    };

    myChart1.setOption(option1, true)
    myChart2.setOption(option2, true)
    myChart3.setOption(option3, true)
    myChart4.setOption(option4, true)
    myChart5.setOption(option5, true)
</script>



<?php
{{include '../public_php/sidebar_start.php';}}
{{include '../public_php/level_bar.php';}}
{{include '../public_php/date_bar.php';}}
{{include '../public_php/footer.php';}}
?>