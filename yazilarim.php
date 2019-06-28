<!DOCTYPE html>
<html>
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/stil.css<?php echo time(); ?>">
    <!-- Custom styles for this template -->
  </head>

  <body>
  <nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
    <ul class="nav nav-tabs mr-auto">
      <li class="nav-item">
        <a class="nav-link " href="index.php">Anasayfa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php?sayfa=ekle">Blog Yaz</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="index.php?sayfa=yazilarim">Yazılmış Bloglar </a>
      </li>
	   <li class="nav-item ">
        <a class="nav-link" href="index.php?sayfa=mes">Gelen Mesajlar</a>
      </li>
	  	<li class="nav-item  ">
        <a class="nav-link disabled" href="index.php?sayfa=cont">İletişim</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Ara">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Ara</button>
    </form>
</nav>

    <div class="container-fluit">
            <h2 class='text-center mt-3 mb-3 border-left border-right w-25 ml-auto mr-auto'>Konular</h2>
               <div class="w-100">
                                
                       <div class="col">
                           <ul class="list-group list-group-flush">
                                
                                 <?php
                                            include 'bg.php';
                                       $sorgu = $db->query('SELECT * FROM ekle ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);
                                             foreach($sorgu as $do){
                                               echo '<li class="list-group-item">';
                                                    
                                                    echo '<span class=\'p-2 rounded border bg-light\'>Konu</span>   '.'<span class=\'p-2 ml-2 w-75 rounded border bg-light\'>'.$do['baslik'].'</span>';
                                                 
                                                    if($do['onay']==0){
                                                         echo '<label class=\'p-2 ml-auto rounded border bg-warning text-white mt-2\'> Onay Durumu : Onaysız</label>';
                                                    }else{
                                                        echo '<label class=\'pl-2 pr-3 pt-2 pb-2 ml-auto mt-2 rounded border bg-light\'> Onay Durumu  : Onaylı</label>';
                                                    }   
                                                       
                                                        echo '<a href="#" class="btn btn-info p-2 ml-3 mr-2 ">Gör</a>';
                                                 
                                                        echo '<a href="#" class="btn btn-success p-2 ml-2 mr-2 ">Düzenle</a>'; 
                                                 
                                                        echo '<a href="index.php?sayfa=sil&id='.$do['id'].'" class="btn btn-danger p-2 ">Sil</a>';
                                                 
                                                   echo ' </li>';
                                             }   
                                 ?>

                           </ul>
                       </div>
               </div>
    </div>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>