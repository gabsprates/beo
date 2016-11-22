<div class="is-clipped">
  <div class="container section" id="corpo">
    <h1 class="title">Busca de vagas</h1>
    <div class="columns">
      <div class="column is-one-third">
        <aside class="menu">
          <p class="menu-label">
            Filtros de cargos
          </p>
          <ul class="menu-list">
            <li><a href="#">Programador</a></li>
            <li><a href="#">Suporte</a></li>
          </ul>
          <p class="menu-label">
            Filtro de Salário
          </p>
          <ul class="menu-list">
            <li><a href="#">até R$ 1.000,00</a></li>
            <li><a href="#">de R$ 1.000,00 à R$ 2.000,00</a></li>
            <li><a href="#" class="is-active">de R$ 2.000,00 à R$ 3.000,00</a></li>
            <li><a href="#">ao infinito e além</a></li>
          </ul>
          <p class="menu-label">
            Filtro de Horas de Trabalho
          </p>
          <ul class="menu-list">
            <li><a href="#">4 horas</a></li>
            <li><a href="#">6 horas</a></li>
            <li><a href="#">8 horas</a></li>
          </ul>
        </aside>
      </div>

      <div class="column">
        <form class="busca-principal">
          <div class="">
            <label class="label">Buscar termo</label>
            <p class="control">
              <input class="input" type="text" placeholder="Procurar título ou descrição">
            </p>
          </div>
          <div class="" style="margin-top:10px;margin-bottom:10px;">
            <p class="control">
              <button class="button is-info">Buscar</button>
              <button class="button is-link">Limpar Busca</button>
            </p>
          </div>
        </form>

        <section class="lista-vagas">
          <?php for ($var = 0; $var < 3; $var++): ?>
          <div class="lista-vagas__vaga">
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
              </div>
              <footer class="card-footer">
                <a class="card-footer-item">Mais detalhes</a>
                <a class="card-footer-item">Candidatar</a>
                <a class="card-footer-item">Denunciar abuso</a>
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
