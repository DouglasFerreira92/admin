<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Lista de Clientes</h1>



<table class="table table-striped table-borderlles">

	<thead class="thead-dark">
		<th>#</th><th>Nome</th><th>Telefone</th><th>Rua</th><th>Numero</th>
	</thead>

	<tbody>
	<?php $counter1=-1;  if( isset($user) && ( is_array($user) || $user instanceof Traversable ) && sizeof($user) ) foreach( $user as $key1 => $value1 ){ $counter1++; ?>
		<tr>
			<td data-id_cliente="<?php echo htmlspecialchars( $value1["idclient"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["idclient"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
			<td data-desnome="<?php echo htmlspecialchars( $value1["desnome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desnome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
			<td data-destel="<?php echo htmlspecialchars( $value1["destel"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["destel"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
			<td data-desrua="<?php echo htmlspecialchars( $value1["desrua"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desrua"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
			<td data-desnum="<?php echo htmlspecialchars( $value1["desnum"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desnum"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>

			<td><button class="btn_selecionar alert-success" data-pagina_clicada="<?php echo htmlspecialchars( $value1["idclient"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Selecionar</button></td>
			<td><button class="btn_atualizar btn-primary">Update</button></td>
			<td><button class="btn_deletar alert-danger">Delete</button></td>
		</tr>
		
	<?php } ?>
	</tbody>

</table>
</div>


<script type="text/javascript" src="/anne_doces/public/script/java_script/modal_cliente.js"></script>

