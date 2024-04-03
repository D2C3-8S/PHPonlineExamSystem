// ****** function date ******

const timeElement = document.querySelector(".time");
const dateElement = document.querySelector(".date");

function formatTime(date) {
  const hours12 = date.getHours() % 12 || 12;
  const minutes = date.getMinutes();
  const isAm = date.getHours() < 12;

  return `${hours12.toString().padStart(2, "0")}:${minutes
    .toString()
    .padStart(2, "0")} ${isAm ? "AM" : "PM"}`;
}

function formatDate(date) {
  const DAYS = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  const MONTHS = [
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
  return `${DAYS[date.getDay()]}, ${
    MONTHS[date.getMonth()]
  }, ${date.getDate()}, ${date.getFullYear()}`;
}

setInterval(() => {
  const now = new Date();
  timeElement.textContent = formatTime(now);
  dateElement.textContent = formatDate(now);
}, 200);

/*********Timer Function Process ********/

// global variables
const time_el = document.getElementById("setTimer");
const start_btn = document.getElementById("startButton");
const stop_btn = document.getElementById("stopButton");
const reset_btn = document.getElementById("resetButton");
const submit_btn = document.getElementById("submit");
const totalTimeInput = document.getElementById("totalTimeInput"); // New line

let seconds = 0;
let interval = null;

// Events Listener
start_btn.addEventListener("click", start);
stop_btn.addEventListener("click", stop);
reset_btn.addEventListener("click", reset);
submit_btn.addEventListener("click", stop);

// update the timer
function timer() {
  seconds++;

  // format the timer
  let hours = Math.floor(seconds / 3600);
  let mins = Math.floor((seconds - hours * 3600) / 60);
  let secs = seconds % 60;

  if (secs < 10) secs = "0" + secs;
  if (mins < 10) mins = "0" + mins;
  if (hours < 10) hours = "0" + hours;

  time_el.innerText = `${hours}:${mins}:${secs}`;

  // Store the total time in the hidden input field
  totalTimeInput.value = `${hours}:${mins}:${secs}`;
}
// timer();

function start() {
  if (interval) {
    return;
  }
  interval = setInterval(timer, 1000);
}
function stop() {
  clearInterval(interval);
  interval = null;
}
function reset() {
  stop();
  seconds = 0;
  time_el.innerText = "00:00:00";

  // Reset the value of the hidden input field
  totalTimeInput.value = "00:00:00";
}
