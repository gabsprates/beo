<div class="is-clipped">
  <div class="container section" id="corpo">
    <h1 class="title">Minhas Vagas</h1>
    <div class="columns">
      <div class="column">
        <h2 class="title is-5">Cadastrar Vagas  </h2>
        <form class="insere-vaga">
          <label class="label">Título</label>
          <div class="control">
            <input class="input" type="text" placeholder="Título da vaga">
          </div>
          <label class="label">Salário</label>
          <div class="control">
            <span class="select is-fullwidth">
              <select>
                <option>de R$ 1.000,00 à R$ 2.000,00</option>
              </select>
            </span>
          </div>
          <label class="label">Horas de Trabalho</label>
          <div class="control">
            <span class="select is-fullwidth">
              <select>
                <option>6 horas</option>
              </select>
            </span>
          </div>
          <label class="label">Descrição</label>
          <div class="control">
            <textarea class="textarea" placeholder="Descrição da vaga"></textarea>
          </div>
          <p class="control">
            <button class="button is-success">Salvar Vaga</button>
          </p>
        </form>

        <br>
        <hr>
        <br>

        <h2 class="title is-5">Vagas Cadastradas</h2>
        <section class="lista-vagas columns is-multiline">
          <?php for ($var = 0; $var < 3; $var++): ?>
          <div class="lista-vagas__vaga column is-half">
            <div class="card is-fullwidth">
              <header class="card-header">
                <p class="card-header-title">
                  Coordenador de Projetos
                </p>
              </header>
              <div class="card-content">
                <div class="content">
                  Responder pela aplicação dos conhecimentos, habilidades e técnicas na elaboração de atividades inter-relacionadas para atingir um conjunto de objetivos e metas pré-definidos, num certo prazo, certo custo, determinado escopo e qualidade, através da mobilização de recursos técnicos e humanos. Visão ge...
                  <br>
                  <small>11:09 PM - 1 Jan 2016</small>
                </div>

                <aside class="menu">
                  <p class="menu-label">
                    Salário
                  </p>
                  <ul class="menu-list">
                    <li><a href="#" class="">de R$ 2.000,00 à R$ 3.000,00</a></li>
                  </ul>
                  <p class="menu-label">
                    Horas de Trabalho
                  </p>
                  <ul class="menu-list">
                    <li><a href="#">8 horas</a></li>
                  </ul>
                </aside>
              </div>
              <footer class="card-footer">
                <a class="card-footer-item">
                  <span class="button is-info is-fullwidth">Editar</span>
                </a>
                <a class="card-footer-item">
                  <span class="button is-danger is-fullwidth">Excluir</span>
                </a>
              </footer>
            </div>
          </div>
          <?php endfor; ?>
        </section>

        <nav class="pagination">
          <a class="button">Anterior</a>
          <a class="button">Pŕoxima</a>
          <ul>
            <li><a class="button">1</a></li>
            <li><span>...</span></li>
            <li><a class="button">45</a></li>
            <li><a class="button is-primary">46</a></li>
            <li><a class="button">47</a></li>
            <li><span>...</span></li>
            <li><a class="button">86</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
