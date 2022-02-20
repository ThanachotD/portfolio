<x-app-layout>


    <div class="py-12">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    @if(session("success"))
                        <b>{{session('success')}}</b>
                    @endif
                    <div class="card-header">
                        บทความทั้งหมด
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
                        @foreach($blog as $row)
                            <tr>
                                <th scope="row">{{$row -> id}}</th>
                                <td>{{$row -> blog_title}}</td>
                                <td>
                                    <img src="{{asset($row->blog_image)}}" >
                                </td>

                                <td>
                                    @if($row->created_at == NULL)
                                        ไม่พบค่า
                                    @else
                                        {{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}
                                    @endif
                                </td>
                                <!--$row -> created_at ->diffForHumans()-->
                                <td><a href="{{'/blog/edit/'.$row->id}}"><button class="btn btn-primary">แก้ไข</button></a></td>
                                <td><a href="{{'/blog/delete/'.$row->id}}"><button class="btn btn-danger"
                                        onclick="return confirm('confirm ?')">ลบชั่วคราว</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{$blog ->links()}}
                    <br>

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">แบบฟอร์ม</div>
                        <div class="card-body">
                            <form action="{{route('addBlog')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="blog_title">ชื่อบริการ</label>
                                    <input type="text" class="form-control" name="blog_title">
                               <br>
                                @error('blog_title')
                                <span class="text-danger py-2">{{$message}}</span>
                                @enderror
                                    <label for="blog_image">ภาพรปะกอบ</label>
                                    <input type="file" class="form-control" name="blog_image">
                                </div><br>
                                @error('blog_image')
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
