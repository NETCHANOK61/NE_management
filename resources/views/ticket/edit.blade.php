<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <h1 class="text text-lg font-bold">ระบบแจ้งซ่อมออนไลน์</h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{-- <h1>{{ $ticket->id }}</h1>
            <h1>{{ $ticket->repair_type }}</h1>
            <h1>{{ $ticket->issue_type }}</h1> --}}
            <form method="POST" enctype="multipart/form-data" action={{ route('ticket.update', $ticket->id) }}>
                {{-- action={{ route('ticket.store')}}  --}}
                @csrf
                @method('patch')

                <div class="mt-4">
                    <x-input-label for="reportDate" :value="__('วันที่แจ้งซ่อม')" />
                    <x-text-input id="reportDate" class="block mt-1 w-full" type="text" name="reportDate" readonly
                        value="{{ $ticket->created_at->locale('th')->addYears(543)->isoFormat('dddd, D MMMM YYYY') }}" />
                    <x-input-error :messages="$errors->get('reportDate')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="reportedBy" :value="__('ชื่อผู้แจ้ง')" />
                    <b>ไม่มี</b>
                    <x-input-error :messages="$errors->get('reportedBy')" class="mt-2" />
                </div>

                <br>
                <h4>ข้อมูลปัญหา</h4>
                <div class="mt-4">
                    <x-input-label for="repairType" :value="__('ประเภทงานซ่อม')" />
                    <x-text-input id="reportDate" class="block mt-1 w-full" type="text" name="reportDate" readonly
                        value="{{ $ticket->repair_type }}" />
                    <x-input-error :messages="$errors->get('repairType')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="issueType" :value="__('ประเภทปัญหา')" />
                    <x-text-input id="issueType" class="block mt-1 w-full" type="text" name="issueType" readonly
                        value="{{ $ticket->issue_type }}" />
                    <x-input-error :messages="$errors->get('issueType')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="equipment" :value="__('ชื่ออุปกรณ์')" />
                    <x-text-input id="equipment" class="block mt-1 w-full" type="text" name="equipment" readonly
                        value="{{ $ticket->equipment->name }}" />
                    <x-input-error :messages="$errors->get('equipment')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="urgency" :value="__('ความเร่งด่วน')" />
                    <x-text-input id="urgency" class="block mt-1 w-full" type="text" name="urgency" readonly
                        value="{{ $ticket->urgency }}" />
                    <x-input-error :messages="$errors->get('urgency')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="issueDetail" :value="__('ปัญหา / งานซ่อม')" />
                    <x-text-area id="issueDetail" class="block mt-1 w-full" type="text"
                        name="issueDetail">{{ $ticket->issue }}</x-text-area>
                    <x-input-error :messages="$errors->get('issueDetail')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="attachment" :value="__('Attachment (if any)')" />
                    {{-- <x-file-input name="attachment" id="attachment" /> --}}
                    <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="serviceDate" :value="__('วันที่ดำเนินการ')" />
                    <x-date-input id="serviceDate" class="block mt-1 w-full" type="text" name="serviceDate"
                        autofocus />
                    <x-input-error :messages="$errors->get('serviceDate')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="servicedBy" :value="__('ผู้ดำเนินการ')" />
                    <select class="form-select" aria-label="Default select example" id="servicedBy" name="servicedBy">
                        @foreach ($userAll as $item)
                            <option value={{ $item->name }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('servicedBy')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="compleatedDate" :value="__('วันที่สำเร็จ')" />
                    <x-date-input id="compleatedDate" class="block mt-1 w-full" type="text" name="compleatedDate" />
                    <x-input-error :messages="$errors->get('compleatedDate')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="solvedDetail" :value="__('สาเหตุ / วิธีแก้ไข')" />
                    <x-text-area id="solvedDetail" class="block mt-1 w-full" type="text" name="solvedDetail"
                        autofocus />
                    <x-input-error :messages="$errors->get('solvedDetail')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="status" :value="__('สถานะ')" />
                    <select class="form-select" aria-label="Default select example" id="status" name="status">
                        @foreach ($status as $item)
                            <option value="{{ $item->value }}" @if ($item->index == $ticket->status) selected @endif>
                                {{ $item->value }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        Update
                    </x-primary-button>
                </div>
            </form>
            <br>
            <hr>
            <h4>สรุปค่าใช้จ่าย</h4>
            <a
                href="{{ route('receiptMAList.show', $ticket->id) }}"><x-info-button>เพิ่มบันทึกค่าใช้จ่าย</x-danger-button></a>
            <table class="table-fixed">
                <thead>
                    <tr>
                        <th>ครั้งที่</th>
                        <th>ค่าใช้จ่าย</th>
                        <th>ค่าใช้จ่ายรวม</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($receipts as $receipt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @foreach ($receipt->receiptMALists as $receiptList)
                                    {{ $receiptList->title }} : {{ $receiptList->cost }} <br>
                                @endforeach
                            </td>
                            <td>{{ $receipt->total_cost }}</td>
                            <td> <a
                                    href="{{ route('receiptMAList.edit', $receipt->id) }}"><x-info-button>แก้ไข</x-danger-button></a>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr>
                        <td>ค่าซ่อม</td>
                        <td>{{ $repairCostAll }}</td>
                    </tr>
                    <tr>
                        <td>ค่าอะไหล่</td>
                        <td>{{ $elementCostAll }}</td>
                    </tr>
                    <tr>
                        <td>ค่าเดินทาง</td>
                        <td>{{ $travelCostAll }}</td>
                    </tr>
                    <tr>
                        <td>ค่าอุปกรณ์</td>
                        <td>{{ $deviceCostAll }}</td>
                    </tr>
                    <tr>
                        <td>รวมทั้งหมด</td>
                        <td>{{ $sumCost }}</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
