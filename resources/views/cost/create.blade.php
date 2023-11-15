<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text text-lg font-bold">ระบบแจ้งซ่อมออนไลน์</h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{-- <form method="POST" enctype="multipart/form-data" action={{ route('maintenance_cost.update', $ticket_id) }}> --}}
            <form method="POST" enctype="multipart/form-data" action={{ route('receiptMAList.store', $ticket_id) }}>
                @csrf

                <div class="grid grid-rows-1 grid-flow-col gap-2">
                    <div class="mt-4">
                        <x-input-label for="repairCost" :value="__('ค่าซ่อม')" />
                    </div>
                    <div class="mt-4">
                        <x-text-input id="repairCost" class="block mt-1 w-full" type="text" name="repairCost" rea />
                        <x-input-error :messages="$errors->get('repairCost')" class="mt-2" />
                    </div>
                </div>
                <div class="grid grid-rows-1 grid-flow-col gap-2">
                    <div class="mt-4">
                        <x-input-label for="elementCost" :value="__('ค่าอะไหล่')" />
                    </div>
                    <div class="mt-4">
                        <x-text-input id="elementCost" class="block mt-1 w-full" type="text" name="elementCost" />
                        <x-input-error :messages="$errors->get('elementCost')" class="mt-2" />
                    </div>
                </div>
                <div class="grid grid-rows-1 grid-flow-col gap-2">
                    <div class="mt-4">
                        <x-input-label for="travelCost" :value="__('ค่าเดินทาง')" />
                    </div>
                    <div class="mt-4">
                        <x-text-input id="travelCost" class="block mt-1 w-full" type="text" name="travelCost" />
                        <x-input-error :messages="$errors->get('travelCost')" class="mt-2" />
                    </div>
                </div>
                <div class="grid grid-rows-1 grid-flow-col gap-2">
                    <div class="mt-4">
                        <x-input-label for="deviceCost" :value="__('ค่าอุปกรณ์')" />
                    </div>
                    <div class="mt-4">
                        <x-text-input id="deviceCost" class="block mt-1 w-full" type="text" name="deviceCost" />
                        <x-input-error :messages="$errors->get('deviceCost')" class="mt-2" />
                    </div>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        บันทึกค่าใช้จ่าย
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
