<!DOCTYPE html>
<html >
<head>
    <title> সাধারণ সদস্য |  {!! $data->name !!} </title>
     <style>
        body {
            font-family: 'bangla';
        }

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
            width: 192px;
            height: 336px;
            border-radius: 8px 8px 8px 8px;
            background: -webkit-linear-gradient(top,#e1f5c4, #f3ef85 );

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
            font-size: 14px;
            margin: 15px 0 3px 0;
        }
        #holder .box .tie {
            border-bottom: 1px solid #bbb;
            height: 40px;

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

            box-shadow:inset 0 2px 5px #888;

        }

        #holder:hover{
            cursor: none;
        }
        .tie h2{
            font-size: 14px;
        }
    </style>
</head>
<body>


<div id="holder">
    <div class="box">
        <div class="tie">
            <h2 > বঙ্গবন্ধু ডিপ্লোমা প্রকৌশলী পরিষদ</h2>
        </div>
        <br>

{{--{{ asset("uploads/".$data->image ) }} --}}
        <img id="img" src="https://via.placeholder.com/300.png/09f/fff" alt="" />
        <h1 class="rname"> {!! $data->name !!} </h1>
        <h1 class="postitle"> সাধারণ সদস্য </h1>

        <br>


        <h1 class="postitle"> জন্ম তারিখ :   {{ $data->dob }} </h1>
        <h1 class="postitle"> মোবাইল :   {{ $data->phone }} </h1>

    </div>
</div>


</body>
</html>