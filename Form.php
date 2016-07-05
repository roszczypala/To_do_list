<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>
                Nazwa zadania:
                <input type="text" name="taskName" required>
            </label>
            <label>
                Opis zadania:
                <input type="text" name="taskDescript" required>
            </label>
            <button type="submit">Dodaj zadanie</button>
        </form>
    </body>
</html>
