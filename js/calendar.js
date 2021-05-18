const date = new Date();

function daysInMonth (month, year) {
    return new Date(year, month, 0).getDate();//Gets each day in a month
}

const fillCalendar = (firstDayIndex, prevLastDay, nextDays, monthDays) => { 
    var year = date.getFullYear();//Get the dates year
    var month = date.getMonth() + 1;//Get the dates month
    var days = daysInMonth(month, year);//Get every day in a month
            
            $.post("FindDate.php", {year: year, month:  month, days: days},//run file get FindDate.php
                     function (data) {  //The data echo response from the php file
                        if (data.includes('</div>')) {//If php echo response includes </div>
                            let days = "";
                            for (let x =firstDayIndex; x > 0; x--) {
                            days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;//Add days in the week before month
  }
                            days += data;
                           
                            
                            for (let j = 1; j <= nextDays; j++) {
                            days += `<div class="next-date">${j}</div>`;//Add days in the week after month
                            monthDays.innerHTML = days;//Set days to calender
                            
                            }        
                        } else {
                            alert('Check with system admin, report this message'+ data);//Alerts send and deals with an error from the php file 
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
  

  document.querySelector(".date a").innerHTML = months[date.getMonth()] + "<br>" + date.getFullYear();//Set month and year to be displayed

  document.querySelector(".date p").innerHTML = new Date().toDateString();//Set current date to appear at the top of the page
    


  
  fillCalendar(firstDayIndex, prevLastDay, nextDays, monthDays); 

  };

document.querySelector(".prev").addEventListener("click", () => {
  date.setMonth(date.getMonth() - 1);//Moves the month backwards
  
  renderCalendar();//Re-runs calendar now with new month
});

document.querySelector(".next").addEventListener("click", () => {
  date.setMonth(date.getMonth() + 1);//Moves the month forward
  renderCalendar();//Re-runs calendar now with new month
});

renderCalendar();