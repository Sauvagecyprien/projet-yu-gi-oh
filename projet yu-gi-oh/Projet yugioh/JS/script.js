/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }



  /* Open when someone clicks on the span element */
function openNav2() {
    document.getElementById("myNav2").style.width = "100%";
  }
  
  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav2() {
    document.getElementById("myNav2").style.width = "0%";
  }







  function lol() {

    var $x = $("#formats").find(":selected").text();
    switch ($x) {
        case "Speed Duel":
            $("#max_deck").html("30");
            $("#max_extra_deck").html("5");
            $("#max_side_deck").html("1");
            $("#nombre_side_deck").html("0");
            $("#titre_side_deck").html("Compétences");
            $("#affichage_side_deck").html("Compétences : ")

            break;
        case "Classique":
            $("#max_deck").html("60");
            $("#max_extra_deck").html("15");
            $("#max_side_deck").html("15");
            $("#nombre_side_deck").html("0");
            $("#titre_side_deck").html("Side Deck");
            $("#affichage_side_deck").html("Side Deck : ");
            break;
        case "Avancé":
            $("#max_deck").html("60");
            $("#max_extra_deck").html("15");
            $("#max_side_deck").html("15");
            $("#nombre_side_deck").html("0");
            $("#titre_side_deck").html("Side Deck");
            $("#affichage_side_deck").html("Side Deck : ");
            break;

        case "Aucun":
            $("#max_deck").html("Infini");
            $("#max_extra_deck").html("Infini");
            $("#max_side_deck").html("Infini");
            $("#nombre_side_deck").html("0");
            $("#titre_side_deck").html("Side Deck");
            $("#affichage_side_deck").html("Side Deck : ");
            break;
        default:
            break;
    }

}
