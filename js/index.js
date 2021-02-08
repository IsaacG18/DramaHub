const date = new Date();

const highlights = (day) => { 
    var month = date.getMonth();
 $(document).ready(function () {
    $(".prev").click(function () {
       
        
        
            $.post("FindDate.php", {month: month, day: day},
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('Wrong')) {
                            
                           return false;
                        }else if (data.includes('Successful')) {
                            console.log(data);
                            return true;
                        } else {
                            alert('Check with system admin, report this message login.js 26 '+ data);
                        }
                    });
        });
    }); return false;
};

   

           
    
   

        
     
   
      
  
const renderCalendar = () => {
  date.setDate(1);

  const monthDays = document.querySelector(".days");

  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDate();

  const prevLastDay = new Date(
    date.getFullYear(),
    date.getMonth(),
    0
  ).getDate();

  const firstDayIndex = date.getDay();

  const lastDayIndex = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDay();

  const nextDays = 7 - lastDayIndex - 1;

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  document.querySelector(".date h1").innerHTML = months[date.getMonth()];

  document.querySelector(".date p").innerHTML = new Date().toDateString();
    
  let days = "";

  for (let x =firstDayIndex; x > 0; x--) {
    days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
  }
    
  for (let i = 1; i <= lastDay; i++) {
      var state = highlights(i);
      console.log(true);
    if (
      i === new Date().getDate() &&
      date.getMonth() === new Date().getMonth()
    ) {
      days += `<div class="today">${i}</div>`;
    }else if(state === true){
      days += `<div class="today">${i}</div>`;          
    }else {
      days += `<div>${i}</div>`;
    }
  }

  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="next-date">${j}</div>`;
    monthDays.innerHTML = days;
  }
};

document.querySelector(".prev").addEventListener("click", () => {
  date.setMonth(date.getMonth() - 1);
  
  renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
  date.setMonth(date.getMonth() + 1);
  renderCalendar();
});

renderCalendar();