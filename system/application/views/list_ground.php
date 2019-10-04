<!-- Contents Starts Here-->
<section class="b-pageHeader">
    <div class="container">
        <h1 class="wow zoomInLeft" data-wow-delay="0.5s"><?= $header ?></h1>
        <div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
            <h3><?= $sub ?></h3>
        </div>
    </div>
</section><!--b-pageHeader-->

<div class="b-breadCumbs s-shadow">
    <div class="container wow zoomInUp" data-wow-delay="0.5s">
        <a href="<?= base_url() ?> " class="b-breadCumbs__page">Home</a>
    </div>
</div><!--b-breadCumbs-->

<div class="b-infoBar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <div class="b-infoBar__compare wow zoomInUp" data-wow-delay="0.5s">
                    <strong>On Ground Cars</strong> are cheap. They have been bought, shipped and cleared by CarsNowNow Limited. But they are little more expensive than Buy Now and On Sail Cars <a href="<?= base_url() ?>cars/all">Click Here to read more...</a>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12">
                <div class="b-infoBar__select wow zoomInUp" data-wow-delay="0.5s">
                    

                        <div class="b-infoBar__select-one">
                            <span class="b-infoBar__select-one-title">ITEMS PER PAGE</span>
                            <select name="select1" id="ddlPage" class="m-select" onchange="perPage()">
                                <option value="20" <?php if($this->session->userdata('per_page') == '20') : echo 'selected'; endif; ?>>20 items</option>
                                <option value="40" <?php if($this->session->userdata('per_page') == '40') : echo 'selected'; endif; ?>>40 items</option>
                                <option value="60" <?php if($this->session->userdata('per_page') == '60') : echo 'selected'; endif; ?>>60 items</option>
                                <option value="80" <?php if($this->session->userdata('per_page') == '80') : echo 'selected'; endif; ?>>80 items</option>
                                <option value="100" <?php if($this->session->userdata('per_page') == '100') : echo 'selected'; endif; ?>>100 items</option>
                            </select>
                            <span class="fa fa-caret-down"></span>
                        </div>
                        <div class="b-infoBar__select-one">
                            <span class="b-infoBar__select-one-title">SORT BY</span>
                            <select name="select2" id="ddlSort" class="m-select" style="padding-left: 10px; padding-right: 10px" onchange="perSort()">
                                <option value="1" <?php if($this->session->userdata('per_sort') == '1') : echo 'selected'; endif; ?>>Recently Added</option>
                                <option value="2" <?php if($this->session->userdata('per_sort') == '2') : echo 'selected'; endif; ?>>Price: (Low to High)</option>
                                <option value="3" <?php if($this->session->userdata('per_sort') == '3') : echo 'selected'; endif; ?>>Price (High to Low)</option>
                            </select>
                            <span class="fa fa-caret-down"></span>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div><!--b-infoBar-->

