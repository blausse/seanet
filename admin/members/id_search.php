<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../script/jquery.js"></script>
    <script type ="text/javascript">
        $(function(){
            let search_id = opener.$('#u_id').val();
        $("#id_search_box").val(search_id);
        });
    </script>
    <style>
        fieldset {
            width: 400px;
            height: 100px;
            margin: 25px auto;
            vertical-align: center;
            border: 1px solid #c9c9c9;
            font-family: "roboto", "noto sans kr";

        }

        p {
            margin: 0;
            padding: 0
        }

        legend {
            text-align: center;
            display: inline-block;
            height: 22px;
            vertical-align: bottom;
            color: #0080ff;
        }

        label {
            color: black;
            line-height: 20px;
        }

        input[type=text] {
            border: 1px solid #0080ff;
            border-radius: 15px;
            padding-left: 10px;
            height: 20px;
            line-height: 20px;
            font-size: 16px;
            width: 250px;
        }

        button {
            border: none;
            background: #0080ff;
            color: white;
            height: 22px;
            line-height: 20px;
            width: 50px;
        }

        fieldset p {
            width: 370px;
            height: 74px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;

        }
    </style>
</head>

<body>
    <form action="id_search_result.php" name="id_search_form" method="post">
        <fieldset>
            <legend>아이디검색</legend>
            <p>
                <label for="user_id">입력</label>
                <input type="text" name="u_id" id="id_search_box">
                <button type="submit">검색</button>
            </p>
        </fieldset>
    </form>

</body>

</html>