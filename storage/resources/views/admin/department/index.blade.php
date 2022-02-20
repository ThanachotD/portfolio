<x-app-layout>
    
    <div class="py-12">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    @if(session("success"))
                    <b>{{session('success')}}</b>
                    @endif
                    <div class="card-header">
                        ตารางข้อมูลแผนก
                    </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">ชื่อ</th>
                                <th scope="col">user ID</th>
                                <th scope="col">สร้างโดย</th>
                                <th scope="col">เมื่อเวลา</th>
                                <th scope="col">แก้ไข</th>
                                <th scope="col">ลบ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($departments as $row)
                                <tr>
                                    <th scope="row">{{$row -> id}}</th>
                                    <td>{{$row -> department_name}}</td>
                                    <td>{{$row -> user_id}}</td>
                                    <td>{{$row -> user->name}}</td>

                                    <td>
                                        @if($row->created_at == NULL)
                                            ไม่พบค่า
                                        @else
                                            {{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}
                                        @endif
                                    </td>
                                    <!--$row -> created_at ->diffForHumans()-->
                                    <td><a href="{{'/department/edit/'.$row->id}}"><button class="btn btn-primary">แก้ไข</button></a></td>
                                    <td><a href="{{'/department/softdelete/'.$row->id}}"><button class="btn btn-danger">ลบชั่วคราว</button></a></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {{$departments ->links()}}
                        <br>
                        @if(count($trashdepartments)>0)
                        <div class="card-header">
                            ถังขยะ
                        </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">ชื่อ</th>
                                <th scope="col">user ID</th>
                                <th scope="col">สร้างโดย</th>
                                <th scope="col">ถูกลบเมื่อ</th>
                                <th scope="col">กู้คืนข้อมูล</th>
                                <th scope="col">ลบถาวร</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($trashdepartments as $row)
                                <tr>
                                    <th scope="row">{{$row -> id}}</th>
                                    <td>{{$row -> department_name}}</td>
                                    <td>{{$row -> user_id}}</td>
                                    <td>{{$row -> user->name}}</td>

                                    <td>
                                        @if($row->created_at == NULL)
                                            ไม่พบค่า
                                        @else
                                            {{\Carbon\Carbon::parse($row->deleted_at)->diffForHumans()}}
                                        @endif
                                    </td>
                                    <!--$row -> created_at ->diffForHumans()-->
                                    <td><a href="{{'/department/restore/'.$row->id}}"><button class="btn btn-warning">กู้คืน</button></a></td>
                                    <td><a href="{{'/department/delete/'.$row->id}}"><button class="btn btn-danger">ลบถาวร</button></a></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {{$trashdepartments ->links()}}

                        @endif

                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">แบบฟอร์ม</div>
                        <div class="card-body">
                            <form action="{{route('addDepartment')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="department_name">ชื่อตำแหน่งงาน</label>
                                    <input type="text" class="form-control" name="department_name">
                                </div><br>
                                @error('department_name')
                                <span class="text-danger py-2">{{$message}}</span>
                                @enderror
                                <input type="submit" value="Save" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
