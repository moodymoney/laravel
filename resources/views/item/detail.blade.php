<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>商品詳細</title>
</head>
<body>
<h1>商品詳細</h1>
<table border="1">
<tr>
<th>商品名</th>
<th>商品説明</th>
<th>値段</th>
<th>在庫の有無</th>
</tr>
<tr>
<td>{{$item->name}}</td>
<td>{{$item->description}}</td>
<td>{{$item->price}}</td>
@if ($item->inventory == 0)
<td>在庫無し</td>
@else
<td>在庫あり</td>
@endif
</tr>
</table>
<br>
<a href="{{route('index')}}">商品一覧へ戻る</a>
</body>
</html>
