<?php
class Message
{

    const DEFAULT_FOLDER = "C:\wamp64\www\New-Notice-in-raw-php\inbox";
    public $messages = [];

    public function fetchSMS()
    {
        $path = Message::DEFAULT_FOLDER;
        $scan = scandir($path);
        $slash = "\\";

        foreach ($scan as $file) {
            if (!is_dir($file)) {
                $this->messages[] = file_get_contents($path . $slash . $file);
            }
        }
    }
}