<div class="b-items">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-4 col-xs-12">
                
                <div class="b-search__main-form-submit" id="mobile_filter" style="text-align: center; margin-top: 0px; margin-bottom: 40px; display: none">
                    <button type="button" class="btn m-btn" id="mobile_show">Show Filter<span class="fa fa-angle-down"></span></button>
                        </div>
                
                <aside class="b-items__aside" id="aside">
                    <h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">REFINE YOUR SEARCH</h2>
                    <div class="b-items__aside-main wow zoomInUp" data-wow-delay="0.5s">
                        <?= form_open() ?>
                        <div class="b-items__aside-main-body">
                            <div class="b-items__aside-main-body-item">
                                <label>SELECT A MAKE</label>
                                <div>
                                    <select name="ddlMake" id="make_cat" class="m-select" onchange="fetchModels()">
                                        <option value="" selected="">Any Make</option>
                                        <?php
                                        foreach ($make as $make) {

                                            echo '<option value="' . $make->make_id . '">' . $make->name . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <span class="fa fa-caret-down"></span>
                                </div>
                            </div>
                            <div class="b-items__aside-main-body-item"  id="fetchmodel">
                                <label>SELECT A MODEL</label>
                                <div>
                                    <select name="ddlModel" class="m-select">
                                        <option value="" selected="">Any Make</option>
                                    </select>
                                    <span class="fa fa-caret-down"></span>
                                </div>
                            </div>
                            <div class="b-items__aside-main-body-item">
                                <label>PRICE RANGE</label>
                                 <div>
                                    <select name="ddlAmt" class="m-select">
                                       <option value="" selected="">Select Price Range</option>
                                                                                        <option value="500000-1500000">500,000 - 1,500,000</option>
                                                                                        <option value="1500001-3500000">1,500,001 - 3,500,000</option>
                                                                                        <option value="3500001-5500000">3,500,001 - 5,500,000</option>
                                                                                        <option value="5500001-10000000">5,500,001 - 10,000,000</option>
                                    </select>
                                    <span class="fa fa-caret-down"></span>
                                </div>
                            </div>
                            <div class="b-items__aside-main-body-item">
                                <label>YEAR</label>
                                <div>
                                    <select name="ddlYear" class="m-select">
                                        <option value="" selected="">Any</option>
                                        <?php
                                        $already_selected_value = 2003;
                                        $earliest_year = 1995;

                                        foreach (range(date('Y'), $earliest_year) as $x) {
                                            print '<option value="' . $x . '" >' . $x . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <span class="fa fa-caret-down"></span>
                                </div>
                            </div>
                            <div class="b-items__aside-main-body-item">
                                <label>RUN AND DRIVE</label>
                                <div>
                                    <select name="ddlRun" class="m-select">
                                        <option value="" selected="">Any</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <span class="fa fa-caret-down"></span>
                                </div>
                                <input type="hidden" name="hd" value="hd" />
                            </div>
                        </div>
                        <footer class="b-items__aside-main-footer">
                            <button type="submit" class="btn m-btn">FILTER VEHICLES<span class="fa fa-angle-right"></span></button><br />
                        </footer>
                        <?= form_close() ?>
                    </div>
                    <!--<div class="b-items__aside-sell wow zoomInUp" data-wow-delay="0.5s">
                        <div class="b-items__aside-sell-img">
                            <h3>MAKE A REQUEST</h3>
                        </div>
                        <div class="b-items__aside-sell-info">
                            <p>
                                You can make a custom request for a specific car you can't find on this platform.
                            </p>
                            <a href="<?= base_url() ?>cars/request" class="btn m-btn">REQUEST NOW<span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>-->
                </aside>
            </div>
            <div class="col-lg-9 col-sm-8 col-xs-12">
                <div class="b-items__cars">

                    <?php foreach ($list as $key => $list): ?>

                        <?php
                        $ead = date('jS M Y', strtotime($list->ead));

                        $price = 70 / 100 * $list->amount;

                        $mid = $list->make;
                        $moid = $list->model;

                        $sql = "SELECT * FROM make WHERE make_id = '$mid'";
                        $query = $this->db->query($sql);
                        foreach ($query->result_array() as $key => $make) {

                            $mosql = "SELECT * FROM model WHERE model_id = '$moid'";
                            $moquery = $this->db->query($mosql);
                            foreach ($moquery->result_array() as $key => $model) {
                                ?>


                                <div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
                                    <div class="b-items__cars-one-img">
                                        <a href="<?= base_url(); ?>cars/item/<?= $list->car_id; ?>"><img src="<?= base_url() ?>upload/<?= $list->image_1; ?>" width="270" alt='<?php echo $list->year; ?> <?= $make['name']; ?> <?= $model['name']; ?>'/></a>

                                    </div>
                                    <div class="b-items__cars-one-info">
                                        <form class="b-items__cars-one-info-header s-lineDownLeft">
                                            <a href="<?= base_url(); ?>cars/item/<?= $list->car_id; ?>"><h2><?php echo $list->year; ?> <?= $make['name']; ?> <?= $model['name']." ".$list->others; ?></h2></a>

                                        </form>
                                        <div class="row s-noRightMargin">
                                            <div class="col-md-9 col-xs-12">
                                                <p>This car has arrived</p>
                                                <div class="m-width row m-smallPadding">
                                                    <div class="col-xs-6">
                                                        <div class="row m-smallPadding">
                                                            <div class="col-xs-6">
                                                                <span class="b-items__cars-one-info-title">Damage:</span>
                                                                <span class="b-items__cars-one-info-title">Run & Drive:</span>
                                                                <span class="b-items__cars-one-info-title">Mileage:</span>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <span class="b-items__cars-one-info-value"><?= $list->damage; ?></span>
                                                                <span class="b-items__cars-one-info-value"><?= $list->run; ?></span>
                                                                <span class="b-items__cars-one-info-value"><?= $list->odometer; ?></span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="row m-smallPadding">
                                                            <div class="col-xs-5">
                                                                <span class="b-items__cars-one-info-title">Transmission:</span>
                                                                <span class="b-items__cars-one-info-title">Fuel:</span>
                                                                <span class="b-items__cars-one-info-title">Car Keys:</span>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <span class="b-items__cars-one-info-value"><?= $list->transmission; ?></span>
                                                                <span class="b-items__cars-one-info-value"><?= $list->fuel; ?></span>
                                                                <span class="b-items__cars-one-info-value"><?= $list->car_keys; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-12">
                                                <div class="b-items__cars-one-info-price">
                                                    <div class="pull-right">
                                                        <h3>Price:</h3>
                                                        <h4> &#8358;<?= number_format($list->amount); ?></h4>
                                                    </div>
                                                    <a href="<?= base_url(); ?>cars/item/<?= $list->car_id; ?>" class="btn m-btn">VIEW DETAILS<span class="fa fa-angle-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

        <?php } ?>
    <?php } ?>
<?php endforeach; ?>
                </div>
                <div class="b-items__pagination wow zoomInUp" data-wow-delay="0.5s">


                    <?php $pagi ?>

<div class="b-detail__main-aside-about-seller" style="text-align: center; margin-top: 70px">
     <span style="font-size: 20px">Can't Find The Car You need?</span> <a href="<?= base_url() ?>request"><button type="button" class="btn m-btn">Make a Custom Request<span class="fa fa-angle-right"></span></button></a>
                            </div>


                </div>
            </div>
        </div>
    </div>
</div><!--b-items-->