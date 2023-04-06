<?php

class FlashMessage
{
    public static function setFlash($title, $message, $type)
    {
        $_SESSION['flashmessage'] = [
            'title' => $title,
            'message' => $message,
            'type'    => $type
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flashmessage'])) {
            echo '<div class="toast-list toast-' . $_SESSION['flashmessage']['type'] . ' active">
                    <div class="toast-content">
                        <div class="toast-icon">
                            <div class="i-icons"></div>
                        </div>

                        <div class="message">
                            <span class="text-1">' . $_SESSION['flashmessage']['title'] . '</span>
                            <span class="text-2">' . $_SESSION['flashmessage']['message'] . '</span>
                        </div>
                    </div>

                    <div class="i-xmark"></div>
                    <div class="progress active"></div>
                </div>';
            unset($_SESSION['flashmessage']);
        }
    }
}
