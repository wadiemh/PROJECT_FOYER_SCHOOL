<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>foyeradministation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="container">
	<dev>
        <img height="100" src="3il.png" alt="3il logo">
    </dev>
    <hr />
    <span>
        <img height="50" src="LOGO\LOGO WITHOUT TEXT.PNG" alt="3il logo">
    </span>
    <span>Admin</span>
    <span>
        <img height="20" src="set.png" alt="fooding icon">
    </span>

    <br />
    <br />
    <br />
    <br />
    <main style="text-align:center">
        <form style="text-align:center" >
		<div class="container" "p-3 mb-2 bg-white text-dark">   <h3>Uilisateurs & Details</h3>  </div>
            <span style="background-color:white">
                <br />
            </span>
        </form>
		<table class=table table-hover>
 <thead class="thead-dark">
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Droits</th>
	  <th scope="col">Delete</th>
    </tr>
  </thead>
  </table>
		<?php
try
{
$maCo = new PDO('mysql:host=localhost;dbname=okok', 'root','');
}
catch (PDOException $e)
{
echo "Erreur PDO : ".$e->getMessage()."<br/>";
die();
}

$stmt = $maCo->prepare("select login,pass,droits from utilisateur");
$stmt->execute();
$tabresult = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($tabresult as $aline)
{
?>
<table class=table table-hover>
<tr id="delete<?php echo $result['id'] ?>">
<td>  <?php echo $aline['login'] ?> </td>
<td>  <?php echo  $aline['pass']  ?> </td>
<td>  <?php echo  $aline['droits'] ?> </td>
<td>  <button onclick="deleteAjax(<?php echo $result['id'];  ?>)" class=btn btn-danger>Supprimer</button></td>
</tr>
</table>
<?php
}
?>
<script type="text/javascript">
	 
	 function deleteAjax(id){
   
       if(confirm('are You sure?')){
         
         $.ajax({

              type:'post',
              url:'delete.php',
              data:{delete_id:id},
              success:function(data){
              
                   $('#delete'+id).hide('slow');

              }

         });

       }


	 }

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 </main>
</body>
</html>
