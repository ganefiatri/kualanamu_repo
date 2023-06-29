<?= $this->extend('pages'); ?>
<?= $this->Section('main'); ?>
<?php switch ($act) {
    default: ?>

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li><a href="#">About</a></li>
                </ol>
                <h2>About Us</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section>
            <div class="container">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, perspiciatis eum nesciunt exercitationem officia iusto in culpa voluptatum dolorum molestiae pariatur eaque magnam maxime repellat dolorem beatae blanditiis nam fugiat!

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, repudiandae maiores. Ipsam, eum. Voluptatibus dolores soluta optio autem saepe necessitatibus, illum ullam itaque, fugiat similique facilis, delectus esse odio dignissimos.

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque id omnis ex neque numquam eum, possimus nostrum dolor quod dicta nisi tempora placeat, non aspernatur, debitis sed quam minima vel!

                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab, odio? Optio illo perferendis nisi molestiae voluptatum deserunt ducimus enim dignissimos velit iusto fuga necessitatibus, consectetur reprehenderit assumenda delectus amet ratione.
            </div>
        </section>

    <?php break;
    case "add": ?>
<?php break;
} ?>
<script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
<?= $this->endSection(); ?>