//ad_detail에서 구인광고 남은 시간
$(document).ready(function(){
const remainTime = document.querySelector("#clock");

function diffDay() {
    const masTime = new Date("2022-12-25");
    const todayTime = new Date();
    
    const diff = masTime - todayTime;

    const diffDay = String(Math.floor(diff / (1000*60*60*24)));
    const diffHour =String( Math.floor((diff / (1000*60*60)) % 24)).padStart(2,"0");
    const diffMin = String(Math.floor((diff / (1000*60)) % 60)).padStart(2,"0");
    const diffSec = String(Math.floor(diff / 1000 % 60)).padStart(2,"0");
    
    remainTime.innerText = `${diffDay}일 ${diffHour} : ${diffMin} : ${diffSec}`;
};

diffDay();
setInterval(diffDay, 1000);
})