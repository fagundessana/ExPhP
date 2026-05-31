<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $acao = $_POST['acao'];
    $resultado = '';

    if($acao == 'tabuada'){
        $num = $_POST['num_tabuada'];
        $resultado = "<h3>Tabuada do $num:</h3>";
        for ($i = 1; $i <= 10; $i++){
            $resultado .= "$num × $i = " . ($num * $i) . "<br>";
        }
    }
    if ($acao == 'desconto'){
    $preco = $_POST['preco'];
    $desconto = $_POST['desconto'];
    $valor_desconto = $preco * ($desconto/100);
    $preco_final = $preco - $valor_desconto;
    $resultado = "<h3>Preço com desconto:</h3>";
    $resultado .= "De R$ $preco por R$ $preco_final";
}
    if ($acao == 'aprovacao'){
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    $resultado .= "<h3>Média: $media</h3>";
   if ($media >= 5) {
    $resultado .= "Situação: Aprovado ✅";
}  else {
    $resultado .= "Situação: Reprovado ❌";
}

}
 if ($acao == 'somaq'){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $soma = ($n1 ** 2) + ($n2 ** 2) + ($n3 ** 2);
    $resultado .= "<h3>Soma dos quadrados: $soma</h3>";
 }
if ($acao == 'salario'){
    $salario_bruto = $_POST['salario_bruto'];
   $gratificacao = $salario_bruto * 0.10;
   $imposto = $salario_bruto * 0.20;
   $salario_liquido = $salario_bruto + $gratificacao - $imposto;
   $resultado .= "<h3>Salário Líquido: R$ " . number_format($salario_liquido, 2, ',', '.') . "</h3>"; 
}
if ($acao == 'notab'){
    $nb1 = $_POST['nb1'];
    $nb2 = $_POST['nb2'];
    $nb3 = $_POST['nb3'];
    $nb4 = $_POST['nb4'];
    $media_bimestral = ($nb1 + $nb2 + $nb3 + $nb4) / 4;
    $resultado .= "<h3>Média Bimestral: $media_bimestral</h3>";
   if ($media_bimestral >= 6) {
    $resultado .= "Situação: Aprovado ✅";
} elseif ($media_bimestral < 3) {
    $resultado .= "Situação: Retido ❌";
} else {
    $resultado .= "Situação: Exame ⚠️";
}
}
if ($acao == 'qualm'){
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];
    $maior = max($m1, $m2, $m3);
    $resultado .= "<h3>O maior número é: $maior</h3>";
}
if ($acao == 'somaimpar'){
    $vi = $_POST['vi'];
    $vf = $_POST['vf'];
    $soma_impares = 0;
    for ($i = $vi; $i <= $vf; $i++){
        if ($i % 2 != 0){
            $soma_impares += $i;
        }
    }
    $resultado .= "<h3>Soma dos números ímpares entre $vi e $vf: $soma_impares</h3>";
}
if ($acao == 'parim'){
    $num_parim = $_POST['num_parim'];
    $tipo = ($num_parim % 2 == 0) ? "par" : "ímpar";
    $resultado .= "<h3>O número $num_parim é $tipo.</h3>";
}
if ($acao == 'calc'){
    $c1 = $_POST['c1'];
    $operador = $_POST['operador'];
    $c2 = $_POST['c2'];
    switch ($operador){
        case '+':
            $res_calc = $c1 + $c2;
            break;
        case '-':
            $res_calc = $c1 - $c2;
            break;
        case '*':
            $res_calc = $c1 * $c2;
            break;
        case '/':
            if ($c2 != 0){
                $res_calc = $c1 / $c2;
            } else {
                $res_calc = "Erro: Divisão por zero!";
            }
            break;
        default:
            $res_calc = "Operador inválido!";
    }
    $resultado .= "<h3>Resultado: $res_calc</h3>";
}
}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de exercícios</title>

    <!-- Styles CSS -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="header">
        <h1><span style="color: #1f2843;">Descubra</span> <span style="color: #899db5;"> e se </span><span style="color: #1f2843;" >divirta</span></h1>
    </div>
    <div class="container">
        <form action="index.php" method="post">
            <!-- Campos do formulário -->
        <div class="card">
            <div class="card-title"> Escolha uma <span style="color: #1f2843;"> opção</span> abaixo</div>
            <div class="button-card">
                <button type="button" class="btn-limpar">Limpar</button>
                <button type="button" class="btn-tabuada">Tabuada</button>
                <button type="button" class="btn-desconto">Desconto</button>
                <button type="button" class="btn-aprovacao">Aprovação</button>
                <button type="button" class="btn-somaq">Soma ao ²</button>
                <button type="button" class="btn-salario">Salário Líq.</button>
                <button type="button" class="btn-notab">Nota bimestral</button>
                <button type="button" class="btn-qualm">Qual é o maior?</button>
                <button type="button" class="btn-somaimpar">Soma dos ímpares</button>
                <button type="button" class="btn-parim">É par ou ímpar?</button>
                <button type="button" class="btn-calc">Calculadora</button>
                <button type="button" class="btn-fechar">Fechar</button>
            </div>
        </div>
        <div id="form-tabuada" class="form-exercicio" style="display: none;">
            <h3>Tabuada</h3>
            <input type="number" name="num_tabuada" placeholder="Digite um número">
            <button type="submit" name="acao" value="tabuada">Calcular</button>
            <input type="hidden" name="exercicio" value="tabuada">
        </div>
        <div id="form-desconto" class="form-exercicio" style="display:none;">
    <h3>Desconto</h3>
    <input type="number" name="preco" placeholder="Preço">
    <input type="number" name="desconto" placeholder="% de desconto">
    <button type="submit" name="acao" value="desconto">Calcular</button>
     <input type="hidden" name="exercicio" value="desconto">
