<?php if(!class_exists('Rain\Tpl')){exit;}?><div id="cont"> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Painel de Controle 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
<!--
    <section class="content">

        <div id="id_div_buscar">
          <input type="hidden" name="inp_offset" id="id_offset" value="0">
          <input type="hidden" name="inp_registro" id="id_registro" value="8">
          <span>Digite a sua busca:</span>
          <input type="text" name="inp_buscar" id="id_buscar">
          <button id="btn_buscar">Buscar</button>

        </div>

      <div id="conteudo">
        <div id="dados" style="width:800px;margin-left:2%;"></div>
      </div>

</section>
-->
       <div  class="sidebar-form" style="width: 500px;">
        <div class="input-group">
          <input type="hidden" name="inp_offset" id="id_offset" value="0">
          <input type="hidden" name="inp_registro" id="id_registro" value="4">
          <input type="text" name="q" class="form-control" id="id_buscar" placeholder="Pesquisar Clientes...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="btn_buscar" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>

              </span>

              <span class="input-group-btn">
                <button type="submit" name="search" id="btn_listar" class="btn btn-flat"><i class="fa fa-search"> Listar Todos</i>
              </button>
                
              </span>

        </div>


      </div>


      <div id="conteudo">
        <div class="dados" style="width:800px;margin-left:2%;"></div>
      </div>
    

  </div>


   
 