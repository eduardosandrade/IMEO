<?php if(!class_exists('Rain\Tpl')){exit;}?>
		<body class='view-table bg-dark'>
			
				
				<form action="computadores/adicionar" method="post">
						<div class="mb-3 row col-md-6 offset-md-3">
  							<label for="formFile" class="form-label mt-2">Escolha o XML</label>
  							<input class="form-control mb-2 border border-dark" id="xmlfile" name="xmlfile" type="file">
  							<button type="submit" class="btn btn-light border border-dark" id="btn_computadores">Adicionar</button>
						</div>
					
				</form>
				

				<table class="table table-striped table-dark table-hover table-sm" id="minhaTabela">
					<thead>
						<tr>
		    				<th scope='col'>Id</th>
		    				<th scope='col'>Nome</th>
		   			 		<th scope='col'>Nome do Usuario</th>
		   			 		<th scope='col'>Processador</th>
		   			 		<th scope='col'>Placa Mae</th>
		   			 		<th scope='col'>Memoria RAM</th>
		   			 		<th scope='col'>Armazenamento</th>
		   			 		<th scope='col'>Ações</th>
  			  			</tr>
  			  		</thead>
  			  	<tbody>
  			  	
  			  	
  			  	
  			
				<?php $counter1=-1;  if( isset($computador) && ( is_array($computador) || $computador instanceof Traversable ) && sizeof($computador) ) foreach( $computador as $key1 => $value1 ){ $counter1++; ?>
					<tr>
					<td><?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["nome_do_id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["nome_do_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["processador"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["placamae"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["ramsizegb"], ENT_COMPAT, 'UTF-8', FALSE ); ?> GB</td>
					<td><?php echo htmlspecialchars( $value1["armazenamento"], ENT_COMPAT, 'UTF-8', FALSE ); ?> GB</td>
				
				        
					
					<td>
						
						<button id = <?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?> class="btn btn-success btn-sm btn_edit">Editar</button>
						<button id = <?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?> class="btn btn-danger btn-sm btn_delete">Excluir</button>
						<button type="button" id = <?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?> class="btn btn-primary btn-sm btn_info">informações</button>
						
					</td>
					</tr>
					
					
				<?php } ?>
					
				
			
				</tbody>
				</table>
			

	