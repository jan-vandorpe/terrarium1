//verwijder <link>s naar bootstrap en stylesheet.css
//zet link naar dit script in de plaats
//laat matrix.css staan
//doe dit en god zal u belonen. amen.
var adres = getCookie("schema");
if (adres == "") {
  adres = "stylesheet";
}
var link = 'css/' + adres + '.css';
document.write('<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"  />');
document.write('<link rel="stylesheet" type="text/css" href="'+link+'" id="style" />');