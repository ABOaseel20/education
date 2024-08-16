<!DOCTYPE html>
<html lang="en">
@include('home.css')
<body>


<div class="container mb-2 mt-2">

        
@include('home.nav')

<h2 class="text-center alert alert-success" style="border-radius: 25px; border:3px solid red;">معيار التطوير</h2>
<div class="main_b mb-2 mt-2">
    <div class="n">
        <p>
        معايير التطوير المدرسي تهدف المعايير إلى تعزيز كفاءة الأداء المدرسي من خلال تقييم وتحسين الجودة التعليمية. يتضمن ذلك مجموعة من المؤشرات مثل دعم التطوير المهني للمعلمين وتشجيع المشاركة الفعالة 
       </p>
    </div>
</div>
<div class="cad">
        <form action="{{ url('upload_improve')}}" method="post" enctype="multipart/form-data">
            @csrf 
            <h3 class="text-center alert alert-danger">تحميل الملفات</h3>
            <div class="form-group mb-2 mt-2">
                <input type="file" name="document" class="form-control" id="">
            </div>
            <div class="form-group mb-2 mt-2">
                <input type="submit" value="حفظ الملف" class="btn-sm btn-info">
            </div>
        </form>
        <table class="table table-light">
        <h2 class="pt-1 pb-1 mt-3 text-center text-light bg-danger">حفظ الملفات وعرضها</h2>

        <a href="{{ url('delete_improve')}}" onclick="confirmation(event)" class="btn btn-warning"> حذف الكل</a>

            <thead class="thead-light">
                <tr>
                    <th>الرقم</th>
                    <th>اسم الملف</th>
                    <th>تحميل</th>
                    <th>الاجراء</th>
                </tr>
            </thead>
            <tbody>
                @foreach($improve as $improves)
                <tr>
                    <td>{{$improves->id}}</td>
                    <td>{{$improves->original_name}}</td>
                    <td><a href="{{ url('down_improve', $improves->id)}}" class="btn btn-info"><i class="fas fa-download"></i></a></td>
                    <td><a href="{{ url('del_improve' ,$improves->id)}}" onclick="confirmation(event)" class="btn btn-secondary"><i class="fas fa-trash"></i></a></td>
                </tr>

                @endforeach

            </tbody>
        
        </table>
        <div class="v">

        {{$improve->links()}}

        </div>
    </div>
</div>
<script type="text/javascript">
    function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect=ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
            title:"هل أنت متأكد من  حذف هذا العنصر؟",
            text:"سيكون الحذف نهائي",
            icon:"warning",
            buttons:["لاأريد", "نعم"],
            dangerMode:true,


        })
      .then((willCancel)=>{
        if(willCancel){
        window.location.href=urlToRedirect;
      }
    });
    }
   </script>

@include('home.footer')

</body>
</html>