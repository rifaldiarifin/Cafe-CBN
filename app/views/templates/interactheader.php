<!DOCTYPE html>
<?php
$confTheme = $data['sessionData']['config_data']['theme'];
$setFirst = "";
if ($confTheme == "dark") {
    $setFirst = "darkThemeMode";
} elseif ($confTheme == "light") {
    $setFirst = "";
}
?>
<html lang="id" data-theme="<?= $confTheme; ?>" data-color="" data-transition="" class="<?= $setFirst; ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,text/html">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" name="viewport">
    <meta name="author" content="Rifaldi Arifin">
    <meta name="description" content="Cafe CBN, Website pengelola transaksi pemesanan, sekaligus pengelolaan dalam menu minuman dan makanan.">
    <meta name="keywords" content="Cafe, CBN, Cafe CBN, Cafe bisa ngopi">
    <meta name="theme-color" content="#fff">
    <link rel="icon" href="<?= BASEURL; ?>/img/logo/coffeecup_dark.png">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/interactstyle.css">
    <title><?= $data['title']; ?> | COFFEE CBN</title>
    <script src="<?= BASEURL; ?>/jquery/jquery-3.6.1.min.js"></script>
    <script src="<?= BASEURL; ?>/js/currentTheme.js"></script>
</head>

<body class="<?= $data['sessionData']['config_data']['color'] . "-color"; ?> <?= $data['sessionData']['config_data']['transition'] . "-transition"; ?>">
    <div class="box-toast-notif" style="height: fit-content">
        <?php FlashMessage::flash(); ?>
    </div>

    <div class="box-hiprompt hide">
        <div class="hiprompt-popup">
            <div onclick="alertHidePrompt()" class="close"></div>
            <div class="icon-prompt verifiedAccount">
                <div class="icon"></div>
            </div>
            <label>Personal Info</label>
            <p>Confirm first if this is you.</p>
            <div class="list-box-field">
                <div class="tf-default">
                    <div class="icon-field">
                        <div class="i-passwordfill"></div>
                    </div>
                    <div class="box-field">
                        <input class="field1" type="password" value="" autocomplete="off" required>
                        <span>Password</span>
                    </div>
                </div>
            </div>
            <div id="message-prompt" class="alert-form-message" style="display: none;">
                <div class="logo warning"></div>
                Wrong Password
            </div>
            <div class="end-prompt">
                <button class="button submit">Confirm</button>
            </div>
        </div>
    </div>

    <div class="box-hialert hide">
        <div class="hialert-popup">
            <div class="icon-alert">
                <div class="icon"></div>
            </div>
            <label>HiAlert</label>
            <p>Type your message here!</p>
            <div class="end-alert">
                <button onclick="alertHideConfirm()" class="button primary">Yes</button>
                <button onclick="alertHideConfirm()" class="button secondary">No</button>
            </div>
        </div>
    </div>