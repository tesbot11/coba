<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = '38LF2BWWazL3QmSUxmKY0zF4ALygkHTHSJkdNCos8KHr8axUNCuh+sV3ZpNBTtGq0srXDwnD2a1fvA4h5yeBETKixBIbvw+qlUdMcmv9CTyVl6PunGdvkPOfMh6CqtVmuf6b0rOPg7g8Ipe43AnLOgdB04t89/1O/w1cDnyilFU='; //sesuaikan 
$channelSecret = '17976403fa565616ca9d9f1bcb19223f';//sesuaikan

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId 	= $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp	= $client->parseEvents()[0]['timestamp'];
$message 	= $client->parseEvents()[0]['message'];
$messageid 	= $client->parseEvents()[0]['message']['id'];
$profil = $client->profil($userId);
$pesan_datang = $message['text'];

//pesan bergambar
if($message['type']=='text')
{
	if($pesan_datang=='Hi')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Halo'
									)
							)
						);
				
	}
	if($pesan_datang=='MM')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' => 
  array (
    'type' => 'carousel',
    'columns' => 
    array (
      0 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/gDpnMb/20180108_110257.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'FOUNDER',
        'text' => 'Group Owner -- Name : FahreziLee   Location : Malaysia',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_Lee',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_FahreziLee',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_LEE',
          ),
        ),
      ),
      1 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/gUFu1b/20180108_110910.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'SECRETARY',
        'text' => 'Admin -- Name : DeeAna   Location : Borneo',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_DEE',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_Dee',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_Dee',
          ),
        ),
      ),
      2 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/njD3uw/20180108_111546.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'CREATIVE',
        'text' => 'Admin -- Name : ALS   Location : West Java',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_ALS',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_ALS',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_ALS',
          ),
        ),
      ),
      3 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/nxZySG/20180108_111027.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'RESOURCE',
        'text' => 'Admin -- Name : Lala   Location : Hongkong',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_LALA',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_LALA',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_LALA',
          ),
        ),
      ),
      4 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/b7Gv7G/20180108_111142.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'HOME AS.',
        'text' => 'Admin -- Name : Juna Hermanza   Location : West Java',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_JUNA',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_Juna',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_Juna',
          ),
        ),
      ),
      5 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/edtxMb/20180108_111247.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'HOME AS.',
        'text' => 'Admin -- Name : Anissa   Location : West Java',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_NISA',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_Nisa',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_Nisa',
          ),
        ),
      ),
      6 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/gRYKZw/20180108_111446.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'HOME AS.',
        'text' => 'Admin -- Name : Alfariz   Location : Jakarta',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'uri',
            'label' => 'CHAT',
            'uri' => 'http://tiny.cc/FIS_ALFARIZ',
          ),
          1 => 
          array (
            'type' => 'uri',
            'label' => 'SMULE',
            'uri' => 'https://www.smule.com/FIS_Alfariz',
          ),		  
          2 => 
          array (
            'type' => 'message',
            'label' => 'view detail',
            'text' => 'FIS_Alfariz',
          ),
        ),
      ),
    ),
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
  ),
)
							)
						);
				
	}

}
 
$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);

?>
