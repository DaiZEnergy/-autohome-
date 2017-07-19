<?php

	$DataList= '[
              {"goodsId":"101010","img":"./images/lists1.jpg","describe":"帕萨特 2015款 1.8TSI DSG尊荣版 ","price":"15.38","tit":"2.3万公里/2014/商家"},
               {"goodsId":"10fddsdf","img":"./images/lists2.jpg","describe":"福克斯 2012款 两厢 1.6L 自动风尚型 ","price":"10.98","tit":"2.3万公里/2015/商家"},
               {"goodsId":"123322","img":"./images/lists3.jpg","describe":"奥迪A1 2012款 1.4 TFSI Urban ","price":"12.58","tit":"6.32万公里/2012/商家"},
               {"goodsId":"2332846","img":"./images/lists4.jpg","describe":"宝来 2014款 1.6L 自动时尚型 ","price":"18.56","tit":"3.88万公里/2014/个人"},
               {"goodsId":"3456","img":"./images/lists5.jpg","describe":"速腾 2014款 改款 1.4TSI 自动豪华型 ","price":"11.38","tit":"3.88万公里/2014/商家"},
               {"goodsId":"992348","img":"./images/lists6.jpg","describe":"朗逸 2015款 1.6L 自动风尚版 ","price":"11.68","tit":"2.65万公里/2010/商家"},
               {"goodsId":"123131","img":"./images/lists7.jpg","describe":"索纳塔八 2013款 2.4L 自动豪华版 国IV ","price":"12.27","tit":"6.52/2013/个人"},
               {"goodsId":"3424221299","img":"./images/lists8.jpg","describe":"奥迪A1 2014款 30 TFSI 舒适型 ","price":"15.68","tit":"4.26万公里/2014/商家"},
               {"goodsId":"djhsjkfh111","img":"./images/lists9.jpg","describe":"宝马3系 2011款 320i 时尚型 ","price":"13.98","tit":"3.88万公里/2014/商家"}
               
            ]';

   

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  echo $DataList;
} elseif ($_SERVER["REQUEST_METHOD"] == "POST"){
  echo $DataList;
}
