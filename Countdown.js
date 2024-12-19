
// Set the date we're counting down to
var countDownDate = new Date("Dec 25, 2024 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var currentTime = new Date().getTime();
    
  // Time calculations for days, hours, minutes and seconds
  const SECOND  = 1000;
  const MINUTE = SECOND * 60;
  const HOUR = MINUTE *60;
  const DAY = HOUR * 24; 
  
  // Find the time difference between the current time and the count down date
  var TimeDiff = countDownDate - currentTime;

  //Countdown calculations for days, hours, minutes, seconds
  var days = Math.floor(TimeDiff / DAY);
  var hours = Math.floor((TimeDiff % DAY) / HOUR);
  var minutes = Math.floor((TimeDiff % HOUR) / MINUTE);
  var seconds = Math.floor((TimeDiff % MINUTE) / SECOND);
    
  // Output the result in an element 
  PagenTime.innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s";
    
  // If the count down is over, write some text 
  if (TimeDiff < 0) {
    clearInterval(x);
    PagenTime.innerHTML = "Merry Christmas, its time for the Pagen Sweepstakes Giveaway";
  }
  //If the day is 1 day before the countDownDate
  else if (days < 2 && days > 1){
  	TimeText.innerHTML ="Its Christmas Eve! One more day until the Pagen Sweepstakes Giveaway is here!";
    }
    //If the day is before the cut off date
    else if(days > 2){
      TimeText.innerHTML = "Make sure to enter in the Pagen Sweepstakes Giveaway for Christmas Eve!";
    }
    //Any other condition
    else{
      TimeText.innerHTML = "Happy Holidays!";
        
    }
}, 1000); //1000 ms is 1 second