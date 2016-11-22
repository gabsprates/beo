<div class="container pv30">

  <div class="section">
    <div class="columns is-mobile is-multiline is-centered">

      <?php foreach ([
        ['titulo'=>'Buscar Currículos', 'button'=>'is-info', 'imagem'=>'http://www.worky.biz/wp-content/uploads/2012/02/curriculum.jpg'],
        ['titulo'=>'Minhas Vagas', 'button'=>'is-warning', 'imagem'=>'http://radaramazonico.com.br/wp-content/uploads/2013/03/vagas-emprego.jpg']
      ] as $key => $value): ?>

        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="<?= $value['imagem'] ?>" alt="">
            </figure>
          </div>
          <div class="card-content">
            <a href="#" class="is-large button is-fullwidth <?= $value['button'] ?>" style="line-height:44px;">
              <?= $value['titulo'] ?>
            </a>
          </div>
        </div>

      <?php endforeach; ?>

    </div>
  </div>

</div>
