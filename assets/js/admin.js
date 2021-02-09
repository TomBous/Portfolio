function submitProject() {
  console.log("toto!");
  const inputs = document.querySelectorAll("#project-form input");
  const textarea = document.querySelector("#project-form textarea");
  const select = document.querySelector("#project-form select");
  const envoyer = document.querySelector("#project-form button");

console.log(envoyer);

  var titre = inputs[0].value;
  var date = inputs[1].value;
  var miniature = inputs[2].files[0];
  var zip = inputs[3].files[0];
  var description = textarea.value;
  var client = select.options[select.selectedIndex].value;

 if (typeof titre !== 'undefined'&& typeof zip !== 'undefined') {
    console.log('toto222222');
  var formdata = new FormData();
  formdata.append("titre", titre);
  formdata.append("description", description);
  formdata.append("date", date);
  formdata.append("id_client", client);
  formdata.append("miniature", miniature);
  formdata.append("zip", zip);
  var request = new XMLHttpRequest();
  request.open("POST", "admin.php");
  request.send(formdata);
  request.onreadystatechange = function() {
    console.log('res', request );
    if (request.readyState == 4 && request.status == 200) {
      if (request.statusText == "OK") {
        envoyer.innerHTML = "Reçu 5/5 !";
      } else  {
        envoyer.innerHTML = "Erreur !";
      }
    }
  };
}
}

function submitClient() {
  const inputs = document.querySelectorAll("#client-form input");
  const envoyer = document.querySelector("#client-form button");

  var prenom = inputs[0].value;
  var nom = inputs[1].value;
  var email = inputs[2].value;

 if (typeof nom !== 'undefined'&& typeof email !== 'undefined') {
  var formdata = new FormData();
  formdata.append("prenom", prenom);
  formdata.append("nom", nom);
  formdata.append("email", email);
  var request = new XMLHttpRequest();
  request.open("POST", "admin.php");
  request.send(formdata);
  request.onreadystatechange = function() {
    if (request.readyState == 4 && request.status == 200) {
      if (request.statusText == "OK") {
        envoyer.innerHTML = "Reçu 5/5 !";
      } else  {
        envoyer.innerHTML = "Erreur !";
      }
    }
  };
}
}
