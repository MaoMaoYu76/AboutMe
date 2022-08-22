@extends('master.model')
@section('content')
<div class="container px-5 py-3">
只會一些些css的我，為了將導覽列的圖示做出顏色變化，花了兩天。<br><br>

<b>想法一：把圖示改成css背景圖用hover控制</b><br>
結果：圖片沒有辦法好好待在li裡，失控的亂跑，甚至不見。<br><br>
<b>想法二：把圖示疊在同一個區域，用opacity控制。</b><br>
結果：光是要兩張png堆疊在同一個區域就摸索一陣，而position設定了absolute之後根本是一場災難的開始。<br><br>
<b>想法三：用mask-image。</b><br>
結果：好像沒辦法指定顏色和區域呢，看來css是不行了，得找找JS。<br><br>

最後在狂亂的Google之下，從關鍵字hover javascript中，找到了onmouseover，就此打開新世界大門，順利得到W3School的範例。<br><br>
這個煩惱的過程很有趣，其實我也在想，導覽列我用了七個changeImage的函式，那些需要複製貼上的script是不是也有更好的function寫法可以代替呢？真希望我也能寫出來。<br>

</div>
@endsection