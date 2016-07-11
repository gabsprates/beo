<section class="container pv30 has-text-centered sides-pd-768">
  <h1 class="title">Cadastro de Candidatos</h1>
  <h2 class="subtitle">Preencha os seus dados de acesso.</h2>

  <div class="columns is-centered">
    <form action="" method="post" class="column is-half" name="cadastro_pessoa">
      <label class="label has-text-left">Nome:</label>
      <div class="control has-icon has-icon-right">
        <input placeholder="Nome" class="input is-medium" name="nome" type="text" required />
      </div>

      <label class="label has-text-left">E-mail</label>
      <div class="control has-icon has-icon-right">
        <input placeholder="E-mail" class="input is-medium" name="email" type="email" required />
      </div>

      <label class="label has-text-left">Senha:</label>
      <div class="control has-addons senha-field">
        <input placeholder="Senha" class="input is-medium valida-senha" name="senha" type="password" required />
        <button type="button" class="fa fa-low-vision button is-danger is-medium ver-senha"></button>
      </div>
      <span class="has-text-left help is-info">A senha deve conter no mínimo 8 caracteres</span>

      <!-- <label class="label has-text-left">Matrícula:</label> <div class="control has-icon has-icon-right"> <input placeholder="" class="input is-medium" name="matricula" type="text" required /> </div> <label class="label has-text-left">Endereço:</label> <div class="control has-icon has-icon-right"> <input placeholder="" class="input is-medium" name="endereco" type="text" /> </div> <label class="label has-text-left">Telefone:</label> <div class="control has-icon has-icon-right"> <input placeholder="" class="input is-medium" name="telefone" type="text" /> </div> <label class="label has-text-left">Telefone 2:</label> <div class="control has-icon has-icon-right"> <input placeholder="" class="input is-medium" name="telefone2" type="text" /> </div> <label class="label has-text-left">Data de Nascimento:</label> <div class="control has-icon has-icon-right"> <input placeholder="" class="input is-medium" name="datanascimento" type="date" required /> </div> <label class="label has-text-left">Resumo de qualificações:</label> <div class="control has-icon has-icon-right"> <textarea placeholder="" class="textarea is-medium" name="resumoqualificacao"></textarea> </div> -->
      <div class="">
        <button type="submit" class="button is-primary">Enviar currículo</button>
      </div>
    </div>
  </div>
</section>
