
$(document).ready(function() {

    $('#boutonsA').click(function(){
        $('#Ajouter').css('opacity','1.0')
        if($(this).css('opacity')==0.2)
            $('#Modifier,#Supprimer ').css('opacity','1.0');
        else
            $('#Modifier,#Supprimer').css('opacity','0');

    });
    $('#boutonsM').click(function(){
        $('#Modifier').css('opacity','1.0')
        if($(this).css('opacity')==0.2)
            $('#Ajouter,#Supprimer').css('opacity','1.0');
        else
            $('#Ajouter,#Supprimer').css('opacity','0');

    });
    $('#boutonsR').click(function(){
        $('#Supprimer').css('opacity','1.0')
        if($(this).css('opacity')==0.2)
            $('#Modifier,#Ajouter').css('opacity','1.0');
        else
            $('#Modifier,#Ajouter').css('opacity','0');

    });
});