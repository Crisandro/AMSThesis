function viewdata(){
    $.ajax({
    type: "POST",
    url: "home.php",
    }).done(function( data ) {
        $('#viewdata').html(data);
    });
}
