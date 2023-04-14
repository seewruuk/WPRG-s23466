<!DOCTYPE html>
<html>
<head>
    <title>Plik</title>
</head>
<body>
    <?php
    $userPath = $_POST['path'];
    $folder = $_POST['folder'];
    $action = $_POST['action'];

    if (empty($userPath)) {
        echo "<p>Proszę podać ścieżkę do katalogu.</p>";
    } else {
        // print_r($userPath);
        if (substr($userPath, -1) !== '/') {
            $userPath .= '/';
        // print_r($userPath);
        }
        $path = $userPath . $folder;
        // print_r($path);
        $filesCount = count(scandir($path)) - 2;

        switch ($action) {
            case 'read':
                $elements = scandir($path);
                echo "<p>Lista elementów w katalogu:</p>";
               
                echo "<p>Ilość elementów: ". $filesCount ."</p>";
                echo "<ul>";
                foreach ($elements as $element) {
                    if ($element !== '.' && $element !== '..') {
                        echo "<li>$element</li>";
                    }
                }
                echo "</ul>";
                break;
            case 'delete':
                if (is_dir($path)) {
                    if ($filesCount === 2) {
                        rmdir($path);
                        echo "<p>Katalog został usunięty.</p>";
                    } else {
                        echo "<p>Katalog nie jest pusty, nie można go usunąć.</p>";
                    }
                } else {
                    echo "<p>Katalog nie istnieje.</p>";
                }
                break;
            case 'create':
                if (!is_dir($path)) {
                    mkdir($path);
                    echo "<p>Katalog został utworzony.</p>";
                } else {
                    echo "<p>Katalog już istnieje.</p>";
                }
                break;
            default:
                echo "<p>Nieznana akcja.</p>";
        }
    }
    ?>
</body