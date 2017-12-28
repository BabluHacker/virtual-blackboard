/**
 * Created by mehedi on 12/27/17.
 */
$(document).ready(function()
{
    var response = '';
    $.ajax({
        type: 'POST',
        url: "../myphp/get_student.php",
        async: false,
        success : function(text){
            $('#table').html(text);

        }
    });
    //alert("yeah");
});