
function Test(){
    var pass=formulaire.pass.value;
    var pass2=formulaire.pass2.value;
    if (pass!==pass2){
        alert(" Les deux mots de passes ne correspondent pas !");
        return false;
        formulaire.pass.focus();
    }
}

