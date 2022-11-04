@extends('layouts.layout')

@section('title')
    コンディション入力画面
@endsection

@section('content')
    <div class="top-page-home">
        <div class="register-title">
            <h1 class="pt-5">Insert <br>your fittness </h1>
            <h3 class="text-light-bottom">今日のコンディションを入力しよう！</h3>
        </div>
    </div>
    <h1>graph</h1>
        ここにグラフを表示
        {{ $btChart_list }}
    	<canvas id="myChart"></canvas>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
   <!-- <script>
	//ラベル
	var labels = [];
    labels.push($btChart_list->created_at);
	//最大体重ログ
	var btChart = [
		52.0,	//1月のデータ
		54.0,	//2月のデータ
		55.0,	//3月のデータ
		51.0,	//4月のデータ
		57.0,	//5月のデータ
		48.0	//6月のデータ
	];

	//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'line',
		data : {
			labels: labels,
			datasets: [
				{
					label: '朝の体温',
					data: btChart,
					borderColor: "rgba(0,255,0,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				}
			]
		},
		options: {
			title: {
				display: true,
				text: '朝の体温'
			}
		}
   });
   </script> -->
   <!-- グラフを描画ここまで -->

@endsection