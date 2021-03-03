const date = new Date();

function daysInMonth (month, year) {
    return new Date(year, month, 0).getDate();
}

const fillCalendar = (firstDayIndex, prevLastDay, nextDays, monthDays) => { 
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    var days = daysInMonth(month, year);
   
            $.post("FindDate.php", {year: year, month:  month, days: days},
                     function (data) {  
                        if (data.includes('<div>')) {
                            let days = "";
                            for (let x =firstDayIndex; x > 0; x--) {
                            days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
  }
                            days += data;
                            
                            for (let j = 1; j <= nextDays; j++) {
                            days += `<div class="next-date">${j}</div>`;
                            monthDays.innerHTML = days;
                            
                            }        
                        } else {
                            alert(data);
                        }
                    });
                    
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
  

  document.querySelector(".date a").innerHTML = months[date.getMonth()] + "<br>" + date.getFullYear();

  document.querySelector(".date p").innerHTML = new Date().toDateString();
    


  
  fillCalendar(firstDayIndex, prevLastDay, nextDays, monthDays); 

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