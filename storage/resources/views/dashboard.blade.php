<x-app-layout>
    <div class="py-12">
        <div class="container" >
           <div class="row">
               <div class="col">
                   <div class="col"></div>
                   <div class="card-header text-center">จำนวนผู้ใช้</div>
                   <div class="col"></div>
                   <table class="table table-borderless">
                       <thead>
                       <tr >
                           <th scope="col">ลำดับ</th>
                           <th scope="col">ชื่อ</th>
                           <th scope="col">อีเมล</th>
                           <th scope="col">ใช้งานมาแล้ว</th>
                       </tr>
                       </thead>
                       <tbody style="padding-bottom: 100px;">
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
                   <div class="card-footer text-center">
                      มีจำนวนผู้ใช้ {{count($users)}} คน
                   </div>
               </div>
           </div>
        </div>
    </div>
</x-app-layout>
