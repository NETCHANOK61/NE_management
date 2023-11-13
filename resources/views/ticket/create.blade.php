<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text text-lg font-bold">ระบบแจ้งซ่อมออนไลน์</h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" enctype="multipart/form-data" action={{ route('ticket.store')}}>
                {{-- action={{ route('ticket.store')}}  --}}
                @csrf

                <div class="mt-4">
                    <x-input-label for="reportDate" :value="__('วันที่แจ้งซ่อม')" />
                    <x-date-input id="reportDate" class="block mt-1 w-full" type="text" name="reportDate" required
                        autofocus />
                    <x-input-error :messages="$errors->get('reportDate')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="reportedBy" :value="__('ชื่อผู้แจ้ง')" />
                    <select class="form-select" aria-label="Default select example" id="reportedBy">
                        @foreach ($userAll as $item)
                            <option value={{ $item->id }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('reportedBy')" class="mt-2" />
                </div>

                <br>
                <h4>ข้อมูลปัญหา</h4>
                <div class="mt-4">
                    <x-input-label for="repairType" :value="__('ประเภทงานซ่อม')" />
                    <select class="form-select" aria-label="Default select example" id="repairType" name="repairType">
                        @foreach ($repair_type as $item)
                            <option value={{ $item->value }}>{{ $item->value }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('repairType')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="issueType" :value="__('ประเภทปัญหา')" />
                    <select class="form-select" aria-label="Default select example" id="issueType" name="issueType">
                        @foreach ($issue_type as $item)
                            <option value={{ $item->value }}>{{ $item->value }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('issueType')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="equipment" :value="__('ชื่ออุปกรณ์')" />
                    <select class="form-select" aria-label="Default select example" id="equipment" name="equipment">
                        @foreach ($equipments as $item)
                            <option value={{ $item->id }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('equipment')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="urgency" :value="__('ความเร่งด่วน')" />
                    <select class="form-select" aria-label="Default select example" id="urgency" name="urgency">
                        @foreach ($urgency_type as $item)
                            <option value={{ $item->value }}>{{ $item->value }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('urgency')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="issueDetail" :value="__('ปัญหา / งานซ่อม')" />
                    <x-text-area id="issueDetail" class="block mt-1 w-full" type="text" name="issueDetail" required
                        autofocus />
                    <x-input-error :messages="$errors->get('issueDetail')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="attachment" :value="__('Attachment (if any)')" />
                    {{-- <x-file-input name="attachment" id="attachment" /> --}}
                    <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
                </div>

                {{-- <div class="mt-4">
                    <x-input-label for="serviceDate" :value="__('วันที่ดำเนินการ')" />
                    <x-date-input id="serviceDate" class="block mt-1 w-full" type="text" name="serviceDate" required
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
                    <x-date-input id="compleatedDate" class="block mt-1 w-full" type="text" name="compleatedDate" required
                        autofocus />
                    <x-input-error :messages="$errors->get('compleatedDate')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="solvedDetail" :value="__('สาเหตุ / วิธีแก้ไข')" />
                    <x-text-area id="solvedDetail" class="block mt-1 w-full" type="text" name="solvedDetail" required
                        autofocus />
                    <x-input-error :messages="$errors->get('solvedDetail')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="serviceCost" :value="__('ค่าใช้จ่าย')" />
                    <x-text-input id="serviceCost" class="block mt-1 w-full" type="text" name="serviceCost" required
                        autofocus />
                    <x-input-error :messages="$errors->get('serviceCost')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="status" :value="__('สถานะ')" />
                    <select class="form-select" aria-label="Default select example" id="status" name="status">
                        @foreach ($status as $item)
                            <option value={{ $item->value }}>{{ $item->value }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                </div> --}}

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        Create
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
