<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR Code - {{ $opd->nama_singkat }}</title>
</head>
<style>
    @page {
        margin: 0px 0px 0px 0px !important;
        padding: 0px 0px 0px 0px !important;
    }

    .background {
        width: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
    }

    .qr {
        position: absolute;
        z-index: 9999;
        right: 130px;
        top: 230px;
    }

    .title {
        font-family: Arial, Helvetica, sans-serif;
        z-index: 999;
        color: #ffffff;
        position: absolute;
        top: 80px;
        left: 630px;
        font-weight: strong;
        font-size: 23px;
        background-color: #3a3a90;
        border-radius: 20px;
        width: 375px;
        padding: 20px
    }
</style>

<body>
    <div class="title">
        <strong>{{ $opd->nama_opd }}</strong>
    </div>
    <img src="data:image/png;base64, {{ $qr }}" alt="" class="qr">
    <img src="{{ public_path('/assets/img/qrcode-uncredit.jpg') }}" class="background">
</body>

</html>
