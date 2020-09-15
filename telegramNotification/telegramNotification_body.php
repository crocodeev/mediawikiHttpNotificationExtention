<?php
class telegramNotification {
    public static function sendNotification( $article, $user, $content, $summary,
        $isMinor, $isWatch, $section, $flags, $revision, $status, $baseRevId ) {

        $curl = curl_init();
        $articleTitle = $article->getTitle();

        curl_setopt_array($curl, array(
                CURLOPT_URL => "placeholder",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS =>"{\"articleTitle\":\"$articleTitle \",\"summary\":\"$summary\",\"author\":\"$user\" }",
                CURLOPT_HTTPHEADER => array(
                        "Content-Type: application/json"
                                        ),
                        ));

        curl_exec($curl);
        curl_close($curl);

        return true;
    }
}
