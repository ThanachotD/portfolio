<x-app-layout>


    <div class="py-12">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    @if(session("success"))
                        <b>{{session('success')}}</b>
                    @endif
                    <div class="card-header text-center" style="background-color:white">บทความทั้งหมด
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">บทความ</th>
                            <th scope="col">เนื้อหา</th>
                            <th scope="col">รูปภาพ</th>
                            <th scope="col">เมื่อ</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($createblog as $row)
                            <tr>
                                <th scope="row">{{$row -> id}}</th>
                                <td>{{$row -> createblog_name}}</td>
                                <td>{{$row -> createblog_content}}</td>
                                <td>{{$row -> createblog_image}}</td>
                                <td>
                                    @if($row->created_at == NULL)
                                        ไม่พบค่า
                                    @else
                                        {{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}
                                    @endif
                                </td>
                                <!--$row -> created_at ->diffForHumans()-->
                                <td><a href="{{'/createblog/edit/'.$row->id}}"><button class="btn btn-primary">แก้ไข</button></a></td>
                                <td><a href="{{'/createblog/delete/'.$row->id}}"><button class="btn btn-danger">ลบ</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{$createblog ->links()}}
                    <br>


                </div>

                <div class="col-md-4">
                    <div class="card" style="border: 1px">
                        <div class="card-header text-center" style="background-color:white;border: 0px">สร้างบทความ</div>
                        <div class="card-body">
                            <form action="{{route('addCreateblogs')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="createblog_name">ชื่อบทความ</label>
                                    <input type="text" class="form-control" name="createblog_name"><br>
                                    @error('createblog_name')
                                    <span class="text-danger py-2">{{$message}}</span>
                                    @enderror

                                    <label for="createblog_content">เนื้อหา</label>
                                    <textarea type="text" class="form-control" name="createblog_content"  id="exampleFormControlTextarea1" rows="10"></textarea><br>

                                    <label for="createblog_image">ภาพรปะกอบ</label>
                                    <input type="file" class="form-control" name="createblog_image">
                                </div><br>
                                @error('createblog_image')
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
