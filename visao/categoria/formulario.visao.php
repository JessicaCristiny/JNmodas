<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
           <form action="" method="POST">   
				
            <label for="email"><b>Descrição</b></label>
            <input type="text" placeholder="Descrição" name="descricao" value ="<?=@$categoria['descricao']?>" required="">
			
            <button type="submit" class="signupbtn">Confirmar</button>       
    </form>
    </body>
</html>
