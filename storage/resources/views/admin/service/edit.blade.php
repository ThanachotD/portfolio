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
                            <form action="{{'/service/update/'.$services->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="service_name">ชื่อตำแหน่งงาน</label>
                                    <input type="text" class="form-control" name="service_name"
                                           value="{{$services ->service_name}}">
                                </div>
                                <br>
                                @error('service_name')
                                <span class="text-danger py-2">{{$message}}</span>
                                @enderror
                                <label for="service_image">ภาพรปะกอบ</label>
                                <input type="file" class="form-control" name="service_image"
                                       value="{{$services ->service_image}}">
                                <br>
                                @error('service_image')
                                <span class="text-danger py-2">{{$message}}</span>
                                @enderror
                                <input type="hidden" name="old_image" value="{{$services ->service_image}}">
                                <img src="{{asset($services->service_image)}}" alt="">
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
