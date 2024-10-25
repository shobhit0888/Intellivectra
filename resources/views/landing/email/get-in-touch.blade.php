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
            text-align: center;
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
                            {{-- <h3 style="text-align: left; margin:0 0 6px; font-size: 24px; font-weight: 600; color: #29323C;">Hi {{$order->user ? $order->user->name : 'User'}},</h3> --}}

                            {{-- @dump($data) --}}

                            <label for="">User : {{ $data['first_name'] }} {{ $data['last_name'] }}</label>
                            <hr>
                            <label for="">Email : {{ $data['email'] }} </label>
                            <hr>
                            <label for="">Mobile : {{ $data['mobile'] }} </label>
                            <hr>
                            @if (isset($data['message']))
                                <label for="">Message : {{ $data['message'] }} </label>
                                <hr>
                            @endif
                            @if (isset($data['total_experience']))
                                <label for="">Total Experience : {{ $data['total_experience'] }} </label>
                                <hr>
                            @endif
                            @if (isset($data['applied_for']))
                                <label for="">Applied For : {{ $data['applied_for'] }} </label>
                                <hr>
                            @endif

                        </div>
                    </td>
                </tr>

                <tr>
                    <td
                        style="padding: 25px 15px; border-top: solid 1px #0000001C; border-bottom: solid 1px #0000001C;">
                        <table align="left" class="ft_info_table">
                            <tr>
                                <td>
                                    <table align="left">
                                        <tr>
                                            <td>
                                                {{-- <img src="{{$message->embed(public_path('/images/ship_icon.png'))}}"  alt=""> --}}
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
                                            {{-- <td>
                                                <img src="{{$message->embed(public_path('/images/return_icon.png'))}}" alt="">
                                            </td> --}}
                                        </tr>
                                    </table align="left">

                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
                {{-- <tr>
                    <td style="padding: 40px 0; text-align: center;">
                        <img src="{{$message->embed(public_path('/assets/img/logo.png'))}}" alt="" style="width: 65px; padding-bottom: 15px;">
                        <p style="font-family: 'Nunito', sans-serif; padding:0 15% 25px; color:#809FB8; font-size: 16px; text-align: center;">This email was sent to you regarding your account.
                            If you wish to no longer receive emails from us you can unsubscribe.</p>
                        <ul style="margin: 0; padding-top: 20px;">
                            <li style="list-style: none; padding: 0 12px; display: inline-block;"><a href="#"><img src="{{$message->embed(public_path('/images/linkedin_icon.png'))}}" alt=""></a></li>
                            <li style="list-style: none; padding: 0 12px; display: inline-block;"><a href="#"><img src="{{$message->embed(public_path('/images/insta_icon.png'))}}" alt=""></a></li>
                            <li style="list-style: none; padding: 0 12px; display: inline-block;"><a href="#"><img src="{{$message->embed(public_path('/images/twitter_icon.png'))}}" alt=""></a></li>
                            <li style="list-style: none; padding: 0 12px; display: inline-block;"><a href="#"><img src="{{$message->embed(public_path('/images/yt_icon.png'))}}" alt=""></a></li>
                            <li style="list-style: none; padding: 0 12px; display: inline-block;"><a href="#"><img src="{{$message->embed(public_path('/images/fb_icon.png'))}}" alt=""></a></li>
                        </ul>
                    </td>
                </tr> --}}
            </table>
        </div>
    </div>
</body>

</html>
