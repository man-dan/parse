$(document).ready(function(){
    $('#parse').click(function (){
        $.ajax({
            type: "POST",
            data:{url:$("#url").val()},
            url: "_handler.php",
            success: function(html){
                $('#parse_content').html(html);
                $('#parse').hide().show();
            }
        });
        return false;
    })
});