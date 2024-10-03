<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
     integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>hello World</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="">form Mahasiswa</h1>
                <hr>
                <?php
                    require_once "Bsform.php";
                    $formMhs = new Bsform();
                    $formMhs->setInputText('nama', 'nama', 'Nama');
                    $formMhs->setInputText('nim', 'nim', 'Nim');
                    $formMhs->setInputText('prodi', 'prodi', 'program studi');
                    $formMhs->setInputText('fakultas', 'fakultas', 'Fakultas');
                    $formMhs->setButton('Simpan');
                    $formMhs->showForm();
                ?>    
            </div>
        </div>
    </div>
    
</body>
</html>