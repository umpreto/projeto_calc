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
            <input type="submit" name="btncalc" value="Somar"/>
            <input type="submit" name="btncalc" value="Subtrair"/>


                
         </form>
    </div>

</html>


    if(isset($_POST['btncalc']) && $_POST['btncalc']=='Somar'){

       $acao = $_POST['btncalc'];
       $num1 = $_POST['Num1'];
       $num2 = $_POST['Num2'];
    
       $res = $num1 + $num2;        
    
       echo 'Resultado da operacao: '.$acao.' '.$res;
    
     }

    if{isset($_POST['btncalc']) && $_POST['btncalc']=='Subtrair')

       
       $num1 = $_POST['Num1'];
       $num2 = $_POST['Num2'];
    
       $res = $num1 - $num2;        

       echo 'Resultado da operacao: '.$acao.' '.$res;
     
    }
?>
