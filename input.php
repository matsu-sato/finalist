<!DOCTYPE html>

<html>
<style type="text/css">
<!--
legend{
background-color:yellow;
}
fieldset {
width: 200px;
margin: 20px;
padding-top: 10px;
padding-bottom: 20px;
padding-left: 5px;
text-align : center
}
fieldset input {
width: 250px;
}

-->
</style>








<head>

    <meta charset="utf-8">

    <title>M-1アンケート</title>

</head>

<body>

<img src="./data/logo.jpg" alt="">

    <form action="write.php" method="post">

 

        <fieldset>

            <legend>決勝3組に残ると思うコンビを選んでください（3組）</legend>

            <div>

                <input type="checkbox" id="shinku" name="combi[]" value="真空ジェシカ" />
                <label for="shinku">真空ジェシカ</label><br>
                <img src="./data/shinku.jpg" alt="">

            </div>

            <div>

                <input type="checkbox" id="tom" name="combi[]" value="トムブラウン" />
                <label for="tom">トムブラウン</label><br>
                <img src="./data/tom.jpg" alt="">

            </div>

            <div>

                <input type="checkbox" id="yaren" name="combi[]" value="ヤーレンズ" />
                <label for="yaren">ヤーレンズ</label><br>
                <img src="./data/ya-ren.jpg" alt="">

            </div>

            <div>

                <input type="checkbox" id="evars" name="combi[]" value="エバース" />
                <label for="evars">エバース</label><br>
                <img src="./data/evars.jpg" alt="">

            </div>

            <div>

                <input type="checkbox" id="daitaku" name="combi[]" value="ダイタク" />
                <label for="daitaku">ダイタク</label><br>
                <img src="./data/daitaku.jpg" alt="">

            </div>

            <div>

                <input type="checkbox" id="reiro" name="combi[]" value="令和ロマン" />
                <label for="reiro">令和ロマン</label><br>
                <img src="./data/reiro.jpg" alt="">

            </div>

            <div>

                <input type="checkbox" id="mama" name="combi[]" value="ママタルト" />
                <label for="mama">ママタルト</label><br>
                <img src="./data/mama.jpg" alt="">

            </div>

            <div>

                <input type="checkbox" id="batteries" name="combi[]" value="バッテリィズ" />
                <label for="batteries">バッテリィズ</label><br>
                <img src="./data/Batteries.jpg" alt="">

            </div>

            <div>

                <input type="checkbox" id="jock" name="combi[]" value="ジョックロック" />
                <label for="jock">ジョックロック</label><br>
                <img src="./data/jock.jpg" alt="">

            </div>

            <div>

                <input type="checkbox" id="revival" name="combi[]" value="敗者復活枠" />
                <label for="revival">敗者復活枠</label>

            </div>

        </fieldset>

       

        <div>

            <input type="submit" value="送信">

        </div>

    </form>

</body>

</html>
