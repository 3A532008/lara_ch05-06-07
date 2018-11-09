@extends('layout.master')

@section('title','詳細資料')

@section('content')

	<div class="page-header">
		<h1>詳細資料</h1>
	</div>
	<div class="row">
		<p>
			學號：{{ Sstudent_no }}
		</p>
		<p>
			姓名：小明
		</p>
		<p>
			電話：0912345678
		</p>
		學號：{{ Sstudent_no }}

		@endif
	</div>
@stop
