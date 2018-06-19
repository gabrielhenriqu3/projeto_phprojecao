<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">DADOS PESSOAIS</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pessoa');" id="myLink">
        <div class="w3-col s6 tablink">Pessoa</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Mais');">
       <div class="w3-col s6 tablink">Pessoa2</div>
      </a>
    </div>

    <div id="Pessoa" class="w3-container menu w3-padding-48 w3-card">
      <h5>Nome</h5>
      <p class="w3-text-grey">Gabriel Henrique Sena Santos</p><br>
    
      <h5>Idade</h5>
      <p class="w3-text-grey">22 anos</p><br>
    
      <h5>Nome Mãe/Pai</h5>
      <p class="w3-text-grey">Sílvia Marli Sena Lima</p><br>
    
      <h5>Ultima vez visto em</h5>
      <p class="w3-text-grey">Projeção Sobradinho</p><br>
    
      <h5>Telefone</h5>
      <p class="w3-text-grey">(61)99125-5284</p>
    </div>
	

    <div id="Mais" class="w3-container menu w3-padding-48 w3-card">
      <h5>Nome</h5>
      <p class="w3-text-grey">Matheus Filgueiras</p><br>
    
      <h5>Idade</h5>
      <p class="w3-text-grey">Desconhecida</p><br>
    
      <h5>Nome Mãe/Pai</h5>
      <p class="w3-text-grey">Desconhecido</p><br>
    
      <h5>Ultima vez visto em</h5>
      <p class="w3-text-grey">Quadra 2 de Sobradinho-DF</p><br>
    
      <h5>Telefone</h5>
      <p class="w3-text-grey">(61)99265-6219</p>
    </div>  
    <img src="https://cdn6.aptoide.com/imgs/4/0/2/4022199708fcb3bb781f8a2b5e1dea6b_icon.png?w=240" style="width:100%;max-width:100px;margin-top:30px;">
  </div>

  <script type="text/javascript">
    
  function openMenu(evt, menuName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("menu");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
    }
    document.getElementById(menuName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " w3-dark-grey";
  }
  document.getElementById("myLink").click();
  </script>