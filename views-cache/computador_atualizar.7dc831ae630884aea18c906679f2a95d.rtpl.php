<?php if(!class_exists('Rain\Tpl')){exit;}?>
		<body class='bg-dark'>
		
	
			<div class="container start">
				<h1 id="computador">Computadores</h1>
			</div>
			<div class='container start'>
				<h1 id="cad">Atualizando Computador</h1>
			</div>
			<div class='container formulario'>
				
				<form class="form-horizontal" method='post' action='atualizar/sucesso' id="formCadastro">
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Ativo</label>
							<div class="col-sm-6">
								<select class="form-select border border-dark text-bg-secondary" name="ativo" oninvalid="this.setCustomValidity('Informe se está ativo!')" oninput="setCustomValidity('')">
									<option value="<?php echo htmlspecialchars( $ativo, ENT_COMPAT, 'UTF-8', FALSE ); ?>" selected hidden><?php if( $ativo==0 ){ ?>Não<?php }else{ ?>Sim<?php } ?></option>
									<option value=true>Sim</option>
									<option value=false>Não</option>
							</select>
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Nome</label>
							<div class="col-sm-6">
								
								
								
								<input type= "text" class="form-control border border-dark text-bg-secondary" value = "<?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id = "nome" name="nome" oninvalid="this.setCustomValidity('Preencha o nome!')" oninput="setCustomValidity('')">
                                
                
								
							</div>
					</div>
					
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for= 'ativo' class='col-sm-6 col-form-label'>Usuario</label>
							<div class="col-sm-6">
								<select class="form-select border border-dark text-bg-secondary" name='usuario' id='usuario' oninvalid="this.setCustomValidity('Informe o Usuario!')" oninput="setCustomValidity('')">
									<option value="<?php echo htmlspecialchars( $usuario, ENT_COMPAT, 'UTF-8', FALSE ); ?>" selected hidden><?php echo htmlspecialchars( $usuario, ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
									<?php $counter1=-1;  if( isset($usuarios) && ( is_array($usuarios) || $usuarios instanceof Traversable ) && sizeof($usuarios) ) foreach( $usuarios as $key1 => $value1 ){ $counter1++; ?>
											<option><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
									<?php } ?>
									
									
								</select>
							</div>
							<input type='hidden' value='' id='idusuario' name='idusuario'>
							<input type='hidden' value='' id='idso' name ='idso'>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='mac_adr' class='col-sm-6 col-form-label'>Mac Address</label>
							<div class="col-sm-6">
								
								
								
								<input type= "text" class="form-control border border-dark text-bg-secondary" id = "mac_adr" name="mac_adr" value="<?php echo htmlspecialchars( $mac_adr, ENT_COMPAT, 'UTF-8', FALSE ); ?>" oninvalid="this.setCustomValidity('Preencha o mac!')" oninput="setCustomValidity('')">
								
								
								
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Sistema Operacional</label>
							<div class="col-sm-6">
								<select class="form-select border border-dark text-bg-secondary" name="so" id='so' oninvalid="this.setCustomValidity('Informe o Sistema Operacional!')" oninput="setCustomValidity('')">
									<option value="<?php echo htmlspecialchars( $so, ENT_COMPAT, 'UTF-8', FALSE ); ?>" selected hidden><?php echo htmlspecialchars( $so, ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
									<?php $counter1=-1;  if( isset($getSos) && ( is_array($getSos) || $getSos instanceof Traversable ) && sizeof($getSos) ) foreach( $getSos as $key1 => $value1 ){ $counter1++; ?>
											<option><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
									<?php } ?>
										
				
								</select>
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Dominio</label>
							<div class="col-sm-6">
								<select class="form-select border border-dark text-bg-secondary" name="dominio" oninvalid="this.setCustomValidity('Informe o Dominio!')" oninput="setCustomValidity('')">
									<option value="<?php echo htmlspecialchars( $dominio, ENT_COMPAT, 'UTF-8', FALSE ); ?>" selected hidden><?php if( $dominio==0 ){ ?>Não<?php }else{ ?>Sim<?php } ?></option>
									<option value=true>Sim</option>
									<option value=false>Não</option>
							</select>
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ativo' class='col-sm-6 col-form-label'>Etiquetado</label>
							<div class="col-sm-6">
								<select class="form-select border border-dark text-bg-secondary" name="etiquetado" oninvalid="this.setCustomValidity('Informe se está etiquetado!')" oninput="setCustomValidity('')">
									<option value="<?php echo htmlspecialchars( $etiquetado, ENT_COMPAT, 'UTF-8', FALSE ); ?>" selected hidden><?php if( $etiquetado==0 ){ ?>Não<?php }else{ ?>Sim<?php } ?></option>
									<option value=true>Sim</option>
									<option value=false>Não</option>
							</select>
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='ramsizegb' class='col-sm-6 col-form-label'>Memoria RAM (GB)</label>
							<div class="col-sm-6">
								
								<input type="text" class="form-control border border-dark text-bg-secondary" id="ramsizegb" value="<?php echo htmlspecialchars( $ramSize, ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="ramsizegb" maxlength="4" pattern="[0-9]{1,3}" oninvalid="this.setCustomValidity('Informe o tamanho da RAM!')" oninput="setCustomValidity('')">
							
							
								
							
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='armazenamento' class='col-sm-6 col-form-label'>Armazenamento (GB)</label>
							<div class="col-sm-6">
								
								<input type="text" class="form-control border border-dark text-bg-secondary" id="armazenamento" name="armazenamento" value="<?php echo htmlspecialchars( $armazenamento, ENT_COMPAT, 'UTF-8', FALSE ); ?>" maxlength="4" pattern="[0-9]{1,4}"  oninvalid="this.setCustomValidity('Informe o Armazenamento!')" oninput="setCustomValidity('')">
								
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for= 'ativo' class='col-sm-6 col-form-label'>Tipo RAM</label>
							<div class="col-sm-6">
								<select class="form-select border border-dark text-bg-secondary" id='ramtipo' name="ramtipo" oninvalid="this.setCustomValidity('Informe o tipo da RAM!')" oninput="setCustomValidity('')">
									<option value="<?php echo htmlspecialchars( $ramtipo, ENT_COMPAT, 'UTF-8', FALSE ); ?>" selected hidden><?php echo htmlspecialchars( $ramtipo, ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
									<option>DDR1</option>
									<option>DDR2</option>
									<option>DDR3</option>
									<option>DDR4</option>
									<option>DDR5</option>
								</select>
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='processador' class='col-sm-6 col-form-label'>Processador</label>
							<div class="col-sm-6">
						
								<input type= "text" class="form-control border border-dark text-bg-secondary" id = "processador" value="<?php echo htmlspecialchars( $processador, ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="processador" oninvalid="this.setCustomValidity('Informe o processador!')" oninput="setCustomValidity('')">
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3">
						<label for ='soquete' class='col-sm-6 col-form-label'>Soquete</label>
							<div class="col-sm-6">
								<select class="form-select border border-dark text-bg-secondary" id='soquete' name="soquete" oninvalid="this.setCustomValidity('Informe o soquete!')" oninput="setCustomValidity('')">
									<option value="<?php echo htmlspecialchars( $soquete, ENT_COMPAT, 'UTF-8', FALSE ); ?>" selected hidden><?php echo htmlspecialchars( $soquete, ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
									<option>LGA775</option>
									<option>LGA1155</option>
									<option>LGA1150</option>
									<option>LGA1151</option>
									<option>LGA1200</option>
									<option>LGA1700</option>
								</select>
							</div>
					</div>
					
					<div class="mb-3 row col-md-6 offset-md-3 ">
						<label for= 'placamae' class='col-sm-6 col-form-label'>Placa mãe</label>
							<div class="col-sm-6">
								
								<input type= "text" class="form-control border border-dark text-bg-secondary" id = "placamae" name="placamae" value="<?php echo htmlspecialchars( $placamae, ENT_COMPAT, 'UTF-8', FALSE ); ?>" oninvalid="this.setCustomValidity('Preencha a Placa mãe!')" oninput="setCustomValidity('')">
                                
							</div>
					</div>
					 
					<div class="mb-3 row">
							<div class="col-sm-5">
								<input type="hidden" name='validacao' value=true>
								<button type="submit" class="btn" id="btn_confirma_atualizar">Confirmar</button>
							</div>
					</div>
	
				</form>
			</div>
				
				
		</body>
	
	</html>
	