<main class="content">
    <?php
    renderTitle(
        "Relatório Mensal",
        "Acompanhe seu saldo de horas",
        "icofont-ui-calendar"
    );
?>
    <div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Dia</th>
                <th>Entrada 1</th>
                <th>Saída 1</th>
                <th>Entrada 2</th>
                <th>Saída 2</th>
                <th>Saldo</th>
            </thead>
            <tbody>
                <?php foreach($report as $registry): ?> 
                    <tr>
                        <td><?php echo $registry->work_date ?></td>
                        <td><?php echo $registry->time1 ?></td>
                        <td><?php echo $registry->time2 ?></td>
                        <td><?php echo $registry->time3 ?></td>
                        <td><?php echo $registry->time4 ?></td>
                        <td><?php echo "Saldo" ?></td>
                    </tr>
                <?php endforeach ?>
                <tr class="bg-primary text-white">
                    <td>Horas Trabalhadas</td>
                    <td colspan="3"><?php echo $sumOfWorkedTime ?></td>
                    <td>Saldo Mensal</td>
                    <td><?php echo $balance ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>