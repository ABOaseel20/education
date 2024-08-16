<!DOCTYPE html>
<html lang="en">
@include('home.css')
<body>


<div class="container mb-2 mt-2">

        
@include('home.nav')

<h2 class="text-center alert alert-success" style="border-radius: 25px; border:3px solid red;">معيار قيادة العملية التعليمية</h2>
<div class="main_b mb-2 mt-2">
    <div class="n">
        <p>
معيار قيادة العملية التعليمية
المؤشر(1-2-1-3) توفر المدرسة مناخاً آمناً للتعلم والنمو نفسياً واجتماعياً

وذلك من خلال النقاط التالية

تعزيز ثقافة الاحترام بين الطلاب والمعلمين والموظفين
توفير برامج توعوية حول قضايا السلوك الإيجابي، التحرش، التنمر، وكيفية التعامل معها
تطوير الاتصال الفعّال بين المعلمين والطلاب وأولياء الأمور. وتوفير آليات للتواصل الفوري عند حدوث مشاكل مع ضرورة إتخاذ إجراءات سريعة وفعالة.
توفير دعم نفسي واجتماعي سواء عبر الموجه الطلابي أو برامج تحفيزية لتحسين الصحة النفسية.
تعزيز التفاعل الإيجابي وحث الطلاب على التفاعل الإيجابي وتشجيعهم على التعاون.
الشواهد المتوقعة

توافر برامج وأنشطة توعوية وقاية
البرامج والأنشطة متنوعة
استمرار البرامج
تشجع المتعلمين على المناقشة والحوار وتقبل الرأي الآخر
تعزز التعاون والعلاقات الإيجابية والاحترام المتبادل
تستخدم أساليب استابقية للكشف عن حالات التنمر
توافر برامج لمعالجة حالات التنمر إن وجدت
نادراً ما تظهر حالات التنمر
تتابع نتائج وأعمال مجالس الحوار الطلابية
الوثائق

سجل التوجيه والإرشاد
 سجل الحالات الطارئة
سجل المخالفات السلوكية
سجل البرامج الوقائية والعلاجية
سجل مجالس الحوار الطلابي
التقييم

متحقق بدرجة منخفضه إذا توفر 2 فأقل من الشواهد
متحقق بدرجة متوسطة إذا توفرت 3-4 شواهد
متحقق بدرجة مرتفعة إذا توفرت 5 شواهد
متحقق بدرجة مرتفعة جداً إذا توافرت 6 شواهد فأكثر
للإطلاع على المعيار السابق

الموشر (1-2-1-2) تلتزم المدرسة بقيم مهنة التعليم وأخلاقيتها</p>

    </div>
</div>
<div class="cad">
        <form action="{{ url('upload_file')}}" method="post" enctype="multipart/form-data">
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

        <a href="{{ url('delete_view')}}" onclick="confirmation(event)" class="btn btn-warning"> حذف الكل</a>

            <thead class="thead-light">
                <tr>
                    <th>الرقم</th>
                    <th>اسم الملف</th>
                    <th>تحميل</th>
                    <th>الاجراء</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas )
                
                <tr>
                    <td>{{$datas->id}}</td>
                    <td>{{$datas->origin_name}}</td>
                    <td><a href="{{ url('down', $datas->id)}}" class="btn btn-danger"><i class="fas fa-download"></i></a></td>
                    <td> <a href="{{ url('delete_data', $datas->id)}}" class="btn btn-success" onclick="confirmation(event)"><i class="fas fa-trash"></i></a></td>

                </tr>
                @endforeach
            </tbody>
        
        </table>
        <div class="v">
            {{$data->onEachSide(1)->links()}}

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