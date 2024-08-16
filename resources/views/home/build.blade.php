<!DOCTYPE html>
<html lang="en">
@include('home.css')
<body>


<div class="container mb-2 mt-2">

        
@include('home.nav')

<h2 class="text-center alert alert-success" style="border-radius: 25px; border:3px solid red;">المبنى المدرسي</h2>
<div class="main_b mb-2 mt-2">
    <div class="n">
     <p>معيار المبنى المدرسي يتناول مجموعة من المعايير والمواصفات التي يجب أن تتوفر في المباني المدرسية لضمان بيئة تعليمية آمنة وصحية وفعالة. هذه المعايير تشمل جوانب عدة مثل:

الأمان والسلامة:

توفير مخارج طوارئ كافية.
تصميم المبنى بحيث يسهل إخلاؤه بسرعة في حالات الطوارئ.
مراعاة معايير البناء المقاوم للزلازل والكوارث الطبيعية.
وجود أنظمة إطفاء حريق وأجهزة إنذار فعالة.
التهوية والإضاءة:

تصميم المبنى بحيث يسمح بمرور الهواء الطبيعي وتجديده بشكل مستمر.
توفير إضاءة طبيعية كافية من خلال النوافذ، مع وجود إضاءة صناعية مناسبة للمناطق التي تحتاج لذلك.
المساحة والتوزيع:

وجود فصول دراسية ذات مساحات كافية لاستيعاب الطلاب بشكل مريح.
توزيع مناسب للفصول والمعامل والمرافق العامة مثل المراحيض، بحيث يسهل الوصول إليها.
المرافق الصحية:

توفير مرافق صحية نظيفة وكافية للطلاب والموظفين.
توفير مرافق لغسل الأيدي ومناطق تناول الطعام بطريقة صحية.
المساحات الخضراء والملاعب:

وجود مساحات خضراء وملاعب رياضية مهيأة بشكل مناسب لأنشطة الطلاب الرياضية والترفيهية.
التكنولوجيا والبنية التحتية:

تجهيز الفصول الدراسية ببنية تحتية لتكنولوجيا المعلومات والاتصالات، مثل شبكات الإنترنت وأجهزة الكمبيوتر.
التصميم البيئي:

استخدام مواد بناء صديقة للبيئة ومستدامة.
مراعاة استهلاك الطاقة والمياه بشكل فعال ومستدام.
هذه المعايير تهدف إلى تحسين جودة التعليم من خلال توفير بيئة تعليمية تدعم التطوير الأكاديمي والصحي والنفسي للطلاب.</p>

    </div>
</div>
<div class="cad">
        <form action="{{ url('upload_build')}}" method="post" enctype="multipart/form-data">
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

        <a href="{{ url('delete_bu')}}" onclick="confirmation(event)" class="btn btn-warning"> حذف الكل</a>

            <thead class="thead-light">
                <tr>
                    <th>الرقم</th>
                    <th>اسم الملف</th>
                    <th>تحميل</th>
                    <th>الاجراء</th>
                </tr>
            </thead>
            <tbody>
                @foreach($build as $builds)
                <tr>
                    <td>{{$builds->id}}</td>
                    <td>{{$builds->original_name}}</td>
                    <td><a href="{{url('down_build', $builds->id)}})" class="btn btn-danger"><i class="fas fa-download"></i></a></td>
                    <td><a href="{{url('delete_build',$builds->id)}}" onclick="confirmation(event)" class="btn btn-success"><i class="fas fa-trash"></i></a></td>
                 
                </tr>
                @endforeach 
            </tbody>
        
        </table>
        <div class="v">
            {{$build->onEachSide(1)->links()}}

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