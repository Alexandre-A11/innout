<main class="content">
    <?php
    renderTitle(
        "Registrar Ponto", 
        "Mantenha seu ponto consistente!", 
        "icofont-check-alt"
    );
    include(TEMPLATE_PATH . "/messages.php");
  ?>
    <div class="card">
        <div class="card-header">
            <h3><?php echo $today ?></h3>
            <p class="mb-0">Batimentos efetuados hoje</p>
        </div>
        <div class="card-body">
            <div class="d-flex m-5 justify-content-around">
                <span class="record">Entrada 1: <?php echo $records->time1 ?? "---" ?></span>
                <span class="record">Saída 1: <?php echo $records->time2 ?? "---" ?></span>
            </div>
            <div class="d-flex m-5 justify-content-around">
                <span class="record">Entrada 2: <?php echo $records->time3 ?? "---" ?></span>
                <span class="record">Saída 2: <?php echo $records->time4 ?? "---" ?></span>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="innout.php" class="btn btn-success btn-lg">
                <i class="icofont-check mr-1"></i>
                Bater Ponto
            </a>
        </div>
    </div>

    <form class="mt-5" action="innout.php" method="post">
        <div class="input-group no-border">
            <input class="form-control" type="text" name="forcedTime" placeholder="Hora Simulada">
            <button class="btn btn-danger ml-3">Simular Ponto</button>
        </div>
    </form>

</main>