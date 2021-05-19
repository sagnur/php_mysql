 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dizimnen otiw fomasi</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    </head>

 <body>
     <div class="container mt-4">
        
     <?php
     if($_COOKIE['paydalaniwshi']==''):
     ?>
     
     <div class="row">
            <div class="col">
                <h1>Dizimnen otiw aynasi</h1>
                <form action="dizim.php" method="post">
                   <input type="text" class="form-control" name="login" id="login" placeholder="Logindi kiritin"><br>
                   <input type="text" class="form-control" name="name" id="name" placeholder="Atinizdi kiritin"><br>
                   <input type="text" class="form-control" name="email" id="email"  
                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" placeholder="Poshtanizdi kiritin"><br>
                   <input type="password" class="form-control" name="pass" id="pass" pattern=".{8,}"  placeholder="Parolinizdi kiritin"><br>
                   <input type="date" class="form-control" name="borth" id="borth"><br>
                   <input type="radio" name="pol" id="pol" Value="erkek"><i class="fa fa-male fa-2x"></i>
                   <input type="radio" name="pol" id="pol" Value="Hayel"><i class="fa fa-female fa-2x"></i><br><br>
                   <button class="btn btn-success" type="submit">Dizimnen otiw</button>
                   </form>
            </div>
            <div class="col">
                <h1>Kiriw aynasi</h1>
                <form action="kiriw.php" method="post">
                   <input type="text" class="form-control" name="login" id="login" placeholder="Logindi kiritin"><br>
                   <input type="password" class="form-control" name="pass" id="pass" placeholder="Parolinizdi kiritin"><br>
                  <button class="btn btn-success" type="submit">Kiriw</button>
                  </form>
            </div>
        </div>
     <?php else: ?>
        <p> Qalay <?=$_COOKIE['paydalaniwshi']?>. shigiw ushin <a href="shigiw.php"> usini </a> basin. </p> 
     <?php endif;
        ?>

         
     </div>
 </body>
 </html>