

<?php
$message = '';
$t=time();
if(isset($_POST['name'])) {
    $arr = array(
        'properties' => array(
            array(
                'property' => 'firstname',
                'value' => $_POST['name']
            ),
            array(
                'property' => 'phone',
                'value' => $_POST['phone']
            ),
            array(
                'property' => 'address',
                'value' => $_POST['address']
            ),
            array(
                'property' => 'quantity',
                'value' => $_POST['quantity']
            ),
            array(
                'property' => 'ghi_chu',
                'value' => $_POST['ghi_chu']
            ),
            array(
                'property' => 'hs_lead_status',
                'value' => "NEW"
            ),
            array(
                'property' => 'ten_san_pham',
                'value' => "Stud100"
            )
        )
    );

    $post_json = json_encode($arr);
    $endpoint = "https://api.hubapi.com/contacts/v1/contact/?hapikey=e988575f-7359-4f0a-a128-4a9e0b9c3fa4";
    $ch = @curl_init();
    @curl_setopt($ch, CURLOPT_POST, true);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
    @curl_setopt($ch, CURLOPT_URL, $endpoint);
    @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = @curl_exec($ch);
    $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_errors = curl_error($ch);
    @curl_close($ch);
    if ($status_code == 200) {
        header('Location: thank.php');
        die();
    }else{
        $message = 'Lỗi hệ thống';
    }
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stud 100 kéo dài thời gian quan hệ, chống xuất tinh sớm, chính hãng</title>
    <meta name="title" content="Stud 100 kéo dài thời gian quan hệ, chính hãng tại Việt Nam">
    <meta name="description" content="Stud 100 spray là sản phẩm chai xịt chống xuất tinh sớm, kéo dài thời gian quan hệ lâu hơn cho nam giới. Hiệu quả trên 90% người dùng, an toàn cho cả hai">
    <meta name="robots" content="noodp">
    <link rel="canonical" href="http://banstud100.net/">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="Stud 100 spray là sản phẩm chai xịt chống xuất tinh sớm, kéo dài thời gian quan hệ lâu hơn cho nam giới. Hiệu quả trên 90% người dùng, an toàn cho cả hai">
    <meta name="image" continhent="./index_files/cong-ty-san-xuat-stud-100-tai-anh-quoc.png">
    <link rel="stylesheet" id="siteorigin-panels-front-css" href="./index_files/front.css" type="text/css" media="all">
    <link rel="stylesheet" id="crellyslider-css" href="./index_files/crellyslider.css" type="text/css" media="all">
    <link rel="stylesheet" id="moesia-bootstrap-css" href="./index_files/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="moesia-style-css" href="./index_files/style.css" type="text/css" media="all">
    <style id="moesia-style-inline-css" type="text/css">

    </style>
    
    <link rel="stylesheet" id="moesia-font-awesome-css" href="./index_files/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="moesia-animations-css" href="./index_files/animate.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="moesia-pretty-photo-css" href="./index_files/prettyPhoto.min.css" type="text/css" media="all">
    <script type="text/javascript" src="./index_files/jquery.js"></script>
<!--    <script type="text/javascript" src="./index_files/jquery-migrate.min.js"></script>-->
    <script type="text/javascript" src="./index_files/jquery.crellyslider.min.js"></script>
    <script type="text/javascript" src="./index_files/waypoints.min.js"></script>
    <script type="text/javascript" src="./index_files/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="./index_files/nicescroll-init.js"></script>
    <script type="text/javascript" src="./index_files/slick.min.js"></script>
    <script type="text/javascript" src="./index_files/carousel-init.js"></script>
    <script type="text/javascript" src="./index_files/wow.min.js"></script>
    <script type="text/javascript" src="./index_files/wow-init.js"></script>
    <script type="text/javascript" src="./index_files/jquery.prettyPhoto.min.js"></script>
    <script type="text/javascript" src="./index_files/prettyphoto-init.js"></script>
    <script type="text/javascript" src="./index_files/gmap3.min.js"></script>
    <script type="text/javascript" src="./index_files/instafeed.js"></script>
    <script type="text/javascript" src="./index_files/jquery.sticky.js"></script>
    <script type="text/javascript" src="./index_files/scripts.js"></script>
    <script type="text/javascript" src="./index_files/jquery.fitvids.js"></script>
    <link rel="shortcut icon" href="./index_files/favicon.png" />
    <style type="text/css">
        .action-area {
            display: block;
            background: url(./index_files/dia-chi-ban-stud-100-chinh-hang-2.png) no-repeat;
            background-position: center top;
            background-attachment: fixed;
            background-size: cover;
            z-index: -1;
            position: static;
        }
    </style>
    <style type="text/css">
        .services-area {
            display: block;
            background: url(#56bf4c) no-repeat;
            background-position: center top;
            background-attachment: fixed;
            background-size: cover;
            z-index: -1;
            position: static;
        }
        .service {
            background-color: rgba(0,0,0,0.6);
            border-right: 1px solid #5E5E5E;
        }
        .service:nth-of-type(3),
        .service:nth-of-type(6),
        .service:nth-of-type(7) {
            border-right: 0;
        }
    </style>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-99099923-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body class="home page page-id-2040 page-template page-template-page_front-page page-template-page_front-page-php siteorigin-panels siteorigin-panels-home">
<div id="page" class="hfeed site" style="display: block;">
    <header >

    </header><!-- #masthead -->
    <div id="undefined-sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 110px;"><div class="top-bar" style="position: fixed; top: 0px;">
            <div class="container">
                <div class="site-branding col-md-4">
                    <h1 class="site-title">
                        <a href="http://banstud100.net/" rel="home">
                            Stud 100 Spray
                        </a>
                    </h1>
                    <h2 class="site-description">Đại lý chính hãng tại Việt Nam</h2>
                </div>
                <button class="menu-toggle btn">
                    <i class="fa fa-bars"></i>
                </button>
                <nav id="site-navigation" class="main-navigation col-md-8" role="navigation"><div class="menu">
                        <ul class=" nav-menu">
                            <li class="current_page_item">
                                <a href="#nguon_goc">Nguồn gốc</a></li>
                            <li class="page_item page-item-2"><a href="#tac_dung">Tác dụng</a></li>
                            <li class="page_item page-item-2349"><a href="#uu_diem">Ưu điểm</a></li>
                            <li class="page_item page-item-2066"><a href="#so_lieu">Số liệu</a></li>
                            <li class="page_item page-item-2067"><a href="#hoi_dap">Hỏi đáp</a></li>
                            <li class="page_item page-item-2068"><a href="#huong_dan_su_dung">Hướng dẫn sử dụng</a></li>
                            <li class="page_item page-item-2069"><a href="#dat_hang">Mua ngay</a></li>

                        </ul>
                    </div>
                </nav></div></div></div>
    <div id="content" class="site-content clearfix ">
        <div id="primary" class="fp-content-area">
            <main id="main" class="site-main" role="main">
                <div class="entry-content">
                    <div id="pl-2040"><div class="panel-grid" id="pg-2040-0"><div class="panel-grid-cell" id="pgc-2040-0-0">
                                <section id="services" class="services-area">
                                    <div class="container" >
                                        <h3 class="widget-title"><span class="wow bounce animated" style="visibility: visible; animation-name: bounce;" id="nguon_goc">Nguồn gốc xuất xứ</span></h3>																			<div class="service col-md-4 col-sm-6 col-xs-6">
                                            <span class="service-icon wow zoomInDown animated" style="visibility: visible; animation-name: zoomInDown;"><i class="fa fa-university"></i></span>												<h4 class="service-title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Đơn vị sản xuất</h4><div class="service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><p><span style="color: #ffcc00;"><strong>Stud 100</strong> là chai xịt kéo dài thời gian quan hệ lâu hơn cho nam giới được nghiên cứu và sản xuất bởi hãng The Pound International Ltd - Anh Quốc, nó đã có mặt trên thị trường được hơn 30 năm, sản phẩm&nbsp;đã được chứng nhận tại Anh Quốc số PL/2294/5000R.</span></p>

                                                <p><span style="color: #ffcc00;"><img class="alignnone wp-image-2563" src="./index_files/cong-ty-san-xuat-stud-100-tai-anh-quoc.png" alt="Công ty sản xuất Stud 100" width="199" height="89"></span></p>

                                                <p><span style="color: #ffcc00;">Pound International Ltd.</span><br class="removeiflast removeiffirst"><span style="color: #ffcc00;">109 Baker Street</span><br class="removeiflast removeiffirst"><span style="color: #ffcc00;">London W1U 6RP, UK</span><br class="removeiflast removeiffirst"><span style="color: #ffcc00;">Tel +44&nbsp;20&nbsp;7935&nbsp;3735</span><br class="removeiflast removeiffirst"><span style="color: #ffcc00;">Email pound@dial.pipex.com</span></p>

                                                <p><span style="color: #ffcc00;">Website: Stud100.com</span></p></div>					</div>
                                        <div class="service col-md-4 col-sm-6 col-xs-6">
                                            <span class="service-icon wow zoomInDown animated" style="visibility: visible; animation-name: zoomInDown;"><i class="fa fa-bullhorn"></i></span>												<h4 class="service-title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Nguồn nhập khẩu Stud100</h4><div class="service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><p style="color: #ffcc00;">Stud 100 đã có mặt trên thị trường được hơn 30 năm và đã được xuất khẩu đến hơn 60&nbsp;quốc gia trên thế giới.</p>

                                                <p style="color: #ffcc00;">Ngoài địa chỉ trụ sở tại Lodon - Anh, thì hãng The Pound International cũng có văn phòng giao dịch tại Mỹ và đây cũng là nguồn nhập Stud 100 chính hãng về Việt Nam của chúng tôi.</p>

                                                <p style="color: #ffcc00;"><img class="alignnone wp-image-2564" src="./index_files/nhap-khau-chinh-hang-stud-100.png" alt="Stud 100 nhập khẩu chính hãng" width="164" height="83"></p>
                                                <p class="dontsplit dontend"><span style="color: #ffcc00;"><strong>TRADE SALES IN THE USA</strong> of&nbsp;Pound International Corporation</span><br class="removeiflast removeiffirst"><span style="color: #ffcc00;">1500&nbsp;SW 1st Avenue, Suite 1018</span><br class="removeiflast removeiffirst"><span style="color: #ffcc00;">Portland, Oregon 97201, USA</span><br class="removeiflast removeiffirst"><span style="color: #ffcc00;">Tel +1&nbsp;971&nbsp;255&nbsp;1185</span><br class="removeiflast removeiffirst"><span style="color: #ffcc00;">Email pint@poundinternational.net</span></p></div>					</div>
                                        <div class="service col-md-4 col-sm-6 col-xs-6">
                                            <span class="service-icon wow zoomInDown animated" style="visibility: visible; animation-name: zoomInDown;"><i class="fa fa-shopping-cart"></i></span>												<h4 class="service-title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Mua hàng tại Việt Nam</h4><div class="service-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><p style="color: #ffcc00;">Ở Việt Nam quý khách có thể mua chai xịt kéo dài thời gian quan hệ Stud 100 chính hãng tại địa chỉ</p>

                                                <p style="color: #ffcc00;"><img class="alignnone size-full wp-image-2565 aligncenter" src="./index_files/logo-1.png" alt="Địa chỉ bán Stud100 tại Hà Nội" width="262" height="67"></p>

                                                <p style="color: #ffcc00;">Shop YEULANHMANH</p>

                                                <p style="color: #ffcc00;">Địa chỉ: 718 Đường Láng - Đống Đa - Hà Nội</p>

                                                <p style="color: #ffcc00;">Hoặc gọi điện đặt hàng để được giao hàng tận nơi trong toàn quốc.</p>

                                                <p style="color: #ffcc00;">Điện thoại : 06135243892</p>

                                                <p style="color: #ffcc00;">Facebook:
                                                    <a href="https://www.facebook.com/Stud100chongxuattinhsomchinhhang">Stud100chongxuattinhsomchinhhang</a>
                                                </p>

                                                <p style="color: #ffcc00;">Website : yeulanhmanh.vn - banstud100.net</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div></div>
                        <div class="panel-grid" id="pg-2040-1"><div class="panel-grid-cell" id="pgc-2040-1-0"><div class="so-panel widget widget_text panel-first-child panel-last-child container" id="panel-2040-1-0-0" data-index="1"><div style="color: #0066bf;" class="panel-widget-style"><h3 class="widget-title" id="tac_dung">TÍNH NĂNG &amp; TÁC DỤNG CỦA STUD100</h3>			<div class="textwidget"><p>TÁC DỤNG</p>
                                            <p>Stud 100 dạng chai xịt dành cho nam giới (Stud 100 spray for men) của hãng The Pound International Ltd - Anh Quốc. Với thành phần chính là chất gây tê Lidocain 9,6%, Stud 100 có tác dụng gây tê nhẹ ngoài dương vật giúp nam giới kéo dài được thời gian quan hệ lâu hơn, chống xuất tinh sớm khi chưa kịp làm hài lòng "đối tác", và đặc biệt là mang lại sự tự tin cho nam giới mỗi khi quan hệ tình dục như là một thứ "vũ khí bí mật" của riêng bạn. Với hơn 30 năm kể từ khi ra đời lần đầu tiên tại Anh Quốc, trải qua nhiều lần cải tiến chất lượng... đến nay đã có hàng tỷ chai xịt chống xuất tinh sớm Stud100 đến tay các nam giới ở trên 60 quốc gia khác nhau. Điều đó nói nên chất lượng của Stud 100 mà bạn nên thử 1 lần và cảm nhận!</p>
                                            <p>NGUYÊN NHÂN HÀNG ĐẦU CỦA XUẤT TINH SỚM</p>
                                            <p>Bình thường khi quan hệ tình dục với bạn gái dương vật của nam giới thường cương cứng nên, máu bơm đầy vào 3 ống thể hang, lớp da giãn ra, kích cỡ dương vật lớn hơn nhiều lần so vơi bình thường. Các nhà khoa học chỉ ra rằng dưới lớp da của dương vật có sự tập trung rất nhiều dây thần kinh cảm giác, và vì vậy nó rất nhạy cảm, nhất là khi dương vật cương thì lớp da trở nên mỏng hơn, lượng máu bơm nhiều hơn và dương vật lại càng nhạy cảm với các tác động khi quan hệ. Chính vì vậy mỗi một nhịp quan hệ lại truyền lên các xung điện thần kinh lên não bộ, càng nhạy cảm thì càng hưng phấn và càng nhanh xuất tinh. Đó là một trong những nguyên nhân lớn gây xuất tinh sớm ở nam giới.</p>
                                            <p>CƠ CHẾ TÁC DỤNG CỦA STUD100</p>
                                            <p>Khi dùng chai xịt chống xuất tinh sớm Stud 100 : với chất gây tê lidocain 9.6% sẽ giúp tạm thời làm giảm sự nhạy cảm của lớp da bên ngoài dương vật, giảm xung điện thần kinh truyền lên não bộ, ngăn chặn hưng phấn quá độ và từ đó làm chậm đáng kể thời gian cực khoái và phóng tinh ở đàn ông, kéo dài thời gian quan hệ được lâu hơn. Stud 100 không đơn giản chỉ là chất gây tê lidocain, nó bao gồm hơn 20 thành phần khác nhau giúp hỗ trợ chống xuất tinh sớm ở nam giới, chính vì vậy hiện nay dù có nhiều loại sản phẩm tương tự dùng lidocain nhưng không đạt được sự thành công bằng Stud 100.</p>
                                        </div>
                                    </div></div></div></div><div class="panel-grid" id="pg-2040-2"><div class="panel-grid-cell" id="pgc-2040-2-0">
                                <section id="employees" class="employees-area">
                                    <div class="container">
                                        <h3 class="widget-title"><span class="wow bounce animated" style="visibility: visible; animation-name: bounce;" id="uu_diem">ƯU ĐIỂM CỦA STUD 100</span></h3>														<div class="employee col-md-4 col-sm-6 col-xs-6">
                                            <img class="employee-photo wow zoomInDown animated" src="./index_files/ban-stud-100-chinh-hang-giup-chong-xuat-tinh-som-nam-gioi-1.jpg" alt="TỶ LỆ THÀNH CÔNG CAO" style="visibility: visible; animation-name: zoomInDown;">
                                            <h4 class="employee-name wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">TỶ LỆ THÀNH CÔNG CAO</h4>
                                            <span class="employee-position wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">trên tổng số người dùng</span>
                                            <div class="employee-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><!-- AddThis Sharing Buttons above -->


                                                <p><span style="color: #000000;">Tỷ lệ thành công trong việc kéo dài thời gian quan hệ cho nam giới của Stud 100 là khá&nbsp;cao và có tính ổn định. <strong>Trên&nbsp;80% người dùng Stud 100</strong>&nbsp;có thể kéo dài được thời gian quan hệ của mình thêm ít nhất là 3 phút.</span></p>
                                                <p><span style="color: #000000;">Vẫn có một tỷ lệ khoảng 3-5% nam giới có cơ địa không hợp để dùng Stud 100 (<em>lớp da bên ngoài DV ít nhạy cảm, chai lì, cương cứng kém</em>) làm chất gây tê ít phát huy tác dụng.</span></p>
                                                <!-- AddThis Sharing Buttons below --></div>
                                        </div>
                                        <div class="employee col-md-4 col-sm-6 col-xs-6">
                                            <img class="employee-photo wow zoomInDown animated" src="./index_files/Stud-100-chinh-hang-duoc-chung-nhan-boi-fda-la-an-toan.jpg" alt="An toàn cho cả hai" style="visibility: visible; animation-name: zoomInDown;">
                                            <h4 class="employee-name wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">An toàn cho cả hai</h4>
                                            <span class="employee-position wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Không lo tác dụng phụ</span>
                                            <div class="employee-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><!-- AddThis Sharing Buttons above -->

                                                <p><span style="color: #000000;">Đây có lẽ là ưu điểm của Stud 100 mà nhiều người quan tâm. Stud 100 với thành phần chính là Lidocain 9.6% – một chất gây tê nhẹ và an toàn được dùng rộng rãi… Stud 100 đã được chứng nhận bởi FDA Hoa Kỳ.</span></p>
                                                <p><span style="color: #000000;">Stud 100 về bản chất hoạt động như chất gây tê ngoài da, không tác động vào bên trong dương vật nên không gây hại sức khỏe nam giới. Nó cũng không gây tác dụng lên âm đạo của nữ giới, ngay cả&nbsp;khi bạn xịt trực tiếp nên thì nữ giới cũng chỉ cảm thấy tê tê nhẹ chứ cũng không hại gì.</span></p>
                                                <!-- AddThis Sharing Buttons below --></div>
                                        </div>
                                        <div class="employee col-md-4 col-sm-6 col-xs-6">
                                            <img class="employee-photo wow zoomInDown animated" src="./index_files/huong-dan-su-dung-chai-xit-Stud-100-spray.jpg" alt="Nhanh và Hiệu quả" style="visibility: visible; animation-name: zoomInDown;">
                                            <h4 class="employee-name wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Nhanh và Hiệu quả</h4>
                                            <span class="employee-position wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Nhỏ gọn, dễ dùng, giá hợp lý</span>
                                            <div class="employee-desc wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><!-- AddThis Sharing Buttons above -->

                                                <p><span style="color: #000000;">Stud 100 phát huy&nbsp;tác dụng khá nhanh, chỉ sau khoảng 1 phút là bạn thấy sự thay đổi, tuy nhiên thời điểm lý tưởng nhất để qian hệ là từ phút thứ 7 – 45.</span></p>
                                                <p><span style="color: #000000;">Chai xịt Stud 100 khá nhỏ gọn, dễ mang theo trong người, bí mật với bạn gái.</span></p>
                                                <p><span style="color: #000000;">Giá thành chỉ 350.000đ/chai, dùng được cho 35-40 lần quan hệ.</span></p>
                                                <!-- AddThis Sharing Buttons below --></div>
                                        </div>
                                    </div>


                                </section>


                            </div></div><div class="panel-grid" id="pg-2040-3"><div class="panel-grid-cell" id="pgc-2040-3-0">		<section id="facts" class="facts-area">
                                    <div class="container">
                                        <h3 class="widget-title"><span class="wow bounce animated" style="visibility: visible; animation-name: bounce;" id="so_lieu">Một vài số liệu</span></h3>									<div class="col-md-3 col-sm-3 col-xs-6">
                                            <span class="fact wow rotateIn animated" id="15" style="visibility: visible; animation-name: rotateIn;">15</span>
                                            <div class="fact-name wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Dung tích (ml)</div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <span class="fact wow rotateIn animated" id="180" style="visibility: visible; animation-name: rotateIn;">180</span>
                                            <div class="fact-name wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Số hơi xịt</div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <span class="fact wow rotateIn animated" id="40" style="visibility: visible; animation-name: rotateIn;">40</span>
                                            <div class="fact-name wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Số lần quan hệ</div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <span class="fact wow rotateIn animated" id="350" style="visibility: visible; animation-name: rotateIn;">350</span>
                                            <div class="fact-name wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Giá bán lẻ (nghìn)</div>
                                        </div>

                                    </div>

                                </section>
                            </div></div><div class="panel-grid" id="pg-2040-4"><div class="panel-grid-cell" id="pgc-2040-4-0">		<section id="call-to-action" class="action-area">
                                    <div class="container">

                                        <div class="action-text wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                            Chỉ 350.000đ /1 chai STUD100, cho 35-40 lần quan hệ					</div>

                                        <a href="#dat_hang" class="call-to-action wow zoomInUp animated" style="visibility: visible; animation-name: zoomInUp;">Đặt hàng</a>
                                    </div>


                                </section>
                            </div></div><div class="panel-grid" id="pg-2040-5"><div class="panel-grid-cell" id="pgc-2040-5-0">		<section id="testimonials" class="testimonials-area">
                                    <div class="container">
                                        <h3 class="widget-title"><span class="wow bounce animated" style="visibility: visible; animation-name: bounce;" id="hoi_dap">Hỏi Đáp về Stud 100</span></h3>																			<div class="testimonial col-md-6 col-sm-6 fadeInUp">
                                            <div class="testimonial-body"><!-- AddThis Sharing Buttons above -->


                                                <h3>Dùng chai trị xuất tinh sớm&nbsp;Stud 100 có sợ bị bạn gái phát hiện?</h3>

                                                <p>Bạn an tâm nhé, chai xịt&nbsp;kéo dài thời gian quan hệ&nbsp;Stud 100&nbsp;về cơ bản chỉ hơi có mùi khi mới xịt còn sau khoảng 5-10 phút thì nó không còn mùi vị gì&nbsp;cả.&nbsp;Nếu muốn an toàn và kín đáo&nbsp;hơn nữa bạn cũng có thể đi rửa (nhưng chỉ rửa nhẹ nhàng với nước) trước khi quan hệ hoặc đeo bao cao su bên ngoài.</p>
                                                <!-- AddThis Sharing Buttons below --></div>
                                            <img class="client-photo col-md-4" src="./index_files/su-dung-stud100-co-so-bi-ban-gai-biet.png" alt="Dùng chai trị xuất tinh sớm Stud 100 có sợ bị bạn gái phát hiện?">
                                            <h4 class="client-name col-md-8">Dùng chai trị xuất tinh sớm Stud 100 có sợ bị bạn gái phát hiện?</h4>

                                        </div>
                                        <div class="testimonial col-md-6 col-sm-6 fadeInUp">
                                            <div class="testimonial-body"><!-- AddThis Sharing Buttons above -->


                                                <h2>Nên dùng Stud 100 tối đa bao nhiều lần/ ngày?</h2>
                                                <p>Một ngày bạn không nên dùng Stud 100 quá 3 lần, bởi đơn giản mỗi một lần dùng là tương đương với một lần quan hệ tình dục, mà quan hệ tình dục nhiều sẽ ảnh hưởng không tốt đến sức khỏe của bạn. Mặt khác, dùng chai xịt Stud 100 đến lần thứ 3 – 4 sẽ làm giảm cảm giác hứng thú của bạn, chất gây tê dùng quá nhiều sẽ làm cho bạn có cảm giác hơi khó chịu.</p>
                                                <p>Chai xịt kéo dài thời gian quan hệ Stud 100 dùng rất tốt nhưng không nên lạm dụng nó để quan hệ tình dục quá nhiều hay luôn ép mình cố gắng để “chiến thắng” bạn gái… Sự hòa hợp mới là điều quan trọng hơn cả.</p>
                                                <!-- AddThis Sharing Buttons below --></div>
                                            <img class="client-photo col-md-4" src="./index_files/nen-dung-stud-100-moi-ngay-toi-da-may-lan.png" alt="Nên dùng Stud100 mấy lần một ngày?">
                                            <h4 class="client-name col-md-8">Nên dùng Stud100 mấy lần một ngày?</h4>

                                        </div>
                                        <div class="testimonial col-md-6 col-sm-6 fadeInUp">
                                            <div class="testimonial-body"><!-- AddThis Sharing Buttons above -->


                                                <h2 class="client-name col-md-8">Tác dụng chính của Stud 100 là gì?</h2>
                                                <p>Chai xịt&nbsp;Stud 100 Spray Delay&nbsp;chứa hợp chất&nbsp;Lidocain 9,6%&nbsp;gây tê cục bộ trên lớp biểu bì bên ngoài đầu dương vật nhằm giảm tín hiệu kích thích đưa lên não, nhờ đó&nbsp;Stud 100&nbsp;có thể giúp quý ông điều khiển được toàn cuộc, <strong>ngăn&nbsp;xuất tinh sớm</strong> và<strong> kéo dài thời gian quan hệ lâu hơn</strong> cho nam giới.</p>
                                                <p>Ở mọi thời đại,&nbsp;“Xuất tinh sớm” có lẽ là một trong số ít cụm từ mà cánh đàn ông sợ nhất dù không nhiều người&nbsp;nói ra, và một trong số nguyên nhân đã được các nhà khoa học chứng minh đó là do sự “nhạy cảm quá mức” của lớp da bên ngoài dương vật. Có một số lượng rất lớn các dây thần kinh cảm giác nằm&nbsp;dưới lớp da này, nhiều hơn các nơi khác rất nhiều. Và bình thường khi cương cứng và quan hệ tình dục, máu sẽ bơm nhiều về dương vật làm cho lớp da dãn ra, các dây thân kinh căng lên và trở nên rất nhạy cảm, nó truyền những xung điện thần kinh đến não bộ và đưa đến quyết định phóng tinh khi đạt đến một mức độ kích thích giới hạn nào đó. Ở nhiều đàn ông, sự phóng tinh là quá nhanh khi mà họ chưa kịp làm cho bạn gái của mình “lên đỉnh”, đó chính là xuất tinh sớm.</p>
                                                <p>Chính vì vậy nguyên lý dùng chất gây tê Lidocain hoặc Benzocain, nhưng chất gây tê an toàn, đã được các nhà khoa học thừa nhận là một trong những cách ngăn xuất tinh sớm hiệu quả kết hợp với các phương&nbsp;pháp trị liệu khác</p>
                                                <!-- AddThis Sharing Buttons below --></div>
                                            <img class="client-photo col-md-4" src="./index_files/binh-xit-tri-xuat-tinh-som-stud-100_thuoc-xit-tri-xuat-tinh-som-stud-100.jpg" alt="Tác dụng chính của Stud 100 là gì?">
                                            <h4 class="client-name col-md-8">Tác dụng chính của Stud 100 là gì?</h4>
                                            <span class="client-function col-md-8">"câu hỏi được quan tâm nhiều nhất"</span>

                                        </div>
                                        <div class="testimonial col-md-6 col-sm-6 fadeInUp">
                                            <div class="testimonial-body"><!-- AddThis Sharing Buttons above -->


                                                <h2><span style="color: #000000;">Tại sao dùng&nbsp;Stud 100&nbsp;lại&nbsp;kéo dài được thời gian quan hệ lâu hơn?</span></h2>
                                                <p><span style="color: #000000;">Câu trả lời xuất phát từ nguyên lý sau : Chai&nbsp;xịt chống xuất tinh sớm Stud 100&nbsp;có chứa chất&nbsp;Lidocain 9,6%, khi xịt chất này nên lớp da bên ngoài dương vật nó sẽ gây tê cục bộ lên lớp da bên ngoài, làm giảm các xung điện thần kinh cảm giác truyền lên não bộ của chúng ta, từ đó làm giảm hưng phấn quá độ và giúp làm chủ được cảm xúc nhờ đó mà kéo dài được thời gian quan hệ lâu hơn, chống được xuất tinh sớm.</span></p>
                                                <p><span style="color: #000000;">Thời gian gây tê hiệu quả của Stud 100&nbsp;Spray là từ phút thứ 5 – khoảng 60 phút tùy lượng xịt. Vậy nên bạn nên quan hệ vào thời gian này để có hiệu quả cao nhất nhe.</span></p>
                                                <!-- AddThis Sharing Buttons below --></div>
                                            <img class="client-photo col-md-4" src="./index_files/man-206932_150.jpg" alt="Vì sao Stud 100 lại ngăn được xuất tinh sớm?">
                                            <h4 class="client-name col-md-8">Vì sao Stud 100 lại ngăn được xuất tinh sớm?</h4>
                                            <span class="client-function col-md-8">"câu hỏi được thắc mắc nhiều nhất"</span>

                                        </div>
                                        <div class="testimonial col-md-6 col-sm-6 fadeInUp">
                                            <div class="testimonial-body"><!-- AddThis Sharing Buttons above -->


                                                <h2>Dùng Stud 100 có thực sự có tác dụng kéo dài quan hệ không?</h2>
                                                <p>Chúng tôi khẳng định là có. Không phải ngẫu nhiên mà Stud 100 spray được ưa dùng toàn thế giới, xuất khẩu tới hớn 60 quốc gia và có hàng tỷ chai đã được bán ra trong suốt hơn 30 năm qua.</p>
                                                <p>Chai xịt kéo dài thời gian quan hệ&nbsp;Stud 100&nbsp;với thành phần chính là chất gây tê&nbsp;Lidocain 9,6%&nbsp;và các chất phụ gia. Khi xịt lên đầu và thân dương vật sẽ làm giảm sự nhạy cảm của dương vật và giúp bạn kìm chế tốt hơn. Mức độ kéo dài được lâu hay ít là tùy thuộc vào liều lượng xịt và cơ địa dương vật của nam giới.</p>
                                                <p>Stud 100 tốt hơn với những nam giới DV có cương dương tốt nhưng lại quá nhạy cảm, ngược lại đối tượng nam giới yếu sinh lý từ bên trong dẫn đến dương vật kém cương cứng thì hiệu quả lại không cao…</p>
                                                <p>Chỉ có chưa đến 5% nam giới không thực sự thấy tốt hơn khi dùng Stud 100 – một tỷ lệ rất nhỏ!</p>
                                                <!-- AddThis Sharing Buttons below --></div>
                                            <img class="client-photo col-md-4" src="./index_files/model-334739_150.jpg" alt="Stud 100 có thực sự có tác dụng?">
                                            <h4 class="client-name col-md-8">Stud 100 có thực sự có tác dụng?</h4>
                                            <span class="client-function col-md-8">"Thắc mắc phổ biến nhất"</span>

                                        </div>
                                        <div class="testimonial col-md-6 col-sm-6 fadeInUp">
                                            <div class="testimonial-body"><!-- AddThis Sharing Buttons above -->


                                                <h2>Sử dụng Stud 100 có gây hại gì cho phụ nữ không?</h2>
                                                <p>Nhà sản xuất khẳng định là không. Nó rất an toàn cho phụ nữ.</p>
                                                <p>Trong thực tế, Nam giới thường phải xịt Stud 100 trước khi quan hệ khoảng 5-10 phút và nó đã ngấm, không còn ở bên ngoài da nên không truyền qua phụ nữ. Và trước khi được bán trên thị trường thì Stud100 cũng đã phải trải qua các thử nghiệm về độ an toàn với sức khỏe người dùng rất khắt khe theo tiêu chuẩn FDA.</p>
                                                <p>Tuy nhiên nếu bạn định quan hệ để bạn gái có thai thì không &nbsp;nên dùng Stud 100,&nbsp;các trường hợp DV hay AD bị trấy xước, người mẫn cảm với các chất gây tê…thì cũng không nên dùng.</p>
                                                <!-- AddThis Sharing Buttons below --></div>
                                            <img class="client-photo col-md-4" src="./index_files/girl-333858_640.jpg" alt="Stud 100 có gây hại gì cho phụ nữ không?">
                                            <h4 class="client-name col-md-8">Stud 100 có gây hại gì cho phụ nữ không?</h4>
                                            <span class="client-function col-md-8">"Câu hỏi có trách nhiệm nhất"</span>

                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <center><span style="color: red;">*</span> lưu ý: Công dụng của sản phẩm có thể thay đổi tùy theo cơ địa và thể trạng của từng người</center>
                                    </div>
                                </section>
                            </div></div><div class="panel-grid" id="pg-2040-6"><div class="panel-grid-cell" id="pgc-2040-6-0">		<section id="projects" class="projects-area">
                                    <div class="container">
                                        <h3 class="widget-title"><span class="wow bounce animated" style="visibility: visible; animation-name: bounce;" id="huong_dan_su_dung">Hướng dẫn sử dụng Stud 100</span></h3>

                                        <div class="project col-md-4 col-sm-6 col-xs-6 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                            <div class="project-image">
                                                <img width="350" height="250" src="./index_files/huong-dan-su-dung-stud-100-the-nao-la-dung-nhat-350x250.png" class="attachment-project-image size-project-image wp-post-image" alt="Lưu ý trước khi sử dụng Stud 100">

                                            </div>
                                        </div>
                                        <div class="project col-md-4 col-sm-6 col-xs-6 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                            <div class="project-image">
                                                <img width="350" height="250" src="./index_files/luu-y-khi-su-dung-stud-100-350x250.png" class="attachment-project-image size-project-image wp-post-image" alt="Có nên sử dụng Stud 100">

                                            </div>
                                        </div>
                                        <div class="project col-md-4 col-sm-6 col-xs-6 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                            <div class="project-image">
                                                <img width="350" height="250" src="./index_files/huong-dan-cach-su-dung-stud-100-hieu-qua-350x250.png" class="attachment-project-image size-project-image wp-post-image" alt="Hình ảnh hướng dẫn sử dụng stud 100">

                                            </div>
                                        </div>
                                        <div class="project col-md-4 col-sm-6 col-xs-6 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                            <div class="project-image">
                                                <img width="350" height="250" src="./index_files/huong-dan-dung-stud-100-bang-hinh-anh-minh-hoa-350x250.png" class="attachment-project-image size-project-image wp-post-image" alt="hướng dẫn cách dùng stud 100">

                                            </div>
                                        </div>
                                        <div class="project col-md-4 col-sm-6 col-xs-6 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                            <div class="project-image">
                                                <img width="350" height="250" src="./index_files/hinh-anh-huong-dan-su-dung-stud-100-dung-cach-350x250.png" class="attachment-project-image size-project-image wp-post-image" alt="Hướng dẫn các sử dụng Stud 100 06">

                                            </div>
                                        </div>
                                        <div class="project col-md-4 col-sm-6 col-xs-6 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                            <div class="project-image">
                                                <img width="350" height="250" src="./index_files/xit-stud-100-truoc-khi-quan-he-bao-nhieu-phut-350x250.png" class="attachment-project-image size-project-image wp-post-image" alt="Xịt stud 100 trước quan hệ">

                                            </div>
                                        </div>
                                    </div>


                                </section>
                            </div></div>

                        <section id="projects" class="projects-area">
                            <div class="container">
                                <div class="panel-grid" id="pg-2040-10">
                                    <div class="panel-grid-cell" id="pgc-2040-10-0">
                                        <div class="so-panel widget widget_text panel-first-child panel-last-child container" id="panel-2040-10-0-0" data-index="10">
                                            <div style="color: #dd3333;" class="panel-widget-style">
                                                <h3 class="widget-title">Liên hệ mua hàng</h3>
                                                <div class="textwidget"><p>Shop YEULANHMANH</p>
                                                    <p>Website : http://yeulanhmanh.com/</p>
                                                    <p>Địa chỉ: 718 Đường Láng - Đống Đa - Hà Nội
                                                    <p>Điện thoại : 06135243892</p>
                                                    <p>Facebook:
                                                        <a href="https://www.facebook.com/Stud100chongxuattinhsomchinhhang">Stud100chongxuattinhsomchinhhang</a></p>
                                                    <p>Shop YEULANHMANH mở cửa bán hàng từ 8h sáng đến 21H30, tất cả các ngày trong tuần.</p>
                                                    <p>Giao hàng đi tất cả các tỉnh trong cả nước.</p>
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="panel-grid-cell" id="pgc-2040-10-1">
        
        
                                        <div class="so-panel widget widget_text panel-first-child panel-last-child container" id="panel-2040-10-0-0" data-index="10">
                                            <div style="color: #dd3333;" class="panel-widget-style">
                                                <h3 class="widget-title" id="dat_hang">Đặt hàng</h3>
                                                <div class="textwidget">
                                                    <?php if(isset($message)){ ?>
                                                        <p style="color: red; text-align: center;"> <?php echo $message; ?></p>
                                                    <?php } ?>

                                                    <form action="index.php" method="post" id="dat_hang" class="feedback orderformcdn orderformcdn_nonds" name="feedback">
                                                        <div class="order_form" style="color:#000 !important;">
                                                            <div class="block_form">
                                                                <input type="text" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" placeholder="Họ và tên *" required="" oninvalid="setCustomValidity('Họ và tên không để trống')" oninput="setCustomValidity('')">
                                                            </div>
        
                                                            <div class="block_form">
                                                                <input type="text" id="phone" name="phone" value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; } ?>" placeholder="Số điện thoại *" required="" pattern="^[0-9]{10,12}$" oninvalid="setCustomValidity('Số điện thoại không đúng')" oninput="setCustomValidity('')">
                                                            </div>
        
                                                            <div class="block_form">
                                                                <input type="text" id="address" name="address" value="<?php if(isset($_POST['address'])) { echo $_POST['address']; } ?>" placeholder="Địa chỉ *" required=""  oninvalid="setCustomValidity('Địa chỉ không để trống')" oninput="setCustomValidity('')">
                                                            </div>
        
                                                            <div class="block_form">
                                                                <select name="quantity" style="width: 100%;">
                                                                    <option value="1">
                                                                        1 Chai
                                                                    </option>
                                                                    <option value="2">
                                                                        2 Chai
                                                                    </option>
                                                                    <option value="3">
                                                                        3 Chai
                                                                    </option>
                                                                    <option value="4">
                                                                        4 Chai
                                                                    </option>
                                                                    <option value="5">
                                                                        5 Chai
                                                                    </option>
                                                                    <option value="6">
                                                                        Mua sỉ
                                                                    </option>
                                                                </select>
                                                            </div>
        
                                                            <div class="block_form">
                                                                <textarea name="ghi_chu" rows="3" cols="0" placeholder="Ghi chú" ><?php if(isset($_POST['ghi_chu'])) { echo $_POST['ghi_chu']; } ?></textarea>
                                                            </div>
                                                            <p>Giá: <b>350.000đ/ 1Chai</b></p>
                                                        </div>
                                                        <button class="ifr_button" type="submit">ĐẶT HÀNG NGAY</button>
                                                    </form>
        
                                                </div>
        
                                            </div>
                                        </div>
        
        
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        
                    </div>
                </div><!-- .entry-content -->

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info container">
            Copyright 2017 by banstud100.net. All rights reserved.</div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<link rel="stylesheet" id="addthis_output-css" href="./index_files/output.css" type="text/css" media="all">
<script type="text/javascript" src="./index_files/core.min.js"></script>
<script type="text/javascript" src="./index_files/navigation.js"></script>
<script type="text/javascript" src="./index_files/skip-link-focus-fix.js"></script>
<script type="text/javascript" src="./index_files/comment-reply.min.js"></script>
<script type="text/javascript" src="./index_files/wp-embed.min.js"></script>

</body></html>
