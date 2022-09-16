function displayTime(){
    var d = new Date();
    var days = d.getDate();
    var hours = d.getHours();
    var mins = d.getMinutes();
    var secs = d.getSeconds();
    document.getElementById('clock').innerHTML =
         'Date:' + days + ' Time:' + hours + ':' + mins + ':' + secs;
    var t=setTimeout(displayTime,500);
    document.getElementById('log').innerHTML =
    'Most recent visited:'+'Date:' + days + ' Time:' + hours + ':' + mins + ':' + secs;
}
