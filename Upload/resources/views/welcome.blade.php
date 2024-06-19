<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>

  <p class="zoomable">click to zoom </p>

  <div class="p-10 m-10">
    <button id="testJquery" class="btn btn-warning bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
           test jquery
        </button>
        <button id="testAjax" class="btn btn-success bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
           test ajax
        </button>
        <button id="testAxios" class="btn btn-danger bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
           test axios
        </button>
        <p id="testResult">Before click</p>
    </div>

    <form method="POST" action={{route("saveAvatar")}}  enctype="multipart/form-data" >
        @csrf
        <label for="pic">{{__('Choose your picture')}}</label>
        <input type="file" id = "avatarFile"  name = "avatarFile" />
        <button class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            {{__('Save picture') }}
        </button>
        <img style = "width:200px; border-radius:50%" src="{{"storage/avatars/".$pic}}" alt="">
    </form>

    <form action="SaveCookie" method="post">
        @csrf
        <label for="textCookie"> enter your name</label>
        <input type="text" name="textCookie" id="textCookie">
        <button>click to save</button>
    </form>
    <p>hy {{Cookie::get('CookieName')}}</p>

    <form action={{route("saveSession")}} method="post">
        @csrf
        <label for="textSession"> enter your name</label>
        <input type="text" name="textSession" id="textSession">
        <button>click to save</button>
    </form>
    <p>hy 
        @if (Session::has('sessionName'))
            {{Session('sessionName')}}
        @endif
    </p>




  <script type="module">
    $(document).ready(function(){
        $(".zoomable").click(function(){
            $(this).animate({
                fontSize:"40px"
            } , 1000)
        })
    })

    $("#testJquery").click(function(){
        $("#testResult").html("test jqueury")
    })

    $("#testAjax").click(function (){
        $.ajax({
            url : "/test",
            success: function(data){
                $("#testResult").html(data)
            }
        }
        )
    })

    $("#testAxios").click(function(){
        axios.get('/testAxios').then(
            (res)=>{
                $("#testResult").html(res.data)
            }
        ).catch((err)=>{
            console.log(err);
        })
    })

  </script>
</body>
</html>