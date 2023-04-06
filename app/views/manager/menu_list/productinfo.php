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
            <div class="box-grid profile fl-1">
                <div class="box fl-colm pad-20px box-shadow-2 border-rounded-20px overf-hide personal-info frame0-9">
                    <div class="box fl-X-sp-beet">
                        <div class="subtitle-text frame1">Product Info</div>
                        <button onclick="HiConfirm('Delete product', 'Are you sure to remove this product?', '/manager/deleteproduct/<?= $data['SelectByID']['product_code']; ?>')" class="btn-icon-default" style="transform: translateY(-5px);">
                            <div class="i-trash"></div>
                        </button>
                    </div>
                    <span class="mY-dl-10"></span>
                    <?php
                    $check = $data['SearchDataDB']->singleSelectData("sub_category", "product_type", "WHERE product_code IN (SELECT product_code FROM data_products WHERE product_code = '" . $data['SelectByID']['product_code'] . "')")['sub_category'];

                    $directory = str_replace(' ', '', strtolower($check));
                    ?>
                    <div class="product-avatar frame2">
                        <div style="background-image: url('<?= BASEURL; ?>/img/product_images/<?= $directory; ?>/<?= $data['SelectByID']['image']; ?>');" class="circle-img-default bodr-3px-accent box-shadow-1"></div>
                    </div>
                    <span class="mY-dl-10"></span>
                    <div class="box fl-colm padY-b-10px">
                        <div class="textview-trnsp frame2">
                            <div class="tv-label">
                                Product Code
                            </div>
                            <div class="tv-field ">
                                <?= $data['SelectByID']['product_code']; ?>
                            </div>
                        </div>
                        <div class="textview-trnsp frame2">
                            <div class="tv-label">
                                Product Name
                            </div>
                            <div class="tv-field">
                                <?= $data['SelectByID']['product_name']; ?>
                            </div>
                        </div>
                        <div class="textview-trnsp frame3" style="height: fit-content;">
                            <div class="tv-label">
                                Contents
                            </div>
                            <div class="tv-field">
                                <?= $data['SearchDataDB']->combineArray("content", "product_contents", "WHERE product_code = '" . $data['SelectByID']['product_code'] . "'"); ?>
                            </div>
                        </div>
                        <div class="textview-trnsp frame3">
                            <div class="tv-label">
                                Price
                            </div>
                            <div class="tv-field">
                                Rp <?= number_format($data['SelectByID']['price'], 2, ',', '.'); ?>
                            </div>
                        </div>
                        <div class="textview-trnsp frame4">
                            <div class="tv-label">
                                Category
                            </div>
                            <div class="tv-field">
                                <?= $category = $data['SearchDataDB']->singleSelectData("category", "product_type", "WHERE product_code IN (SELECT product_code FROM data_products WHERE product_code = '" . $data['SelectByID']['product_code'] . "')")['category']; ?>
                            </div>
                        </div>
                        <div class="textview-trnsp frame4">
                            <div class="tv-label">
                                Sub Category
                            </div>
                            <div class="tv-field">
                                <?= $subcategory = $data['SearchDataDB']->singleSelectData("sub_category", "product_type", "WHERE product_code IN (SELECT product_code FROM data_products WHERE product_code = '" . $data['SelectByID']['product_code'] . "')")['sub_category']; ?>
                            </div>
                        </div>
                        <div class="textview-trnsp frame4">
                            <div class="tv-label">
                                Rating
                            </div>
                            <div class="tv-field">
                                <div class="box-stars">
                                    <div class="star fill"></div>
                                    <div class="star fill"></div>
                                    <div class="star fill"></div>
                                    <div class="star fill"></div>
                                    <div class="star half"></div>
                                </div>
                            </div>
                        </div>
                        <div class="textview-trnsp frame5">
                            <div class="tv-label">
                                Total Sold
                            </div>
                            <div class="tv-field">
                                <?= $data['SelectByID']['total_sold']; ?>
                            </div>
                        </div>
                        <span class="mY-dl-20 border-x"></span>
                        <form onsubmit="allowsubmit()" class="frame5" action="<?= BASEURL; ?>/manager/editproduct" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="product_code" value="<?= $data['SelectByID']['product_code']; ?>">
                            <input type="hidden" name="amount_content" data-content="<?= $data['SearchDataDB']->checkAvailableByCondition("content", "product_contents", "WHERE product_code = '" . $data['SelectByID']['product_code'] . "'") ?>" id="amount_content" value="<?= $data['SearchDataDB']->checkAvailableByCondition("content", "product_contents", "WHERE product_code = '" . $data['SelectByID']['product_code'] . "'") ?>">
                            <div class="list-box-field">
                                <div class="label-field">
                                    Product Name
                                </div>
                                <div class="tf-default">
                                    <div class="icon-field">
                                        <div class="i-ballpointpen"></div>
                                    </div>
                                    <div class="box-field">
                                        <input type="text" name="product_name" id="product_name" value="<?= $data['SelectByID']['product_name']; ?>" autocomplete="off" required>
                                        <span>Product Name</span>
                                    </div>
                                </div>
                            </div>
                            <input type="radio" name="category" value="Drinks" id="option1-catg" class="hide" <?php if ($category == "Drinks") echo "checked"; ?>>
                            <input type="radio" name="category" value="Deserts" id="option2-catg" class="hide" <?php if ($category == "Deserts") echo "checked"; ?>>
                            <div class="radio-box-manual colm">
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
                                <div id="subRadio1" class="radio-box-manual colm">
                                    <input type="radio" name="drink" value="Coffee" id="option1-lvl" class="hide" <?php if ($subcategory == "Coffee") echo "checked"; ?>>
                                    <input type="radio" name="drink" value="Noncoffee" id="option2-lvl" class="hide" <?php if ($subcategory == "Noncoffee") echo "checked"; ?>>
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
                                <div id="subRadio2" class="radio-box-manual colm">
                                    <input type="radio" name="desert" value="Ice Cream" id="option1-dsrt" class="hide" <?php if ($subcategory == "Ice Cream") echo "checked"; ?>>
                                    <input type="radio" name="desert" value="Cake" id="option2-dsrt" class="hide" <?php if ($subcategory == "Cake") echo "checked"; ?>>
                                    <input type="radio" name="desert" value="Cupcake" id="option3-dsrt" class="hide" <?php if ($subcategory == "Cupcake") echo "checked"; ?>>
                                    <input type="radio" name="desert" value="Cookies" id="option4-dsrt" class="hide" <?php if ($subcategory == "Cookies") echo "checked"; ?>>
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
                                        <input type="text" name="price" id="price" value="<?= $data['SelectByID']['price']; ?>" maxlength="15" onkeypress="return restrictAlphabets(event)" autocomplete="off" required>
                                        <span>Price</span>
                                    </div>
                                </div>
                            </div>
                            <div class="multi-box-field mY-b-10 colm">
                                <div class="label-field">
                                    Contents
                                </div>
                                <div class="multi-field" id="multifield">
                                    <?php $no = 1; ?>
                                    <?php foreach ($data['SearchDataDB']->multiSelectData("content", "product_contents", "WHERE product_code = '" . $data['SelectByID']['product_code'] . "'") as $content) : ?>
                                        <div class="tf-default">
                                            <p><?php echo $no; ?></p>
                                            <div class="box-field">
                                                <input type="text" maxlength="15" value="<?= $content['content']; ?>" name="content_<?= $no; ?>" autocomplete="off" required="true">
                                                <span>Content</span>
                                            </div>
                                        </div>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
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
                                    Product Photo
                                </div>
                                <div class="bf-default fl-Y-center">
                                    <div class="imgf-default mX-r-10" style="background-image: url('<?= BASEURL; ?>/img/product_images/<?= $directory; ?>/<?= $data['SelectByID']['image']; ?>');">
                                        <label for="img" class="btnsquare-field">
                                            <div class="i-image"></div>
                                        </label>
                                    </div>
                                    <p id="fileimg" style="overflow-wrap: break-word; max-width: 150px;" class="font-14px font-weg-500 color-disabled mrgn-clear"><?= $data['SelectByID']['image']; ?></p>
                                    <input type="file" name="image" id="img" hidden>
                                </div>
                            </div>
                            <div class="end-box" id="endb">
                                <button type="submit" class="btntext-default">
                                    Save changed
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= BASEURL; ?>/js/previewImage.js"></script>
    <script src="<?= BASEURL; ?>/js/boxField.js"></script>
    <script src="<?= BASEURL; ?>/js/formField.js"></script>