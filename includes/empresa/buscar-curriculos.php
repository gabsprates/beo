<div class="is-clipped">
  <div class="container section" id="corpo">
    <h1 class="title">Consulta de Currículos</h1>
    <div class="">
      <form class="busca-principal">
        <div class="">
          <label class="label">Buscar termo no resumo dos candidatos</label>
          <p class="control">
            <input class="input" type="text" placeholder="Procurar na descrição">
          </p>
        </div>
        <div class="" style="margin-top:10px;margin-bottom:10px;">
          <p class="control">
            <button class="button is-info">Buscar</button>
            <button class="button is-link">Limpar Busca</button>
          </p>
        </div>
      </form>

      <section class="lista-vagas columns is-multiline">
        <?php for ($var = 0; $var < 9; $var++): ?>
        <div class="lista-vagas__vaga column is-one-third">
          <div class="card is-fullwidth">
            <header class="card-header">
              <p class="card-header-title">
                <?= $var % 3 === 0 ? "Richard M. Stallman" : "Linus Torvalds" ?>
              </p>
            </header>
            <div class="card-content">
              <div class="content">
                Em 1985, Stallman publicou o manifesto GNU, que estabeleceu sua motivação para criar um sistema livre chamado GNU (GNU is not Unix), que seria semelhante ao Unix. Logo após, criou a Free Software Foundation FSF (Fundação Software Livre) para unir programadores de software livre e para fornecer um infra-estrutura legal para a comunidade livre...
                <br>
                <small>16 de Mar. de 1953</small>
              </div>
            </div>
            <footer class="card-footer">
              <a class="card-footer-item">
                <span class="button is-info is-fullwidth">
                  Mais detalhes
                </span>
              </a>
              <a class="card-footer-item">
                <span class="button is-success is-fullwidth">
                  Contatar
                </span>
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
