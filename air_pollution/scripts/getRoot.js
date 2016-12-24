/**
 * Created by lxx on 12/23/16.
 */
var _ROOTPATH_ = getRootPath();

function getRootPath(){
    var strFullPath=window.document.location.href;
    var strPath=window.document.location.pathname;
    var pos=strFullPath.indexOf(strPath);
    var prePath=strFullPath.substring(0,pos);
    var postPath=strPath.substring(0,strPath.substr(1).indexOf('/')+1);
    return(prePath+postPath);
}

setpath(_ROOTPATH_);

function setpath(_ROOTPATH_){
    var real_one = document.getElementById("realtime_onecity");
    var real_mul = document.getElementById("realtime_multicity");
    var hist_one = document.getElementById("history_onecity");
    var hist_mul = document.getElementById("history_multicity");
    var peak_one = document.getElementById("peak_onecity");
    var peak_mul = document.getElementById("peak_multicity");
    var natr_env = document.getElementById("natural_env");
    var emis_src = document.getElementById("emission_src");
    var huma_bhv = document.getElementById("human_bhv");

    real_one.setAttribute("href", _ROOTPATH_ + "/real_time/one_city.php");
    real_mul.setAttribute("href", _ROOTPATH_ + "/real_time/multi_city.php");
    hist_one.setAttribute("href", _ROOTPATH_ + "/history/one_city.php");
    hist_mul.setAttribute("href", _ROOTPATH_ + "/history/multi_city.php");
    peak_one.setAttribute("href", _ROOTPATH_ + "/peak/one_city.php");
    peak_mul.setAttribute("href", _ROOTPATH_ + "/peak/multi_city.php");
    natr_env.setAttribute("href", _ROOTPATH_ + "/natural/environment.php");
    emis_src.setAttribute("href", _ROOTPATH_ + "/emission/source.php");
    huma_bhv.setAttribute("href", _ROOTPATH_ + "/human/behavior.php");
}