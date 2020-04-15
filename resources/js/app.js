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

// Adapted from https://stackoverflow.com/a/5670907/1016336
function getSeason(month) {
    switch (month) {
        case 11:
        case 0:
        case 1:
            return "winter";
        case 2:
        case 3:
        case 4:
            return "spring";
        case 5:
        case 6:
        case 7:
            return "summer";
        default:
            return "autumn";
    }
}

ready(function() {
    // Get todays date and fill the required cards

    let today = new Date();
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const seasons = {
        'winter': {
            'icon': 0x2603, // Snowman: ☃️
            'colour': 'blue'
        },
        'spring': {
            'icon': 0x1F423, // Hatching chick: 🐣
            'colour': 'green'
        },
        'summer': {
            'icon': 0x1F31E, // Sun with face: 🌞
            'colour': 'orange'
        },
        'autumn': {
            'icon': 0x1F342, // Fallen leaf: 🍂
            'colour': 'red'
        }
    }

    document.getElementById('day').innerHTML = days[today.getDay()];

    document.getElementById('dom').innerHTML = today.getDate() + nth(today.getDate());
    document.getElementById('month').innerHTML = months[today.getMonth()];
    document.getElementById('year').innerHTML = today.getFullYear();

    let seasonEl = document.getElementById('season');
    let season = getSeason(today.getMonth());
    seasonEl.innerHTML = String.fromCodePoint(seasons[season].icon) + ' ' + season.charAt(0).toUpperCase() + season.substr(1);
    seasonEl.parentElement.className = 'card ' + seasons[season].colour;
});
