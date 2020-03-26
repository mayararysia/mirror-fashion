$(document).ready(function() {
    document.getElementById('rodape').remove();

    var children = $("#rodapeGeral").contents();
    $("#rodapeGeral").replaceWith(children);
});