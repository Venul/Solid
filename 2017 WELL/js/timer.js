
timeend= new Date();
// IE и FF по разному отрабатывают getYear()
timeend = new Date("Dec 1 2017 04:00:00");
// для задания обратного отсчета до определенной даты укажите дату в формате:
// timeend= new Date(ГОД, МЕСЯЦ-1, ДЕНЬ);
// Для задания даты с точностью до времени укажите дату в формате:
// timeend= new Date(ГОД, МЕСЯЦ-1, ДЕНЬ, ЧАСЫ-1, МИНУТЫ);
function time() {
    today = new Date();
    today = Math.floor((timeend-today)/1000);
    tsec=today%60; today=Math.floor(today/60); if(tsec<10)tsec='0'+tsec;
    tmin=today%60; today=Math.floor(today/60); if(tmin<10)tmin='0'+tmin;
    thour=today%24; today=Math.floor(today/24);
    document.getElementById('day').innerHTML=today;
    document.getElementById('hour').innerHTML=thour;
    document.getElementById('min').innerHTML=tmin;
    document.getElementById('sec').innerHTML=tsec;
    window.setTimeout("time()",1000);
}

time();