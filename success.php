<?php
include_once("SRC/fonction.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$profession=$_POST['profession'];
$adresse=$_POST['adresse'];
$telephone=$_POST['telephone'];

$sql=$insertdata->insert($prenom,$nom,$profession,$adresse,$telephone);
if($sql)
{
echo "<script>alert('Enrégistrer avec succés');</script>";
echo "<script>window.location.href='success.php'</script>";
}
else
{
echo "<script>alert('Erreur');</script>";
echo "<script>window.location.href='error.php'</script>";
}
}
 ?>

<html>
<head>
  <title>CRUD with Modal</title>
  <link rel="icon" type="image/png" href="img/logo.png" />
  <!-- Requiteal meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  <!-- Javascript -->
  <script src="js/crud.js"></script>
  <style type="text/css">
  main{
      display:flex;
      
      flex-direction:row;
      justify-content:space-around;
      text-align: center; 
  }
  
  
  
  
  #sad{
      order: 3;
      flex-grow:10;
      
  }
  
  #confused{
     order:1;
      flex-grow: 10;
  }
  
  #sad,#confused{
      height:350px;
      background-color:white;
      border:5px;
      border-color:#000;
  
      margin-right:5px;
      
  }
  
  
  *{
      box-sizing: border-box;
  }
  
  .container{
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 2px 10px rgba(0,0,0,.3);
      width: 400px;
  }
  
  h2{
      text-align: center;
      margin: 0px 0px 20px;
  }
  
  .form{
      padding: 30px 40px;
  }
  
  .form-control{
      position: relative;
      margin-bottom: 10px;
      padding-bottom: 20px;
  
  }
  
  .form-control label{
      color: #777777;
      display: block;
      margin-bottom: 5px;
  
  }
  
  .form-control input{
      border: 2px solid #f0f0f0;
      border-radius: 4px;
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 14px;
  
  }
  
  .form-control input:focus{
      outline: none;
      border-color: #777777;
  
  }
  
  .form-control.success input{
      border-color: var(--success-color);
  }
  
  .form-control.error input{
      border-color: var(--error-color);
  }
  
  .form-control small{
      color: var(--error-color);
      position: absolute;
      bottom: 0px;
      left: 0px;
      visibility: hidden;
  }
  
  .form-control.error small{
      visibility: visible;
  }
  
  .form button{
      cursor: pointer;
      border-radius: 4px;
      color:#fff;
      display: block;
      font-size: 16px;
      padding: 10px;
      margin-top: 20px;
      width: 100%;
      
  }
  
  .box {
      width:70%;
      height:200px;
      background:#FFF;
      margin:40px auto;
  }
 
 .main-box-layout{
	position: relative;
	margin-bottom: 10px;
}
.facebook-box,.instagram-box,.pinterest-box,.twitter-box,.youtube-box,.linkedin-box{
	color:white;
	background-color: teal;
	font-size:95px;
	height:100px;
	overflow: hidden;
	padding-left:3px;
}
.instagram-box{
	background-color: #B7378B;
	color:white;
}
.pinterest-box{
	background-color: #BC081C;
	color:white;
}
.twitter-box{
	background-color: #59ADEB;
	color:#68B5ED;
}
.youtube-box{
	background-color: #E02A20;
	color:#E33E35;
}
.linkedin-box{
	background-color:#007AB9;
	color:#1d85c4;
}
.box-layout-text{
	position: absolute;
	top:15px;
	color:#fff;
	right:25px;
	height: 100px;
	overflow: hidden;
}
.box-layout-text h1{
	font-size:30px;
	margin: 0px;
}
  </style>
</head>

<body>

  <H1 class="text-black text-center shadow p-3 mb-5 animate__animated animate__backInDown">Data Analytics
    <i class="fa fa-home"></i>
  </H1>
  <div class="container-fluid shadow-lg p-3 mb-5 bg-white rounded border border-light">
  <div class="row animate__animated animate__backInDown ">
    <div class="col-lg-4 col-sm-4 col-12 main-box-layout ">
      <div class="facebook-box rounded " >
        <i class="fa fa-user " aria-hidden="true"></i>
      </div>
      <div class="box-layout-text text-right  ">
        <h1>31,153</h1>
        <span>Clients</span>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-12 main-box-layout">
      <div class="instagram-box rounded ">
        <i class="fa fa-money" aria-hidden="true"></i>
      </div>
      <div class="box-layout-text text-right ">
        <h1>10,130</h1>
        <span>Transactions</span>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-12 main-box-layout">
      <div class="pinterest-box rounded ">
        <i class="fa fa-smile-o" aria-hidden="true"></i>
      </div>
      <div class="box-layout-text text-right ">
        <h1>31,200</h1>
        <span>Satisfait</span>
      </div>
    </div>
  </div>
