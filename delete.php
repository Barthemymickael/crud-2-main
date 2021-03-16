<?php require 'base.php'; $id=0; if(!empty($_GET['id'])){ $id=$_REQUEST['id']; } if(!empty($_POST)){ $id= $_POST['id']; $pdo=base::connect(); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "DELETE FROM Organization";
        $db = $pdo->prepare($sql);
        $db->execute(array($id));
        base::disconnect();
        header("Location: index.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<br />
<div class="container">


<br />
<div class="span10 offset1">

<br />
<div class="row">

<br />
<h3>Supprimer une Organisation</h3>
<p>

</div>
<p>


<br />
<form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id;?>"/>

 Etes vous sur de supprimer une Organisation ?

<br />
<div class="form-actions">
                          <button type="submit" class="btn btn-danger">Oui</button>
                          <a class="btn" href="index.php">Non</a>
</div>
<p>

                    </form>
<p>
</div>
<p>


</div>
<p>

  </body>
</html>
