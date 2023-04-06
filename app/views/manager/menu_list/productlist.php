<div class="main-container">
    <input type="checkbox" name="sidebar-toggle" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sb-header">
            <div class="logo-img">
                <div class="coffeeCupLogo"></div>
            </div>
            <label>COFFEE</label>
            <p>CAFE BISA NGOPI</p>
        </div>
        <div class="list-menu">
            <ul>
                <li>
                    <a href="<?= BASEURL; ?>/manager">
                        <div class="i-dashboard"></div>
                        <div class="list-title">Dashboard</div>
                    </a>
                </li>
                <li class="list-active">
                    <a href="<?= BASEURL; ?>/manager/productlist">
                        <div class="i-openbook"></div>
                        <div class="list-title">Menu List</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/employee">
                        <div class="i-collaborator"></div>
                        <div class="list-title">Employee</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/transaction">
                        <div class="i-purchase"></div>
                        <div class="list-title">Transaction</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/activity">
                        <div class="i-activityfeed"></div>
                        <div class="list-title">Activity</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-type2 bar-type2-nonactive">
        <div class="sb-header-type2">
            <div class="logo-img">
                <div class="coffeeCupLogo"></div>
            </div>
            <label>COFFEE</label>
            <p>CAFE BISA NGOPI</p>
        </div>
        <div class="list-menu-type2">
            <ul>
                <li>
                    <a href="<?= BASEURL; ?>/manager">
                        <div class="i-dashboard"></div>
                        <div class="list-title">Dashboard</div>
                    </a>
                </li>
                <li class="list-active-type2">
                    <a href="<?= BASEURL; ?>/manager/productlist">
                        <div class="i-openbook"></div>
                        <div class="list-title">Menu List</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/employee">
                        <div class="i-collaborator"></div>
                        <div class="list-title">Employee</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/transaction">
                        <div class="i-purchase"></div>
                        <div class="list-title">Transaction</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/activity">
                        <div class="i-activityfeed"></div>
                        <div class="list-title">Activity</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/settings">
                        <div class="i-settings"></div>
                        <div class="list-title">Settings</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="btn-sidebar-type2 btn-type2-hide">
        <div class="i-menu2 i-menu2-active"></div>
    </div>
    <div class="container">

        <div class="header beetw">
            <div class="btn-for-sidebar">
                <label for="sidebar-toggle">
                    <div class="i-menu2"></div>
                </label>
            </div>
            <div class="searchpage-classic hide">
                <form action="" method="post">
                    <div class="i-search"></div>
                    <input type="text" name="search" id="search" placeholder="Search in Dashboard">
                </form>
            </div>
            <div class="navbar">
                <div class="nav-list">
                    <ul>
                        <li>
                            <a href="<?= BASEURL; ?>/manager/settings">
                                <div class="i-settings"></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="my-profile profile-nonactive" id="dropdownParent">
                    <div class="avatar-prof" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $data['sessionData']['primary_data']['image']; ?>');">
                    </div>
                    <div class="name-prof">
                        <?= $data['sessionData']['primary_data']['name']; ?>
                    </div>
                    <div class="dropdown-prof">
                        <div>
                            <div class="i-dropdown"></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-prof-menu hide" id="dropdownMenu">
                    <label>Personal</label>
                    <div class="box-prof">
                        <div class="avatar-prof-2" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $data['sessionData']['primary_data']['image']; ?>');">
                        </div>
                        <div class="info-prof-2">
                            <div class="name-prof-2">
                                <?= $data['sessionData']['primary_data']['name']; ?>
                            </div>
                            <div class="status-prof-small">
                                <?= $data['sessionData']['secondary_data']['level']; ?>
                            </div>
                        </div>
                    </div>
                    <p>See your detailed profile in settings.</p>
                    <div class="box">
                        <a href="<?= BASEURL; ?>/manager/settings">
                            <button class="btntext-default">
                                Profile
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="content-1 fl-colm fl-1">
                <input class="hide" type="radio" name="radio-ctg" id="r-ctg-1" checked>
                <input class="hide" type="radio" name="radio-ctg" id="r-ctg-2">
                <input class="hide" type="radio" name="radio-ctg" id="r-ctg-3">
                <input class="hide" type="radio" name="radio-ctg" id="r-ctg-4">
                <div class="box">
                    <div class="box-hed-ml">
                        <div class="list-hed scrolling-mini">
                            <label for="r-ctg-1">
                                <div label-tab="All" class="label-tabs"></div>
                            </label>
                            <label for="r-ctg-2">
                                <div label-tab="Drinks" class="label-tabs"></div>
                            </label>
                            <label for="r-ctg-3">
                                <div label-tab="Deserts" class="label-tabs"></div>
                            </label>
                            <label for="r-ctg-4">
                                <div label-tab="New" class="label-tabs"></div>
                            </label>
                        </div>
                    </div>
                </div>
                <span class="mY-dl-10"></span>
                <div class="content-box-2-1 fl-1">
                    <div class="content-box-2-2 for-tabs-ml padX-10">
                        <div class="content-box-2-3 scrollbar-default">
                            <div class="mytabs-ml dsp-flex padY-b-10px fl-1">
                                <div class="tab tabs-1 dsp-flex fl-colm fl-1">
                                    <div class="tabs-hed h-60px">
                                        <div class="content-box-2-4 fl-row fl-1 fl-Y-center fl-X-start">
                                            <h1>All</h1>
                                        </div>
                                        <div class="content-box-2-4 fl-X-end fl-1">
                                            <a href="#drinks" data-label="Drinks" class="hed-btn-icon">
                                                <div class="i-coffee"></div>
                                            </a>
                                            <span class="mX-r-10"></span>
                                            <a href="#deserts" data-label="Deserts" class="hed-btn-icon">
                                                <div class="i-cake"></div>
                                            </a>

                                            <span class="mX-r-10"></span>
                                            <div class="g1 dsp-flex fl-X-end sl">
                                                <input type="checkbox" name="dp-mnuv" id="dp-mnuv-1">
                                                <label for="dp-mnuv-1" class="dropdown-icon">
                                                    <div class="i-menuvertical"></div>
                                                </label>
                                                <span>More</span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs-body">
                                        <div class="box fl-colm fl-1">
                                            <div class="subtitle-text">Drinks</div>
                                            <div class="box">
                                                <div class="font-14px colr-def mX-r-10">Groups of Drink Categories</div>
                                                <div class="font-14px color-disabled mX-r-10">></div>
                                                <div class="font-14px colr-def">Coffee</div>
                                            </div>
                                            <span class="mY-dl-10"></span>
                                            <div class="box fl-colm box-content-tabs scrollbar-default">
                                                <div id="drinks" class="box fl-colm">

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Coffee</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 list-grid">
                                                        <?php if ($data['drinksCoffee'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['drinksCoffee'] as $allCoffee) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/coffee/<?= $allCoffee['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allCoffee['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allCoffee['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allCoffee['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allCoffee['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allCoffee['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Noncoffee</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 list-grid">
                                                        <?php if ($data['drinksNoncoffee'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['drinksNoncoffee'] as $allNoncoffee) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/noncoffee/<?= $allNoncoffee['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allNoncoffee['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allNoncoffee['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allNoncoffee['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allNoncoffee['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allNoncoffee['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div id="deserts" class="box fl-colm">

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Ice Cream</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 list-grid">
                                                        <?php if ($data['desertsIcecream'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['desertsIcecream'] as $allIcecream) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/icecream/<?= $allIcecream['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allIcecream['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allIcecream['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allIcecream['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allIcecream['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allIcecream['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Cake</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 list-grid">
                                                        <?php if ($data['desertsCake'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['desertsCake'] as $allCake) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cake/<?= $allCake['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allCake['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allCake['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allCake['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allCake['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allCake['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Cupcake</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 list-grid">
                                                        <?php if ($data['desertsCupcake'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['desertsCupcake'] as $allCupcake) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cupcake/<?= $allCupcake['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allCupcake['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allCupcake['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allCupcake['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allCupcake['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allCupcake['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Cookies</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 remove list-grid">
                                                        <?php if ($data['desertsCookies'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['desertsCookies'] as $allCookies) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cookies/<?= $allCookies['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allCookies['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allCookies['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allCookies['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allCookies['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allCookies['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab tabs-2 dsp-flex fl-colm fl-1">
                                    <div class="tabs-hed h-60px">
                                        <div class="content-box-2-4 fl-row fl-1 fl-Y-center fl-X-start">
                                            <h1>Drinks</h1>
                                        </div>
                                        <div class="content-box-2-4 fl-X-end fl-1">
                                            <a href="#coffee" data-label="Coffee" class="hed-btn-icon">
                                                <div class="i-coffee"></div>
                                            </a>
                                            <span class="mX-r-10"></span>
                                            <a href="#noncoffee" data-label="Noncoffee" class="hed-btn-icon">
                                                <div class="i-coffeeToGo"></div>
                                            </a>

                                            <span class="mX-r-10"></span>
                                            <div class="g1 dsp-flex fl-X-end sl">
                                                <input type="checkbox" name="dp-mnuv" id="dp-mnuv-1">
                                                <label for="dp-mnuv-1" class="dropdown-icon">
                                                    <div class="i-menuvertical"></div>
                                                </label>
                                                <span>More</span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs-body">
                                        <div class="box fl-colm fl-1">
                                            <div class="box fl-colm box-nonheader-tabs scrollbar-default">

                                                <div id="coffee" class="box fl-colm">

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Coffee</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 list-grid">
                                                        <?php if ($data['drinksCoffee'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['drinksCoffee'] as $allCoffee) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/coffee/<?= $allCoffee['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allCoffee['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allCoffee['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allCoffee['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allCoffee['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allCoffee['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div id="noncoffee" class="box fl-colm">

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Noncoffee</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 remove list-grid">
                                                        <?php if ($data['drinksNoncoffee'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['drinksNoncoffee'] as $allNoncoffee) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/noncoffee/<?= $allNoncoffee['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allNoncoffee['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allNoncoffee['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allNoncoffee['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allNoncoffee['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allNoncoffee['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab tabs-3 dsp-flex fl-colm fl-1">
                                    <div class="tabs-hed h-60px">
                                        <div class="content-box-2-4 fl-row fl-1 fl-Y-center fl-X-start">
                                            <h1>Deserts</h1>
                                        </div>
                                        <div class="content-box-2-4 fl-X-end fl-1">
                                            <a href="#icecream" data-label="Ice Cream" class="hed-btn-icon">
                                                <div class="i-iceCreamSundae"></div>
                                            </a>
                                            <span class="mX-r-10"></span>
                                            <a href="#cake" data-label="Cake" class="hed-btn-icon">
                                                <div class="i-cake"></div>
                                            </a>
                                            <span class="mX-r-10"></span>
                                            <a href="#cupcake" data-label="Cupcake" class="hed-btn-icon">
                                                <div class="i-cupCake"></div>
                                            </a>
                                            <span class="mX-r-10"></span>
                                            <a href="#cookies" data-label="Cookies" class="hed-btn-icon">
                                                <div class="i-cookies"></div>
                                            </a>

                                            <span class="mX-r-10"></span>
                                            <div class="g1 dsp-flex fl-X-end sl">
                                                <input type="checkbox" name="dp-mnuv" id="dp-mnuv-1">
                                                <label for="dp-mnuv-1" class="dropdown-icon">
                                                    <div class="i-menuvertical"></div>
                                                </label>
                                                <span>More</span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs-body">
                                        <div class="box fl-colm fl-1">
                                            <div class="box fl-colm box-nonheader-tabs scrollbar-default">

                                                <div id="icecream" class="box fl-colm">

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Ice Cream</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 list-grid">
                                                        <?php if ($data['desertsIcecream'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['desertsIcecream'] as $allIcecream) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/icecream/<?= $allIcecream['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allIcecream['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allIcecream['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allIcecream['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allIcecream['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allIcecream['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="box fl-colm" id="cake">

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Cake</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 list-grid">
                                                        <?php if ($data['desertsCake'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['desertsCake'] as $allCake) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cake/<?= $allCake['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allCake['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allCake['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allCake['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allCake['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allCake['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="box fl-colm" id="cupcake">

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Cupcake</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 list-grid">
                                                        <?php if ($data['desertsCupcake'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['desertsCupcake'] as $allCupcake) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cupcake/<?= $allCupcake['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allCupcake['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allCupcake['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allCupcake['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allCupcake['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allCupcake['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div id="cookies" class="box fl-colm">

                                                    <div class="font-16px font-weg-500 colr-def mY-b-10">Cookies</div>
                                                    <div class="box-grid gd-rpt-colm-minmax-180px gd-gap-40px mY-b-20 remove list-grid">
                                                        <?php if ($data['desertsCookies'] == false) : ?>
                                                            <div class="box fl-colm">
                                                                <span class="mY-dl-10"></span>
                                                                <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                                                                <span class="mY-dl-10"></span>
                                                            </div>
                                                        <?php else : ?>
                                                            <?php foreach ($data['desertsCookies'] as $allCookies) : ?>
                                                                <div class="card-preview">
                                                                    <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cookies/<?= $allCookies['image']; ?>');" class="card-img"></div>
                                                                    <div class="card-descrip">
                                                                        <label class="font-15px txt-center font-weg-600 mY-b-10 dsp-flex fl-center"><?= $allCookies['product_name']; ?></label>
                                                                        <div class="box fl-X-sp-beet">
                                                                            <div class="show-icon-text">
                                                                                <div class="i-moneyBagFilled"></div>
                                                                                <label>Rp <?= $data['ValueGenerate']->numberShortGenerate($allCookies['price']); ?></label>
                                                                                <p>Price</p>
                                                                            </div>
                                                                            <div class="show-icon-text">
                                                                                <div class="i-ingredients"></div>
                                                                                <label><?= $data['SearchDataDB']->checkAvailableByCondition("product_code", "product_contents", "WHERE product_code = '" . $allCookies['product_code'] . "'"); ?></label>
                                                                                <p>Ingredients</p>
                                                                            </div>
                                                                        </div>
                                                                        <p class="font-12px color-disabled"><?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $allCookies['product_code'] . "'"); ?></p>
                                                                        <div class="box fl-X-center fl-1 fl-Y-end">
                                                                            <a href="<?= BASEURL; ?>/manager/productinfo/<?= $allCookies['product_code']; ?>" class="clear-a btn-icon-text">
                                                                                <div class="i-moneyBag"></div>
                                                                                <p>Info</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab tabs-4 dsp-flex fl-colm fl-1">
                                    <div class="tabs-hed dsp-flex fl-Y-center h-60px">
                                        <div class="content-box-2-4 fl-row fl-1 fl-Y-center fl-X-start">
                                            <h1>New</h1>
                                        </div>
                                    </div>
                                    <div class="tabs-body">
                                        <div class="content-box-2-4 fl-colm fl-1">
                                            <div class="content-box-2-4 fl-colm fl-1">
                                                <form onsubmit="allowsubmit()" action="<?= BASEURL; ?>/manager/addproduct" enctype="multipart/form-data" method="post">
                                                    <input type="hidden" name="amount_content" data-content="1" id="amount_content" value="1">
                                                    <div class="list-box-field">
                                                        <div class="label-field">
                                                            Product Code
                                                        </div>
                                                        <div class="tf-default">
                                                            <div class="icon-field">
                                                                <div class="i-pincode"></div>
                                                            </div>
                                                            <div class="box-field">
                                                                <p><?= $data['productcode']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-box-field">
                                                        <div class="label-field">
                                                            Product Name
                                                        </div>
                                                        <div class="tf-default">
                                                            <div class="icon-field">
                                                                <div class="i-ballpointpen"></div>
                                                            </div>
                                                            <div class="box-field">
                                                                <input type="text" name="product_name" id="product_name" autocomplete="off" required>
                                                                <span>Product Name</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="radio" name="category" value="Drinks" id="option1-catg" class="hide">
                                                    <input type="radio" name="category" value="Deserts" id="option2-catg" class="hide">
                                                    <div class="radio-box-manual">
                                                        <div class="label-field mY-b-20">
                                                            Category
                                                        </div>
                                                        <div class="box fl-wrap">
                                                            <label for="option1-catg" class="box-radio">
                                                                <div class="i-coffee"></div>
                                                                Drinks
                                                            </label>
                                                            <label for="option2-catg" class="box-radio">
                                                                <div class="i-cake"></div>
                                                                Deserts
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="box fl-colm">
                                                        <div id="subRadio1" class="radio-box-manual">
                                                            <input type="radio" name="drink" value="Coffee" id="option1-lvl" class="hide">
                                                            <input type="radio" name="drink" value="Noncoffee" id="option2-lvl" class="hide">
                                                            <div class="label-field mY-b-20">
                                                                Sub Category
                                                            </div>
                                                            <div class="box fl-wrap">
                                                                <label for="option1-lvl" class="box-radio">
                                                                    <div class="i-coffee"></div>
                                                                    Coffee
                                                                </label>
                                                                <label for="option2-lvl" class="box-radio">
                                                                    <div class="i-coffeeToGo"></div>
                                                                    Noncoffee
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div id="subRadio2" class="radio-box-manual">
                                                            <input type="radio" name="desert" value="Ice Cream" id="option1-dsrt" class="hide">
                                                            <input type="radio" name="desert" value="Cake" id="option2-dsrt" class="hide">
                                                            <input type="radio" name="desert" value="Cupcake" id="option3-dsrt" class="hide">
                                                            <input type="radio" name="desert" value="Cookies" id="option4-dsrt" class="hide">
                                                            <div class="label-field mY-b-20">
                                                                Sub Category
                                                            </div>
                                                            <div class="box fl-wrap">
                                                                <label for="option1-dsrt" class="box-radio">
                                                                    <div class="i-iceCreamSundae"></div>
                                                                    Ice Cream
                                                                </label>
                                                                <label for="option2-dsrt" class="box-radio">
                                                                    <div class="i-cake"></div>
                                                                    Cake
                                                                </label>
                                                                <label for="option3-dsrt" class="box-radio">
                                                                    <div class="i-cupCake"></div>
                                                                    Cupcake
                                                                </label>
                                                                <label for="option4-dsrt" class="box-radio">
                                                                    <div class="i-cookies"></div>
                                                                    Cookies
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-box-field">
                                                        <div class="label-field">
                                                            Price
                                                        </div>
                                                        <div class="tf-default">
                                                            <div class="icon-field">
                                                                <div class="i-pricetag"></div>
                                                            </div>
                                                            <div class="box-field">
                                                                <p id="rp">Rp</p>
                                                                <input type="text" name="price" id="price" maxlength="15" onkeypress="return restrictAlphabets(event)" autocomplete="off" required>
                                                                <span>Price</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="multi-box-field mY-b-10">
                                                        <div class="label-field">
                                                            Contents
                                                        </div>
                                                        <div class="multi-field" id="multifield">
                                                            <div class="tf-default">
                                                                <p>1</p>
                                                                <div class="box-field">
                                                                    <input type="text" maxlength="15" name="content_1" autocomplete="off" required="true">
                                                                    <span>Content</span>
                                                                </div>
                                                            </div>
                                                            <div class="action-box dsp-flex" id="act-box">
                                                                <div class="btnsquare-field mX-r-10" id="btnadd-field">
                                                                    <div class="i-plus"></div>
                                                                </div>
                                                                <div class="btnsquare-field" id="btnremove-field">
                                                                    <div class="i-min"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="img-box-field mY-t-10" id="img-box-field">
                                                        <div class="label-field">
                                                            Profile Photo
                                                        </div>
                                                        <div class="bf-default fl-Y-center">
                                                            <div class="imgf-default mX-r-10" style="background-image: url('<?= BASEURL; ?>/img/logo_box_message/upload_to_cloud.png');">
                                                                <label for="img" class="btnsquare-field">
                                                                    <div class="i-image"></div>
                                                                </label>
                                                            </div>
                                                            <p id="fileimg" style="overflow-wrap: break-word; max-width: 150px;" class="font-14px font-weg-500 color-disabled mrgn-clear">No file choosen, yet.</p>
                                                            <input type="file" name="image" id="img" hidden>
                                                        </div>
                                                    </div>
                                                    <div class="end-box" id="endb">
                                                        <button type="submit" class="btntext-default">
                                                            Add Menu
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= BASEURL; ?>/js/previewImage.js"></script>
<script src="<?= BASEURL; ?>/js/formField.js"></script>
<script src="<?= BASEURL; ?>/js/boxField.js"></script>