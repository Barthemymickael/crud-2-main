<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CRUD de Mickael Barthémy</title>

        	<link href="css/bootstrap.min.css" rel="stylesheet">
        	<link href="css/responsive.css" rel="stylesheet">

    </head>
    <body>

<br />
<div class="container">

<br />
<div class="row">

<br />
<center><h1>Mon crud</h1></center>
<p>

</div>
<p>


<br />
<div class="row">

                    <a href="add.php" class="btn btn-success">Ajouter une Organisation</a>


<br />
<div class="table-responsive">

<br />
<table class="table table-hover table-bordered">

<br />
<thead>


<th>Id</th>
<p>



<th>Name</th>
<p>



<th>Domain</th>
<p>



<th>Aliases</th>
<p>


<th>Update</th>
<p>

  <th>Delete</th>
  <p>

</thead>
<p>


<br />
<tbody>
                        <?php include 'base.php';
                            echo '
<br />
<tr>';
                            echo'

<td></td>
<p>
';
                            echo'

<td></td>
<p>
';
                            echo'

<td></td>
<p>
';
                            echo'

<td></td>
<p>
';

                            echo '


<td>';
                            echo '<a class="btn btn-success" href="update.php?id=' . 'id' . '">Update</a>';
                            echo '</td>

';
                            echo'

<td>';
                            echo '<a class="btn btn-danger" href="delete.php?id=' . 'id' . ' ">Delete</a>';
                            echo '</td>
<p>
';
                            echo '</tr>
<p>
';


                        ;
                        ?>
</tbody>
<p>

</table>
<p>

</div>
<p>


</div>
<p>


</div>
<p>

    </body>
</html>
