<!DOCTYPE html>
<html >
<head>
    <title>Hi</title>
     <style>
        body {
            font-family: 'bangla';
        }

     </style>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Mrs+Sheppards);

        * {
            margin:0; border:0;
            /*
            border:1px solid red;
            */
        }
        #holder {
            width: 250px;
            margin: 90px auto;
            display: block;
            text-align: center;
        }
        #holder .box {
            border:1px solid darkcyan;
            width: 250px;
            height: 440px;
            border-radius: 25px 25px 8px 8px;
            background: -webkit-linear-gradient(top,darkcyan,LightSteelBlue, #ddd);

        }

        #img {

            width: 120px;
            margin: 0 0 0 0;
            border: 1px solid #eee;
            border-radius: 2px;
            background-color:rgba(255,255,255,0.5);
            padding: 4px;
        }
        #holder .box h1{
            font-family:'bangla', 'trebuchet ms', 'sans serif', sans-serif;
            font-weight: normal;
            font-size: 22px;
            margin: 15px 0 3px 0;
        }
        #holder .box .tie {
            background-image: -webkit-linear-gradient(top,cadetblue,#666);
            height: 50px;
            border-radius: 25px 25px 0 0;
        }
        #holder .box h1.rname {
            font-family: 'bangla','century gothic', 'sans serif';
            font-size: 15px;
            margin:5px 0 0 0; padding:0;
        }
        #holder .box h1.sig {
            font-family: 'Mrs Sheppards', cursive;
        }
        #holder .box h1.postitle {
            font-size: 12px;
            font-weight: bold;
            margin:0; padding:0;
            text-transform: uppercase;
        }

        .tie:after {
          content: '';
          position: absolute;
          top: 110px;
          background: #fff;
          width: 50px;
          height: 10px;
          border:1px solid #dedede;
          border-radius: 25px;
          box-shadow:inset 0 2px 5px #888;
        }

        #holder:hover{
            cursor: none;
        }
    </style>
</head>
<body>
{{--<div class="card " style="width: 350px; height: 200px; left: 500px; top: 200px; background-color: #edebca">
   <div class="card-header text-center">
        বঙ্গবন্ধু ডিপ্লোমা প্রকৌশলী পরিষদ
    </div>
   <card class="card-body row">
        <div class="col-xs-4">
            <img src="" width="100" height="120" class="rounded">
        </div>

        <div class="col-xs-8 pl-4">
               <p style="font-size: 15px">মোঃ খবির হোসেন == </p>
            <p  style="font-size: 10px; margin-bottom: 5px">প্রতিষ্ঠাতা সভাপতি </p>

            <p  style="font-size: 13px">মোবাইল: ০১৫৪৮৮৯৪৪৬</p>
            <p  style="font-size: 13px">ইমেইল: mail@mail.com</p>

        </div>
    </card>
</div>--}}
<div id="holder">
    <div class="box">
        <div class="tie"></div>
        <h1> বঙ্গবন্ধু ডিপ্লোমা প্রকৌশলী পরিষদ</h1>
        <img id="img" src="https://pbs.twimg.com/profile_images/614461155860320256/LzpH25kK.jpg" alt="" />
        <h1 class="rname">মোঃ খবির হোসেন</h1>
        <h1 class="postitle">প্রতিষ্ঠাতা সভাপতি</h1>
        <h1 class="sig">Kaynam</h1>
        <h1 class="postitle">Signature</h1>
    </div>
</div>


</body>
</html>