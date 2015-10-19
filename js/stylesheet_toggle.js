function changesheet() {
          //wijzig css
          var sheet=document.getElementById("style");
          console.log(sheet.href+ "    hreef");
          //set sheet.x 
          sheet.x = getCookie("schema");
          //toggle
          console.log(sheet.x + "  -   sheet.x");
          if (sheet.x == 'stylesheet') {
              sheet.x = 'stylesheet_alt';
              console.log("ik zit in de if");
          }
          else {
              sheet.x = 'stylesheet';
              console.log("in de else");
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