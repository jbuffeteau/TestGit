function GetAllCtrls()
{
    $.ajax
    (
        {
            method:"get",
            url:"PHP/GetAllControleurs.php",
            success:function(donnees)
            {
                $('#divCtrl').append(donnees);
            },
            error:function()
            {
                alert("Erreur sur la RQT CTRL");
            }
        }
    );
}

function GetAllClientsByIdCtrl(idCtrl)
{
    $.ajax
    (
        {
            method:"post",
            url:"PHP/GetAllClients.php",
            data:"id="+idCtrl,
            success:function(donnees)
            {
                $('#divClient').empty();
                $('#divClient').append(donnees);
            },
            error:function()
            {
                alert("Erreur sur la RQT CTRL");
            }
        }
    );
}