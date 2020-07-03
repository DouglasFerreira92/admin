<?php if(!class_exists('Rain\Tpl')){exit;}?>
<script src="/anne_doces/public/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>

<div style="width:600px;margin-left:20%;margin-top:2%;">

        
          <h1>Criar uma venda</h1>

        <div class="view-client">

          <button id="btn_cliente" class="alert-success">Identificar Cliente</button>

            <table class="table table-striped table-borderlles">

              <thead class="thead-dark">
                <th >Nome</th><th>Telefone</th><th>Rua</th><th>Numero</th>
              </thead>

              <tbody>

                <tr>
                  <td id="tbnome"></td><td id="tbtel"></td><td id="tbrua"></td><td id="tbnum"></td>
                </tr>
              </tbody>

            </table>
          
        </div>

        <div class="view-client">

          <button id="btn_produto" class="alert-success">Identificar Produto</button>

            <table class="table table-striped table-borderlles">

              <thead class="thead-dark">
                <th>Nome</th><th>Descriçao</th><th>Preço</th>
              </thead>

              <tbody>

                <tr>
                  <td></td><td></td><td></td><td></td>
                </tr>
              </tbody>

            </table>
          
        </div>

        
        <p><label>Quantidade:</label><input type="number" name=""></p>
        <p><label>Valor:</label><input type="text" readonly name=""></p>
        <button class="btn_vender alert-success">Confirmar</button>

</div>    




<!-- MODAL PARA EXIBIR CLIENTES -->

  <div id="cliente">
    <div id="modal_cliente" class="modal fade">
      
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">X</button>
            <h4 class="modal-title">Cliente</h4>

          </div>

          <div class="modal-body">

            <input type="hidden" name="inp_offset" id="id_offset" value="0">
            <input type="hidden" name="inp_registro" id="id_registro" value="4">
            <input type="text" name="q" class="form-control" id="id_buscar" placeholder="Pesquisar Clientes...">
            <span class="input-group-btn">
            <button type="submit" name="search" id="btn_buscar" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>

            
            <div class="dados" style="width:800px;margin-left:2%;"></div>
            

        </div>
      </div>

    </div>    
  </div>



<!-- MODAL PARA EXIBIR PRODUTOS-->
  <div id="produto">
    <div id="modal_prod" class="modal fade">
      
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">X</button>
            <h4 class="modal-title">Produto</h4>

          </div>

          <div class="modal-body">

            <input type="hidden" name="inp_offset" id="id_offset" value="0">
            <input type="hidden" name="inp_registro" id="id_registro" value="4">
            <input type="text" name="q" class="form-control" id="id_buscar" placeholder="Pesquisar produto...">
            <span class="input-group-btn">
            <button type="submit" name="search" id="btn_buscar" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>

            
            <div class="view-prod" style="width:800px;margin-left:2%;"></div>
            

        </div>
      </div>

    </div>    
  </div>

