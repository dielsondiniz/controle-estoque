<?php

function title($titulo, $descricao, $link) {

  echo 
  '<div class="titleContainer" >
    <div>
      <h2>'.$titulo.'</h2>
      <p>'.$descricao.'</p>    
  </div>
  <div>
    <a href="'.$link.'" class="btn btn-success">Adicionar</a>
  </div>
  </div>';

} 
?>