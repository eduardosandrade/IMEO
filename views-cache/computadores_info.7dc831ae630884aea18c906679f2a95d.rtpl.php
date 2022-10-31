<?php if(!class_exists('Rain\Tpl')){exit;}?>
		<body class='bg-dark'>
		
	
			<div class="container start">
				<h1 id="computador">Computadores</h1>
			</div>
			<div class='container start'>
				<h1 id="cad">Mais Informações</h1>
			</div>
			<div class='container formulario'>
				
				<form class="form-horizontal" method='post' action='/imeo/computadores' id="formCadastro">
					
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Id do Usuario</label>
							<div class="col-sm-6">
		
								<input type= "text" class="form-control border border-dark text-bg-secondary" disabled value = "<?php echo htmlspecialchars( $usuario_id, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id = "nome" name="nome" oninvalid="this.setCustomValidity('Preencha o nome!')" oninput="setCustomValidity('')">
         
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Nome do Usuario</label>
							<div class="col-sm-6">
		
								<input type= "text" class="form-control border border-dark text-bg-secondary" disabled value = "<?php echo htmlspecialchars( $nome_do_usuario, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id = "nome" name="nome" oninvalid="this.setCustomValidity('Preencha o nome!')" oninput="setCustomValidity('')">
         
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Nome do Id</label>
							<div class="col-sm-6">
		
								<input type= "text" class="form-control border border-dark text-bg-secondary" disabled value = "<?php echo htmlspecialchars( $nome_do_id, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id = "nome" name="nome" oninvalid="this.setCustomValidity('Preencha o nome!')" oninput="setCustomValidity('')">
         
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Mac Address</label>
							<div class="col-sm-6">
		
								<input type= "text" class="form-control border border-dark text-bg-secondary" disabled value = "<?php echo htmlspecialchars( $mac_adr, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id = "nome" name="nome" oninvalid="this.setCustomValidity('Preencha o nome!')" oninput="setCustomValidity('')">
         
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Processador</label>
							<div class="col-sm-6">
		
								<input type= "text" class="form-control border border-dark text-bg-secondary" disabled value = "<?php echo htmlspecialchars( $processador, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id = "nome" name="nome" oninvalid="this.setCustomValidity('Preencha o nome!')" oninput="setCustomValidity('')">
         
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Soquete</label>
							<div class="col-sm-6">
		
								<input type= "text" class="form-control border border-dark text-bg-secondary" disabled value = "<?php echo htmlspecialchars( $soquete, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id = "nome" name="nome" oninvalid="this.setCustomValidity('Preencha o nome!')" oninput="setCustomValidity('')">
         
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Placa Mae</label>
							<div class="col-sm-6">
		
								<input type= "text" class="form-control border border-dark text-bg-secondary" disabled value = "<?php echo htmlspecialchars( $placamae, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id = "nome" name="nome" oninvalid="this.setCustomValidity('Preencha o nome!')" oninput="setCustomValidity('')">
         
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Tamanho Ram</label>
							<div class="col-sm-6">
		
								<input type= "text" class="form-control border border-dark text-bg-secondary" disabled value = "<?php echo htmlspecialchars( $ramsizegb, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id = "nome" name="nome" oninvalid="this.setCustomValidity('Preencha o nome!')" oninput="setCustomValidity('')">
         
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Tipo ram</label>
							<div class="col-sm-6">
		
								<input type= "text" class="form-control border border-dark text-bg-secondary" disabled value = "<?php echo htmlspecialchars( $ramtipo, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id = "nome" name="nome" oninvalid="this.setCustomValidity('Preencha o nome!')" oninput="setCustomValidity('')">
         
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Armazenamento</label>
							<div class="col-sm-6">
		
								<input type= "text" class="form-control border border-dark text-bg-secondary" disabled value = "<?php echo htmlspecialchars( $armazenamento, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id = "nome" name="nome" oninvalid="this.setCustomValidity('Preencha o nome!')" oninput="setCustomValidity('')">
         
							</div>
					</div>
					
					
					
					 
					<div class="mb-3 row">
							<div class="col-sm-5">
								<input type="hidden" name='validacao' value=true>
								<button type="submit" class="btn" id="btn_confirma_info">Voltar</button>
							</div>
					</div>
	
				</form>
			</div>
				
				
		</body>
	
	</html>
	