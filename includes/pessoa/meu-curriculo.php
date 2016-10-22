<div class="container pv30">

  <div class="section">
    <div class="columns is-mobile is-multiline">
      <div class="column is-full-mobile is-one-third-tablet is-one-quarter-desktop">
        <aside class="menu box">
          <ul class="menu-list">
            <li><a class="is-active" href="?pag=pessoa/meu-curriculo">Meu Currículo</a></li>
          </ul>

          <p class="menu-label">Vagas</p>
          <ul class="menu-list">
            <li><a href="?pag=pessoa/buscar-vagas">Buscar Vagas</a></li>
            <li><a href="?pag=pessoa/minhas-vagas">Minhas Vagas</a></li>
          </ul>

          <p class="menu-label">Minha Conta</p>
          <ul class="menu-list">
            <li><a href="?pag=pessoa/meus-dados">Dados de acesso</a></li>
            <li><a href="?pag=pessoa/logout">Sair</a></li>
          </ul>

        </aside>
      </div>

      <div class="column is-full-mobile is-two-third-tablet is-three-quarters-desktop">
        <section>
          <h1 class="title is-2">Meu Currículo</h1>
          <h2 class="title is-3">{{ nome }}</h2>

          <div class="container">
            <div class='secao_form'>
              <label class="label" for="endereco">Endereço</label>
              <div class="control"><input class="input" value="{{ endereco }}" name="endereco" type="text" placeholder="Endereco"></div>
            </div>
            <div class='secao_form'>
              <label class="label" for="telefone">Telefone</label>
              <div class="control"><input class="input" value="{{ telefone }}" name="telefone" type="text" placeholder="Telefone"></div>
            </div>
            <div class='secao_form'>
              <label class="label" for="telefone2">Telefone (opicional)</label>
              <div class="control"><input class="input" value="{{ telefone2 }}" name="telefone2" type="text" placeholder="Telefone (opicional)"></div>
            </div>
            <div class='secao_form'>
              <label class="label" for="email_contato">E-mail para Contato</label>
              <div class="control"><input class="input" value="{{ email }}" name="email" type="email" placeholder="E-mail para Contato"></div>
            </div>
            <div class='secao_form'>
              <label class="label" for="datanascimento">Data de Nascimento</label>
              <div class="control"><input class="input" value="{{ datanascimento }}" name="datanascimento" type="date" placeholder="Data de Nascimento"></div>
            </div>
            <div class='secao_form'>
              <label class="label" for="resumoqualificacoes">Resumo das Qualificações</label>
              <div class="control">
                <textarea name="resumoqualificacoes" placeholder="Resumo das Qualificações" class="textarea">{{ resumoqualificacoes }}</textarea>
              </div>
            </div>
            <div class="secao_form"><button class="button is-success">Salvar dados</button></div>
          </div>
        </section>
      </div>
    </div>
  </div>

</div>