</div>

<div>
<p>


</p>
</div>
  <div class="alert alert-success text-center" role="alert">Client créé avec succés !</div>
  <main>
    <div id="sad">
      <table class="table table-bordered table-hover table-striped animate__animated animate__backInDown" id="example">
        <thead>
          <tr>
            <th width="20">
           <th bgcolor="teal">
              <font color="#fff"><i class="fa fa-list-ol" aria-hidden="true"></i> Matricule </th>
            <th bgcolor="teal">
              <font color="#fff"> <i class="fa fa-address-card" aria-hidden="true"></i>
 Prenom</th>
            <th bgcolor="teal">
              <font color="#fff">Nom <i class="fa fa-address-book-o" aria-hidden="true"></i></th>
            <th bgcolor="teal">
              <font color="#fff">Profession <i class="fa fa-briefcase" aria-hidden="true"></i></th>
            <th bgcolor="teal">
              <font color="#fff">Adresse <i class="fa fa-map-marker" aria-hidden="true"></i>
</th>
            <th bgcolor="teal">
              <font color="#fff">Telephone <i class="fa fa-phone" aria-hidden="true"></i>
</th>
        </thead>
        <tbody id="tb" class="table table-striped table-border shadow p-3 mb-5 " style="width:100%">
          <?php include_once( "SRC/connexion.php"); $result=$db->query("SELECT * FROM clients where 1 "); if($result->num_rows>0){ while($val = $result->fetch_assoc()){ ?>
          <tr>
            <td align="center">
              <i class="fa fa-fw fa-arrows-alt"></i>
            </td>
            <td>
              <?php echo $val[ 'matricule']; ?>
            </td>
            <td>
              <?php echo $val[ 'prenom']; ?>
            </td>
            <td>
              <?php echo $val[ 'nom']; ?>
            </td>
            <td>
              <?php echo $val[ 'profession']; ?>
            </td>
            <td>
              <?php echo $val[ 'adresse']; ?>
            </td>
            <td>
              <?php echo $val[ 'telephone']; ?>
            </td>
          </tr>
          <?php } }else{ ?>
          <tr>
            <td colspan="5" class="bg-light text-center">
              <strong>Pas d'enrégistrement !</strong>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <tfoot class="shadow p-3 mb-5">
      </tfoot>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Precedent</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">Suivant</a>
          </li>
        </ul>
      </nav>
      </table>
      <div class="shadow p-3 mb-5" id="chartContainer" style="height: 370px; width: 100%;">
      </div>
    </div>
    <div id="confused">
      <div class="container">
        <form class="form animate__animated animate__backInUp" method="post" name="insert" action="">
          <h2>Enregistrer
            <svg class="bi bi-person-check" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM6 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm6.854.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
            </svg>
          </h2>
          <div class="form-group">
            <label for="exampleInputPassword1">Prenom</label>
            <input type="text" class="form-control" name="prenom">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nom</label>
            <input type="text" class="form-control" name="nom">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1 text-left">Profession</label>
            <input type="text" class="form-control" name="profession">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Adresse</label>
            <input type="text" class="form-control" name="adresse">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Telephone</label>
            <input type="text" class="form-control" name="telephone">
          </div>
          <button type="submit" class="btn btn-primary" name="submit" data-toggle="tooltip" data-placement="bottom" title="Ajouter un client">Ajouter <i class="fa fa-spinner fa-spin"></i></button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modif" data-toggle="tooltip" data-placement="bottom" title="Modifier un client">Modifier <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#supp" data-toggle="tooltip" data-placement="bottom" title="Supprimer un client">Supprimer <i class="fa fa-trash"></i></button>
        </form>
      </div>
    </div>
  </main>
  <!-- Modal Modifier -->
  <div class="modal fade" id="modif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier informations client</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form" id="form">
            <div class="form-group">
              <p class="text-center" style="color:green">Entrer le matricule du client à modifier d'abord</p>
              <label for="exampleInputPassword1">Matricule</label>
              <input type="text" class="form-control" name="matricule">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Prenom</label>
              <input type="text" class="form-control" name="prenom">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nom</label>
              <input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1 text-left">Profession</label>
              <input type="text" class="form-control" name="profession">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Adresse</label>
              <input type="password" class="form-control" name="adresse">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Telephone</label>
              <input type="text" class="form-control" name="telephone">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-success">Modifier</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Suppression -->
  <div class="modal fade" id="supp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Supprimer un client</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form" id="form">
            <div class="form-group">
              <p class="text-center" style="color:red">Entrer le matricule du client à supprimer</p>
              <input type="text" class="form-control" name="matricule">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-danger">Supprimer</button>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>