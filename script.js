document.querySelector('.btn-tabuada').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('form-tabuada').style.display = 'block';
});

document.querySelector('.btn-desconto').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('form-desconto').style.display = 'block';
});

document.querySelector('.btn-aprovacao').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('form-aprovacao').style.display = 'block';
});

document.querySelector('.btn-somaq').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('form-somaq').style.display = 'block';
});

document.querySelector('.btn-salario').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('form-salario').style.display = 'block';
});

document.querySelector('.btn-notab').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('form-notab').style.display = 'block';
});

document.querySelector('.btn-qualm').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('form-qualm').style.display = 'block';
});

document.querySelector('.btn-somaimpar').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('form-somaimpar').style.display = 'block';
});

document.querySelector('.btn-parim').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('form-parim').style.display = 'block';
});

document.querySelector('.btn-calc').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('form-calc').style.display = 'block';
});

document.querySelector('.btn-limpar').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('resultado').innerHTML = '';
});

document.querySelector('.btn-fechar').addEventListener('click', function() {
    document.querySelectorAll('.form-exercicio').forEach(div => div.style.display = 'none');
    document.getElementById('resultado').innerHTML = '';
});