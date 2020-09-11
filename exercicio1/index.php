
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
        <p>Descreva os passos para executar uma pagina em PHP no xampp ou wamp?</p>
        <span>Instalei o servidor xampp coloquei o php como variavel de ambiente,assim para execultar a aplicacao basta entra na pasta via terminal e digitar o comando php -S localhost:1010 (porta de sua escolha)</span>
    </div>
    
    <div >

        <p>Crie uma variável no PHP e imprima seu conteúdo utilizando o echo e o print. Você deve
        utilizar formatação HTML para imprimir?</p>

        <?php 

            $nome = "fulano";
            echo "<h3>$nome</h3>";
       ?>

    </div>
  
    <div>

        <P>Utilizando todos os operadores de comparação, aritmética e lógicos do PHP, crie 1 exemplo de
        cada operador?</P>

        <ul>
            <li>
                <h2>operadores >= <</h2>
                    <?php $idade = 18 ?>
                    <?php  if ( $idade >=  18){  ?>
                        <h3>voce ja pode tirar carteira</h3>
                    <?php } ?> 
                    <?php 
                    if ($idade < 18) { ?>
                        <h3>voce nao pode tirar carteira</h3>
                <?php }?>
            </li>

            <li>

                <?php 
                    $name = "fulano";
                    $passaword = 123;
                    $adiministrador = true;
                    $logado = true;
                ?>    

                <h2>operador and  or not xor</h2>

                <?php       
                    if ( ($name === "fulano" and $passaword === 123) xor ( $adiministrador && !$logado ) ){?> 
                        <h3>Seu login foi liberado</h3>
                <?php }?> 
            </li>

            <li>
                <h2>operador restantes</h2>
                <?php 
                    $numberSorteado = 10;
                    $numberEscolhido = 10;
                    $numberBase = 51;
                    $numberProibido = 11; 
                ?>

                <?php 
                    if (($numberSorteado === $numberEscolhido) && ($numberEscolhido <= $numberBase && $numberEscolhido < $numberBase ) && ($numberSorteado != $numberProibido)) {?>  
                        <h3>voce ganho</h3>
                <?php }?> 
            </li>
        </ul>
    </div>

    <div> 

        <p>Crie 3 arrays por índices, um de clientes um de produtos e um de vendas. Imprima-os com e
        sem formatação. No ultimo array imprimir utilizando o foreach?</p>        

        <?php 
            $clientes = array("fuluno1","fuluno2","fulano3");
            $produtos = array("produto1","produto2","produto3");
            $vendas = array("120$","150$","100$");
        ?>

        <ul>
            <li> 
                <h2>Array de clientes</h2>             
                <h4> <?php echo $clientes[0] ?> </h4>
                <h4> <?php echo $clientes[1] ?> </h4>
                <h4> <?php echo $clientes[2] ?> </h4>
            </li>  

            <li>  
                <h2>Array de produtos</h2>     
                <?php 
                    foreach ($produtos as $produto):?>   
                        <h3><?php echo $produto;?></h3>
                <?php endforeach;?> 
            </li>   

            <li>  
                <h2>Array de vendas</h2>     
                <?php
                    foreach ($vendas as $key => $value) { ?>   
                        <h3><?php echo $value ?></h3>  
                <?php }?>  
            </li>   
        </ul>
    </div>

    <div >

        <p>Crie 3 arrays associativos, um de alunos um de disciplinas e um de notas. Imprima-os com
        pre.No ultimo array imprimir utilizando var_dump dentro de pre?</p>

        <?php 
            $arrayAssosiativoAluno = array("chave1" => "fulano1","chave2" => "fulano2");
            $diciplinas = array("professor1" => "historia","professor2" => "matematica");
            $notas = array("fulano1" => 10,"fulano2" => 8);
        ?> 

        <ul>  

             <li>   
                 <h2>Array 1</h2>        
                <?php foreach ($arrayAssosiativoAluno as $aluno ):?>

                    <pre> <?php echo $aluno?> </pre>

                <?php  endforeach?>
            </li> 
        
            <li>
                <h2>Array 2</h2>    
                <?php foreach($diciplinas as $diciplina):?>    

                    <pre> <?php echo $diciplina?> </pre>
                    
                <?php endforeach?> 
            </li>

             <li>
                <h2>Array 3</h2>    
                <?php foreach($notas as $notas):?>  

                    <pre><?php var_dump($notas)?></pre>
                   
                <?php endforeach?> 
            </li>

        </ul>     
    </div>

    <div> 

         <p>Crie 2 arrays um chamado de temperaturas e um chamado dia, faca um merge entre eles e
        imprima-os?</p> 

        <?php 
            $temperaturas = array("temp1" => 20 , "temp2" => 22);
            $dias = array("dia1" => $temperaturas["temp1"],"dia2" => $temperaturas["temp2"]);
        ?>

        <?php foreach($dias as $dia):?>
            <pre> <?php echo $dia?> </pre>
        <?php endforeach?>  
        
    </div>
</body>
</html>