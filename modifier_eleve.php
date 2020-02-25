<?php   session_start();

if(!isset($_SESSION['cnx']) or $_SESSION['cnx']==false )
{
  

  header('location:index.php');

}





 
?>
<!DOCTYPE html>
<?php
 include('cnx.php');
?>
<html>
<head>
  <?php include('inccss.php'); ?>
  
       
            
 
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<?php include('header.php'); ?>
</nav>

<?php include('menu.php'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 
<br><br><br>

<div class="panel panel-default" align="center">

          <div class="panel-heading">
          <em class="text-center " align ="center">Modifier les informations  </em>
          </div>

          <div class="panel-body">
          <?php


if(isset($_POST['btn1']))
{

  if(empty($_POST['nom']))
 {
  header('location:modifier_eleve.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nom du l eleve! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update eleves set nom = "'.$_POST['nom'].'" where id_user="'.$_GET['id_user'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_eleve.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Changement effectue! <a href="#" class="pull-right"></a>
        </div>'; 
 } 
}





if(isset($_POST['btn2']))
{

  if(empty($_POST['prenom']))
 {
  header('location:modifier_eleve.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le prenom de l eleve <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update eleves set prenom = "'.$_POST['prenom'].'" where id_user="'.$_GET['id'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_eleve.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Changement effectue <a href="#" class="pull-right"></a>
        </div>'; 
 } 
}

?>

<div class="col-md-12">

<form  method="POST" enctype="multipart/form-data"   >  
<div class="col-md-1">
</div>    
<div class="col-md-10">
      <br><br>
          <div class="panel-body">
            <table data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle">
                <thead>
                <tr>
                    <th data-field="id" data-align="right" >Champs</th>
                    <th data-field="name" >Informations</th>
                    <th data-field="price" >Modifier</th>
                </tr>
                </thead>
              <tbody>
              <?php
     
 


              $q =  "select * from eleves where id_user='".$_GET['id']."'";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {


              ?>
              <tr>
              <td> <label><center>Id Eleve :</center> </label></td>
              <td> <input class="form-control" name="id_user" type="Number" value="<?php echo $c['id_user'];?>"></td>
              
              </tr>
              <tr>
              <td> <label> <center>Nom:</center></label></td>
              <td> <input class="form-control" name="nom" type="text" value="<?php echo $c['nom'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn1">changer</button> </td>
              </tr>
              <tr>
              <td> <label><center>Prenom :</center> </label></td>
              <td> <input class="form-control" name="prenom" type="text" value="<?php echo $c['prenom'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn2">changer</button> </td>
              </tr>
              <tr>
              <td> <label><center>Niveau :</center> </label></td>
              <td> <input class="form-control" name="niveau" type="text" value="<?php echo $c['niveau'];?>"></td>
              
              </tr>
              <tr>
              <td> <label><center>Password :</center> </label></td>
              <td> <input class="form-control" name="password" type="Number" value="<?php echo $c['password'];?>"></td>
              
              </tr>

            
              <?php
              }
              ?>
              </tbody>
            </table>
            <script>
                $(function () {
                    $('#hover, #striped, #condensed').click(function () {
                        var classes = 'table';
            
                        if ($('#hover').prop('checked')) {
                            classes += ' table-hover';
                        }
                        if ($('#condensed').prop('checked')) {
                            classes += ' table-condensed';
                        }
                        $('#table-style').bootstrapTable('destroy')
                            .bootstrapTable({
                                classes: classes,
                                striped: $('#striped').prop('checked')
                            });
                    });
                });
            
                function rowStyle(row, index) {
                    var classes = ['active', 'success', 'info', 'warning', 'danger'];
            
                    if (index % 2 === 0 && index / 2 < classes.length) {
                        return {
                            classes: classes[index / 2]
                        };
                    }
                    return {};
                }
            </script>
          </div>
        </div>
      
        </form>
      </div>
          
</div>
</div>

  <?php include('incjs.php'); ?>
</body>
</html>

  