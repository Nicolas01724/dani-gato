<?php
    include "./src/database.php";
    
    $cat = null;
    try {
        if (array_key_exists("id", $_GET)) {
            $id = $_GET["id"];

            $query = "SELECT * FROM cat where id = $id";
            
            $cat = $db->query($query)->fetch();
        }
    } catch(Exception $err) {
        $cat = null;
    }

    include "header.php";
?>
    <div class="w-[80%] mx-auto py-8">
        <a class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded" href="/">
            <i class="fa-solid fa-arrow-left"></i>
            Voltar
        </a>
    </div>

    <?php if ($cat == null) { ?>
    <div class="w-full flex justify-center py-2">
        <div class="w-[80%] rounded bg-white m-auto overflow-hidden">
            <h1 class="text-center text-3xl font-bold mt-10  px-12 py-8">Gato não encontrado</h1>
        </div>
    </div>
    <?php } else { ?> 
    <div class="w-full flex justify-center py-2 shadow">
        <div class="w-[80%] rounded bg-white m-auto overflow-hidden shadow">
            <div class="w-full h-96 bg-cover bg-center bg-[url('<?= $cat["image_url"] ?>')]"></div>
            <h1 class="text-center text-3xl font-bold mt-10  px-12 py-8"> <?= $cat["pt_name"] ?> </h1>
        </div>
    </div>
    <?php } ?> 
<?php
include "footer.php";

