<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ประเมินความพึงพอใจ</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Styles for the message box container */
        .message-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            text-align: center;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            /* Ensure it appears on top of other elements */
            display: none;
            /* Initially hidden */
        }

        /* Styles for the star rating */
        .stars {
            display: inline-block;
            font-size: 24px;
        }

        .star {
            color: #57e478;
            /* Yellow color for stars */
            cursor: pointer;
        }

        /* Styles for the close button */
        .close-button {
            background-color: #57e478;
            /* Green color for the button */
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="container py-2">
        <h3 class="text-center">ประเมินความพึงพอใจในการซ่อม</h3>

        @if (isset($dataAll))
            <div class="row g-3">
                <div class="col">
                    <p>เลขที่แจ้งซ่อม : {{ $dataAll->id }}</p>
                </div>
                <div class="col">
                    <p>ผู้ดำเนินการ : {{ $dataAll->technician }}</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <p>วันที่แจ้งซ่อม : {{ $dataAll->service_date }}</p>
                </div>
                <div class="col">
                    <p>วันที่สำเร็จ : {{ $dataAll->done_date }}</p>
                </div>
            </div>
        @else
            <p>No data available.</p>
        @endif

        @if (isset($satic))
            <hr>
            <h3 class="text-center">ผลการประเมินการซ่อม</h3>
            <p class="text-center">คุณให้คะแนนความพอใจงานซ่อมครั้งนี้ โดยเฉลี่ย {{ $satic->score }} คะแนน</p>

            @if ($satic->score <= 5)
                <p class="text-primary text-center">ความพอใจอยู่ในระดับ : มากที่สุด</p>
            @elseif ($satic->score <= 4)
                <p class="text-primary text-center">ความพอใจอยู่ในระดับ : มาก</p>
            @elseif ($satic->score <= 3)
                <p class="text-primary text-center">ความพอใจอยู่ในระดับ : ปานกลาง</p>
            @elseif ($satic->score <= 2)
                <p class="text-primary text-center">ความพอใจอยู่ในระดับ : น้อย</p>
            @elseif ($satic->score <= 1)
                <p class="text-primary text-center">ความพอใจอยู่ในระดับ : น้อยที่สุด</p>
            @endif
            {{-- ให้ดาวตามคะแนนเฉลี่ยที่ประเมิน --}}
            <div class="stars d-flex justify-content-center">
                @for ($i = 1; $i <= $satic->score; $i++)
                    <span class="star">&#9733;</span>
                @endfor
            </div>
            <hr>
            <table class="table
            table-bordered text-center my-3">
                <thead>
                    <tr class="table-active">
                        <th scope="col">หัวข้อการประเมิน</th>
                        <th scope="col">คะแนน/ความคิดเห็น</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($d as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->score == 0 ? $item->remark : $item->score }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            {{-- ยังไม่ได้ประเมินแสดงปุ่มประเมินเพื่อไปหน้าประเมื่อ --}}
            <p>(ยังไม่ได้ประเมิน)</p>
            {{-- <button class="btn btn-success me-md-2 "
                    href="{{ route('customer_satis.create') }}">เริ่มประเมิน</button> --}}
            {{-- <a
                    href=
                "{{ route('customer_satis.edit', 4) }}"><x-info-button>อัพเดทข้อมูล</x-danger-button></a> --}}
            <a href="{{ route('customer_satis.edit', $dataAll->id) }}"><button
                    class="btn btn-success me-md-2 ">ประเมิน</button></a>
        @endif

    </div>




    </form>



    </div>
</body>

</html>
