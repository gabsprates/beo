<div class="is-clipped">
  <div class="container section" id="corpo">
    <h1 class="title">Cursos de Parceiros</h1>
    <div class="columns is-multiline">
      <?php foreach ([
        ['titulo'=>'INGLÊS BÁSICO', 'imagem'=>'https://bibliotecaonlineead.com.br/logsys/cursos/imagens/91feece24acb3d7d9969d95e827b2166.jpg'],
        ['titulo'=>'INFORMÁTICA BÁSICA', 'imagem'=>'https://bibliotecaonlineead.com.br/logsys/cursos/imagens/838643d62a439a9f13885f9adb570eba.jpg'],
        ['titulo'=>'MONTAGEM E MANUTENÇÃO DE PCs', 'imagem'=>'https://bibliotecaonlineead.com.br/logsys/cursos/imagens/3ba806154c1e82bb3b6a6c1b0ac29321.jpg'],
        ['titulo'=>'INGLÊS BÁSICO', 'imagem'=>'https://bibliotecaonlineead.com.br/logsys/cursos/imagens/91feece24acb3d7d9969d95e827b2166.jpg'],
        ['titulo'=>'INFORMÁTICA BÁSICA', 'imagem'=>'https://bibliotecaonlineead.com.br/logsys/cursos/imagens/838643d62a439a9f13885f9adb570eba.jpg'],
        ['titulo'=>'MONTAGEM E MANUTENÇÃO DE PCs', 'imagem'=>'https://bibliotecaonlineead.com.br/logsys/cursos/imagens/3ba806154c1e82bb3b6a6c1b0ac29321.jpg'],
        ['titulo'=>'INGLÊS BÁSICO', 'imagem'=>'https://bibliotecaonlineead.com.br/logsys/cursos/imagens/91feece24acb3d7d9969d95e827b2166.jpg'],
        ['titulo'=>'INFORMÁTICA BÁSICA', 'imagem'=>'https://bibliotecaonlineead.com.br/logsys/cursos/imagens/838643d62a439a9f13885f9adb570eba.jpg'],
        ['titulo'=>'MONTAGEM E MANUTENÇÃO DE PCs', 'imagem'=>'https://bibliotecaonlineead.com.br/logsys/cursos/imagens/3ba806154c1e82bb3b6a6c1b0ac29321.jpg']
      ] as $key => $value): ?>

        <div class="card column is-one-quarter">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="<?= $value['imagem'] ?>" alt="">
            </figure>
          </div>
          <div class="card-content">
            <div class="content">
              <?= $value['titulo'] ?>
            </div>
          </div>
          <footer class="card-footer">
            <a class="card-footer-item">
              <span class="button is-success is-fullwidth">VER CURSO</span>
            </a>
          </footer>
        </div>

      <?php endforeach; ?>
    </div>
  </div>
</div>
