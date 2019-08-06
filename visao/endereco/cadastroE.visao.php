<!DOCTYPE html>


    <form action="" method="POST">   
				
				<label for="email"><b>Cidade</b></label>
				<input type="text" placeholder="Cidade" name="cidade" value="<?=@$endereco['cidade']?>" required="">
				
				<label for="email"><b>Bairro</b></label>
				<input type="text" placeholder="Bairro" name="bairro" value="<?=@$endereco['bairro']?>" required="">
				
				<label for="email"><b>Rua</b></label>
				<input type="text" placeholder="Rua" name="rua" value="<?=@$endereco['rua']?>" required="">
				
				<label for="email"><b>Cep</b></label>
				<input type="text" placeholder="00000000" name="cep" value="<?=@$endereco['cep']?>" required="">
			
				<label for="psw"><b>Numero</b></label>
				<input type="text" placeholder="Numero" name="num" value="<?=@$endereco['num']?>" required="">
                                
			  <button type="submit" class="signupbtn">Confirmar</button>
			
		  </b>
                     
    </form>
