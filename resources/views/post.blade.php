<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>


	<div class="form-wrapper">
		<h1>投稿</h1>
		<form method="post" enctype="multipart/form-data">
			@csrf
			<div class=" form-item">
				<label for="name"></label>
				<input type="text" name="name" required="required" placeholder="店名"></input>
			</div>

			<div class="form-item">
				<label for="adress"></label>
				<input type="text" name="address" required="required" placeholder="住所"></input>
			</div>

			<div class="form-item">
				<label for="taste"></label>
				<select name="taste" id="" class="taste">
					<option value="0">　味を選択してください</option>
					@foreach($tastes as $taste)
					<option value="{{$taste->id}}">{{$taste->taste}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-item">
				<label for="pic"></label>
				<input type="file" name="pic" required="required" placeholder="Pic"></input>
			</div>

			<div class="form-item">
				<textarea name="introduction" id="" cols="70" rows="10" placeholder="ラーメンに対する評価、ご感想をお書きください"></textarea>
			</div>

			<div class="button-panel">
				<input type="submit" class="button" title="post" value="投稿する"></input>
			</div>
		</form>

		<div class="form-footer">
		</div>
</body>

</html>