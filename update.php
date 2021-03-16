<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Crud-Update</title>
        	<link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>


<br />
<div class="container">

<br />
<div class="row">

<br />
<h3>Modifier une Organisation</h3>
<p>

</div>
<p>

<br />
<form method="post" action="update.php?id=<?php echo $id ;?>">

<br />
<div class="control-group <?php echo!empty($idError) ? 'error' : ''; ?>">
                    <label class="control-label">Id</label>

<br />
<div class="controls">
                        <input name="number" type="number"  placeholder="id" value="<?php echo!empty($id) ? $id : ''; ?>">
                        <?php if (!empty($idError)): ?>
                            <span class="help-inline"><?php echo $idError; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>
<p>



<br />
<div class="control-group<?php echo!empty($nameError) ? 'error' : ''; ?>">
                    <label class="control-label">Name</label>

<br />
<div class="controls">
                        <input type="text" name="name" value="<?php echo!empty($name) ? $name : ''; ?>">
                        <?php if (!empty($nameError)): ?>
                            <span class="help-inline"><?php echo $nameError; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>
<p>


<br />
<div class="control-group<?php echo!empty($domainError) ? 'error' : ''; ?>">
                    <label class="control-label">Domain</label>

<br />
<div class="controls">
                        <input type="text" name="domain" value="<?php echo!empty($domain) ? $domain : ''; ?>">
                        <?php if (!empty($domainError)): ?>
                            <span class="help-inline"><?php echo $domainError; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>
<p>



<br />
<div class="control-group <?php echo!empty($AliasesError) ? 'error' : ''; ?>">
                    <label class="control-label">Aliases</label>

<br />
<div class="controls">
                        <input name="Aliases" type="text" placeholder="Aliases" value="<?php echo!empty($Aliases) ? $Aliases : ''; ?>">
                        <?php if (!empty($AliasesError)): ?>
                            <span class="help-inline"><?php echo $AliasesError; ?></span>
                        <?php endif; ?>
</div>
<p>

<br />
<div class="form-actions">
                    <input type="submit" class="btn btn-success" name="submit" value="Valider">
                    <a class="btn" href="index.php">Retour en arrière</a>
</div>
<p>

            </form>
<p>



</div>
<p>


    </body>
</html>
