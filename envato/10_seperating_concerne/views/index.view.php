<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5"><?= $view_bag['title']?></h1>
            </div>
        </div>
        <form class="form-container" method="get">
            <input type="text" id="searchFiled" name="search">
            <button>search</button>
        </form>
        <table class="table table-striped">
            <?php foreach ($model as $value) : ?>
                <tr>
                    <td><a href="http://localhost/php/10_seperating_concerne/details.php?term=<?= $value -> term ?>"><?= $value -> term ?></a></td>
                    <td><?= $value -> definition ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
