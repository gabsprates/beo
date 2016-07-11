<div class="is-clipped">
  <div class="container" id="corpo">
    <h1 class="title">Busca de vagas</h1>
    <form class="busca-principal columns is-multiline">
      <div class="column is-half">
        <label class="label">Buscar termo</label>
        <p class="control">
          <input class="input" type="text" placeholder="Text input">
        </p>
      </div>
      <div class="column is-3">
        <label class="label">Alguma coisa aqui</label>
        <p class="control">
          <span class="select is-fullwidth">
            <select>
              <option>Opção 1</option>
              <option>Opção 2</option>
            </select>
          </span>
        </p>
      </div>
      <div class="column is-3">
        <label class="label">Qualquer outra busca</label>
        <p class="control">
          <span class="select is-fullwidth">
            <select>
              <option>Opção 1</option>
              <option>Opção 2</option>
            </select>
          </span>
        </p>
      </div>
      <div class="column">
        <p class="control is-pulled-right">
          <button class="button is-info">Buscar</button>
          <button class="button is-link">Limpar Busca</button>
        </p>
      </div>
    </form>

    <div class="columns">
      <aside class="menu column is-one-quarter">
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

      <section class="column lista-vagas">
        <?php for ($var = 0; $var < 12; $var++): ?>
        <div class="lista-vagas__vaga">
          <div class="card is-fullwidth">
            <header class="card-header">
              <p class="card-header-title">
                Título da vaga
              </p>
            </header>
            <div class="card-content">
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
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
    </div>
  </div>
</div>
