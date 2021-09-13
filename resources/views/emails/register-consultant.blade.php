<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon.png" />
    <link rel="icon" type="image/png" href="favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Thank you for registration yourself with PersonalSite inc. </title>
    <meta name="viewport" content="width=device-width" />
    <!--     Fonts and icons     -->
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ddb223cf44.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
        .email-container{
            width:600px;
            float:left;
        }
        h5{
            font-weight:500!important;
        }
        .default-logo {
            width: 200px!important;
        }
        .email-header{
            float:left;
            width:98.4%;
            color:#fff;
            background-color:#F5F5F5;
            height:50px;
            text-align:center;
            padding:4px;
            padding-top:12px;
        }
        .email-body{
            float:left;
            width:100%;color:#fff;
            background-color:#000000;
            height:140px;
            text-align:center;
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),url(consult.png)!important;
            top: 0;
            left: 0;
            background-size: cover;
            background-position: center -132px;
            padding-top:40px;
        }
        .email-content{
            /* width:91.5%; */
            /* border:1px solid #ccc;
            float:left;
            background-color: #fff;
            padding: 10px 20px; */
        }
        .email-footer{
            float:left;
            width:100%;
            color:#fff;
            /* background-color:#1E66A0;
            text-align:center; */
            
        }
        .btn_account{
            border-radius: 30px!important;
            background-color: #1E66A0!important;
            color: #FFFFFF!important;
            box-shadow: 0 2px 2px 0 rgba(233, 30, 99, 0.14), 0 3px 1px -2px rgba(233, 30, 99, 0.2), 0 1px 5px 0 rgba(233, 30, 99, 0.12);
            border: none;
            position: relative;
            padding: 12px 30px!important;
            margin: 10px 1px!important;
            font-size: 12px!important;
            font-weight: 400!important;
            text-transform: uppercase!important;
            letter-spacing: 0;
            will-change: box-shadow, transform;
            transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-block;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            text-decoration:none;
        }
        .btn-just-icon{
            padding: 11px 3px;
            line-height: 1em;
            color:transparent!important;
        }
        .btn-just-icon i{
            color:#efefef;
            font-size:26px;
        }
        .btn-just-icon img{
            width:24px!important; 
        }
        .text-center{
            text-align:center;
        }
        /* card style */
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
            align-items: center;
        }
        
        .img-responsive {
            display: block;
            width: 100%;
            display: block;
            width: 69%;
            margin: 0 auto;
        }
        
        .card {
            padding: 2vw 3vw;
        }
        
        .col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
        
        .col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }
        
        .heading-title {
            font-family: 'Montserrat';
            font-weight: 700;
        }
        
        .regular {
            font-family: 'Montserrat';
            font-weight: 600;
        }
        
        .social-icon a i {
            color: #00419b;
            line-height: 45px;
            font-size: 20px;
        }
        
        .social-icon a {
            width: 45px;
            height: 45px;
            border: 2px solid #00419b;
            text-align: center;
            margin-right: 12px;
        }
        
        .border-left {
            border-left: 2px solid gray;
            padding: 0 0px 2vw 19px;
        }
        
        @media screen and (max-width:575px) {
            .col-4 {
                -ms-flex: 0 0 24.333333%;
                flex: 0 0 24.333333%;
                max-width: 24.333333%;
            }
            .wrap-content p {
                font-size: 18px;
            }
            .social-icon a {
                width: 36px;
                height: 36px;
            }
            .social-icon a i {
                line-height: 40px;
                font-size: 16px;
            }
            .wrap-content h3 {
                font-size: 20px;
            }
        }
        /* card style end */
    </style>