</div>

<div id="form-aprovacao" class="form-exercicio" style="display:none;">
    <h3>Aprovação</h3>
    <input type="number" name="nota1" placeholder="Nota 1">
    <input type="number" name="nota2" placeholder="Nota 2">
    <input type="number" name="nota3" placeholder="Nota 3">
    <input type="number" name="nota4" placeholder="Nota 4">
     <input type="hidden" name="exercicio" value="aprovacao">
    <button type="submit" name="acao" value="aprovacao">Calcular</button>
    
</div>

<div id="form-somaq" class="form-exercicio" style="display:none;">
    <h3>Soma ao ²</h3>
    <input type="number" name="n1" placeholder="Número 1">
    <input type="number" name="n2" placeholder="Número 2">
    <input type="number" name="n3" placeholder="Número 3">
    <button type="submit" name="acao" value="somaq">Calcular</button>
     <input type="hidden" name="exercicio" value="somaq">
</div>

<div id="form-salario" class="form-exercicio" style="display:none;">
    <h3>Salário Líquido</h3>
    <input type="number" name="salario_bruto" placeholder="Salário bruto">
    <button type="submit" name="acao" value="salario">Calcular</button>
     <input type="hidden" name="exercicio" value="salario">
</div>

<div id="form-notab" class="form-exercicio" style="display:none;">
    <h3>Nota Bimestral</h3>
    <input type="number" name="nb1" placeholder="Nota 1">
    <input type="number" name="nb2" placeholder="Nota 2">
    <input type="number" name="nb3" placeholder="Nota 3">
    <input type="number" name="nb4" placeholder="Nota 4">
    <button type="submit" name="acao" value="notab">Calcular</button>
     <input type="hidden" name="exercicio" value="notab">
</div>

<div id="form-qualm" class="form-exercicio" style="display:none;">
    <h3>Qual é o Maior?</h3>
    <input type="number" name="m1" placeholder="Número 1">
    <input type="number" name="m2" placeholder="Número 2">
    <input type="number" name="m3" placeholder="Número 3">
    <button type="submit" name="acao" value="qualm">Calcular</button>
     <input type="hidden" name="exercicio" value="qualm">
</div>

<div id="form-somaimpar" class="form-exercicio" style="display:none;">
    <h3>Soma dos Ímpares</h3>
    <input type="number" name="vi" placeholder="Valor inicial">
    <input type="number" name="vf" placeholder="Valor final">
    <button type="submit" name="acao" value="somaimpar">Calcular</button>
     <input type="hidden" name="exercicio" value="somaimpar">
</div>

<div id="form-parim" class="form-exercicio" style="display:none;">
    <h3>É par ou ímpar?</h3>
    <input type="number" name="num_parim" placeholder="Digite um número">
    <button type="submit" name="acao" value="parim">Calcular</button>
     <input type="hidden" name="exercicio" value="parim">
</div>

<div id="form-calc" class="form-exercicio" style="display:none;">
    <h3>Calculadora</h3>
    <input type="number" name="c1" placeholder="Número 1">
    <select name="operador">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="c2" placeholder="Número 2">
    <button type="submit" name="acao" value="calc">Calcular</button>
     <input type="hidden" name="exercicio" value="calc">
</div>

<div id="resultado">
    <?php echo $resultado ?? ''; ?>
</div>
        </form>
    </div>
    <script src="script.js"></script>
    <script>
    const exercicioAtivo = "<?php echo $_POST['exercicio'] ?? ''; ?>";
    if (exercicioAtivo) {
        document.getElementById('form-' + exercicioAtivo).style.display = 'block';
    }
</script>

</body>
</html>