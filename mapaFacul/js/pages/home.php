<?php 
 include 'dados/produtos.php'; ?>
 <?php
 include 'function/real.php'; ?>


  <h1 class="h1s">MARMITAS</h1>
   <div class="produtos">
  <?php
    foreach($produto as $pdt): ?> 
    
   <div class="marmitas">       
        <a id = "product" href = "index.php?p=produto.php&id= ?>
        <?php = $pdt ['id'] ?>"     
        <img src="<?=$pdt['imagem']?>" style="width:200px; border-radius: 10%;">    
        <p></p>
          <?=$pdt['nome']?>
        <p></p>
        <p id="valor"><?=BRL($pdt['valor'])?></p></a>    
    </div>  
  <?php 
  endforeach; ?> 
  </div>
</div>