</head>
<body class="off-canvas-sidebar">
    <div class="email-container">
        <!-- <div class="email-header">
        </div> -->
        
        <div class="email-content">
            <p>Dear {{$first_name}}, </p>
            <p>Thank you for registration yourself with PersonalSite Inc. To ensure that every member on our
                platform is a qualified consultant, our team verifies every application.
            </p>
            <p>You will get another email regarding the approval of your account.</p>
            <p>Please feel free to contact us if you have any questions on support@personalsite.com email.</p>
            <p style="line-height:1.4">Best Wishes,
                
            </p>
        </div>
        <div class="email-footer">
            <div style=""><br><br>
                <table style="width:600px;direction:ltr;border-radius:0" width="600">
                    <tbody>
                        <tr>
                            <td>
                                <table cellpadding="0" cellspacing="0" style="font-family:Arial;line-height:1.15;color:#000">
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align:top;padding-right:14px">
                                                <table cellpadding="0" cellspacing="0" style="width:80px">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img src="https://ci4.googleusercontent.com/proxy/KA_E9UDEwIKIVhRLz-ppXX8lawIhPOLUR5rEMP3hM3TYtZXktGq4tBNnhmoQEmRwXw5Sc2ygUwJn4ppf9RgbU6tUYH4RfLdIzFkfUyowe02i3n7BwcnJAFqdLgIGDLS9-hUDB90ALasp_TqwPvBjYLg5ct8=s0-d-e1-ft#https://d36urhup7zbd7q.cloudfront.net/6395552605536256/5610096787849216/logo.gif?ck=1615247589.87" height="80" width="80" style="width:80px;vertical-align:initial;border-radius:0;display:block;height:80px" class="CToWUd"> </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td height="1" width="0" style="width:0px;border-right-width:1px;border-right-style:solid;border-right-color:#bdbdbd;height:1px;font-size:1pt">&nbsp;</td> 
                                                <td style="padding-left:14px;vertical-align:top" valign="top">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="line-height:1.2;padding-bottom:12px">
                                                                    <span style="font-size:13.200000000000001px;letter-spacing:0px;font-family:Arial;text-transform:initial;font-weight:bold;color:#646464"> PersonalSite Inc. </span> 
                                                                </td> 
                                                            </tr>
                                                            <tr> 
                                                                <td style="line-height:0"> 
                                                                    <table cellpadding="0" cellspacing="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="line-height:0%;padding-bottom:6px"> 
                                                                                    <table cellpadding="0" cellspacing="0" style="line-height:14px;font-size:12px;font-family:Arial">
                                                                                        <tbody><tr> 
                                                                                            <td style="font-family:Arial;font-weight:bold;font-size:12px;color:#004b9b"> <span style="line-height:1.2">Phone</span> </td> 
                                                                                            <td style="width:5px;font-size:1pt;line-height:0" width="5">&nbsp;</td> 
                                                                                            <td style="font-family:Arial;font-size:12px"> <a href="tel:+1%20(347)%20759-6261" style="text-decoration:none;font-size:12px;font-family:Arial" target="_blank"> 
                                                                                                <span style="line-height:1.2;color:#212121;font-family:Arial;white-space:nowrap;font-size:12px"> +1 (347) 759-6261 </span> 
                                                                                            </a> 
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr> 
                                                                    <tr> 
                                                                        <td style="line-height:0%;padding-bottom:6px">
                                                                            <table cellpadding="0" cellspacing="0" style="line-height:14px;font-size:12px;font-family:Arial">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td style="font-family:Arial;font-weight:bold;font-size:12px;color:#004b9b"> <span style="line-height:1.2">Website</span> </td> 
                                                                                        <td style="width:5px;font-size:1pt;line-height:0" width="5">&nbsp;</td> 
                                                                                        <td style="font-family:Arial;font-size:12px"> <a href="http://www.personalsite.com" style="text-decoration:none;font-size:12px;font-family:Arial" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.personalsite.com&amp;source=gmail&amp;ust=1616958011961000&amp;usg=AFQjCNGrFe68RE6gn6S1UcLDU5Gj04FJCQ">
                                                                                            <span style="line-height:1.2;color:#212121;font-family:Arial;white-space:nowrap;font-size:12px"> www.personalsite.com </span> </a>
                                                                                        </td> 
                                                                                    </tr> 
                                                                                </tbody>
                                                                            </table> 
                                                                        </td> 
                                                                    </tr>
                                                                </tbody>
                                                            </table> 
                                                        </td>
                                                    </tr>
                                                    <tr> 
                                                        <td style="padding-top:12px"> 
                                                            <table cellpadding="0" cellspacing="0" style="width:100%"> <tbody>
                                                                <tr> <td>
                                                                    <table border="0" cellpadding="0" cellspacing="0">
                                                                        <tbody><tr>
                                                                            <td align="left" style="padding-right:6px;text-align:center;padding-top:0"> 
                                                                                <a href="http://www.linkedin.com/company/personalsiteinc" style="font-size:11px;color:#444;text-decoration:none" target="_blank" > 
                                                                                    <img width="24" src="https://ci4.googleusercontent.com/proxy/SfP9CKha2fEa3DEdAI5SA_6cIhSHztHvDM55zeYd7TMV-yjXRM81iPeCyUqiOD5rL2-KZgb8Q86s4xiAaxvO1MF4S0WoI6BnPhx5ABVGsjjVx_ZsgQfqtg=s0-d-e1-ft#https://cdn.gifo.wisestamp.com/social/linkedin/004B9B/48/0/border.png" style="float:left;border:none" border="0" class="CToWUd"> </a> 
                                                                                </td><td align="left" style="padding-right:6px;text-align:center;padding-top:0"> <a href="http://www.facebook.com/personalsiteinc" style="font-size:11px;color:#444;text-decoration:none" target="_blank" >
                                                                                    <img width="24" src="https://ci4.googleusercontent.com/proxy/a-Zf12QBML5gJYjlYtYTXbL2IZdS1TuX1hgk2APDjmw0RgVWcOBhbRtukzQCpgt2W2l8wfZzK5u7zjARojBH_WRdbSzrGxsrhHHFR8_oTy-k8Y9fdnTusg=s0-d-e1-ft#https://cdn.gifo.wisestamp.com/social/facebook/004B9B/48/0/border.png" style="float:left;border:none" border="0" class="CToWUd"> </a> 
                                                                                </td><td align="left" style="padding-right:6px;text-align:center;padding-top:0"> <a href="http://www.instagram.com/personalsiteinc/" style="font-size:11px;color:#444;text-decoration:none" target="_blank" > 
                                                                                    <img width="24" src="https://ci4.googleusercontent.com/proxy/5P86chX7yolB00hVML88UQuYgewbpSK8PELxdAb_KWCFO_BTMaYOFW1hz9sBqYYyLduKs7kXOwZAJZOs2sfNTlQ3g3lO9Z7AjavquhsZgf2A4JlQISKZsJI=s0-d-e1-ft#https://cdn.gifo.wisestamp.com/social/instagram/004B9B/48/0/border.png" style="float:left;border:none" border="0" class="CToWUd"> </a> </td>
                                                                                    <td align="left" style="padding-right:6px;text-align:center;padding-top:0"> <a href="http://twitter.com/PersonlSite" style="font-size:11px;color:#444;text-decoration:none" target="_blank" >
                                                                                        <img width="24" src="https://ci4.googleusercontent.com/proxy/w5-9Ks2-35_VyKPyNMVXtlkdwDRCPZ7uAJx4zpstyyCdVJ01iZolU8ZsdPv62RXSxYW9qdZ-gqB0DEi4I3H7TnyLIo-NcOc7bsN8D5LfAE3CiO2tHfmL=s0-d-e1-ft#https://cdn.gifo.wisestamp.com/social/twitter/004B9B/48/0/border.png" style="float:left;border:none" border="0" class="CToWUd"> </a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr> 
                                                            </tbody>
                                                        </table> 
                                                    </td> 
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </td> 
                                </tr>
                                <tr> 
                                    <td style="height:18px" height="18"><br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
</div>
</div>
</body>
</html>