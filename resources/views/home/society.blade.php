<!DOCTYPE html>
<html lang="en">
@include('home.css')
<body>


<div class="container mb-2 mt-2">

        
@include('home.nav')

<h2 class="text-center alert alert-success" style="border-radius: 25px; border:3px solid red;">معيار  المجتمع المدرسي</h2>
<div class="main_b mb-2 mt-2">
    <div class="n">
        <p>
        يعتني هذا المعيار من معايير الاعتماد المدرسي بتوفير بيئة مدرسية مناسبة تحتوي على الإمكانيات المادية المطلوبة من مرافق وتجهيزات لكي تتمكن المدرسة من الوفاء بأدوارها ومسؤولياتها، بالإضافة إلى المناخ التنظيمي الجيد الذي يوفر أجواء آمنة، يستطيع الطلاب في ظلها تحصيل علومهم جيدا وتحقيق مخرجات التعلم المتوقعة والأهداف التربوية والريادية.
        </p>

    </div>
</div>
<div class="cad">
        <form action="{{ url('upload_society')}}" method="post" enctype="multipart/form-data">
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

        <a href="{{ url('delete_society')}}" onclick="confirmation(event)" class="btn btn-warning"> حذف الكل</a>

            <thead class="thead-light">
                <tr>
                    <th>الرقم</th>
                    <th>اسم الملف</th>
                    <th>تحميل</th>
                    <th>الاجراء</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach ($data as  $society)
              <tr>
                <td>{{$society->id}}</td>
                <td>{{$society->original_name}}</td>
                <td><a href="{{ url('down_society', $society->id)}}" class="btn btn-warning"><i class="fas fa-download"></i></a></td>
                <td><a href="{{ url('del', $society->id)}}" onclick="confirmation(event)" class="btn btn-info"><i class="fas fa-trash"></i></a></td>
              </tr>
              @endforeach 


            </tbody>
        
        </table>
        <div class="v">
            {{$data->links()}}

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