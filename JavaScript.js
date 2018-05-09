var add = document.getElementById('ajouter');
var previous = document.getElementById('capteur');
var Add = function(){
    var hr1 = document.createElement('span');
    var hr2 = hr1.cloneNode(false); // Il n'a pas d'enfants…
// Ici, on clone un élément existant :
    var paragraph1 = document.getElementById('capteur');
    var paragraph2 = paragraph1.cloneNode(true);
// Et attention, l'élément est cloné, mais pas « inséré » tant que l'on n'a pas appelé appendChild() :
    paragraph1.parentNode.appendChild(paragraph2);

};
add.addEventListener('click',Add);

//var suppr = document.getElementById('Supprimer');

var suppr = document.getElementById('parent');
var enf = document.getElementById('capteur');

var Suppr = function(){
    suppr.remove(enf);

    // Ici, on clone un élément existant :
    //var paragraph1 = suppr.parentNode.delete;
// Et attention, l'élément est cloné, mais pas « inséré » tant que l'on n'a pas appelé appendChild() :
    //paragraph1.removeChild();

};
suppr.addEventListener('click',Suppr);



/*var capteur = suppr.parentNode;
suppr.onclick.remove(capteur);

link.parentNode.parentNode.removeChild(previous);

var link = document.getElementById('Supprimer').parentNode;
var suppr = document.getElementById('Supprimer');
suppr.onclick.remove(suppr.parentNode);
*/


