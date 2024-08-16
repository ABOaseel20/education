<!DOCTYPE html>
<html lang="en">
@include('home.css')
<body>


<div class="container mb-2 mt-2">

        
@include('home.nav')
<h2 class="text-center alert alert-success" style="border-radius: 25px; border:3px solid red;">الأمن والسلامة</h2>
<div class="main_b mb-2 mt-2">
    <div class="n">
    <p>معيار الأمن والسلامة في المباني المدرسية يشمل مجموعة من التدابير والإجراءات التي تضمن حماية الطلاب والمعلمين والموظفين داخل المدرسة. من بين أهم هذه المعايير:

مخارج الطوارئ:

يجب أن يكون هناك عدد كافٍ من مخارج الطوارئ في كل طابق من المبنى، مع وضوح إشاراتها.
ينبغي أن تكون المخارج خالية من العوائق وسهلة الوصول إليها من جميع أجزاء المبنى.
أنظمة الإطفاء والإنذار:

تركيب أنظمة إطفاء حريق تلقائية مثل رشاشات المياه وأجهزة إطفاء الحريق المحمولة في أماكن متعددة.
وجود أجهزة إنذار الحريق التي يمكنها تنبيه الجميع بسرعة في حالة حدوث حريق.
صيانة دورية لأنظمة الإطفاء والإنذار للتأكد من جاهزيتها للعمل في أي وقت.
التصميم المقاوم للكوارث:

تصميم المبنى بحيث يكون مقاوماً للزلازل والأعاصير والكوارث الطبيعية الأخرى.
استخدام مواد بناء قوية ومناسبة للظروف البيئية المحلية.
التدريب على الإخلاء:

إجراء تدريبات دورية على الإخلاء للطوارئ لجميع الطلاب والموظفين لضمان معرفتهم بالإجراءات الواجب اتباعها.
وضع خطط واضحة ومحددة للإخلاء في حالة الطوارئ، مع تحديد مناطق تجمع آمنة خارج المبنى.
مراقبة الدخول والخروج:

تركيب كاميرات مراقبة في الأماكن الاستراتيجية داخل وحول المبنى.
وجود حراسة أمنية على مداخل المدرسة للتحكم في الدخول والخروج ومنع دخول الأشخاص غير المصرح لهم.
الإسعافات الأولية:

تجهيز غرفة للإسعافات الأولية تحتوي على الأدوات والمعدات الطبية الأساسية.
تدريب الموظفين على تقديم الإسعافات الأولية في الحالات الطارئة حتى وصول المساعدة الطبية المتخصصة.
البنية التحتية الكهربائية:

التأكد من سلامة البنية التحتية الكهربائية لمنع حدوث أي مخاطر كهربائية.
تركيب قواطع كهربائية تفصل التيار في حالة الطوارئ.
التوعية والتثقيف:

نشر الوعي بين الطلاب والموظفين حول أهمية اتباع إجراءات السلامة وكيفية التصرف في حالات الطوارئ.
تقديم دورات تدريبية حول السلامة والأمان بشكل دوري.
هذه المعايير تساعد في توفير بيئة مدرسية آمنة تحمي الجميع من المخاطر المحتملة وتساهم في توفير بيئة تعليمية مستقرة.</p>

    </div>
</div>
<div class="cad">
        <form action="{{ url('upload_security')}}" method="post" enctype="multipart/form-data">
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

        <a href="{{ url('delete_security')}}" onclick="confirmation(event)" class="btn btn-warning"> حذف الكل</a>

            <thead class="thead-light">
                <tr>
                    <th>الرقم</th>
                    <th>اسم الملف</th>
                    <th>تحميل</th>
                    <th>الاجراء</th>
                </tr>
            </thead>
            <tbody>
                @foreach($security as $securits)
                <tr>
                    <td>{{$securits->id}}</td>
                    <td>{{$securits->original_name}}</td>
                    <td><a href="{{ url('down_security', $securits->id)}}" class="btn btn-info"><i class="fas fa-download"></i></a></td>
                    <td><a href="{{ url('delete_securited', $securits->id)}}" onclick="confirmation(event)" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                 
                </tr>
                @endforeach
            </tbody>
        
        </table>
        <div class="v">
            {{$security->onEachSide(1)->links()}}

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