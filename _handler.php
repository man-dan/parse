
<table border="1" style="margin: 50px;">
    <caption>Таблица товаров</caption>
    <tr>
        <th>Название товара</th>
        <th>Количество комментариев</th>
    </tr>
<?php
    $ch = curl_init($_POST['url']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch,CURLOPT_PROXY, false);
    $file = curl_exec($ch);
    curl_close($ch);
    $my = $file;
    $json = json_decode($my,true);
$data = array();
foreach($json['content']['goods'] as $value)
{
    $data[$value['title']] = $value['count_comments'];
}
arsort($data);
foreach ($data as $title=>$value)
{
    echo "<tr><td>$title</td><td>$value</td>";
}
//"http://rozetka.com.ua/telefony/c4627900/action=getRelationsRecordsJSON;unit_id=4224;offset=0;limit=12;length=10;relation_name=accessory/"
?>
</table>

