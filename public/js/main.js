$(document).ready(function(){
    $('#keyword').on('keydown', function(e){
        if (e.which == 13) {
            if ($(this).val() != '') {
                $(this).closest('form').submit();
            }
        }
    });
});