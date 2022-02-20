<x-app-layout>

    <div class="py-12">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    @if(session("success"))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('success')}}</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card-header">
                        บทความทั้งหมด
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">รูปภาพ</th>
                            <th scope="col">สร้างโดย</th>
                            <th scope="col">เมื่อเวลา</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $row)
                            <tr>
                                <th scope="row">{{$row -> id}}</th>
                                <td>{{$row -> service_name}}</td>
                                <td>
                                    <img src="{{asset($row->service_image)}}">
                                </td>

                                <td>
                                    @if($row->created_at == NULL)
                                        ไม่พบค่า
                                    @else
                                        {{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}
                                    @endif
                                </td>
                                <!--$row -> created_at ->diffForHumans()-->
                                <td><a href="{{'/service/edit/'.$row->id}}"><button class="btn btn-primary">แก้ไข</button></a></td>
                                <td><a href="{{'/service/delete/'.$row->id}}"><button class="btn btn-danger"
                                        onclick="return confirm('confirm ?')">ลบชั่วคราว</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{$services ->links()}}
                    <br>

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">สร้างบทความ</div>
                        <div class="card-body">
                            <form action="{{route('addService')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="service_name">ชื่อบทความ</label>
                                    <input type="text" class="form-control" name="service_name">
                               <br>
                                @error('service_name')
                                <span class="text-danger py-2">{{$message}}</span>
                                @enderror
                                    <label for="service_image">ภาพรปะกอบ</label>
                                    <input type="file" class="form-control" name="service_image">
                                </div><br>
                                @error('service_image')
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
