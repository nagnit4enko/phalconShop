<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 13.07.2015
 * Time: 21:29
 */
use Phalcon\Logger\Adapter\File as FileAdapter;

class mainTask extends \Phalcon\CLI\Task
{

    public function mainAction() {
        sleep(rand(1,6));

        $page = 1;
        $req = 'curl "https://opskins.com/ajax/history_scroll.php" -H "cookie: __cfduid=d2863d37a42a52c534ef948fc9908890f1436810572; PHPSESSID=7p97u2sl4p6u5ajflklut65gq4; _gat=1; _ga=GA1.2.153779050.1436806777; __mmapiwsid=64527ADA-2989-11E5-A17E-094F559CF7BD:12c1c586ca439f9788e2255bea9fd4900af27f93" -H "origin: https://opskins.com" -H "accept-encoding: gzip, deflate" -H "accept-language: ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4" -H "x-requested-with: XMLHttpRequest" -H "user-agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36" -H "content-type: application/x-www-form-urlencoded; charset=UTF-8" -H "accept: */*" -H "cache-control: max-age=0" -H "referer: https://opskins.com/?loc=sale_history" --data "type=scroll&page='.$page.'" --compressed -k';

        $res = exec($req);

        //$res = "<tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1405411' class='tblLink'>Desert Eagle | Naga (Battle-Scarred)</a></td><td>34<span class='icon-logo'></span></td><td>34<span class='icon-logo'></span></td><td>23:21:52</td><td>July 13th 2015 14:25:37</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424720' class='tblLink'>Chroma 2 Case Key</a></td><td>222<span class='icon-logo'></span></td><td>265<span class='icon-logo'></span></td><td>00:02:25</td><td>July 13th 2015 14:25:31</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1403258' class='tblLink'>M4A1-S | Cyrex (Minimal Wear)</a></td><td>2500<span class='icon-logo'></span></td><td>3,369<span class='icon-logo'></span></td><td>01:29:03</td><td>July 13th 2015 14:25:17</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424709' class='tblLink'>Falchion Case Key</a></td><td>230<span class='icon-logo'></span></td><td>264<span class='icon-logo'></span></td><td>00:02:33</td><td>July 13th 2015 14:25:09</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424658' class='tblLink'>Falchion Case Key</a></td><td>233<span class='icon-logo'></span></td><td>264<span class='icon-logo'></span></td><td>00:07:12</td><td>July 13th 2015 14:25:09</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424589' class='tblLink'>Falchion Case Key</a></td><td>233<span class='icon-logo'></span></td><td>264<span class='icon-logo'></span></td><td>00:10:55</td><td>July 13th 2015 14:25:09</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424496' class='tblLink'>Falchion Case Key</a></td><td>240<span class='icon-logo'></span></td><td>264<span class='icon-logo'></span></td><td>00:17:02</td><td>July 13th 2015 14:25:09</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1387931' class='tblLink'>★ StatTrak&#8482; Falchion Knife | Case Hardened (Field-Tested)</a></td><td>17666<span class='icon-logo'></span></td><td>80,000<span class='icon-logo'></span></td><td>21:11:46</td><td>July 13th 2015 14:25:07</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424727' class='tblLink'>Chroma Case Key</a></td><td>222<span class='icon-logo'></span></td><td>265<span class='icon-logo'></span></td><td>00:01:54</td><td>July 13th 2015 14:25:07</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1416015' class='tblLink'>M4A1-S | Bright Water (Minimal Wear)</a></td><td>384<span class='icon-logo'></span></td><td>389<span class='icon-logo'></span></td><td>11:35:49</td><td>July 13th 2015 14:25:00</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424059' class='tblLink'>AWP | Redline (Field-Tested)</a></td><td>590<span class='icon-logo'></span></td><td>694<span class='icon-logo'></span></td><td>00:47:56</td><td>July 13th 2015 14:24:58</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1416985' class='tblLink'>AK-47 | Emerald Pinstripe (Minimal Wear)</a></td><td>400<span class='icon-logo'></span></td><td>189<span class='icon-logo'></span></td><td>10:11:07</td><td>July 13th 2015 14:24:58</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1421122' class='tblLink'>StatTrak&#8482; AK-47 | Blue Laminate (Field-Tested)</a></td><td>1000<span class='icon-logo'></span></td><td>1,082<span class='icon-logo'></span></td><td>04:31:54</td><td>July 13th 2015 14:24:54</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424139' class='tblLink'>StatTrak&#8482; AK-47 | Blue Laminate (Minimal Wear)</a></td><td>1139<span class='icon-logo'></span></td><td>1,143<span class='icon-logo'></span></td><td>00:43:08</td><td>July 13th 2015 14:24:53</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1417995' class='tblLink'>M4A4 | Asiimov (Battle-Scarred)</a></td><td>1032<span class='icon-logo'></span></td><td>972<span class='icon-logo'></span></td><td>08:54:19</td><td>July 13th 2015 14:24:48</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1411614' class='tblLink'>AK-47 | Redline (Field-Tested)</a></td><td>478<span class='icon-logo'></span></td><td>515<span class='icon-logo'></span></td><td>17:32:47</td><td>July 13th 2015 14:23:46</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1411610' class='tblLink'>AK-47 | Redline (Field-Tested)</a></td><td>478<span class='icon-logo'></span></td><td>515<span class='icon-logo'></span></td><td>17:32:54</td><td>July 13th 2015 14:23:46</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1411339' class='tblLink'>AK-47 | Redline (Field-Tested)</a></td><td>478<span class='icon-logo'></span></td><td>515<span class='icon-logo'></span></td><td>17:47:16</td><td>July 13th 2015 14:23:46</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424045' class='tblLink'>M4A4 | ★★ (Dragon King) (Minimal Wear)</a></td><td>326<span class='icon-logo'></span></td><td>515<span class='icon-logo'></span></td><td>00:47:50</td><td>July 13th 2015 14:23:46</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424680' class='tblLink'>M4A4 | ★★ (Dragon King) (Minimal Wear)</a></td><td>326<span class='icon-logo'></span></td><td>515<span class='icon-logo'></span></td><td>00:03:16</td><td>July 13th 2015 14:23:46</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1423783' class='tblLink'>Chroma Case Key</a></td><td>232<span class='icon-logo'></span></td><td>265<span class='icon-logo'></span></td><td>01:03:53</td><td>July 13th 2015 14:23:40</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1423672' class='tblLink'>Operation Vanguard Case Key</a></td><td>232<span class='icon-logo'></span></td><td>265<span class='icon-logo'></span></td><td>01:10:12</td><td>July 13th 2015 14:23:40</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1419934' class='tblLink'>M4A4 | Asiimov (Battle-Scarred)</a></td><td>977<span class='icon-logo'></span></td><td>972<span class='icon-logo'></span></td><td>06:01:41</td><td>July 13th 2015 14:23:29</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1412481' class='tblLink'>Five-SeveN | Case Hardened (Field-Tested)</a></td><td>298<span class='icon-logo'></span></td><td>273<span class='icon-logo'></span></td><td>16:42:00</td><td>July 13th 2015 14:23:29</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1411574' class='tblLink'>Tec-9 | Sandstorm (Field-Tested)</a></td><td>60<span class='icon-logo'></span></td><td>8<span class='icon-logo'></span></td><td>17:34:03</td><td>July 13th 2015 14:23:29</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424578' class='tblLink'>Chroma Case</a></td><td>5<span class='icon-logo'></span></td><td>3<span class='icon-logo'></span></td><td>00:10:07</td><td>July 13th 2015 14:23:26</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424542' class='tblLink'>Chroma Case</a></td><td>5<span class='icon-logo'></span></td><td>3<span class='icon-logo'></span></td><td>00:12:53</td><td>July 13th 2015 14:23:26</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424430' class='tblLink'>Chroma Case</a></td><td>5<span class='icon-logo'></span></td><td>3<span class='icon-logo'></span></td><td>00:20:14</td><td>July 13th 2015 14:23:26</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424489' class='tblLink'>Chroma Case</a></td><td>5<span class='icon-logo'></span></td><td>3<span class='icon-logo'></span></td><td>00:16:15</td><td>July 13th 2015 14:23:26</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424544' class='tblLink'>Falchion Case Key</a></td><td>235<span class='icon-logo'></span></td><td>264<span class='icon-logo'></span></td><td>00:12:39</td><td>July 13th 2015 14:23:14</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1395039' class='tblLink'>StatTrak&#8482; MAC-10 | Neon Rider (Minimal Wear)</a></td><td>1899<span class='icon-logo'></span></td><td>2,112<span class='icon-logo'></span></td><td>12:23:40</td><td>July 13th 2015 14:23:08</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1408708' class='tblLink'>StatTrak&#8482; MAC-10 | Neon Rider (Factory New)</a></td><td>3400<span class='icon-logo'></span></td><td>3,610<span class='icon-logo'></span></td><td>20:15:54</td><td>July 13th 2015 14:23:08</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1348290' class='tblLink'>StatTrak&#8482; MAC-10 | Neon Rider (Factory New)</a></td><td>3500<span class='icon-logo'></span></td><td>3,610<span class='icon-logo'></span></td><td>20:10:23</td><td>July 13th 2015 14:23:08</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1414919' class='tblLink'>PP-Bizon | Forest Leaves (Minimal Wear)</a></td><td>29<span class='icon-logo'></span></td><td>25<span class='icon-logo'></span></td><td>13:44:12</td><td>July 13th 2015 14:23:04</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1417964' class='tblLink'>SSG 08 | Sand Dune (Battle-Scarred)</a></td><td>22<span class='icon-logo'></span></td><td>23<span class='icon-logo'></span></td><td>08:54:53</td><td>July 13th 2015 14:23:04</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424606' class='tblLink'>Operation Vanguard Case Key</a></td><td>233<span class='icon-logo'></span></td><td>265<span class='icon-logo'></span></td><td>00:07:54</td><td>July 13th 2015 14:23:00</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424433' class='tblLink'>AK-47 | Elite Build (Field-Tested)</a></td><td>75<span class='icon-logo'></span></td><td>52<span class='icon-logo'></span></td><td>00:19:28</td><td>July 13th 2015 14:22:45</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1423140' class='tblLink'>StatTrak&#8482; Five-SeveN | Urban Hazard (Factory New)</a></td><td>231<span class='icon-logo'></span></td><td>248<span class='icon-logo'></span></td><td>01:47:28</td><td>July 13th 2015 14:22:44</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1412042' class='tblLink'>StatTrak&#8482; G3SG1 | Azure Zebra (Factory New)</a></td><td>93<span class='icon-logo'></span></td><td>106<span class='icon-logo'></span></td><td>17:06:04</td><td>July 13th 2015 14:22:41</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1395710' class='tblLink'>StatTrak&#8482; G3SG1 | Azure Zebra (Factory New)</a></td><td>90<span class='icon-logo'></span></td><td>106<span class='icon-logo'></span></td><td>11:02:13</td><td>July 13th 2015 14:22:41</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424487' class='tblLink'>StatTrak&#8482; MP7 | Armor Core (Factory New)</a></td><td>130<span class='icon-logo'></span></td><td>81<span class='icon-logo'></span></td><td>00:15:32</td><td>July 13th 2015 14:22:40</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424685' class='tblLink'>Operation Phoenix Weapon Case</a></td><td>5<span class='icon-logo'></span></td><td>3<span class='icon-logo'></span></td><td>00:01:38</td><td>July 13th 2015 14:22:37</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424674' class='tblLink'>Operation Phoenix Weapon Case</a></td><td>6<span class='icon-logo'></span></td><td>3<span class='icon-logo'></span></td><td>00:02:56</td><td>July 13th 2015 14:22:37</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424621' class='tblLink'>Operation Phoenix Weapon Case</a></td><td>5<span class='icon-logo'></span></td><td>3<span class='icon-logo'></span></td><td>00:06:43</td><td>July 13th 2015 14:22:37</td></tr><tr class='tblRow'><td><a href='http://opskins.com/index.php?loc=shop_view_item&item=1424492' class='tblLink'>Operation Phoenix Weapon Case</a></td><td>5<span class='icon-logo'></span></td><td>3<span class='icon-logo'></span></td><td>00:15:21</td><td>July 13th 2015 14:22:37</td></tr><input type='hidden' class='nextpage' value='2'><input type='hidden' class='isload' value='true'>";

//        print_r($res); exit;

        $pattern = "/<tr class='tblRow'><td><a href='(.*)' class='tblLink'>(.*)<\/a><\/td><td>(.*)<span class='icon-logo'><\/span><\/td><td>(.*)<span class='icon-logo'><\/span><\/td><td>(.*)<\/td><td>(.*)<\/td><\/tr>/U";

        $match = '';
        preg_match_all($pattern, $res, $match);

        $insert = 0;
        $logger = new FileAdapter("/www/logs/lke/cli.log");
        if ($r = count($match[1])){

            for ($i=0;$i<$r;$i++){


                $op = Opskins::findFirst("name = ".($this->db->escapeString($match[2][$i]))." AND sale_time= '".$match[5][$i]."' AND price = ".$match[3][$i]." AND when_sale =".(int)strtotime($match[6][$i]));

                if ($op) {
                    continue;
                }

                $op = new Opskins();

                $op->name = $match[2][$i];
                $op->link = $match[1][$i];
                $op->price = $match[3][$i];
                $op->sale = (int)str_replace(',', '', $match[4][$i]);
                $op->sale_time = $match[5][$i];
                $op->when_sale = (int)strtotime($match[6][$i]);

                $item = explode('item=', $op->link);
                $op->op_id = $item[1];

                if (!$op->save()){
                    $logger->error("Cannot save");
                }
                $insert++;

            }


        }else {
            $logger->error("Cannot find data. Response".$res);
        }
        $logger->info("Find: $r. Inserted $insert");
        exit;
    }

}