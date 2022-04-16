<?php foreach ($chamados as $chamado) { ?>

<div class="card mb-3 bg-light">
  <div class="card-body">
    <h5 class="card-title"><?= $chamado[1] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $chamado[2] ?></h6>
    <p class="card-text"><?= $chamado[3] ?></p>

  </div>
</div>

<?php } ?>