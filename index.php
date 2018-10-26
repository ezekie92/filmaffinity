<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Bases de datos</title>
    </head>
    <body>
        <?php
            $pdo = new PDO('pgsql:host=localhost;dbname=fa', 'fa', 'fa');
            $st = $pdo->query('SELECT * FROM generos;');
            $res = $st->fetchAll();
        ?>

        <table>
            <thead>
                <th>Id</th>
                <th>Género</th>
            </thead>
            <tbody>
                <?php foreach ($res as $fila): ?>
                    <tr>
                        <td><?= $fila['0'] ?></td>
                        <td><?= $fila['1'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</html>
