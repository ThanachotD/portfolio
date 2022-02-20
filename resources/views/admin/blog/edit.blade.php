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
                        <div class="card-header">แบบฟอร์มแก้ไขข้อมูล</div>
                        <div class="card-body">
                            <form action="{{'/blog/update/'.$blog->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="blog_title">ชื่อตำแหน่งงาน</label>
                                    <input type="text" class="form-control" name="blog_title"
                                           value="{{$blog ->blog_title}}">
                                </div>
                                <br>
                                @error('blog_title')
                                <span class="text-danger py-2">{{$message}}</span>
                                @enderror
                                <label for="blog_image">ภาพรปะกอบ</label>
                                <input type="file" class="form-control" name="blog_image"
                                       value="{{$blog ->blog_image}}">
                                <br>
                                @error('blog_image')
                                <span class="text-danger py-2">{{$message}}</span>
                                @enderror
                                <input type="hidden" name="old_image" value="{{$blog ->blog_image}}">
                                <img src="{{asset($blog->blog_image)}}" alt="">
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
