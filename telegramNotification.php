<?php
class telegramNotification {
    public static function sendNotification( $article, $user, $content, $summary,
        $isMinor, $isWatch, $section, $flags, $revision, $status, $baseRevId ) {

        $token = "ТУТТВОЙТОКЕН";
        $chatID = "ТУТIDПОЛЬЗОВАТЕЛЯГРУППЫИЛИКАНАЛА";
        
        $link2article = "ТУТТВОЁДОМЕННОЕИМЯ" . "/index.php/Special:RecentChanges";
        $msg = "Новая правка на вичке!%0A%0A"
            . "*Пользователь*: " . $user . "%0A"
            . "*Статья*: " . $article->getTitle() . "%0A%0A"
            . $link2article;
        
        $ch = curl_init("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID . "&text=" . $msg . "&parse_mode=Markdown&disable_web_page_preview=true");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
        curl_exec($ch);
        curl_close ($ch);

        return true;
    }
}