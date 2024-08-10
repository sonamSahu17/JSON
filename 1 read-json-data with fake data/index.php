<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read JSON Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="main">

    <div id="header">
        <h1>Read JSON Data</h1>
    </div>

    <div id="load-data"></div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
<script>
$(document).ready(function(){
$.ajax({
    url:"json/my.json",
    type:"GET",
    success : function(data){

      //  $("#load-data").append(data.id + " " + data.title);
      $.each(data,function(key,value){
        $("#load-data").append(value.id + " " + value.title+"<br>" );
      });  
      //  console.log(data);
    }
});
});
</script>
</body>
</html>