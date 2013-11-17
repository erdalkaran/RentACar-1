<!DOCTYPE html>
<html>
    <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
</head>
<body>

<input type="button" value="Araçları Listele" name="btnAracGetir" id="btnAracGetir" />

<div id="liste">

</div>

<script src="js/jquery-1.10.2.js"></script>
<script>
$(document).ready(function(){
    
    $('#btnAracGetir').click(function(){
       
       $.ajax({
            url: "arac.php",
            })
            .done(function( aracisimleri ) {
                alert('sonuc geldi');
                $('#liste').text( aracisimleri );
            });
       
    });
    
});
</script>
</body>
</html>
