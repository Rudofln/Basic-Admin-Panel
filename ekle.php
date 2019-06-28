<!DOCTYPE html>
<html lang="tr">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
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
      <li class="nav-item ">
        <a class="nav-link " href="index.php">Anasayfa</a>
      </li>
      <li class="nav-item  ">
        <a class="nav-link active" href="index.php?sayfa=ekle">Blog Yaz</a>
      </li>
      <li class="nav-item  ">
        <a class="nav-link" href="index.php?sayfa=yazilarim">Yazılmış Bloglar </a>
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

    <div class="container">
        <h2 class='text-center mt-3 mb-3 border-left border-right w-25 ml-auto mr-auto'>Blog Yaz</h2>
               <div class="row mt-5">
                                
                       <div class="col">
                                 <form method="post">
                                      <div class="form-group">
                                        <label>Konu</label>
                                        <input type="text" class="form-control" name='konu' placeholder="Konu Başlığı">  
                                      </div>
                                   
                                        <div class="form-group">
                                        <label for="exampleFormControlSelect1">Onay</label>
                                        <select class="form-control" name="kontrol" id="exampleFormControlSelect1">
                                          <option value="1">ONAYLI</option>
                                          <option value='0'>ONAYSIZ</option>
                                        </select>
                                      </div>
                                     
                                        <div class="form-group">
                                            <label>İçerik Giriniz</label>
                                            <textarea class="form-control" name='icerik' rows="5"></textarea>
                                        </div>
                                  
                                     <input type="hidden" name="submit">
                                      <button type="submit" class="btn btn-primary btn-lg btn-block">EKLE</button>
                                    </form>      
                       </div>
               </div>
    </div>
      
      <?php
                include 'bg.php';
                if(isset($_POST['submit'])){
                        $konu = isset($_POST['konu'])?$_POST['konu']:null;
                        $icerik = isset($_POST['icerik'])?$_POST['icerik']:null;
                        $onay = isset($_POST['kontrol'])?$_POST['kontrol']:null;
                        
                            if(!$konu){
                                echo '<label class=\'bg-danger d-block text-white text-center w-50 ml-auto mr-auto p-3 mt-3 rounded \'>Lütfen Konu Ekleyiniz</label>';
                            }elseif(!$icerik){
                                echo '<label class=\'bg-danger d-block text-white text-center w-50 ml-auto mr-auto p-3 mt-3 rounded \'>Lütfen İçerik Ekleyiniz</label>';
                            }else{
                                $sorgu = $db->prepare('INSERT INTO ekle SET
                                    baslik = ?,
                                    icerik = ?,
                                    onay = ?
                                ');
                                $ekle =$sorgu->execute([
                                   $konu , $icerik , $onay 
                                ]);
                                
                                if($ekle){
                                    echo '<label class=\'bg-success d-block text-white text-center w-50 ml-auto mr-auto p-3 mt-3 rounded \'>İşlem Başarılı</label>';
                                }else{
                                    echo '<label class=\'bg-danger d-block text-white text-center w-50 ml-auto mr-auto p-3 mt-3 rounded \'>Lütfen Tekrar Deneyiniz</label>';
                                }
                            }
                }
      ?>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>