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
//
function changesheet() {
          //wijzig css
          var sheet=document.getElementById("style");
          //set sheet.x 
          sheet.x = getCookie("schema");
          //toggle
          if (sheet.x == 'stylesheet') {
              sheet.x = 'stylesheet_alt';
          }
          else {
            if (sheet.x == ""){
              sheet.x = 'stylesheet_alt';
            }
            else {
               sheet.x = 'stylesheet';
            }  
          }
          
          sheet.href = 'css/' + sheet.x + '.css';
          //set cookiemonster          
          setCookie("schema", sheet.x);
        }
        //cookie functions
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
            }
            return "";
        }