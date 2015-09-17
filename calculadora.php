<php

<html>

    <br><br>
    <div id="calculadora1">Calculadora:<br>
        <form method="POST">
            <label>Numero 1:</label>
            <input type="number" name="Num1"/>
            <label>Numero 2:</label>
            <input type="number" name="Num2"/>
            <label>Resultado:</label>
            <input type="number" name="Res"/>

            <input type="hidden" name="acao" value="calcular"/>
            <input type="submit" name="btnsoma" value="Somar"/>
                
         </form>
    </div>

</html>


    if(isset($_POST['acao']) && $_POST['acao']=='calcular'){

    $acao = $_POST['acao'];
    $num1 = $_POST['Num1'];
    $num2 = $_POST['Num2'];
    
    $res = $num1 + $num2;        
    
    echo 'Resultado: '.$res

?>
