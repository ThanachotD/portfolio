<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hello , {{Auth::user() ->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="card-header text-center">ผู้ใช้งานในระบบทั้งหมด</div>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">อีเมล</th>
                        <th scope="col">เริ่มต้นใช้งานเมื่อ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $row)
                        <tr>
                            <th scope="row">{{$row -> id}}</th>
                            <td>{{$row -> name}}</td>
                            <td>{{$row -> email}}</td>

                            <td>{{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}</td>
                            <!--$row -> created_at ->diffForHumans()-->

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="card-footer text-center">มีผู้ใช้งานในระบบ 1 คน</div>
            </div>
        </div>
    </div>
</x-app-layout>
