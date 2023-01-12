<?php
 include  './database/db.php';
?>

<!DOCTYPE html>
<html lang="pt">
  <header>
    <meta charset="UTF-8" />
    <title> Exercícos SQL> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </header>
<body>
  <div class = "row">
    <header class= "col-md-6 offset-md-3 text-center mt-5 bg-light border border-primary mt-5 col-sm-12"> <!-- offset-md-3 desloca 3 colunas para a direita  -->
      <h3> Adaptação para base de dados da PAP</h3>
      <h4> Exercícios sql<h4>
         <div>
            <h5> Primeiro Nome: </h5>
            <h5> Último nome:</h5>

          </div>
    </header>
   
  </div>

    <div class= "col-md-6 offset-md-3 text-center bg-light border border-primary mt-5 col-sm-12">
     <p> Consulta para mostrar todos os produtos ordenados alfabeticamente</p> 
    <!--- PHP ---->
    <?php 
   
    $sql = "SELECT * FROM `produtos` order by Nome_Produto";
    $resultado = $conn->query($sql);  
    $i = 0;
    ?>
    <table class="table table-bordered mt-5 table-striped table-hover">
    <thead class= >
        <th> Nome </th>
    </thead>
    <tbody class = tbody>
    <?php 
    while ($row = $resultado->fetch_assoc()){
        echo '<tr>';
            echo '<td>',$row['Nome_Produto'],'</td>';  
        echo '</tr>';
        $i++;
    
    }
    
    echo '</table>';
    echo 'Número de registos : '.$i ;
    ?>
    </div>

    <div class= "col-md-6 offset-md-3 text-center bg-light border border-primary mt-5 col-sm-12">
     <p> Consulta para filtrar a marca do produto por "AMD"</p> 
    <!--- PHP ---->
    <?php 
    $sql = "SELECT * FROM `produtos` WHERE `Marca`= 'AMD'";
    $resultado = $conn->query($sql);
    $i = 0;
    ?>
    <table class="table table-bordered mt-5 table-striped table-hover">
    <thead class= >
        <th> Nome </th>
        <th> Marca </th>
    </thead>
    <tbody class = tbody>
    <?php 
    while ($row = $resultado->fetch_assoc()){
        echo '<tr>';
            echo '<td>',$row['Nome_Produto'],'</td>';  
            echo '<td>',$row['Marca'],'</td>';  
        echo '</tr>';
        $i++;
    
    }
    
    echo '</table>';
    echo 'Número de registos : '.$i ;
    ?>
    </div>

    <div class= "col-md-6 offset-md-3 text-center bg-light border border-primary mt-5 col-sm-12">
     <p> Consulta para filtrar a marca do produto por "INTEL"</p> 
    <!--- PHP ---->
    <?php 
    $sql = "SELECT * FROM `produtos` WHERE `Marca`= 'INTEL'";
    $resultado = $conn->query($sql);
    $i = 0;
    ?>
    <table class="table table-bordered mt-5 table-striped table-hover">
    <thead class= >
        <th> Nome </th>
        <th> Marca </th>
    </thead>
    <tbody class = tbody>
    <?php 
    while ($row = $resultado->fetch_assoc()){
        echo '<tr>';
            echo '<td>',$row['Nome_Produto'],'</td>';  
            echo '<td>',$row['Marca'],'</td>';  
        echo '</tr>';
        $i++;
    
    }
    
    echo '</table>';
    echo 'Número de registos : '.$i ;
    ?>
    </div>

    <div class= "col-md-6 offset-md-3 text-center bg-light border border-primary mt-5 col-sm-12">
     <p> Consulta para os produtos pelo menor preço</p> 
    <!--- PHP ---->
    <?php 
   
    $sql = "SELECT * FROM `produtos` ORDER BY Preço";
    $resultado = $conn->query($sql);  
    $i = 0;
    ?>
    <table class="table table-bordered mt-5 table-striped table-hover">
    <thead class= >
        <th> Nome </th>
        <th> Preço </th>
    </thead>
    <tbody class = tbody>
    <?php 
    while ($row = $resultado->fetch_assoc()){
        echo '<tr>';
            echo '<td>',$row['Nome_Produto'],'</td>';  
            echo '<td>',$row['Preço'],'</td>'; 
        echo '</tr>';
        $i++;
    
    }
    
    echo '</table>';
    echo 'Número de registos : '.$i ;
    ?>
    </div>

    <div class= "col-md-6 offset-md-3 text-center bg-light border border-primary mt-5 col-sm-12">
     <p> Consulta para os produtos pelo maior preço</p> 
    <!--- PHP ---->
    <?php 
   
    $sql = "SELECT * FROM `produtos` ORDER BY Preço DESC";
    $resultado = $conn->query($sql);  
    $i = 0;
    ?>
    <table class="table table-bordered mt-5 table-striped table-hover">
    <thead class= >
        <th> Nome </th>
        <th> Preço </th>
    </thead>
    <tbody class = tbody>
    <?php 
    while ($row = $resultado->fetch_assoc()){
        echo '<tr>';
            echo '<td>',$row['Nome_Produto'],'</td>';  
            echo '<td>',$row['Preço'],'</td>'; 
        echo '</tr>';
        $i++;
    
    }
    
    echo '</table>';
    echo 'Número de registos : '.$i ;
    ?>
    </div>

  </div>
</body>
</html>