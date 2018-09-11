function AfficherLesJeux()
{
    $.ajax
    (
        {
            type:"GET",
            url:"../PHP/getLesJeux.php",
            data:"categorie="+$('input[name=categorie]:checked').val(),
            success:function(data)
            {
                $('#lesJeux').empty();
                $('#lesJeux').append(data);
            },
            error:function()
            {
                alert("Erreur sur la recupéraition des jeux");
            }
        }
    );
}