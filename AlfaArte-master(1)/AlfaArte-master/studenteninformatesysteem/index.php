<?php
session_start();
include_once('app/templates/bovenstuk.php');

$db = new PDO('mysql:host=localhost;dbname=alfa-arte' , 'root', '');

$stmt = $db->prepare('SELECT * FROM rooster WHERE klas_id = :klas_id ORDER BY starttijd ASC');

$stmt->execute([
    ':klas_id' => $_SESSION['klas_id'];
]);

$rooster = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="page-header">
        <h1 class="text-white">Agenda</h1>
    </div>  

    <table class="table table-light">
        <thead>
        <tr>
            <th>Maandag</th>
            <th>Vak</th>
            <th>Docent</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($rooster as $vakken => $v): ?>
       <?php $stmt = $db->prepare('SELECT * FROM vakken WHERE id = :id');

$stmt->execute([
    ':id' => $v['vakken_id']
]);

$les = $stmt->fetch();

$stmt = $db->prepare('SELECT * FROM users WHERE id = :id');

$stmt->execute([
    ':id' => $v['users_id']
]);

$docent = $stmt->fetch();


?>
       <?php if($v['dag'] == 'maandag'): ?>

        <tr>
            <td><?= $v['starttijd'] ?> - <?= $v['eindtijd']?> </td>
            <td><?= $les['vaknaam'] ?></td>
            <td><?= $docent['naam'] ?></td>
        </tr>
        <?php endif ?>
    <?php endforeach ?>

        </tbody>

    </table>

    <table class="table table-light">
        <thead>
        <tr>
            <th>Dinsdag</th>
            <th>Vak</th>
            <th>Docent</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($rooster as $vakken => $v): ?>
       <?php $stmt = $db->prepare('SELECT * FROM vakken WHERE id = :id');

$stmt->execute([
    ':id' => $v['vakken_id']
]);

$les = $stmt->fetch();

$stmt = $db->prepare('SELECT * FROM users WHERE id = :id');

$stmt->execute([
    ':id' => $v['users_id']
]);

$docent = $stmt->fetch();


?>
       <?php if($v['dag'] == 'dinsdag'): ?>

        <tr>
            <td><?= $v['starttijd'] ?> - <?= $v['eindtijd']?> </td>
            <td><?= $les['vaknaam'] ?></td>
            <td><?= $docent['naam'] ?></td>
        </tr>
        <?php endif ?>
    <?php endforeach ?>
       
        </tbody>

    </table>

    <table class="table table-light">
        <thead>
        <tr>
            <th>Woensdag</th>
            <th>Vak</th>
            <th>Docent</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($rooster as $vakken => $v): ?>
       <?php $stmt = $db->prepare('SELECT * FROM vakken WHERE id = :id');

$stmt->execute([
    ':id' => $v['vakken_id']
]);

$les = $stmt->fetch();

$stmt = $db->prepare('SELECT * FROM users WHERE id = :id');

$stmt->execute([
    ':id' => $v['users_id']
]);

$docent = $stmt->fetch();


?>
       <?php if($v['dag'] == 'woensdag'): ?>

        <tr>
            <td><?= $v['starttijd'] ?> - <?= $v['eindtijd']?> </td>
            <td><?= $les['vaknaam'] ?></td>
            <td><?= $docent['naam'] ?></td>
        </tr>
        <?php endif ?>
    <?php endforeach ?>
        </tbody>

    </table>

    <table class="table table-light">
        <thead>
        <tr>
            <th>Donderdag</th>
            <th>Vak</th>
            <th>Docent</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($rooster as $vakken => $v): ?>
       <?php $stmt = $db->prepare('SELECT * FROM vakken WHERE id = :id');

$stmt->execute([
    ':id' => $v['vakken_id']
]);

$les = $stmt->fetch();

$stmt = $db->prepare('SELECT * FROM users WHERE id = :id');

$stmt->execute([
    ':id' => $v['users_id']
]);

$docent = $stmt->fetch();


?>
       <?php if($v['dag'] == 'donderdag'): ?>

        <tr>
            <td><?= $v['starttijd'] ?> - <?= $v['eindtijd']?> </td>
            <td><?= $les['vaknaam'] ?></td>
            <td><?= $docent['naam'] ?></td>
        </tr>
        <?php endif ?>
    <?php endforeach ?>
        </tbody>

    </table>

    <table class="table table-light margin-bottom-agenda">
        <thead>
        <tr>
            <th>Vrijdag</th>
            <th>Vak</th>
            <th>Docent</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($rooster as $vakken => $v): ?>
       <?php $stmt = $db->prepare('SELECT * FROM vakken WHERE id = :id');

$stmt->execute([
    ':id' => $v['vakken_id']
]);

$les = $stmt->fetch();

$stmt = $db->prepare('SELECT * FROM users WHERE id = :id');

$stmt->execute([
    ':id' => $v['users_id']
]);

$docent = $stmt->fetch();


?>
       <?php if($v['dag'] == 'vrijdag'): ?>

        <tr>
            <td><?= $v['starttijd'] ?> - <?= $v['eindtijd']?> </td>
            <td><?= $les['vaknaam'] ?></td>
            <td><?= $docent['naam'] ?></td>
        </tr>
        <?php endif ?>
    <?php endforeach ?>
        </tbody>

    </table>
</div>


<?php
include_once('app/templates/onderstuk.php');