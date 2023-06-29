<?php switch ($act) {
    default: ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>">Flight Information</a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2>Flight Information Kualanamu International Airport</h2>
            </div>
        </section>
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    403 Forbidden
                </div>
            </div>
        </section>
        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "FlightInformation": ?>
        <?= $this->extend('pages'); ?>
        <?= $this->Section('main'); ?>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= site_url(); ?>"><?= lang('Lang.menuHome') ?></a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"><?= lang('Lang.menuFlightInformation') ?></a></li>
                    <li><a href="<?= site_url(); ?><?= strtolower($module); ?>"></a></li>
                </ol>
                <h2><?= lang('Lang.menuFlightInformation') ?> Kualanamu International Airport</h2>
            </div>
        </section>
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Arrival-tab" data-bs-toggle="tab" data-bs-target="#Arrival-tab-pane" type="button" role="tab" aria-controls="Arrival-tab-pane" aria-selected="true"> <i class="fa-solid fa-plane-arrival"></i> <?= lang("Lang.tabArrival"); ?> </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Departure-tab" data-bs-toggle="tab" data-bs-target="#Departure-tab-pane" type="button" role="tab" aria-controls="Departure-tab-pane" aria-selected="false"> <i class="fa-solid fa-plane-departure"></i> <?= lang("Lang.tabDeparture"); ?> </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active pt-3" id="Arrival-tab-pane" role="tabpanel" aria-labelledby="Arrival-tab" tabindex="0">
                        <div class="form-group row g-3 d-none">
                            <div class="col-lg-6">
                                <label for="searchArrival" class="visually-hidden"></label>
                                <input type="text" class="form-control searchArrival" id="searchArrival" name="searchArrival" placeholder="<?= lang("Lang.searchFlight"); ?>">
                            </div>
                            <div class="col-lg-6">
                                <button type="button" id="findArrival" name="findArrival" class="findArrival btn btn-primary mb-3"> <i class="fas fa-search"></i> <?= lang("Lang.searchFlightBtn"); ?></button>
                            </div>
                        </div>
                        <div class="ArrivalTabPane">
                            <?= $this->include('layout/content-loading'); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-3" id="Departure-tab-pane" role="tabpanel" aria-labelledby="Departure-tab" tabindex="0">
                        <div class="form-group row g-3 d-none">
                            <div class="col-lg-6">
                                <label for="searchDeparture" class="visually-hidden"></label>
                                <input type="text" class="form-control searchDeparture" id="searchDeparture" name="searchDeparture" placeholder="<?= lang("Lang.searchFlight"); ?>">
                            </div>
                            <div class="col-lg-6">
                                <button type="button" id="findDeparture" name="findDeparture" class="findDeparture btn btn-primary mb-3"> <i class="fas fa-search"></i> <?= lang("Lang.searchFlightBtn"); ?></button>
                            </div>
                        </div>
                        <div class="DepartureTabPane">
                            <?= $this->include('layout/content-loading'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <script>
           
        </script> -->
        <script src="<?= site_url(); ?>js/<?= $path; ?>/<?= $module; ?>.js"></script>
        <?= $this->endSection(); ?>
    <?php break;
    case "ArrivalTabPane": ?>
        <div class="table-reponsive">
            <table style="width: 100%;" class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center" colspan="2"> <?= lang("Lang.tableFLIGHT"); ?> </th>
                        <th class="text-center"> <?= lang("Lang.tableTIME"); ?> </th>
                        <th class="text-center"> <?= lang("Lang.tableORIGIN"); ?> </th>
                        <th class="text-center"> <?= lang("Lang.tableSTATUS"); ?> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($result->data->list_arrival) == 0) : ?>
                        <tr>
                            <td colspan="5" class="text-center"> <i>Arrival Not Found</i> </td>
                        </tr>
                    <?php endif; ?>

                    <?php
                    $tanggal1 = '';
                    $tanggal2 = '';
                    ?>
                    <?php foreach ($result->data->list_arrival as $key => $rest) {
                        $tanggal1 = date('Y-m-d');   ?>
                        <tr>
                            <td class='text-center'>
                                                <?php if ($rest->FLIGHT_IMAGE_URL_REAL != null && $rest->FLIGHT_IMAGE_URL_REAL != '') { ?>
                                                    <img src="<?= IMAGE_URL1; ?><?= $rest->FLIGHT_IMAGE_URL_REAL; ?>" style='max-height: 25px;'>
                                                    <?php } else { ?>
                                                        <?= $rest->FLIGHT_NAME; ?>
                                                        <?php } ?>
                                                    </td>
                            <td class='text-center'> <?= $rest->FLIGHT_NO; ?> </td>
                            <td class='text-center'> <?= date('H.i', strtotime($rest->WAKTU)); ?> </td>
                            <td class='text-center'> <?= $rest->KOTAASAL; ?> </td>
                            <td class='text-center'> <?= lang("Lang.lang")=="en"?$rest->STATUS_ENG:$rest->STATUS_IND; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <br>
        <div class="col-lg-12 text-center">
            <?php
            $page_size = $param->page_size;
            $row_datas = $result->data->row_datas;
            $offset_row_datas = $result->data->offset_row_datas;

            $page = $param->current_page;
            $count_page = ceil($row_datas / $page_size);
            $count_number = 3;
            $start_number = ($page > $count_number) ? $page - $count_number : 1;
            $end_number = ($page < ($count_page - $count_number)) ? $page + $count_number : $count_page;
            ?>

            <?php if ($count_page > $start_number) : ?>
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <?php
                        $linkparam = $param;
                        $linkparam->current_page = $param->current_page == 1 ? 1 : ($param->current_page - 1);
                        ?>
                        <?php if ($page > $start_number) : ?><li><a href="#" class="linkPageArrival" data-linkparam='<?= json_encode($linkparam); ?>'><?= '<< Previous'; ?></a></li> <?php endif; ?>
                        <?php for ($i = $start_number; $i <= $end_number; $i++) { ?>
                            <?php
                            $linkparam = $param;
                            $linkparam->current_page = $i;
                            $link_active = $page == $i ? 'active' : '';
                            ?>
                            <li class="<?= $link_active; ?>"><a href="#" class="linkPageArrival" data-linkparam='<?= json_encode($linkparam); ?>'><?= $i; ?></a></li>
                        <?php } ?>
                        <?php
                        $linkparam = $param;
                        $linkparam->current_page = $page == $end_number ? $page : ($page + 1);
                        ?>
                        <?php if ($page < $end_number) : ?><li><a href="#" class="linkPageArrival" data-linkparam='<?= json_encode($linkparam); ?>'>Next >> </a></li><?php endif; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>

    <?php break;
    case "DepartureTabPane": ?>
        <div class="table-reponsive">
            <table style="width: 100%;" class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center" colspan="2" > <?= lang("Lang.tableFLIGHT"); ?> </th>
                        <!-- <th class="text-center"> </th> -->
                        <th class="text-center"> <?= lang("Lang.tableTIME"); ?> </th>
                        <th class="text-center"> <?= lang("Lang.tableDESTINATION"); ?> </th>
                        <th class="text-center"> <?= lang("Lang.tableSTATUS"); ?> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($result->data->list_departure) == 0) : ?>
                        <tr>
                            <td colspan="5" class="text-center"> <i>Departure Not Found</i> </td>
                        </tr>
                    <?php endif; ?>

                    <?php
                    $tanggal1 = '';
                    $tanggal2 = '';
                    ?>
                    <?php foreach ($result->data->list_departure as $key => $rest) {
                        $tanggal1 = date('Y-m-d');  ?>
                        <tr>
                           <td class='text-center'>
                                                <?php if ($rest->FLIGHT_IMAGE_URL_REAL != null && $rest->FLIGHT_IMAGE_URL_REAL != '') { ?>
                                                    <img src="<?= IMAGE_URL1; ?><?= $rest->FLIGHT_IMAGE_URL_REAL; ?>"  style='max-height: 25px;'>
                                                    <?php } else { ?>
                                                        <?= $rest->FLIGHT_NAME; ?>
                                                        <?php } ?>
                                                    </td>
                           
                            <td class='text-center'> <?= $rest->FLIGHT_NO; ?> </td>
                            <td class='text-center'> <?= date('H.i', strtotime($rest->WAKTU)); ?></td>
                            <td class='text-center'> <?= $rest->KOTATUJUAN; ?> </td>
                            <td class='text-center'> <?= lang("Lang.lang")=="en"?$rest->STATUS_ENG:$rest->STATUS_IND; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <br>
        <div class="col-lg-12 text-center">
            <?php
            $page_size = $param->page_size;
            $row_datas = $result->data->row_datas;
            $offset_row_datas = $result->data->offset_row_datas;

            $page = $param->current_page;
            $count_page = ceil($row_datas / $page_size);
            $count_number = 3;
            $start_number = ($page > $count_number) ? $page - $count_number : 1;
            $end_number = ($page < ($count_page - $count_number)) ? $page + $count_number : $count_page;
            ?>

            <?php if ($count_page > $start_number) : ?>
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <?php
                        $linkparam = $param;
                        $linkparam->current_page = $param->current_page == 1 ? 1 : ($param->current_page - 1);
                        ?>
                        <?php if ($page > $start_number) : ?><li><a href="#" class="linkPageDeparture" data-linkparam='<?= json_encode($linkparam); ?>'><?= '<< Previous'; ?></a></li> <?php endif; ?>
                        <?php for ($i = $start_number; $i <= $end_number; $i++) { ?>
                            <?php
                            $linkparam = $param;
                            $linkparam->current_page = $i;
                            $link_active = $page == $i ? 'active' : '';
                            ?>
                            <li class="<?= $link_active; ?>"><a href="#" class="linkPageDeparture" data-linkparam='<?= json_encode($linkparam); ?>'><?= $i; ?></a></li>
                        <?php } ?>
                        <?php
                        $linkparam = $param;
                        $linkparam->current_page = $page == $end_number ? $page : ($page + 1);
                        ?>
                        <?php if ($page < $end_number) : ?><li><a href="#" class="linkPageDeparture" data-linkparam='<?= json_encode($linkparam); ?>'>Next >> </a></li><?php endif; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
<?php break;
} ?>