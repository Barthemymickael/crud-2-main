<?php require('base.php');
    $sql = "SELECT * FROM Organization";
    $db = $pdo->prepare($sql);
    $db->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    base::disconnect();
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
<h3>Select</h3>
<p>

</div>
<p>



<br />
<div class="form-horizontal" >

<br />
<div class="control-group">
                        <label class="control-label">id</label>

<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['id']; ?>
                            </label>
</div>
<p>

</div>
<p>


<br />
<div class="control-group">
                        <label class="control-label">name</label>

<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['name']; ?>
                            </label>
</div>
<p>

</div>
<p>

  <br />
  <div class="control-group">
                          <label class="control-label">Domain</label>

  <br />
  <div class="controls">
                              <label class="checkbox">
                                  <?php echo $data['Domain']; ?>
                              </label>

</div>
<p>

</div>
<p>
<br />
<div class="control-group">
                        <label class="control-label">Aliases</label>

<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Aliases']; ?>
                            </label>
</div>
<p>

</div>
<p>



</div>
<p>

</div>
<p>


</div>
<p>

    </body>
</html>
