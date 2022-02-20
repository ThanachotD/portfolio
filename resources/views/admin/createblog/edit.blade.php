<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hello , {{Auth::user() ->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">แก้ไขบทความ</div>
                        <div class="card-body">
                            <form action="{{'/createblog/update/'.$createblog->id}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="service_name">ชื่อบทความ</label>
                                    <input type="text" class="form-control" name="createblog_name"
                                           value="{{$createblog->createblog_name}}">
                                </div>
                                <br>
                                @error('createblog_name')
                                <span class="text-danger py-2">{{$message}}</span>
                                @enderror

                                <label for="createblog_content">เนื้อหา</label>
                                <input type="text" class="form-control" name="createblog_content"
                                       value="{{$createblog ->createblog_content}}"><br>

                                <label for="service_image">ภาพรปะกอบ</label>
                                <input type="file" class="form-control" name="createblog_image"
                                       value="{{$createblog ->createblog_image}}">
                                <br>
                                @error('createblog_image')
                                <span class="text-danger py-2">{{$message}}</span>
                                @enderror
                                <input type="hidden" name="old_image" value="{{$createblog ->createblog_image}}">
                                <img src="{{asset($createblog->createblog_image)}}" alt="">
                                <br>
                                <input type="submit" value="Save" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
