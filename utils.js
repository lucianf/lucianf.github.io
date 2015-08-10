
function Array() {
  for (i = 0; i<Array.arguments.length; i++)
    this[i] = Array.arguments[i];
}

function y2k(number) {
  return (number < 1000) ? number + 1900 : number;
}

function fixedYear(year) {
  year = year - 0;
  if (year < 70) return (2000 + year);
  if (year < 1900) return (1900 + year);
  return year;
}

function insLastUpd(lng) {

  var dateError = new Date(document.lastModified);
  var date = new Date(fixedYear(dateError.getYear()),dateError.getMonth(),dateError.getDate());

  if (lng == "EN") {

    var dayNames = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
    var monthNames = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
    document.write('Last Updated: ' + dayNames[date.getDay()] + ', ' + monthNames[date.getMonth()] + ' ' + date.getDate() + ', ' + y2k(date.getYear()));

  } else {

    var dayNames = new Array('duminicã','luni','marți','miercuri','joi','vineri','sîmbătă');
    var monthNames = new Array('ianuarie','februarie','martie','aprilie','mai','iunie','iulie','august','septembrie','octombrie','noiembrie','decembrie');
    document.write('Ultima actualizare: ' + dayNames[date.getDay()] + ', ' + date.getDate() + ' ' + monthNames[date.getMonth()] + ' ' + y2k(date.getYear()));

  }
}
