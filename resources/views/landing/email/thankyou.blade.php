<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background: #fff;
            font-family: 'Poppins', sans-serif;
        }

        p {
            font-size: 16px;
        }

        a {
            text-decoration: none;
        }

        .email_container {
            background: #fff;
            width: 100%;
            height: 100%;
        }

        .email_table {
            margin: 50px auto 0;
            width: 100%;
            max-width: 760px;
        }

        .logo_con {
            padding: 20px 0;
        }

        .email_body {
            padding: 50px 30px;
            background: #FAFAFA;
            text-align: left;
            border-left: solid 15px #fff;
            border-right: solid 15px #fff;
        }

        .last_sec {
            padding: 0 20px 30px;
        }

        img.logo_con {
            width: 85px;
            display: table;
            margin: 0 auto;
        }

        .ft_info_table {
            width: 25%;
        }

        .ft_info_table3 {
            width: 28.5%;
        }

        .ft_info_table4 {
            width: 21.5%;
        }

        @media (max-width: 767px) {

            .ft_info_table,
            .ft_info_table3,
            .ft_info_table4 {
                width: 50%;
                padding: 5px 0;
            }

            p {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .email_body {
                padding: 30px 20px;
            }

            .email_table {
                margin: 30px auto 0;
            }
        }
    </style>
</head>

<body>
    <div class="email_container">
        <div style="display: table;" class="email_table">
            <table align="center" width="100%" class="emailer_table" border="0" cellspacing="0"
                style="padding: 0;">
                <tr>
                    <td style="padding: 0 15px">
                        {{-- <img src="{{ $message->embed(public_path('/assets/img/logo.png')) }}" alt=""
                            class="logo_con" style="width: 85px;"> --}}
                            <img src="{{ asset('/assets/img/logo.png') }}" alt=""
                            class="logo_con" style="width: 85px;">
                    </td>
                </tr>
                <tr>
                    <td style="padding-bottom: 40px;">
                        <div class="email_body">
                            <p>Dear {{ $data['first_name'] }},</p>
                            <br>
                            <p>Thank you for contacting us through our website. We have received your message and our
                                team will respond to your inquiry as soon as possible.</p>
                            <br>
                            <p>If you have any urgent questions, feel free to reach us at +91-012-4496-0635.</p>
                            <br>
                            <p>Best regards,</p>
                            <p> Intelli Vectra Technologies</p>
                            <p> +91-012-4496-0635</p>
                    </td>
                </tr>
            </table align="left">
            </td>
            </tr>
            </table>
            <table align="left" class="ft_info_table">
                <tr>
                    <td>
                        <table align="left">
                            <tr>
                            </tr>
                        </table align="left">
                    </td>
                </tr>
            </table>
            </td>
            </tr>
            </table>
        </div>
    </div>
</body>
</html>
