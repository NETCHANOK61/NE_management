<style>
    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #dddddd;
        /* Add this line to set a border around the table */
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    input[type="radio"] {
        margin-right: 5px;
    }
</style>
<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text text-lg font-bold">แบบประเมินความพึงพอใจ</h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" enctype="multipart/form-data" action={{ route('customer_satis.store') }}>
                <table>
                    <tr>
                        <th>หัวข้อ</th>
                        <th>มากที่สุด</th>
                        <th>มาก</th>
                        <th>ปานกลาง</th>
                        <th>น้อย</th>
                        <th>น้อยมาก</th>
                    </tr>
                    <tr>
                        <td>ความสะดวกในการติดต่อขอใช้บริการอยู่ในระดับใด</td>
                        <td>
                            <input type="radio" name="topic1" value="5" id="t1rating5">
                        </td>
                        <td>
                            <input type="radio" name="topic1" value="4" id="t1rating4">
                        </td>
                        <td>
                            <input type="radio" name="topic1" value="3" id="t1rating3">
                        </td>
                        <td>
                            <input type="radio" name="topic1" value="2" id="t1rating2">
                        </td>
                        <td>
                            <input type="radio" name="topic1" value="1" id="t1rating1">
                        </td>
                    </tr>
                </table>
                <br>
                <label for="comments">ข้อเสนอแนะเพิ่มเติม:</label>
                <textarea name="comments" id="comments" rows="4" cols="50"></textarea>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        บันทึก
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
