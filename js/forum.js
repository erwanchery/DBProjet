$(function() {
    $.ajax({
        url : 'ajax/ajaxForumTraitement.php',
        type : 'POST',
        data : {
            action : 'get_data'
        },
        dataType : 'json',
        success : function(str_retour){
            str_table = "<table><th>id forum</th>" +
                                "<th>Nom</th>" +
                                "<th>Date de création</th>";
            for (i = 0; i < str_retour.length; i++) {
                str_table += "<tr>" +
                             "<td>" + str_retour[i]["id_forum"] + "</td>" +
                             "<td><a href='#'>" + str_retour[i]["nom_forum"] + "</a></td>" +
                             "<td>" + str_retour[i]["date_crea"] + "</td>" +
                             "</tr>";
            }
            str_table += "</table>";
            $('#forum').html(str_table);
        }
    });

    $(document).on('click', '#forum a', function(e){ 
        event.preventDefault();

        var str_row = $(this).closest('tr').children()[0];
        var str_val = str_row.innerHTML;

        $.ajax({
            url : 'ajax/ajaxForumTraitement.php',
            type : 'POST',
            data : {
                data : str_val,
                action : 'get_message'
            },
            dataType : 'json',
            success : function(str_retour){
                str_message = '';
                for (i = 0; i < str_retour.length; i++) {
                    str_message += "<p class='msg'>Message de : " +  str_retour[i]["pseudo"] + "<br>" + 
                                  "Contenu : " + str_retour[i]["contenu"] + "<br>" +
                                  "Ecris le : " + str_retour[i]['date_crea'] + "</p>";

                }
                $('#listMessage').html(str_message);
            }
        });
    });
});