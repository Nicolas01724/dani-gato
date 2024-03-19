<?php
    include "./src/database.php";
    
    $cats = null;
    try {
        $cats = $db->query("SELECT * FROM cat");
    } catch(Exception $err) {
        $cats = null;
    }

    include "header.php";
?>


    <div class="container">
        <h1 class="text-3xl font-bold text-center">Gatos:</h1>
        <div class="container w-full px-8 flex flex-wrap gap-4">
            <?php
                foreach ($cats as $cat) {
            ?>
                <a href="/gato.php?id=<?= $cat["id"] ?>">
                    <div class="bg-[url('<?= $cat["image_url"]?>')] size-60 bg-center bg-cover rounded text-white flex justify-center items-end cursor-pointer hover:-translate-y-6 transition duration-300 relative before:content-[''] before:absolute before:bottom-0 before:top-0 before:left-0 before:right-0 before:bg-[#00000050] before:z-10">
                    
                    <p class="z-20">
                        <?= $cat["pt_name"] ?>
                    </p>
                </div>
            <?php
                }
            ?>
            </a>
        </div>
    </div>
<?php
include "footer.php";
