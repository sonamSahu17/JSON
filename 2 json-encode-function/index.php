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
    <table id="load-table" border="1" cellpadding="10px" width="50%" cellspacing="0px">
     <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Age</th>
      <th>City</th>
     </tr>  
    </table>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
<script>
$(document).ready(function(){
$.ajax({
    url:"fetch-json.php",
    type:"POST",
dataType:"JSON",
    success : function(data){
      //  $("#load-data").append(data.id + " " + data.title);
      $.each(data,function(key,value){
        $("#load-table").append("<tr><td>" + value.id + " </td><td>" + value.student_name + " </td><td>" + value.age + "</td><td> " + value.city + "</td></tr><br>" );
      })
      //console.log(data);
    }
});
});
</script>
</body>
</html>