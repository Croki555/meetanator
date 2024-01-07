import AirDatepicker from 'air-datepicker';
import 'air-datepicker/air-datepicker.css';

const currentDate = new Date();
const year = currentDate.getFullYear();
const month = currentDate.getMonth();
const day = currentDate.getDate();

let nextDate = new Date();
nextDate.setMonth(nextDate.getMonth() + 1);
let nextMonthYear = nextDate.getFullYear();
let nextMonth = nextDate.getMonth();
let nextDateDay = nextDate.getDate();

function getLastDayOfMonth(year, month) {
    let nextMonth = new Date(year, month + 1, 0);
    return nextMonth.getDate();
}

let lastDay = getLastDayOfMonth(year, month);
let lastDay2 = getLastDayOfMonth(year, nextMonth);

new AirDatepicker('#month1', {
    currentDate,
    multipleDates: 5,
    showOtherMonths: false,
    limit: 5,

    minDate: new Date(year, month, day),
    maxDate: new Date(year, month, lastDay),
});

new AirDatepicker('#month2', {
    nextDate,
    multipleDates: 5,
    showOtherMonths: false,
    limit: 5,

    minDate: new Date(nextMonthYear, nextMonth, nextDateDay),
    maxDate: new Date(nextMonthYear, nextMonth, lastDay2),
});

const inputFields = ['month1', 'month2'];

inputFields.forEach((field) => {
    const inputField = document.getElementById(field);
    inputField.addEventListener('keydown', (event) => {
        event.preventDefault();
    });
});



