<x-app-layout>
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <h1 class="text text-lg font-bold">แบบประเมินความพึงพอใจ</h1>
        <div class="w-full  mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h3>เลขที่ใบแจ้งซ่อม: {{$dataTicket->id}}</h3>
            <h3>วันที่แจ้งซ่อม: {{$dataTicket->created_at}}</h3>
            <h3>ผู้ดำเนินการ: {{ $dataTicket->technician}}</h3>
            <h3>วันที่สำเร็จ: {{$dataTicket->done_date}}</h3>
        </div>
        {{-- <h1>{{ $data }}</h1> --}}
    </div>
</x-app-layout>
