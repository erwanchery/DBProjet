$(document).ready(function(){
    
    var formulaire = $('#formulaireConnexion');
    
    ouvrirConnexion = function() {
        formulaire.removeClass("nonAfficher");
        formulaire.addClass("afficher");
    }

    fermerConnexion = function() {
        formulaire.removeClass("afficher");
        formulaire.addClass("nonAfficher");
    }

    $('.connexion').click(function() {
        ouvrirConnexion();
    });

    $('.fermerFenetre').click(function() {
        fermerConnexion();
    });

    $(window).click(function(event) {
        if (formulaire.is(event.target)) {
            if (formulaire.hasClass("afficher")){
                fermerConnexion();
            }
        }
    });

    $('#formulaireConnexion button').on('click',function(event){  
        event.preventDefault();
    
        var bln_form = true;

        $('#formulaireConnexion input[required]').each(function(){
            if ($(this).val() == '') {
                $('#msgErreur').html("Erreur : Merci de remplir le champ " + $(this).attr('name'));
                bln_form = false;
            }
        });

        if(bln_form) {
            $.ajax({
                url : 'ajax/ajaxTraitement.php',
                type : 'POST',
                data : {
                    username : $("#formulaireConnexion #pseudo").val(),
                    password : $("#formulaireConnexion #password").val(),
                    action : 'connexion'
                },
                dataType : 'text',
                success : function(str_retour){
                    if(str_retour == 'Success') {
                        window.location.href = "index.php";
                    }
                    else {
                        $('#msgErreur').html("Erreur : " + str_retour);
                    }
                }
            });
        }
    });

    $('.deconnexion').on('click',function(event){  
        event.preventDefault();

        $.ajax({
            url : 'ajax/ajaxTraitement.php',
            type : 'POST',
            data : {
            action : 'deconnexion'
            },
            success : function(){
            window.location.href = "index.php";
            }
        });
    });
});