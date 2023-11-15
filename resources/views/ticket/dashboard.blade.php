<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text text-lg font-bold">ระบบแจ้งซ่อมออนไลน์</h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ไอดี</th>
                        <th scope="col">ประเภทงานซ่อม</th>
                        <th scope="col">ประเภทปัญหา</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col"></th>
                        {{-- <th scope="col"></th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataAll as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->issue }}</td>
                            <td>{{ $item->repair_type }}</td>
                            <td>{{ $item->ticket }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a
                                    href=
                                "{{ route('ticket.edit', $item->id) }}"><x-info-button>อัพเดทข้อมูล</x-danger-button></a>
                            </td>
                            <td>
                                <a
                                    href=
                                "{{ route('customer_satis.show', $item->id) }}"><x-info-button>ประเมิน</x-danger-button></a>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
