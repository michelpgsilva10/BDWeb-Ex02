<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 03 - BD Web</title>
        <link href="bdweb-ex03.css" rel="stylesheet">
    </head>
    <body>
        
        <form method="post" enctype="multipart/form-data" action="cliente.php">
            <div class="div-format-fields">
                <label class="label-format">Tipo:</label> </br>
                <select name="tipo">
                    <option value="PF">Pessoa Física</option>
                    <option value="PJ">Pessoa Jurídica</option>
                </select>
            </div>

            <div class="div-format-fields">
                <label class="label-format">Nome:</label> </br>
                <input name="nome" type="text" />
            </div>

            <div class="div-format-fields">
                <label class="label-format">Apelido:</label> </br>
                <input name="apelido" type="text" />
            </div>
            
            <div class="div-format-fields">
                <label class="label-format">CPF/CNPJ:</label> </br>
                <input name="cpf-cnpj" type="text" />
            </div>

            <div class="div-format-fields">
                <label class="label-format">Email:</label> </br>
                <input name="email" type="text" />
            </div>
            
            <div class="div-format-fields">
                <label class="label-format">Rua:</label> </br>
                <input name="endereco_rua" type="text" />
            </div>
            
            <div class="div-format-fields">
                <label class="label-format">Número:</label> </br>
                <input name="endereco_numero" type="text" />
            </div>
            
            <div class="div-format-fields">
                <label class="label-format">Complemento:</label> </br>
                <input name="endereco_complemento" type="text" />
            </div>
            
            <div class="div-format-fields">
                <label class="label-format">CEP:</label> </br>
                <input name="endereco_CEP" type="text" />
            </div>
            
            <div class="div-format-fields">
                <label class="label-format">Bairro:</label> </br>
                <input name="endereco_bairro" type="text" />
            </div>
            
            <div class="div-format-fields">
                <label class="label-format">Cidade:</label> </br>
                <input name="endereco_cidade" type="text" />
            </div>
            
            <div class="div-format-fields">
                <label class="label-format">UF:</label> </br>
                <select name="endereco_uf">
                    <option>MT</option>
                    <option>MS</option>
                    <option>RO</option>
                    <option>SP</option>
                </select>
            </div>
            
            <div class="div-format-fields">
                <label class="label-format">Observações:</label> </br>
                <textarea name="observacoes" rows="4" cols="50"></textarea>
            </div>
            
            <div class="div-format-fields">
                <input name="limpar" type="reset" value="Limpar" />
                <input name="enviar" type="submit" value="Enviar" />
            </div>
        </form>       
        
        <?php
        // put your code here
        ?>
    </body>
</html>
