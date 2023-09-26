<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

?>

<div class="final-outer-continter" id="home-section">
    <div class=<?php

    if (strcmp($curPageName, "loan-index.php") == 0) {
        echo "container-background-image-loanindex";
    } else if (strcmp($curPageName, "rent-index.php") == 0) {
        echo "container-background-image-rentindex";
    } else if (strcmp($curPageName, "plot-index.php") == 0) {
        echo "container-background-image-plotindex";
    } else {
        echo "container-background-image";
    }

    ?>>
        <div class="container-middle-header">
            <h1 class="banner-title header-banner-title">

            </h1>

            <div class="search-wrap header-banner-search-container">
                <nav data-q="service" class="header-banner-nav-container">
                    <a data-q="false" class="search-tab header-banner-nav-atext" href=<?php echo __URL_INDEX_BUY ?>
                        target="_self">Buy</a>
                    <a data-q="false" class="search-tab header-banner-nav-atext" href=<?php echo __URL_INDEX_RENT ?>
                        target="_self">Rent</a>
                    <a data-q="false" class="search-tab header-banner-nav-atext" href=<?php echo __URL_INDEX_LOAN."#saveloan" ?> 
                        target="_self">Apply Loan</a>
                    <a data-q="false" class="search-tab header-banner-nav-atext" href=<?php echo __URL_INDEX_PLOT?>
                        target="_self">Plots</a>
                </nav>
                <div class="search-box header-banner-search-bar-container">
                    <div class="input-container-helper">
                        <div class="input-container">

                            <div> <select name="landmark" id="landmark" class="search-bar header-searchbar-helper">

                                </select>
                            </div>
                        </div>
                    </div>
                    <div data-q="search" class="header-div-search-helper">
                        <input type="text" placeholder="Search Locality" class="header-searchlocality-helper" value="">
                    </div>
                    <div>

                    </div>
                    <button class="cta  header-banner-search-bar-button">Search</button>
                </div>
            </div>
        </div>

    </div><!--/$-->

</div>
</div>
<br>

<!-- <section class="feature-card-main-container">
                <div class="container">
                  <div class="row mt-5">
                    <div class="col">
                      <div class="feature-card-container" id="demo">
                        <div class="feature-cardww" tabindex="0"><h2>Car Loan</h2><img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/fast_car_p4cu.svg" width="100%"></div>
                        <div class="feature-cardww" tabindex="0"><h2>Personal Loan</h2><img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/business_shop_qw5t.svg" width="100%"></div>
                        <div class="feature-cardww" tabindex="0"><h2>Gold Loan</h2><img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/apartment_rent_o0ut.svg" width="100%"></div>
                        <div class="feature-cardww" tabindex="0"><h2>Other Loan</h2><img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/work_time_lhoj.svg" width="100%"></div>
                        <div class="feature-cardww" tabindex="0"><h2>Bike Loan</h2><img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/doctors_hwty.svg" width="100%"></div>
                        <div class="feature-cardww" tabindex="0"><h2>Eduction Loan</h2><img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/exams_g4ow.svg" width="100%"></div>
                      </div>
                    </div>
                  </div>
                </div>
    </section>

<section> -->