/*var bouton = document.getElementById('login');
console.log("Hello World");
bouton.addEventListener('click', function() {
    window.open('login.html', '_blank'); 
});

bouton.click();*/

var button=document.getElementById("but1");



function opened(){
    window.open('login.html');
}

function open2(){
    window.open('signup.html');
}

/*
// Email attendu
var emailAttendu = "ayoub";
var passwordAttendu="oum";

// Sélectionner les éléments du DOM
var emailInput = document.getElementById("emailinput");
var logintBtn = document.getElementById("but1");
var passwordInput =document.getElementById("passwordinput");

// Ajouter un gestionnaire d'événements au clic du bouton
logintBtn.addEventListener("click", function() {
    // Récupérer la valeur de l'email entré par l'utilisateur
    var emailSaisi = emailInput.value;
    var passwordSaisie=passwordInput.value ;

    // Vérifier si l'email entré correspond à l'email attendu
    if (emailSaisi === emailAttendu && passwordSaisie==passwordAttendu) {
        // Rediriger vers une nouvelle page si l'email est correct
        window.location.href = "studentinterface.html";
    } else {
        // Afficher un message d'erreur si l'email est incorrect
        alert("Incorrect Email , please try again ");
    }
});*/

function test(){

    var pass1=document.getElementById("passwordfield").value;
    var pass2=document.getElementById("passwordfield2").value;
    document.getElementById("p12").innerHTML =" Hello World" ;

    if( pass1!=pass2 ){
      document.getElementById("p12").innerHTML ="Erreur de Confirmation " ;
    }
}