<section class="container pv30 has-text-centered sides-pd-768">
  <h1 class="title">Cadastro de Empresas</h1>
  <h2 class="subtitle">Preencha os dados de sua empresa.</h2>

  <div class="columns is-centered">
    <form action="" method="post" class="column is-half" name="cadastro_pessoa">
      <label class="label has-text-left">Nome:</label>
      <div class="control has-icon has-icon-right">
        <input placeholder="Nome" class="input is-medium" name="nome" type="text" required />
      </div>

      <label class="label has-text-left">CNPJ:</label>
      <div class="control has-icon has-icon-right">
        <input placeholder="CNPJ" class="input is-medium" name="cnpj" type="text" required />
      </div>

      <label class="label has-text-left">Telefone:</label>
      <div class="control has-icon has-icon-right">
        <input placeholder="Telefone" class="input is-medium" name="telefone" type="number" required />
      </div>

      <label class="label has-text-left">Telefone Alternativo:</label>
      <div class="control has-icon has-icon-right">
        <input placeholder="Telefone Alternativo" class="input is-medium" name="telefone2" type="number" />
      </div>

      <label class="label has-text-left">Endereço:</label>
      <div class="control has-icon has-icon-right">
        <input placeholder="Endereço" class="input is-medium" name="endereco" type="text" required />
      </div>

      <label class="label has-text-left">Atuação:</label>
      <div class="control has-icon has-icon-right">
        <input placeholder="Atuação" class="input is-medium" name="atuacao" type="text" required />
      </div>

      <label class="label has-text-left">E-mail</label>
      <div class="control has-icon has-icon-right">
        <input placeholder="E-mail" class="input is-medium" name="email" type="email" required />
      </div>

      <!-- <label class="label has-text-left">Senha:</label>
      <div class="control has-addons senha-field">
        <input placeholder="Senha" class="input is-medium valida-senha" name="senha" type="password" required />
        <button type="button" class="fa fa-low-vision button is-danger is-medium ver-senha"></button>
      </div>
      <span class="has-text-left help is-info">A senha deve conter no mínimo 8 caracteres</span> -->

      <!-- <label class="label has-text-left">Matrícula:</label> <div class="control has-icon has-icon-right"> <input placeholder="" class="input is-medium" name="matricula" type="text" required /> </div> <label class="label has-text-left">Endereço:</label> <div class="control has-icon has-icon-right"> <input placeholder="" class="input is-medium" name="endereco" type="text" /> </div> <label class="label has-text-left">Telefone:</label> <div class="control has-icon has-icon-right"> <input placeholder="" class="input is-medium" name="telefone" type="text" /> </div> <label class="label has-text-left">Telefone 2:</label> <div class="control has-icon has-icon-right"> <input placeholder="" class="input is-medium" name="telefone2" type="text" /> </div> <label class="label has-text-left">Data de Nascimento:</label> <div class="control has-icon has-icon-right"> <input placeholder="" class="input is-medium" name="datanascimento" type="date" required /> </div> <label class="label has-text-left">Resumo de qualificações:</label> <div class="control has-icon has-icon-right"> <textarea placeholder="" class="textarea is-medium" name="resumoqualificacao"></textarea> </div> -->
      <div class="">
        <button type="submit" class="button is-primary">Enviar currículo</button>
      </div>
    </div>
  </div>
</section>

<?php

// Verificando se o formulario foi enviado peloi usuario
if(isset($_POST['nome']))
{
  // Incluindo o arquivo de conexao como banco de dados
  require("includes/conexao.php");

  // Dados do farmulario
  $varNome       = $_POST['nome'];
  $varCNPJ       = $_POST['cnpj'];
  $varTelefone   = $_POST['telefone'];
  $varTelefone2  = $_POST['telefone2'];
  $varEndereco   = $_POST['endereco'];
  $varEmail      = $_POST['email'];
  $varAtuacao    = $_POST['atuacao'];

  // Executando query direto no banco de dados
  $query = mysqli_query($link, "INSERT into Empresa (nome, cnpj, telefone, telefone2, endereco, email, atuacao) 
                  VALUES ('$varNome', '$varCNPJ', '$varTelefone', '$varTelefone2', '$varEndereco', '$varEmail', '$varAtuacao');");

  // Verificando se a query foi executada
  if($query)
  {
    // Redirecionando para a pagina de sucesso!
    $url='./?pag=empresa/cadastro-sucesso';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
  }

  // Fecha Conexao
  mysqli_close($link)or die(mysqli_error($link));
}