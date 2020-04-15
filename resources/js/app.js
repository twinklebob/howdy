require('./bootstrap');

function ready(fn) {
  if (document.readyState != "loading") {
    fn();
  } else {
    document.addEventListener("DOMContentLoaded", fn);
  }
}

// Borrowed from https://stackoverflow.com/a/15397495/1016336
const nth = function(d) {
  if (d > 3 && d < 21) return 'th';
  switch (d % 10) {
    case 1:  return "st";
    case 2:  return "nd";
    case 3:  return "rd";
    default: return "th";
  }
}

ready(function() {
    // Get todays date and fill the required cards

    let today = new Date();
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]


    document.getElementById('day').innerHTML = days[today.getDay()];

    document.getElementById('dom').innerHTML = today.getDate() + nth(today.getDate());
    document.getElementById('month').innerHTML = months[today.getMonth()];
    document.getElementById('year').innerHTML = today.getFullYear();
});
