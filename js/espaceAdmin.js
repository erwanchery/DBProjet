var columns = [
    { title : "Id", data : "id_user" },
    { title : "Pseudo", data : "pseudo" },
    { title : "Mot de Passe", data : "password" },
    { title : "E-mail", data : "mail" },
    { title : "Droit utilisateur", data : "droit" },
    { title : "Modifier", render : function ( data, type, row) {
        return type === 'display' ? "<a href='' class='edit'><img alt='EditButton' src='images/edit.jpg' class='imageTable'></a>" : "imageEdit";
        }
    },
    { title : "Supprimer", render : function ( data, type, row) {
        return type === 'display' ? "<a href='' class='delete'><img alt='DeleteButton' src='images/delete.png' class='imageTable'></a>" : "imageDelete";
        }
    }
];
$(document).on('click', '#dtable .edit', function(e){ 
    //Bouton EDIT
    e.preventDefault();
    var str_row = $(this).closest('tr').children()[0];
    var str_val = str_row.innerHTML; // Contient l'id de la ligne que l'on souhaite modifier

    $.ajax({
        url : 'ajax/ajaxTraitement.php',
        type : 'POST',
        data : {
            data : str_val,
            action : 'edit_get_data'
        },
        dataType : 'json',
        success : function(arr_retour){
            $('#pseudo2').val(arr_retour[0]['pseudo']).attr("readonly","readonly").css('background-color','gainsboro');
            $('#password2').val(arr_retour[0]['password']).attr("readonly","readonly").css('background-color','gainsboro');
            $('#mail').val(arr_retour[0]['mail']).attr("readonly","readonly").css('background-color','gainsboro');
            $('#droit').val(arr_retour[0]['droit']);
        }
    });

    $('#msgErreur2').html(' ');
    $('#formAdd #submitForm').removeClass('add').addClass('editUser').html('Valider la modification');
    $('#formAdd').css('display','block');
});

$(document).on('click', '#dtable #add_user', function(e){ 
    //Bouton ADD
    e.preventDefault();
    $('#pseudo2').val('').removeAttr("readonly","readonly").css('background-color','white');
    $('#password2').val('').removeAttr("readonly","readonly").css('background-color','white');
    $('#mail').val('').removeAttr("readonly","readonly").css('background-color','white');
    $('#droit').val('');
    $('#msgErreur2').html(' ');
    $('#formAdd #submitForm').removeClass('editUser').addClass('add').html('Ajouter un utilisateur');
    $('#formAdd').css('display','block');
});

$(document).on('click', '#dtable .delete', function(e){ 
    //Bouton DELETE
    e.preventDefault();
    if (confirm("Etes-vous sur de vouloir bannir cette utilisateur ? Plus de retour en arrière possible !")) {
        var str_row = $(this).closest('tr').children()[0];
        var str_val = str_row.innerHTML;
        $.ajax({
            url : 'ajax/ajaxTraitement.php',
            type : 'POST',
            data : {
                data : str_val,
                action : 'delete_row'
            },
            dataType : 'text',
            success : function(str_retour){
                if(str_retour == 'Success') {
                    $('#msgValidation').html('Utilisateur supprimé avec Succès').show().fadeOut(4000);
                    $('#table').DataTable().ajax.reload(null, false);
                }
                else {
                    $('#msgErreur2').html("Erreur : " + str_retour);
                }
            }
        });
    }
});

$(function() {
    $('#msgValidation').hide();
    $('#table').DataTable( {
        ajax: {
           url: 'ajax/ajaxTraitement.php',
           type : 'POST',
           data : {
               action : 'get_data'
           },
           dataType : 'json'
        },
        columns: columns,
        dataSrc: ""
    });

    $('#formAdd #boutonCancel').on('click', function(){
        $('#formAdd').hide();  
    });

    $('#formAdd #submitForm').click(function(e){
        e.preventDefault();
        var bln_form = true;

        $('#formAdd input[required]').each(function(){
            if ($(this).val() === '') {
                $('#msgErreur2').html("Erreur : Merci de remplir le champ " + $(this).attr('name'));
                bln_form = false;
            }
        });

        if(! $.isNumeric($('#droit').val()) || $('#droit').val() > 2 || $('#droit').val() < 1) {
            $('#msgErreur2').html("Erreur : Valeur du champ " + $('#droit').attr('name') + " incorrect"); 
            bln_form = false;
        }
            
        if(bln_form) {
            obj_data = {
                "pseudo" : $('#pseudo2').val(),
                "password" : $('#password2').val(),
                "mail" : $('#mail').val(),
                "droit" : $('#droit').val()
            };

            if($('#formAdd #submitForm').hasClass('add')) {
                // Ajout d'un utilisateur dans la bdd
                $.ajax({
                    url : 'ajax/ajaxTraitement.php',
                    type : 'POST',
                    data : {
                        data : obj_data,
                        action : 'add_row'
                    },
                    dataType : 'text',
                    success : function(str_retour){
                        if(str_retour == 'Success') {
                            $('#formAdd').css('display','none');
                            $('#msgValidation').html('Utilisateur ajouté avec Succès').show().fadeOut(4000);
                            $('#table').DataTable().ajax.reload(null, false);
                        }
                        else {
                            $('#msgErreur2').html("Erreur : " + str_retour);
                        }
                    }
                });
            } else {
                // Modification d'un utilisateur
                $.ajax({
                    url : 'ajax/ajaxTraitement.php',
                    type : 'POST',
                    data : {
                        data : obj_data,
                        action : 'edit_row'
                    },
                    dataType : 'text',
                    success : function(str_retour){
                        if(str_retour == 'Success') {
                            $('#formAdd').css('display','none');
                            $('#msgValidation').html('Utilisateur modifié avec Succès').show().fadeOut(4000);
                            $('#table').DataTable().ajax.reload(null, false);
                        }
                        else {
                            $('#msgErreur2').html("Erreur : " + str_retour);
                        }
                    }
                });
            }
        }
    })
});