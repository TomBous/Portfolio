



    

         function submitForm() {
            const inputs = document.querySelectorAll('input');
            const textarea = document.querySelector('textarea');
            const envoyer = document.querySelector('form button');

            var name = inputs[0].value;
            var email = inputs[1].value;
            var message = textarea.value;

            let regexUsername = new RegExp(/^\w{3,}$/);
            let regexEmail = new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/);
            let regexText = new RegExp(/^[a-zA-Z\d\s,.:éàèù()%=€ïîê!?]{10,500}$/);
            
            // Animation de validation
            if (!regexUsername.test(name)) {
              inputs[0].parentNode.classList.add("invalid");
              inputs[0].parentNode.classList.add("shake-top");
            } else {
              inputs[0].parentNode.classList.add("valid");
            }
            inputs[0].onclick = function() {
              inputs[0].parentNode.classList.remove("invalid");
              inputs[0].parentNode.classList.remove("valid");
            };
            if (!regexEmail.test(email)) {
              inputs[1].parentNode.classList.add("invalid");
              inputs[1].parentNode.classList.add("shake-top");
            } else {
              inputs[1].parentNode.classList.add("valid");
            }
            inputs[1].onclick = function() {
              inputs[1].parentNode.classList.remove("invalid");
              inputs[1].parentNode.classList.remove("valid");
            };
            if (!regexText.test(message)) {
              textarea.classList.add("invalid");
              textarea.classList.add("shake-top");
            } else {
              textarea.classList.add("valid");
            }
            textarea.onclick = function() {
              textarea.classList.remove("invalid");
              textarea.classList.remove("valid");
            };
            // SEND

            if (regexUsername.test(name) && regexEmail.test(email) && regexText.test(message)) {
                envoyer.disabled = true;
                envoyer.innerHTML = "En cours...";
                var formdata = new FormData();
                formdata.append("name", name);
                formdata.append("email", email);
                formdata.append("msg", message);
                console.log(formdata);
                var ajax = new XMLHttpRequest();
                ajax.open("POST", "send.php");
                ajax.onreadystatechange = function() {
                    if(ajax.readyState == 4 && ajax.status == 200) {
                        if(ajax.responseText == "success") {
                            envoyer.innerHTML = "Envoyé !!";
                        } else {
                            envoyer.innerHTML = ajax.responseText;
                            envoyer.disabled = false;
                        }
                    }
                }
            ajax.send(formdata);    

            }

        };
    
        var upperAppear = function() {
          upper = document.getElementsByClassName("upper");
          var y = window.scrollY;
          if (y >= 200) {
            upper[0].classList.add("appear");
          } else {
            upper[0].classList.remove("appear");
          }
        };
        
        window.addEventListener("scroll", upperAppear);


    function AnimateBarres2() {
        const Bars2 = {
            'angular' : 60,
            'react' : 15,
            'vue' : 10,
            'handlebars' : 45
        }
        var top = this.scrollY;
        const hauteurEcran = window.innerHeight / 1.5;
        if (top + 250 > hauteurEcran*2) {
            Object.keys(Bars2).forEach(function (item) {
            var bar = new ldBar(`#${item}`,{
                "stroke": "data:ldbar/res,gradient(0,5,#9df,#9fd,#df9,#fd9)",
                "stroke-width": 10,
                "value": 0
                });
            bar.set(Bars2[item]);
            window.removeEventListener('scroll', AnimateBarres2);
            });
        }
    }
    function AnimateBarres1() {
            const Bars1 = {
                'html' : 90,
                'css' : 80,
                'php' : 30,
                'js' : 45
            }           
                var top = this.scrollY;
                const hauteurEcran = window.innerHeight / 1.5;
                if (top + 100 > hauteurEcran) {
                    Object.keys(Bars1).forEach(function (item) {
                    var bar = new ldBar(`#${item}`,{
                        "stroke": "data:ldbar/res,gradient(0,5,#9df,#9fd,#df9,#fd9)",
                        "stroke-width": 10,
                        "value": 0
                        });
                    bar.set(Bars1[item]);
                    window.removeEventListener('scroll', AnimateBarres1);
                    });
                    window.addEventListener('scroll', AnimateBarres2);
                }

    }
   window.addEventListener('scroll', AnimateBarres1);

