<!DOCTYPE html>
<html>

<head>
    <title>Data Rekapan Laporan - {{ $opd->nama_singkat }}</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #f2f2f2;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #d8d8d8
        }

        th {
            background-color: #466393;
            color: white;
        }
    </style>
</head>

<body>
    <img src="{{ public_path('/assets/img/logo.png') }}" style="width: 70px; float: left;" alt="">

    <h2 style="margin-bottom: 0px">Data Pengisian Kuisioner</h2>
    <span><strong>{{ $opd->nama_opd }}</strong></span>
    <div>Dicetak pada: {{ date('d m Y') }}</div>

    @foreach ($ikm as $key => $r)
        @php
            $i = json_decode($r->isi);
        @endphp
        <div
            style="border: 1px solid #999; margin-top: 30px; padding-left: 20px; padding-right: 20px; border-radius: 20px; padding-bottom: 30px">
            <h3 style="margin-top: 35px; margin-bottom: 0px;">{{ $key = $key + 1 }}.A (Data Responden)</h3>
            <table style="margin-top: 10px">
                <tr>
                    <td>{{ $i->q_nama }}</td>
                    <td>{{ $i->nama }}</td>
                </tr>
                <tr>
                    <td>{{ $i->q_umur }}</td>
                    <td>{{ $i->umur }}</td>
                </tr>
                <tr>
                    <td>{{ $i->q_jk }}</td>
                    <td>{{ $i->jk }}</td>
                </tr>
                <tr>
                    <td>{{ $i->q_pendidikan }}</td>
                    <td>{{ $i->pendidikan_terakhir }}</td>
                </tr>
                <tr>
                    <td>{{ $i->q_pekerjaan }}</td>
                    <td>{{ $i->pekerjaan_utama }}</td>
                </tr>
            </table>
            <h3 style="margin-top: 35px; margin-bottom: 0px">{{ $key }}.B (Isi Kuisioner)</h3>
            <table style="margin-top: 10px">
                <tr>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>
                </tr>
                <tr>
                    <td>1. {{ $i->q1 }}</td>
                    <td><strong>{{ $i->a1 }}</strong></td>
                </tr>
                <tr>
                    <td>2. {{ $i->q2 }}</td>
                    <td><strong>{{ $i->a2 }}</strong></td>
                </tr>
                <tr>
                    <td>3. {{ $i->q3 }}</td>
                    <td><strong>{{ $i->a3 }}</strong></td>
                </tr>
                <tr>
                    <td>4. {{ $i->q4 }}</td>
                    <td><strong>{{ $i->a4 }}</strong></td>
                </tr>
                <tr>
                    <td>5. {{ $i->q5 }}</td>
                    <td><strong>{{ $i->a5 }}</strong></td>
                </tr>
                <tr>
                    <td>6. {{ $i->q6 }}</td>
                    <td><strong>{{ $i->a6 }}</strong></td>
                </tr>
                <tr>
                    <td>7. {{ $i->q7 }}</td>
                    <td><strong>{{ $i->a7 }}</strong></td>
                </tr>
                <tr>
                    <td>8. {{ $i->q8 }}</td>
                    <td><strong>{{ $i->a8 }}</strong></td>
                </tr>
                <tr>
                    <td>9. {{ $i->q9 }}</td>
                    <td><strong>{{ $i->a9 }}</strong></td>
                </tr>
                <tr>
                    <td>10. {{ $i->q10 }}</td>
                    <td><strong>{{ $i->a10 }}</strong></td>
                </tr>
            </table>
        </div>
    @endforeach

</body>

</html>
