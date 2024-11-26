<?php  require VIEWS . '/incs/header.php';
/**
 * @var string $post
 */
?>


    <main class="main py-3">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1><?= $post['title']?></h1>
                    <?= $post ['content']?>

                </div>

            </div>
        </div>

    </main>
<?php require VIEWS . '/incs/footer.php'; ?>