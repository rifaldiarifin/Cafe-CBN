<div class="dekstop-width"></div>

<div class="container">
    <!-- Main Bar -->
    <input class="hide" type="radio" name="main-nav" id="mainBar1" checked>
    <input class="hide" type="radio" name="main-nav" id="mainBar2">
    <input class="hide" type="radio" name="main-nav" id="mainBar3">
    <!-- --------- -->

    <!-- Second Bar -->

    <!-- Sub Second Bar -->
    <input class="hide" type="radio" name="secondNav1" id="secondBar1-1" checked>
    <input class="hide" type="radio" name="secondNav1" id="secondBar1-2">
    <input class="hide" type="radio" name="secondNav1" id="secondBar1-3">
    <input class="hide" type="radio" name="secondNav1" id="secondBar1-4">
    <input class="hide" type="radio" name="secondNav1" id="secondBar1-5">
    <!-- -------------- -->
    <!-- Sub Second Bar -->
    <input class="hide" type="radio" name="secondNav2" id="secondBar2-1" checked>
    <input class="hide" type="radio" name="secondNav2" id="secondBar2-2">
    <!-- -------------- -->
    <!-- Sub Second Bar -->
    <input class="hide" type="radio" name="secondNav3" id="secondBar3-1" checked>
    <input class="hide" type="radio" name="secondNav3" id="secondBar3-2">
    <input class="hide" type="radio" name="secondNav3" id="secondBar3-3">
    <input class="hide" type="radio" name="secondNav3" id="secondBar3-4">
    <!-- -------------- -->
    <!-- ---------- -->

    <!-- button settings navigation -->

    <!-- -------------------------- -->
    <div class="header">
        <div class="box fl-X-center fl-colm profile">
            <label style="white-space: nowrap;"><?= $data['sessionData']['primary_data']['name']; ?></label>
            <p><?= $data['sessionData']['secondary_data']['shift']; ?></p>
        </div>
        <div class="box fl-rows fl-Y-center search">
            <div class="i-search"></div>
            <input style="color: var(--text-color-b);" type="text" placeholder="Search For Menu" id="searchbox" required>
            <button class="search-clear"></button>
            <div class="dp-searchbox scrolling-default nonactive">
                <div class="box-emptysearch">
                    <p class="color-disabled font-weg-500 mrgn-clear font-14px">Type something in the search menu.</p>
                    <div class="i-editFill"></div>
                </div>
                <!-- <div class="list-searchbox" data-productid="421" data-productname="Americano" data-price="15000">
                        <div class="img-list" style="background-image: url('../../img/menu_images/coffee/cappuccino_coffee.jpg');"></div>
                        <div class="box fl-colm search-detail">
                            <label class="srch-label">Americano</label>
                            <p class="srch-p">Rp 15.000</p>
                        </div>
                    </div>
                    <div class="list-searchbox" data-productid="647" data-productname="Espresso" data-price="12000">
                        <div class="img-list" style="background-image: url('../../img/menu_images/coffee/cappuccino_coffee.jpg');"></div>
                        <div class="box fl-colm search-detail">
                            <label class="srch-label">Espresso</label>
                            <p class="srch-p">Rp 12.000</p>
                        </div>
                    </div>
                    <div class="list-searchbox" data-productid="551" data-productname="Macchiato" data-price="23000">
                        <div class="img-list" style="background-image: url('../../img/menu_images/coffee/cappuccino_coffee.jpg');"></div>
                        <div class="box fl-colm search-detail">
                            <label class="srch-label">Macchiato</label>
                            <p class="srch-p">Rp 23.000</p>
                        </div>
                    </div>
                    <div class="list-searchbox" data-productid="113" data-productname="Piccolo" data-price="25000">
                        <div class="img-list" style="background-image: url('../../img/menu_images/coffee/cappuccino_coffee.jpg');"></div>
                        <div class="box fl-colm search-detail">
                            <label class="srch-label">Piccolo</label>
                            <p class="srch-p">Rp 25.000</p>
                        </div>
                    </div> -->
            </div>
        </div>
        <div class="box fl-rows fl-Y-center more">
            <div onclick="openProfile()" class="fl-rows fl-Y-center prof-img mX-r-10px">
                <div style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $data['sessionData']['primary_data']['image']; ?>');" class="avatar-img"></div>
                <p><?= $data['sessionData']['primary_data']['name']; ?></p>
            </div>
            <div id="btnSettingNavigation1" class="btn-icon nonactive">
                <div class="i-settings"></div>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="main-nav">
            <div class="nav-header mY-b-40px">
                <div class="logo-img">
                    <div class="companyLogo"></div>
                </div>
            </div>
            <div class="nav-menu">
                <span class="thumb-list-1"></span>
                <label onclick="setLabel('1')" for="mainBar1" class="nav-list">
                    <div class="i-fire"></div>
                    <p>Filtering</p>
                </label>
                <label onclick="setLabel('2')" for="mainBar2" class="nav-list">
                    <div class="i-coffee"></div>
                    <p>Drinks</p>
                </label>
                <label onclick="setLabel('3')" for="mainBar3" class="nav-list">
                    <div class="i-cake"></div>
                    <p>Desert</p>
                </label>
            </div>
        </div>
        <div class="second-nav" style="height: 460px;">
            <div class="nav-menu" id="second-nav1">
                <span class="thumb-list-second-1" id="thumb-second1"></span>
                <label onclick="setSub('1','1','Filtering', 'All')" for="secondBar1-1" class="nav-list">
                    <div class="i-foodBar"></div>
                    <p>All</p>
                </label>
                <label onclick="setSub('1','2','Filtering', 'New')" for="secondBar1-2" class="nav-list">
                    <div class="i-new"></div>
                    <p>New</p>
                </label>
                <label onclick="setSub('1','3','Filtering', 'Popular')" for="secondBar1-3" class="nav-list">
                    <div class="i-twoHearth"></div>
                    <p>Popular</p>
                </label>
                <label onclick="setSub('1','4','Filtering', 'Most Expensive')" for="secondBar1-4" class="nav-list">
                    <div class="i-up"></div>
                    <p>Most Expensive</p>
                </label>
                <label onclick="setSub('1','5','Filtering', 'Cheapest')" for="secondBar1-5" class="nav-list">
                    <div class="i-down"></div>
                    <p>Cheapest</p>
                </label>
            </div>
            <div class="nav-menu" id="second-nav2">
                <span class="thumb-list-second-1" id="thumb-second2"></span>
                <label onclick="setSub('2','1','Drinks', 'Coffee')" for="secondBar2-1" class="nav-list">
                    <div class="i-coffee"></div>
                    <p>Coffee</p>
                </label>
                <label onclick="setSub('2','2','Drinks', 'Noncoffee')" for="secondBar2-2" class="nav-list">
                    <div class="i-coffeeToGo"></div>
                    <p>Noncoffee</p>
                </label>
            </div>
            <div class="nav-menu" id="second-nav3">
                <span class="thumb-list-second-1" id="thumb-second3"></span>
                <label onclick="setSub('3','1','Deserts', 'Ice Cream')" for="secondBar3-1" class="nav-list">
                    <div class="i-iceCreamSundae"></div>
                    <p>Ice Cream</p>
                </label>
                <label onclick="setSub('3','2','Deserts', 'Cake')" for="secondBar3-2" class="nav-list">
                    <div class="i-cake"></div>
                    <p>Cake</p>
                </label>
                <label onclick="setSub('3','3','Deserts', 'Cupcake')" for="secondBar3-3" class="nav-list">
                    <div class="i-cupCake"></div>
                    <p>Cupcake</p>
                </label>
                <label onclick="setSub('3','4','Deserts', 'Cookies')" for="secondBar3-4" class="nav-list">
                    <div class="i-cookies"></div>
                    <p>Cookies</p>
                </label>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="cont-header">
            <div class="box fl-rows fl-Y-center cusr-default cont-hed-1">
                <div class="box fl-colm selection">
                    <label>Category</label>
                    <p id="category_label">Filtering</p>
                </div>
                <div class="box fl-center selection-arrow">
                    <div class="i-expand-arrow"></div>
                </div>
                <div class="box fl-colm selection">
                    <label>Sub Category</label>
                    <p id="subcategory_label">All</p>
                </div>
            </div>
        </div>
        <div class="nav-cont-header">
            <!-- <div class="btn-trnsp-icn-text">
                    <div class="i-bill"></div>
                    <p>Payment</p>
                </div>
                <div class="btn-trnsp-icn-text">
                    <div class="i-board"></div>
                    <p>Board</p>
                </div> -->
            <div onclick="clearNotifTransaction(<?= $data['sessionaccount']; ?>);" id="btnPaymentNavigation1" class="btn-trnsp-icn-text nonactive">
                <div class="i-activityfeed"></div>
                <p>History Payment</p>
                <div class="icon-app <?php if ($data['notifhistory'] == 0) echo "hide"; ?>" data-app="<?= $data['notifhistory']; ?>"></div>
            </div>
        </div>
        <div class="box-tabs scrolling-default-second">
            <div class="box-second" id="box-second1">
                <div class="box-sub-second" id="box-sub-second1-1">
                    <div class="subtitle-text mY-b-10px">Coffee</div>
                    <?php if ($data['Coffee'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Coffee'] as $Coffee) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/coffee/<?= $Coffee['image']; ?>');" class="card-list-img" data-productcode="<?= $Coffee['product_code']; ?>" data-productname="<?= $Coffee['product_name']; ?>" data-price="<?= $Coffee['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Coffee['price'], 0, ',', '.'); ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Coffee['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <span class="border-x mY-dl-20px span-box"></span>

                    <div class="subtitle-text mY-b-10px">Noncoffee</div>
                    <?php if ($data['Noncoffee'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Noncoffee'] as $Noncoffee) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/noncoffee/<?= $Noncoffee['image']; ?>');" class="card-list-img" data-productcode="<?= $Noncoffee['product_code']; ?>" data-productname="<?= $Noncoffee['product_name']; ?>" data-price="<?= $Noncoffee['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Noncoffee['price'], 0, ',', '.'); ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Noncoffee['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <span class="border-x mY-dl-20px span-box"></span>

                    <div class="subtitle-text mY-b-10px">Ice Cream</div>
                    <?php if ($data['Icecream'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Icecream'] as $Icecream) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/icecream/<?= $Icecream['image']; ?>');" class="card-list-img" data-productcode="<?= $Icecream['product_code']; ?>" data-productname="<?= $Icecream['product_name']; ?>" data-price="<?= $Icecream['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Icecream['price'], 0, ',', '.'); ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Icecream['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <span class="border-x mY-dl-20px span-box"></span>

                    <div class="subtitle-text mY-b-10px">Cake</div>
                    <?php if ($data['Cake'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Cake'] as $Cake) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cake/<?= $Cake['image']; ?>');" class="card-list-img" data-productcode="<?= $Cake['product_code']; ?>" data-productname="<?= $Cake['product_name']; ?>" data-price="<?= $Cake['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Cake['price'], 0, ',', '.'); ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Cake['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <span class="border-x mY-dl-20px span-box"></span>

                    <div class="subtitle-text mY-b-10px">Cupcake</div>
                    <?php if ($data['Cupcake'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Cupcake'] as $Cupcake) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cupcake/<?= $Cupcake['image']; ?>');" class="card-list-img" data-productcode="<?= $Cupcake['product_code']; ?>" data-productname="<?= $Cupcake['product_name']; ?>" data-price="<?= $Cupcake['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Cupcake['price'], 0, ',', '.'); ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Cupcake['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <span class="border-x mY-dl-20px span-box"></span>

                    <div class="subtitle-text mY-b-10px">Cookies</div>
                    <?php if ($data['Cookies'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Cookies'] as $Cookies) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cookies/<?= $Cookies['image']; ?>');" class="card-list-img" data-productcode="<?= $Cookies['product_code']; ?>" data-productname="<?= $Cookies['product_name']; ?>" data-price="<?= $Cookies['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Cookies['price'], 0, ',', '.'); ?> / 3x

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Cookies['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <span class="border-x mY-dl-20px span-box"></span>
                </div>
                <div class="box-sub-second" id="box-sub-second1-2">
                    <div class="box-grid">
                        <div style="background-image: url('../../img/logo/OIP.jpg');" class="card-list-img">
                            <div class="tag-title tg-clr">
                                Rp 25.000
                            </div>
                            <div class="tag-subtitle tg-trns">
                                Kawaii Ice Cream
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-sub-second" id="box-sub-second1-3">
                    <div class="box-grid">
                        <div style="background-image: url('../../img/logo/OIP.jpg');" class="card-list-img">
                            <div class="tag-title tg-clr">
                                Rp 25.000
                            </div>
                            <div class="tag-subtitle tg-trns">
                                Kawaii Ice Cream
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-sub-second" id="box-sub-second1-4">
                    <?php if ($data['Expensive'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Expensive'] as $Expensive) : ?>
                                <?php
                                $subcate = $data['SearchDataDB']->singleSelectData("sub_category", "product_type", "WHERE product_code = '" . $Expensive['product_code'] . "'")['sub_category'];
                                $subcate = str_replace(' ', '', strtolower($subcate));
                                ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/<?= $subcate; ?>/<?= $Expensive['image']; ?>');" class="card-list-img" data-productcode="<?= $Expensive['product_code']; ?>" data-productname="<?= $Expensive['product_name']; ?>" data-price="<?= $Expensive['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Expensive['price'], 0, ',', '.'); ?><?php if ($subcate == 'cookies') echo " / x3"; ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Expensive['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="box-sub-second" id="box-sub-second1-5">
                    <?php if ($data['Cheapest'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Cheapest'] as $Cheapest) : ?>
                                <?php
                                $subcate = $data['SearchDataDB']->singleSelectData("sub_category", "product_type", "WHERE product_code = '" . $Cheapest['product_code'] . "'")['sub_category'];
                                $subcate = str_replace(' ', '', strtolower($subcate));
                                ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/<?= $subcate; ?>/<?= $Cheapest['image']; ?>');" class="card-list-img" data-productcode="<?= $Cheapest['product_code']; ?>" data-productname="<?= $Cheapest['product_name']; ?>" data-price="<?= $Cheapest['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Cheapest['price'], 0, ',', '.'); ?> <?php if ($subcate == 'cookies') echo " / x3"; ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Cheapest['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="box-second" id="box-second2">
                <div class="box-sub-second" id="box-sub-second2-1">
                    <?php if ($data['Coffee'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Coffee'] as $Coffee) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/coffee/<?= $Coffee['image']; ?>');" class="card-list-img" data-productcode="<?= $Coffee['product_code']; ?>" data-productname="<?= $Coffee['product_name']; ?>" data-price="<?= $Coffee['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Coffee['price'], 0, ',', '.'); ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Coffee['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="box-sub-second" id="box-sub-second2-2">
                    <?php if ($data['Noncoffee'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Noncoffee'] as $Noncoffee) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/noncoffee/<?= $Noncoffee['image']; ?>');" class="card-list-img" data-productcode="<?= $Noncoffee['product_code']; ?>" data-productname="<?= $Noncoffee['product_name']; ?>" data-price="<?= $Noncoffee['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Noncoffee['price'], 0, ',', '.'); ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Noncoffee['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="box-second" id="box-second3">
                <div class="box-sub-second" id="box-sub-second3-1">
                    <?php if ($data['Icecream'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Icecream'] as $Icecream) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/icecream/<?= $Icecream['image']; ?>');" class="card-list-img" data-productcode="<?= $Icecream['product_code']; ?>" data-productname="<?= $Icecream['product_name']; ?>" data-price="<?= $Icecream['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Icecream['price'], 0, ',', '.'); ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Icecream['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="box-sub-second" id="box-sub-second3-2">
                    <?php if ($data['Cake'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Cake'] as $Cake) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cake/<?= $Cake['image']; ?>');" class="card-list-img" data-productcode="<?= $Cake['product_code']; ?>" data-productname="<?= $Cake['product_name']; ?>" data-price="<?= $Cake['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Cake['price'], 0, ',', '.'); ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Cake['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="box-sub-second" id="box-sub-second3-3">
                    <?php if ($data['Cupcake'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Cupcake'] as $Cupcake) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cupcake/<?= $Cupcake['image']; ?>');" class="card-list-img" data-productcode="<?= $Cupcake['product_code']; ?>" data-productname="<?= $Cupcake['product_name']; ?>" data-price="<?= $Cupcake['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Cupcake['price'], 0, ',', '.'); ?>

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Cupcake['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="box-sub-second" id="box-sub-second3-4">
                    <?php if ($data['Cookies'] == false) : ?>
                        <div class="box fl-colm">
                            <span class="mY-dl-10px"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">There are no products here yet.</p>
                            <span class="mY-dl-10px"></span>
                        </div>
                    <?php else : ?>
                        <div class="box-grid">
                            <?php foreach ($data['Cookies'] as $Cookies) : ?>
                                <div style="background-image: url('<?= BASEURL; ?>/img/product_images/cookies/<?= $Cookies['image']; ?>');" class="card-list-img" data-productcode="<?= $Cookies['product_code']; ?>" data-productname="<?= $Cookies['product_name']; ?>" data-price="<?= $Cookies['price']; ?>">
                                    <div class="tag-title tg-clr">
                                        Rp <?= number_format($Cookies['price'], 0, ',', '.'); ?> / 3x

                                    </div>
                                    <div class="tag-subtitle tg-trns">
                                        <?= $Cookies['product_name']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <form onsubmit="allowsubmit()" action="<?= BASEURL; ?>/cashier/createtransaction" method="POST" class="cont-nav" id="barPayDetail">
            <input type="hidden" name="total_rows" value="">
            <input type="hidden" name="total_bill" value="">
            <div class="box fl-colm cont-nav-header">
                <label>New Order</label>
                <p><?= date("l, d M Y"); ?></p>
            </div>
            <div class="box-list scrolling-default" id="inputgroup1">
                <div class="box empty-box nonactive">
                    <div class="box-message">
                        <div class="icon-message img-clipboard"></div>
                        <p>No menu selected yet.</p>
                    </div>
                </div>
            </div>
            <div class="box fl-colm end-box nonactive" id="inputgroup2">
                <div class="box fl-colm detail-trnsc mY-b-40px">
                    <div class="box fl-X-betw fl-Y-center fl-rows list-text-default list-colm-margin">
                        <label>Subtotal</label>
                        <p>Rp 0,00</p>
                    </div>
                    <div class="box fl-X-betw fl-Y-center fl-rows list-text-default-bold list-colm-margin">
                        <label>Total</label>
                        <p>Rp 0,00</p>
                    </div>
                </div>
                <div class="box fl-rows fl-X-center">
                    <button type="submit" class="btn-icon-text border-none nonactive">
                        <div class="i-moneyBag"></div>
                        <p>Pay Now</p>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="box-tab-fixd history hide">
        <div class="box-grid dsp-block tab-box">
            <div class="tab-header border-rounded-10px overflow-hide post-reltv">
                <div class="subtitle-text">History Payment</div>
                <div class="box-grid">
                    <div class="btn-icon">
                        <div class="i-menuVertical"></div>
                    </div>
                    <div id="btnPaymentNavigation2" class="btn-icon-absolt nonactive">
                        <div class="i-plus"></div>
                    </div>
                </div>
            </div>
            <div class="box for-tg-notf pad-20px overflow-auto scrolling-default fl-1">
                <div class="content-box-2-4 padY-10 fl-1 fl-colm">
                    <?php
                    $today = date("d - m - Y");
                    ?>

                    <?php if ($data['SearchDataDB']->checkAvailableByCondition("date", "data_transactions", "WHERE date = '$today' AND order_code IN (SELECT order_code FROM transaction_empid WHERE employee_id = '" . $data['sessionaccount'] . "')") == 0) : ?>
                        <div class="box fl-colm frame0">
                            <span class="mY-dl-10"></span>
                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">You don't have any transaction history yet.</p>
                            <span class="mY-dl-10"></span>
                        </div>
                    <?php else : ?>
                        <div class="content-box-2-5 dsp-flex fl-colm mY-b-10px">
                            <div class="subtitle-text">
                                Today
                            </div>
                            <span class="mY-b-10px"></span>
                            <table class="table-default">
                                <thead>
                                    <tr>
                                        <th>No. Order</th>
                                        <th style="width: 200px;">Order</th>
                                        <th>Price</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Total Bill</th>
                                    </tr>
                                </thead>

                                <?php foreach ($data['HistoryTransaction'] as $trnsc) : ?>
                                    <?php
                                    $date = [
                                        'day' => floatval(explode('-', str_replace(' ', '', ($trnsc['date'])))[0]),
                                        'month' => floatval(explode('-', str_replace(' ', '', ($trnsc['date'])))[1]),
                                        'year' => floatval(explode('-', str_replace(' ', '', ($trnsc['date'])))[2])
                                    ];
                                    ?>
                                    <?php if ($date['day'] == date('j')) : ?>
                                        <tbody>
                                            <tr <?php if ($trnsc['status'] == 'read') echo 'class="old"'; ?>>
                                                <td><?= $trnsc['no_order']; ?></td>
                                                <td><?= str_replace(', ', ',<br>', $trnsc['ordered_items']); ?></td>
                                                <td><?= str_replace(', ', ',<br>', $trnsc['price']); ?></td>
                                                <td><?= str_replace(', ', ',<br>', $trnsc['amount']); ?></td>
                                                <td><?= $trnsc['date']; ?></td>
                                                <td><?= $trnsc['time']; ?></td>
                                                <td><?= $trnsc['total_bill']; ?></td>
                                            </tr>
                                        </tbody>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php endif; ?>
                    <?php
                    $yestr = date('d - m - Y', strtotime(" -1 day"));
                    ?>
                    <?php if ($data['SearchDataDB']->checkAvailableByCondition("date", "data_transactions", "WHERE date = '$yestr' AND order_code IN (SELECT order_code FROM transaction_empid WHERE employee_id = '" . $data['sessionaccount'] . "')") > 0) : ?>
                        <div class="content-box-2-5 dsp-flex fl-colm mY-dl-20px">
                            <div class="subtitle-text">
                                Ago
                            </div>
                            <span class="mY-b-10px"></span>
                            <table class="table-default">
                                <thead>
                                    <tr>
                                        <th>No. Order</th>
                                        <th style="width: 200px;">Order</th>
                                        <th>Price</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Total Bill</th>
                                    </tr>
                                </thead>

                                <?php foreach ($data['HistoryTransaction'] as $trnsc) : ?>
                                    <?php if ($trnsc['date'] !== date('d - m - Y')) : ?>
                                        <tbody>
                                            <tr <?php if ($trnsc['status'] == 'read') echo 'class="old"'; ?>>
                                                <td><?= $trnsc['no_order']; ?></td>
                                                <td><?= str_replace(', ', ',<br>', $trnsc['ordered_items']); ?></td>
                                                <td><?= str_replace(', ', ',<br>', $trnsc['price']); ?></td>
                                                <td><?= str_replace(', ', ',<br>', $trnsc['amount']); ?></td>
                                                <td><?= $trnsc['date']; ?></td>
                                                <td><?= $trnsc['time']; ?></td>
                                                <td><?= $trnsc['total_bill']; ?></td>
                                            </tr>
                                        </tbody>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="box-settings hide">
        <div class="box-grid settings">
            <input type="radio" name="navFixd" id="navFixd1" class="hide" checked>
            <input type="radio" name="navFixd" id="navFixd2" class="hide">
            <input type="radio" name="navFixd" id="navFixd3" class="hide">
            <input type="radio" name="navFixd" id="navFixd4" class="hide">
            <div class="nav-fixd">
                <h1 class="title-text">Settings</h1>
                <!-- <div class="box nav-search">
                    <div class="i-search"></div>
                    <input type="text" name="" id="" placeholder="Search In Settings">
                </div> -->
                <div class="nav-menu">
                    <span class="thumb-fixd-1" id="thumb-navFixd"></span>
                    <label for="navFixd1" class="nav-list">
                        <div class="i-user"></div>
                        <p>Profile</p>
                    </label>
                    <label for="navFixd2" class="nav-list">
                        <div class="i-paintPaletteAndBrush"></div>
                        <p>Appearance</p>
                    </label>
                    <label for="navFixd3" class="nav-list">
                        <div class="i-prototype"></div>
                        <p>Display & Performance</p>
                    </label>
                    <label for="navFixd4" class="nav-list">
                        <div class="i-info"></div>
                        <p>About</p>
                    </label>
                </div>
            </div>
            <div class="content-fixd">
                <div id="btnSettingNavigation2" class="btn-icon-absolt nonactive">
                    <div class="i-plus"></div>
                </div>
                <div class="box box-tabs-fixd gd-1-rows-auto gd-1-colm-auto scrolling-default">
                    <div class="tab-fixd" id="tabFixd1">
                        <h1 class="subtitle-text mrgn-clear mY-b-10px">Profile</h1>
                        <div class="box-grid border-rounded-10px box-shadow-1 profile-box mY-b-10px">
                            <div class="box fl-center prof-avatar">
                                <div style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $data['sessionData']['primary_data']['image']; ?>');" class="circle-img-default"></div>
                            </div>
                            <div class="box fl-colm prof-detail fl-X-center">
                                <label class="font-16px font-weg-600 colr-def mY-b-10px"><?= $data['sessionData']['primary_data']['name']; ?></label>
                                <p class="font-14px color-disabled font-weg-500 mrgn-clear"><?= $data['sessionData']['secondary_data']['shift']; ?></p>
                            </div>
                            <div class="box fl-center prof-more">
                                <!-- <div class="btn-icon">
                                        <div class="i-edit"></div>
                                    </div> -->
                                <!-- <div class="dsp-flex fl-center dropdown-parrent dropdown-stndby">
                                        <div class="i-humburger"></div>
                                        <div class="dropdown-default border-rounded-10px">
                                            <div class="dp-list-default border-rounded-10px">
                                                <div class="i-image2"></div>
                                                <p class="font-14px mrgn-clear colr-def">Change Picture</p>
                                            </div>
                                        </div>
                                    </div> -->
                            </div>
                        </div>
                        <div id="personalinfo" class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-off">
                            <div class="dp-icon">
                                <div class="i-userMenuMale"></div>
                            </div>
                            <div class="dp-title">
                                Personal Info
                            </div>

                            <div class="dp-btn key-option" style="display: none;">
                                <div class="i-padlock"></div>
                            </div>
                            <div class="dp-btn dp-option" style="display: none;">
                                <div class="i-expand-arrow"></div>
                            </div>

                            <div onclick="HiPrompt('Personal Info', 'Confirm first if this is you', '/cashier/openprofile')" class="dp-btn key-option lock">
                                <div class="i-lock"></div>
                            </div>
                        </div>
                        <div class="dp-box border-rounded-10px dp-box-personal-off hide">
                            <div class="dp-box-fit pad-10px">
                                <div class="textview-default">
                                    <div class="tv-label">Username</div>
                                    <div class="tv-field">
                                        <div class="i-maleuser"></div>
                                        <p class="mrgn-clear" id="user_prof"></p>
                                    </div>
                                </div>
                                <div class="textview-default">
                                    <div class="tv-label">Password</div>
                                    <div class="tv-field">
                                        <div class="i-passwordfill"></div>
                                        <p class="mrgn-clear" id="pass_prof"></p>
                                    </div>
                                </div>
                                <div class="textview-default">
                                    <div class="tv-label">Email</div>
                                    <div class="tv-field">
                                        <div class="i-email"></div>
                                        <p class="mrgn-clear" id="email_prof"></p>
                                    </div>
                                </div>
                                <div class="textview-default">
                                    <div class="tv-label">Phone</div>
                                    <div class="tv-field">
                                        <div class="i-phone"></div>
                                        <p class="mrgn-clear" id="phone_prof"></p>
                                    </div>
                                </div>
                                <div class="textview-default">
                                    <div class="tv-label">Birthday</div>
                                    <div class="tv-field">
                                        <div class="i-gift"></div>
                                        <p class="mrgn-clear" id="birth_prof"></p>
                                    </div>
                                </div>
                                <div class="textview-default">
                                    <div class="tv-label">Address</div>
                                    <div class="tv-field">
                                        <div class="i-location"></div>
                                        <p class="mrgn-clear" id="location_prof"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-off">
                            <div class="dp-icon">
                                <div class="i-logout"></div>
                            </div>
                            <div class="dp-title">
                                Sign Out
                            </div>
                            <div id="btnsignout" onclick="HiConfirm('Signout', 'Are you sure to exit?', '/cashier/signout')" class="dp-btn dp-option">
                                <div class="i-expand-arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-fixd" id="tabFixd2">
                        <h1 class="subtitle-text mrgn-clear mY-b-10px">Appearance</h1>
                        <div class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-on">
                            <div class="dp-icon">
                                <div class="i-paintBrush"></div>
                            </div>
                            <div class="dp-title">
                                Theme
                            </div>
                            <div class="dp-btn dp-option">
                                <div class="i-expand-arrow"></div>
                            </div>
                        </div>
                        <div class="dp-box border-rounded-10px dp-box-personal-on dsp-block">
                            <div class="dp-box-fit pad-20px">
                                <p class="font-16px font-weg-500 colr-def mrgn-clear mY-b-10">Choose your theme</p>
                                <div class="box-grid gd-rpt-colm-180px gd-gap-20px post-reltv">
                                    <div class="card-img-select cardgroup-theme <?php if ($data['sessionData']['config_data']['theme'] == 'currentSystem') echo 'card-selection'; ?>">
                                        <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px preview-card">
                                            <div class="bgWindowLightDark"></div>
                                        </div>
                                        <div class="box fl-center">
                                            <p class="mrgn-clear font-13px colr-def">Current System</p>
                                        </div>
                                    </div>
                                    <div class="card-img-select cardgroup-theme <?php if ($data['sessionData']['config_data']['theme'] == 'light') echo 'card-selection'; ?>">
                                        <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px preview-card">
                                            <div class="bgWindowLight"></div>
                                        </div>
                                        <div class="box fl-center">
                                            <p class="mrgn-clear font-13px colr-def">Light Mode</p>
                                        </div>
                                    </div>
                                    <div class="card-img-select cardgroup-theme <?php if ($data['sessionData']['config_data']['theme'] == 'dark') echo 'card-selection'; ?>">
                                        <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px preview-card">
                                            <div class="bgWindowDark"></div>
                                        </div>
                                        <div class="box fl-center">
                                            <p class="mrgn-clear font-13px colr-def">Dark Mode</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-on">
                            <div class="dp-icon">
                                <div class="i-paintPalette"></div>
                            </div>
                            <div class="dp-title">
                                Color
                            </div>
                            <div class="dp-btn dp-option">
                                <div class="i-expand-arrow"></div>
                            </div>
                        </div>
                        <div class="dp-box border-rounded-10px dp-box-personal-on dsp-block">
                            <div class="dp-box-fit pad-20px">
                                <p class="font-16px font-weg-500 colr-def mrgn-clear mY-b-10">Choose your accent color</p>
                                <div class="box-grid gd-rpt-colm-180px gd-gap-20px post-reltv">
                                    <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'coffeeBeans') echo 'card-selection'; ?>">
                                        <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px preview-card">
                                            <div class="bgCoffeeBeans"></div>
                                        </div>
                                        <div class="box fl-center preview-text">
                                            <p class="mrgn-clear font-13px colr-def">Coffee Beans</p>
                                        </div>
                                    </div>
                                    <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'greenMint') echo 'card-selection'; ?>">
                                        <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px">
                                            <div class="bgGreenMint"></div>
                                        </div>
                                        <div class="box fl-center">
                                            <p class="mrgn-clear font-13px colr-def">Green Mint</p>
                                        </div>
                                    </div>
                                    <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'freshMango') echo 'card-selection'; ?>">
                                        <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px">
                                            <div class="bgFreshMango"></div>
                                        </div>
                                        <div class="box fl-center">
                                            <p class="mrgn-clear font-13px colr-def">Fresh Mango</p>
                                        </div>
                                    </div>
                                    <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'peanut') echo 'card-selection'; ?>">
                                        <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px">
                                            <div class="bgPeanut"></div>
                                        </div>
                                        <div class="box fl-center">
                                            <p class="mrgn-clear font-13px colr-def">Peanut</p>
                                        </div>
                                    </div>
                                    <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'darkWood') echo 'card-selection'; ?>">
                                        <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px">
                                            <div class="bgDarkWood"></div>
                                        </div>
                                        <div class="box fl-center">
                                            <p class="mrgn-clear font-13px colr-def">Dark Wood</p>
                                        </div>
                                    </div>
                                    <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'modern') echo 'card-selection'; ?>">
                                        <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px">
                                            <div class="bgModern"></div>
                                        </div>
                                        <div class="box fl-center">
                                            <p class="mrgn-clear font-13px colr-def">Modern</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-fixd" id="tabFixd3">
                        <h1 class="subtitle-text mrgn-clear mY-b-10px">Display & Performance</h1>
                        <div class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-on">
                            <div class="dp-icon">
                                <div class="i-bursts"></div>
                            </div>
                            <div class="dp-title">
                                Animation
                            </div>
                            <div class="dp-btn dp-option">
                                <div class="i-expand-arrow"></div>
                            </div>
                        </div>
                        <div class="dp-box border-rounded-10px dp-box-personal-on dsp-block">
                            <div class="dp-box-fit pad-20px">
                                <p class="font-16px font-weg-500 colr-def mrgn-clear mY-b-10">Animation on screen</p>
                                <div class="range-horizon-select mY-t-10px">
                                    <!-- <div class="slider-value">
                                                <span>Normal</span>
                                            </div> -->
                                    <div class="slider-field">
                                        <!-- <div class="valueLeft">Off</div> -->
                                        <?php
                                        $confTrans = $data['sessionData']['config_data']['transition'];
                                        if ($confTrans == "disabled") {
                                            $confTrans = "0";
                                        } elseif ($confTrans == "slowest") {
                                            $confTrans = "1";
                                        } elseif ($confTrans == "slow") {
                                            $confTrans = "2";
                                        } elseif ($confTrans == "normal") {
                                            $confTrans = "3";
                                        } elseif ($confTrans == "fast") {
                                            $confTrans = "4";
                                        } elseif ($confTrans == "fastest") {
                                            $confTrans = "5";
                                        }
                                        ?>
                                        <input type="range" min="0" max="5" value="<?= $confTrans; ?>" step="1" name="" id="animationControl">
                                        <!-- <div class="valueRight">Fastest</div> -->
                                        <div class="box mY-t-10px fl-X-betw">
                                            <span>Off</span>
                                            <span>Slowest</span>
                                            <span>Slow</span>
                                            <span>Normal</span>
                                            <span>Fast</span>
                                            <span>Fastest</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-off">
                            <div class="dp-icon">
                                <div class="i-imageGallery"></div>
                            </div>
                            <div class="dp-title">
                                Image Resolution
                            </div>
                            <div class="dp-btn dp-option">
                                <div class="i-expand-arrow"></div>
                            </div>
                        </div>
                        <div class="dp-box border-rounded-10px dp-box-personal-off hide">
                            <div class="dp-box-fit pad-20px">
                                <p class="font-16px font-weg-500 colr-def mrgn-clear mY-b-10px color-disabled">Comming Soon :)</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-fixd" id="tabFixd4">
                        <h1 class="subtitle-text">About</h1>
                        <div class="box-grid">
                            <div class="box fl-colm">
                                <h1 class="font-weg-600 mrgn-clear mY-t-10px colr-def">Coffee CBN</h1>
                                <p class="font-14px colr-def">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, rem obcaecati neque quidem dolores ab, odio nobis esse incidunt porro reiciendis et. Debitis accusantium eligendi rem. Quis id adipisci rem!</p>
                                <div class="btn-icon-text">
                                    <p>Read More</p>
                                </div>
                                <div class="box pad-10px mX-l-10px">
                                    <div class="sosial-icon">
                                        <div class="i-facebookclassic"></div>
                                    </div>
                                    <div class="sosial-icon">
                                        <div class="i-twitterclassic"></div>
                                    </div>
                                    <div class="sosial-icon">
                                        <div class="i-instagramclassic"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="box fl-X-center">
                                <div class="logo-company">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>