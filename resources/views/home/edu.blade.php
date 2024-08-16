<!DOCTYPE html>
<html lang="en">
@include('home.css')
<body>


<div class="container mb-2 mt-2">

        
@include('home.nav')

<h2 class="text-center alert alert-success" style="border-radius: 25px; border:3px solid red;">معيار  تقويم التعلم</h2>
<div class="main_b mb-2 mt-2">
    <div class="n">

        <p>
        معيار تقويم التعلم هو مجموعة من المعايير والمبادئ التي تُستخدم لتقييم أداء المتعلمين وتوجيههم نحو تحسين طرق التعلم.
</p>

    </div>
</div>
<div class="cad">
        <form action="{{ url('upload_edu')}}" method="post" enctype="multipart/form-data">
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
      <a href="{{ url('delete_educat')}}" onclick="confirmation(event)" class="btn btn-warning"> حذف الكل</a>
            <thead class="thead-light">
                <tr>
                    <th>الرقم</th>
                    <th>اسم الملف</th>
                    <th>تحميل</th>
                    <th>الاجراء</th>
                </tr>
            </thead>
            <tbody>
                @foreach($edu as $educate)
                <tr>
                    <td>{{$educate->id}}</td>
                    <td>{{$educate->original_name}}</td>
                    <td><a href="{{ url('down_edu', $educate->id)}}" class="btn btn-danger"><i class="fas fa-download"></i></a></td>
                    <td><a href="{{ url('delete_edu', $educate->id)}}" onclick="confirmation(event)" class="btn btn-info"><i class="fas fa-trash"></i></a></td>

                </tr>
                @endforeach
            </tbody>
        
        </table>
        <div class="v">
            {{$edu->links()}}

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