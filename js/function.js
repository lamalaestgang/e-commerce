function Afficherdate(){
    var ladate = new Date()
    var tab_mois = new Array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
    var tab_jour = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
   
    var dateText = tab_jour[ladate.getDay()] + ", le " + ladate.getDate() + " " + tab_mois[ladate.getMonth()] + " " + ladate.getFullYear();
    document.getElementById("date").innerText = dateText;
  }
  function DecocherCase(){
    function annulerConfirmation() {
      var checkboxes = document.querySelectorAll('input[type="checkbox"]');
      for (var i = 0; i < checkboxes.length; i++) {
          checkboxes[i].checked = false;
      }
  }
  }