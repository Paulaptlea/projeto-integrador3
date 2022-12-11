<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastrar Artigo</title>
   </head>
   <body>
     <h1>Cadastro de Artigo </h1>
     <hr> 
     <form action="gravar-artigo.php" method="post"
     enctype="multipart/form-data">
     <div class="upload">
            <h1>
                    Envie sua Arte:
            </h1> <br>

            <div class="letra">

            Nome:
            <input type="text"><br><br>
            E-mail:
            <input type="text"><br><br>
            Instagram:
            <input type="text"><br><br>
            Largura da obra (pixel):
            <input type="text"><br><br>
            Altura da obra (pixel):
            <input type="text"><br><br>
            Escreva uma breve sinopse da sua obra para o público: <br><br>
            <textarea name="sinopse" id="sinopse" cols="50" rows="8" placeholder="Digite sua sinopse aqui..."></textarea><br><br>
            <input type="file" name="arquivo" id="arquivo"> <br><br>
            <input type="submit" value="Enviar"><br>
            
           </div>
       </form><br><br>

       <h1>
        Contatos:
       </h1>

       <p>
         Instragram: @mural33 | E-mail: mural33@gmail.com
       </p>
    </div>
      
      Foto : <br/>
      <input type="file" name="foto" required="required"/>
      <br/> <br/>
      <input type="submit" value="Cadastrar Artigo"/>
      <br/> <br/>
      
     </form>
    </body>
</html>