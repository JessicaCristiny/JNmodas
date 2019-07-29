<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <form action="" method="POST">   
				
				<label for="email"><b>Nome Completo</b></label>
				<input type="text" placeholder="Nome" name="nome" value="<?=@$cliente['nomecompleto']?>" required="">
				
				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Email" name="email" value="<?=@$cliente['email']?>" required="">
				
				<label for="email"><b>CPF</b></label>
				<input type="text" placeholder="000.000.000-00" name="cpf" value="<?=@$cliente['cpf']?>" required="">

				<label for="email"><b>Data de Nascimento</b></label>
				<input type="text" placeholder="00/00/0000" name="data" value="<?=@$cliente['datanasci']?>" required="">
				
				<label for="email"><b>Celular</b></label>
				<input type="text" placeholder="(00) 0000-0000" name="cel" value="<?=@$cliente['cel']?>" required="">
			
				<label for="psw"><b>Senha</b></label>
				<input type="password" placeholder="Password" name="senha" value="<?=@$cliente['senha']?>" required="">

				<label for="psw-repeat"><b>Repita a Senha</b></label><b>
				<input type="password" placeholder="Password" name="psw-repeat" value="<?=@$cliente['senha']?>" required="">
				
			  <button type="submit" class="signupbtn">Confirmar</button>
			
		  </b>
                     
    </form>
    </body>
</html>
