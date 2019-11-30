<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <style>


        @import url(http://fonts.googleapis.com/css?family=Roboto:300); /*Calling our web font*/

        /* Some resets and issue fixes */
        #outlook a { padding:0; }
        body { width:100% !important; -webkit-text; size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; }
        .ReadMsgBody { width: 100%; }
        .ExternalClass {width:100%;}
        .backgroundTable {margin:0 auto; padding:0; width:100%;!important;}
        table td {border-collapse: collapse;}
        .ExternalClass * {line-height: 115%;}
        /* End reset */

        * {
            font-family: Arial !important;
        }

        a {
            text-decoration: none;
        }

        .row {
            display: flex;
            margin: 5px 25px;
        }

        hr.divider {
            border-top: 1px solid #FF0000;
            margin: 15px 0;
        }

        .row.one-columns {
            display: grid;
        }

        .item-title {
            font-size: 12px;
        }

        .item-subtitle {
            color: #5e5e5e;
            font-size: 12px;
        }

        /* These are our tablet/medium screen media queries */
        @media screen and (max-width: 630px){


            /* Display block allows us to stack elements */
            *[class="mobile-column"] {display: block;}

            /* Some more stacking elements */
            *[class="mob-column"] {float: none !important;width: 100% !important;}

            /* Hide stuff */
            *[class="hide"] {display:none !important;}

            /* This sets elements to 100% width and fixes the height issues too, a god send */
            *[class="100p"] {width:100% !important; height:auto !important;}

            /* For the 2x2 stack */
            *[class="condensed"] {padding-bottom:40px !important; display: block;}

            /* Centers content on mobile */
            *[class="center"] {text-align:center !important; width:100% !important; height:auto !important;}

            /* 100percent width section with 20px padding */
            *[class="100pad"] {width:100% !important; padding:20px;}

            /* 100percent width section with 20px padding left & right */
            *[class="100padleftright"] {width:100% !important; padding:0 20px 0 20px;}

            /* 100percent width section with 20px padding top & bottom */
            *[class="100padtopbottom"] {width:100% !important; padding:20px 0px 20px 0px;}


        }


    </style>
</head>

<body style="padding:0; margin:0">
<div class="wrapper">
    <div id="header-logo" style="background-color: #efaf57;height: 135px;display: table;text-align: center;width: 100%;">
        <div style="display: table-cell;vertical-align: middle;">
            <img src="https://app.blackhansa.de/mail-icons/email-logo.png" style="width: 250px;">
        </div>

    </div>

    <div id="header-content" style="background-color: #000;box-shadow: 0 0 20px #5e5e5e;">
        <div>
            <div style="padding: 25px 25px;display: inline-flex;">
                <div class="header-content-left" style="margin-top: auto;margin-bottom: auto;">
                    <img src="https://app.blackhansa.de/mail-icons/icons-15.png" width="50px">
                </div>

                <div class="header-content-right" style="margin-left: 50px;">
                    <p style="color: #ffffff;margin: 0;font-size: 24px;font-weight: 700;">Ride updated!</p>
                    <p style="color:#e0e0e0;font-size: 12px;margin-top: 10px;">The passenger made changes to ride <span style="color:#fff;font-size: 12px;">#{{ $booking['id'] }}</span> Because the booking has been changed, the original bookingn number is no longer valid. We will now only refer to this booking by the new booking number listed below.</p>
                    <p style="color:#FF0000;font-size: 12px;margin-top: 10px;margin-bottom: 0;">Please accept or reject this changed ride until 20:25 30 Nov 19 otherwise the ride will be added back into the system.</p>
                </div>
            </div>

        </div>

    </div>

    <div id="content" style="padding: 25px 0px;">
        <div class="row">
            <div class="item multi-columns" style="display:flex; flex-wrap:wrap;;width:65%;">
                <div class="icon-box">
                    <img src="https://app.blackhansa.de/mail-icons/icons-01.png" width="25px">
                </div>

                <div class="item-wrap" style="margin-left: 10px;">
                    <p class="item-title" style="margin: 0 0 5px 0;color: #c1c1c1;font-weight: 300;font-size: 12px;">
                        Date
                    </p>

                    <p class="item-subtitle" style="margin-top: 0;font-size: 12px;">
                        10 Nov 19
                    </p>
                </div>
            </div>

            <div class="item multi-columns" style="display: flex;width:35%;">
                <div class="icon-box">
                    <img src="https://app.blackhansa.de/mail-icons/icons-02.png" width="25px">
                </div>

                <div class="item-wrap" style="margin-left: 10px;">
                    <p class="item-title" style="margin: 0 0 5px 0;color: #c1c1c1;font-weight: 300;font-size: 12px;">
                        Time
                    </p>

                    <p class="item-subtitle" style="margin-top: 0;font-size: 12px;">
                        20:21
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="item multi-columns" style="display: flex;width:65%;">
                <div class="icon-box">
                    <img src="https://app.blackhansa.de/mail-icons/icons-03.png" width="25px">
                </div>

                <div class="item-wrap" style="margin-left: 10px;">
                    <p class="item-title" style="margin: 0 0 5px 0;color: #c1c1c1;font-weight: 300;font-size: 12px;">
                        Booking number
                    </p>

                    <p class="item-subtitle" style="margin-top: 0;font-size: 12px;">
                        #42342
                    </p>
                </div>
            </div>

            <div class="item multi-columns" style="display: flex;width:35%;">
                <div class="icon-box">
                    <img src="https://app.blackhansa.de/mail-icons/icons-04.png" width="25px">
                </div>

                <div class="item-wrap" style="margin-left: 10px;">
                    <p class="item-title" style="margin: 0 0 5px 0;color: #c1c1c1;font-weight: 300;font-size: 12px;">
                        Distance
                    </p>

                    <p class="item-subtitle" style="margin-top: 0;font-size: 12px;">
                        ca. 26km
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="item multi-columns" style="display: flex;width:65%;">
                <div class="icon-box">
                    <img src="https://app.blackhansa.de/mail-icons/icons-05.png" width="25px">
                </div>

                <div class="item-wrap" style="margin-left: 10px;">
                    <p class="item-title" style="margin: 0 0 5px 0;color: #c1c1c1;font-weight: 300;font-size: 12px;">
                        Category
                    </p>

                    <p class="item-subtitle" style="margin-top: 0;font-size: 12px;">
                        fadsfasdf
                    </p>
                </div>
            </div>

            <div class="item multi-columns" style="display: flex;width:35%;">
                <div class="icon-box">
                    <img src="https://app.blackhansa.de/mail-icons/icons-06.png" width="25px">
                </div>

                <div class="item-wrap" style="margin-left: 10px;">
                    <p class="item-title" style="margin: 0 0 5px 0;color: #c1c1c1;font-weight: 300;font-size: 12px;">
                        Net Price
                    </p>

                    <p class="item-subtitle" style="margin-top: 0;font-size: 12px;">
                        EUR 22.00
                    </p>
                </div>
            </div>
        </div>

        <hr class="divider">

        <div class="row one-columns" style="margin-top: 25px;">
            <div class="item " style="display: flex;">
                <div class="icon-box">
                    <img src="https://app.blackhansa.de/mail-icons/icons-07.png" width="25px">
                </div>

                <div class="item-wrap" style="margin-left: 10px;">
                    <p class="item-title" style="margin: 0 0 5px 0;color: #c1c1c1;font-weight: 300;font-size: 12px;">
                        Pick up address
                    </p>

                    <p class="item-subtitle" style="margin-top: 0;font-size: 12px;">
                        asdfsafsadf
                    </p>
                </div>
            </div>

            <div class="item one-columns" style="display: flex;margin-left: 35px;">

                <div class="item-wrap" style="margin-left: 0px;">
                    <p class="item-title" style="margin: 0 0 5px 0;color: #c1c1c1;font-weight: 300;font-size: 12px;">
                        Drop off address
                    </p>

                    <p class="item-subtitle" style="margin-top: 0;font-size: 12px;">
                        afsdfasfas
                    </p>
                </div>
            </div>
        </div>

        <hr class="divider">

        <div class="row" style="margin-top: 25px;">
            <div class="item multi-columns" style="display: flex;width:65%;">
                <div class="icon-box">
                    <img src="https://app.blackhansa.de/mail-icons/icons-08.png" width="25px">
                </div>

                <div class="item-wrap" style="margin-left: 10px;">
                    <p class="item-title" style="margin: 0 0 5px 0;color: #c1c1c1;font-weight: 300;font-size: 12px;">
                        Passager contact
                    </p>

                    <p class="item-subtitle" style="margin-top: 0;font-size: 12px;">
                        4563764543
                    </p>
                </div>
            </div>

            <div class="item multi-columns" style="display: flex;width:35%;">
                <div class="icon-box">
                    <img src="https://app.blackhansa.de/mail-icons/icons-09.png" width="25px">
                </div>

                <div class="item-wrap" style="margin-left:10px;">
                    <p class="item-title" style="margin: 0 0 5px 0;color: #c1c1c1;font-weight: 300;font-size: 12px;">
                        Pickup Sign
                    </p>

                    <p class="item-subtitle" style="margin-top: 0;font-size: 12px;">
                        gsdfgds
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="item" style="display: flex;">
                <div class="icon-box">
                    <img src="https://app.blackhansa.de/mail-icons/icons-10.png" width="25px">
                </div>

                <div class="item-wrap" style="margin-left: 10px;">
                    <p class="item-title" style="margin: 0 0 5px 0;color: #c1c1c1;font-weight: 300;font-size: 12px;">
                        Aditional Comment
                    </p>

                    <p class="item-subtitle" style="margin-top: 0;font-size: 12px;">
                        gsdfgdsg
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="footer-content" style="background-color: #000;box-shadow: 0 0 20px #5e5e5e;display: inline-flex;width:100%;">
        <div style="padding: 15px 25px;width: 100%;">
            <div>
                <p style="color:#e0e0e0;font-size: 12px;margin-top: 10px;margin-bottom: 5px;">Be sure to double check the ride information.</p>
                <p style="color:#e0e0e0;font-size: 12px;margin-top: 0px;">If you have any questions, please contact: booking@blackhansa.de</p>
            </div>

            <div style="margin-top: 10px;">
                <p style="color:#e0e0e0;font-size: 12px;margin-top: 10px;margin-bottom: 5px;">Best regards,</p>
                <p style="color:#e0e0e0;font-size: 12px;margin-top: 0px;">blackhansa team</p>
            </div>
        </div>
    </div>

    <div id="footer" style="background-color: #efaf57;padding: 15px 25px;">
        <div style="width: 100%;display:inline-flex;">
            <div class="left-box" style="width: 70%;padding-top: 8px;">
                <p style="color: #5e5e5e;font-size: 12px;margin-top: 0;margin-bottom: 0px;">blackhansa GmbH</p>
                <p style="color: #5e5e5e;font-size: 12px;margin-top: 5px;margin-bottom: 0;"> Halensee Str. 3 10711 Berlin</p>
            </div>

            <div class="right-box" style="width: 30%;">
                <a href="https://www.facebook.com/blackhansaHQ" class="social-link">
                    <img src="https://app.blackhansa.de/mail-icons/icons-11.png" width="25px" style="padding-top: 10px;">
                </a>

                <a class="social-link">
                    <img src="https://app.blackhansa.de/mail-icons/icons-12.png" width="25px" style="padding-top: 10px;">
                </a>

                <a class="social-link">
                    <img src="https://app.blackhansa.de/mail-icons/icons-13.png" width="25px" style="padding-top: 10px;">
                </a>

            </div>
        </div>
    </div>
</div>
</body>
</html>