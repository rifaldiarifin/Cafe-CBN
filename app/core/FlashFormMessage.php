<?php

class FlashFormMessage
{
    public static function setFormFlash($message, $type)
    {
        $_SESSION['flashformmessage'] = [
            'message' => $message,
            'type'    => $type
        ];
    }

    public static function formFlash()
    {
        if (isset($_SESSION['flashformmessage'])) {
            echo '<div class="alert-form-message">
                    <div class="logo ' . $_SESSION['flashformmessage']['type'] . '"></div>
                    ' . $_SESSION['flashformmessage']['message'] . '
                </div>';
            unset($_SESSION['flashformmessage']);
        }
    }
}
