@extends('layouts.app')
@section('title', 'Teknikal Analisis Saham : Beginners')

@section('content')

<div class="modal" id="modal_demion_img" tabindex="-1" role="dialog" aria-labelledby="modal_demion_img_title" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="modal_demion_img_title"></h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<div class="modal-body">
        		<img class="img-responsive" id="my_image" style="width: 100%;" />
        	</div>
        </div>
    </div>
</div>    

<div class="container" style="margin-top: 40px;">
	<div class="row">
	  	<div class="col-4">
	    	<div class="list-group" id="list-tab" role="tablist" style="overflow: scroll; height: calc(80vh);">

	    		{{-- <a class="list-group-item list-group-item-action" id="course_1_modul_" data-toggle="list" href="#course_1_modul__content" role="tab" aria-controls="modul_">
	      			
	      		</a> --}}

	      		<a class="list-group-item list-group-item-action active" id="course_1_modul_1" data-toggle="list" href="#course_1_modul_1_content" role="tab" aria-controls="modul_1">
	      			BAB - 1 : Introduction
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_2" data-toggle="list" href="#course_1_modul_2_content" role="tab" aria-controls="modul_2">
	      			BAB - 2 : Cara menghindari kerugian
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_3" data-toggle="list" href="#course_1_modul_3_content" role="tab" aria-controls="modul_3">
	      			BAB - 3 : Analisa menggunakan metode stage
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_4" data-toggle="list" href="#course_1_modul_4_content" role="tab" aria-controls="modul_4">
	      			BAB - 4 : Dasar Elliot Wave Patern
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_5" data-toggle="list" href="#course_1_modul_5_content" role="tab" aria-controls="modul_5">
	      			BAB - 5 : Trading pada trending stocks
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_6" data-toggle="list" href="#course_1_modul_6_content" role="tab" aria-controls="modul_6">
	      			BAB - 6 : Cara menggambar garis trend
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_7" data-toggle="list" href="#course_1_modul_7_content" role="tab" aria-controls="modul_7">
	      			BAB - 7 : Dasar Moving Average
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_8" data-toggle="list" href="#course_1_modul_8_content" role="tab" aria-controls="modul_8">
	      			BAB - 8 : Dasar Suport dan Resistence
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_9" data-toggle="list" href="#course_1_modul_9_content" role="tab" aria-controls="modul_9">
	      			BAB - 9 : Psikologi dibalik pergerakan saham
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_10" data-toggle="list" href="#course_1_modul_10_content" role="tab" aria-controls="modul_10">
	      			BAB - 10 : Membaca volume pada chart
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_11" data-toggle="list" href="#course_1_modul_11_content" role="tab" aria-controls="modul_11">
	      			BAB - 11 : Cara membaca candlesticks
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_12" data-toggle="list" href="#course_1_modul_12_content" role="tab" aria-controls="modul_12">
	      			BAB - 12 : Dasar candlesticks pattern yang wajib di pahami
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_13" data-toggle="list" href="#course_1_modul_13_content" role="tab" aria-controls="modul_13">
	      			BAB - 13 : Doji candlestick pattern
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_14" data-toggle="list" href="#course_1_modul_14_content" role="tab" aria-controls="modul_14">
	      			BAB - 14 : Hammer candlestick pattern
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_15" data-toggle="list" href="#course_1_modul_15_content" role="tab" aria-controls="modul_15">
	      			BAB - 15 : Dasar membaca chart
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_16" data-toggle="list" href="#course_1_modul_16_content" role="tab" aria-controls="modul_16">
	      			BAB - 16 : Price action
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_17" data-toggle="list" href="#course_1_modul_17_content" role="tab" aria-controls="modul_17">
	      			BAB - 17 : Teknikal analisis dan Manajemen
	      		</a>
	      		<a class="list-group-item list-group-item-action" id="course_1_modul_18" data-toggle="list" href="#course_1_modul_18_content" role="tab" aria-controls="modul_18">
	      			BAB - 18 : Kesimpulan
	      		</a>
	    	</div>
	  	</div>
	  	<div class="col-8 account_page">
	    	<div class="tab-content" id="nav-tabContent">
		      	<div class="tab-pane show active" id="course_1_modul_1_content" role="tabpanel" aria-labelledby="course_1_modul_1">
		      		<div class="alert alert-primary" role="alert">
					  	<p style="font-style: italic;">Perlu anda ingat <strong>modul ini berisi dasar-dasar</strong> dan rahasia sukses trading yang <strong>wajib diketahui trader pemula</strong>.</p>
					</div>
		      		
		      		<p>
		      			Modul ini sangat cocok untuk anda yang baru mulai mempelajari trading saham dan berminat untuk menggunakan teknik swing trading. Tetapi pada modul ini tidak hanya akan membahas mengenai swing trading tetapi akan membawa anda sampai sukses dalam dunia trading terutama saham. Kebanyakan dari trader gagal dan rugi pada tahun pertama merupakan suatu fakta yang tidak dapat dibantah lagi. Alasan trader-trader ini gagal dan rugi adalah tidak memiliki pengetahuan, tidak membuat plan, dan tidak disiplin. Baca dan praktekan isi modul ini dan jangan lewatkan satupun bagian maka anda akan menjadi trader sukses. 
		      		</p>

		      		<p>
		      			<strong>Jadi, Apa itu swing trading?</strong>
		      		</p>
		      		<p>
		      			Swing trading --> gaya trading yang mencari pola pergerakan saham dengan harapan dapat dijual dalam jangka pendek. Biasanya rentan waktu pada teknik ini antara 2 - 5 hari waktu kerja.
		      		</p>
		      		<div class="alert alert-warning" role="alert">
					  	<strong>3 hal yang tidak perlu diperhatikan sebagai swing trader</strong>
					  	<ol style="padding-left: 14px; margin-top: 15px;">
					  		<li style="padding-left: 10px;">
					  			Fundamental perusahaan
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Produk yang dijual perusahaan itu
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Proses bisnis yang dilakukan perusahaan
					  		</li>
					  	</ol>
					</div>
					<div class="alert alert-success" role="alert">
					  	<strong>3 hal yang WAJIB diperhatikan sebagai swing trader</strong>
					  	<ol style="padding-left: 14px; margin-top: 15px;">
					  		<li style="padding-left: 10px;">
					  			Supply dan demand dari saham tersebut
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Peredaran uang yang terjadi pada saham tersebut
					  		</li>
					  		<li style="padding-left: 10px;">
					  			PLAN untuk masuk ke saham yang diinginkan dengan dampak/risiko kerugian terkecil
					  		</li>
					  	</ol>
					</div>
					<div class="alert alert-primary" role="alert">
  						<p><strong>Kata/Istilah Rumit</strong></p>
  						<ol style="padding-left: 14px; margin-top: 15px;">
					  		<li style="padding-left: 10px;">
					  			Pullback adalah ketika harga kembali menyentuh suport.
					  		</li>
					  	</ol>
					</div>
					<h3>
						Okay, let's get start our module!!!
					</h3>
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_2_content" role="tabpanel" aria-labelledby="course_1_modul_2">
		      		<div class="alert alert-primary" role="alert">
					  	<strong>10 hal yang harus dihindari agar tidak mengalami rugi yang besar</strong>
					  	<ol style="padding-left: 14px; margin-top: 15px;">
					  		<li style="padding-left: 10px;">
					  			Jangan mencari indikator terbaik karena hal itu tidak ada.
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Selalu ingat bahwa indikator adalah indikator yang membantu kita dalam menganalisa saham. Indikator bukanlah suatu hal paten bahwa saham tersebut harus di beli atau dijual. Setiap indikator dapat menghasilkan indikasi yang berbeda-beda.
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Jangan mendengar perkataan seseorang. Hal ini sangat sering terjadi pada forum-forum saham dimana orang bertanya saham apa yang akan naik. LAKUKANLAH ANALISA ANDA SENDIRI SEHINGGA ANDA TIDAK MARAH KETIKA SAHAM YANG ORANG KATAKAN PADA ANDA TIDAK SESUAI EKSPETASI ANDA.
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Jangan mengikuti gaya trading orang lain. Temukan gaya trading anda sendiri, plan anda dan cara and melakukan manajemen. Karena gaya orang lain belum tentu cocok untuk anda terapkan.
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Jika anda ingin menjadi trader dengan teknik swing anda tidak perlu perhatikan fundamental perusahaan tersebut. Karena jika anda melakukannya maka anda akan dibuat bingung ketika analisa anda berkata bahwa saham ini akan naik namun fundamentalnya kurang bagus. Sudah banyak bukti bahwa fundamental perusahaan tidak menjamin pergerakan saham tersebut.
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Sebelum membeli suatu saham buatlah trading plan. Perlu diingat ini merupakan hal yang sangat pernting dan krusial. Tanpa ini anda tidak akan pernah mengalami untung.
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Trading tidak membutuhkan perangkat mahal (Contoh : Komputer yang canggih). Anda hanya akan membuang-buang uang jika memikirkan hal ini.
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Emosi dan ketidak disiplinan merupakan musuh terbesar dari seorang trader. SO, kalian harus sabar dulu dalam melakukan trading. Ikuti plan yang telah anda buat dan percaya dirilah.
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Gunakan fitur stop loss yang telah disediakan broker. Sekarang hampir semua broker telah membuat fitur-fitur yang sangat membantu dalam melakukan trading. Jadi gunakanlah sebaik-baiknya apalagi anda tidak perlu mengeluarkan biaya untuk menggunakann fitur tersebut.
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Yang terakhir dan terpenting adalah LAKUKAN MANAJEMEN PADA UANG ANDA. Jangan berpikir saham A memiliki peluang naik tinggi sehingga anda ALL IN pada saham tersebut. Percayalah anda akan celaka di hari-hari berikutnya. Taruhlah saham anda pada beberapa saham yang telah anda screening akan naik. Sehingga jika ada yang rugi akan tertutup dengan saham yang untung lainnya.
					  		</li>
					  	</ol>
					</div>
					<p>10 hal ini perlu anda tanamkan pada pikiran anda dan selalu diingat karena 10 hal ini merupakan pondasi seorang swing trader.</p>
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_3_content" role="tabpanel" aria-labelledby="course_1_modul_3">
		      		<div class="alert alert-warning" role="alert">
					  	<p style="font-style: italic;">Untuk melanjutkan ke pembahasan selanjutnya anda perlu menguasai 4 stage pergerakan saham.</p>
					</div>
					<p>
						Setelah anda mempelajari teknik ini, sebaiknya anda langsung mencoba mengidentifikasikannya pada chart saham.
					</p>
					<p>
		      			<strong>Apa sih kegunaan dari mengetahui cara identifikasi stage pergerakan saham ?</strong>
		      		</p>
		      		<div class="alert alert-success" role="alert">
					  	<strong>Kegunaan dari mengetahui stage pergerakan saham</strong>
					  	<ol style="padding-left: 14px; margin-top: 15px;">
					  		<li style="padding-left: 10px;">
					  			Anda mengetahui apa yang harus anda lakukan.
					  		</li>
					  		<li style="padding-left: 10px;">
					  			Anda mengetahui kapan harus membeli, menjual dan hold.
					  		</li>
					  	</ol>
					</div>
					<p>Semua pergerakan saham pasti akan melalui 4 stage ini.</p>
					<img class="img-responsive demion_image" alt="Stage Pergerakan Saham" src="/img/card-1/stage.png" style="width:100%;" data-target="#modal_demion_img" data-toggle="modal" data-id="/img/card-1/stage.png" data-title="4 Stage Pergerakan Harga Sama">

					<p>Pergerakan harga suatu saham pada chart pada dasarnya hanya se-sederhana itu. Yang perlu anda laukan adalah mengidentifikasi suatu harga saham berada pada stage berapa.</p>
					<p>
		      			<strong>Stage 1</strong>
		      		</p>
		      		<p>Stage 1 merupakan saat dimana suatu saham telah mengalami down-trend berkepanjangan. Dan akan memulai harga yang stagnan. Pada tahap ini penjual akan melemah dan pembeli akan mulai lebih agresif. Akibat dari hal tersebut maka tren tidak akan jelas dan akan bergerak sideways.</p>
		      		<p>
		      			<strong>Stage 2</strong>
		      		</p>
		      		<p>
		      			Stage 2 merupakan saat dimana suatu saham akan uptrend dan mulai menanjak. Saat inilah merupakan saat yang tepat untuk membeli saham. Biasanya trader pemula akan ragu untuk membeli karena telah terjadi penurunan drastis pada tahap 1 sehingga akan telat membeli, dan pada saat trader pemula masuk maka trader yang telah lebih dulu membeli saham tersebut akan menjual dan harga saham akan turun kembali menuju stage selanjutnya.
		      		</p>
		      		<p>
		      			<strong>Stage 3</strong>
		      		</p>
		      		<p>
		      			Stage 3 merupakan saat dimana trader pemula masuk. Hal yang sering terjadi pada stage ini adalah trader pemula membeli saham tersebut karena berpikir akan terus naik dan trader yang sudah membeli saham tersebut pun menjual. Pada kondisi ini harga saham akan cenderung sideways atau stagnan.
		      		</p>
		      		<p>
		      			<strong>Stage 4</strong>
		      		</p>
		      		<p>
		      			Inilah saat dimana harga saham akan kembali turun. Trader pemula yang membeli pada stage 3 akan merasa bahwa ini hanyalah koreksi kecil dan akan cenderung HOLD. Namun percayalah kalian akan membuang-buang waktu.
		      		</p>
		      		<div class="alert alert-info" role="alert">
		      			<h4>Kesimpulan</h4>
					  	<p style="font-style: italic;">Pada stage 1 simpanlah uang anda. Pada stage 2 belilah saham tersebut. Di tahap 3 anda harus siap melakukan sell. Dan pada saat harga mulai jatuh pada stage 4 langsung sell saham tersebut.</p>
					  	<h5>Terapkan dan Sukses</h5>
					</div>

		      	</div>
		      	<div class="tab-pane" id="course_1_modul_4_content" role="tabpanel" aria-labelledby="course_1_modul_4">
		      		<div class="alert alert-warning" role="alert">
					  	<p style="font-style: italic;">Bab ini merupakan lanjutan dari Bab sebelumnya.</p>
					</div>
					<p>The Elliott Wave pattern merupakan struktur atau pola bagiaman suatu saham berperilaku. Semua saham cenderung bergerak dalam 5 wave dasar yang terdiri dari fase motif dan fase korektif.</p>
					<div class="alert alert-info" role="alert">
					  	<p><strong>Fase motif</strong> merupakan fase yang sangat disenangi oleh seorang swing trader. Karena pada fase ini saham akan bergerak naik sampai ke puncak.</p>
					  	<p><strong>Fase korektif</strong> merupakan fase dimana saham sudah mencapai harga yang terlalu tinggi(puncak) dan akan mencari harga yang tepat (turun).</p>
					</div>
					<img class="img-responsive demion_image" alt="Elliott Wave" src="/img/card-1/elliot_wave.png" style="width:100%; margin-bottom: 20px;" data-target="#modal_demion_img" data-toggle="modal" data-id="/img/card-1/
						elliot_wave.png" data-title="Elliott Wave">

					<div class="alert alert-info" role="alert">
					  	<p><strong>Keterangan</strong></p>
					  	<p>Wave 1 - 5 --> Fase motif</p>
					  	<p>Wave A - C --> Fase Korektif</p> 
					</div>
					<p>Mari kita bedah setiap wave</p>
					<p>
		      			<strong>Wave 1</strong>
		      		</p>
		      		<p>
		      			Wave ini melakukan break pada bearish trend sebelumnya dan memulai tren bullish. Wave ini merupakan tanda akan terjadi trend baru. Simpan di watchlist dan kamu akan melihat pullback ketika wave dimulai
		      		</p>
		      		<p>
		      			<strong>Wave 2</strong>
		      		</p>
		      		<p>
		      			Merupakan pullback, sekarang saatnya anda memperhatikan candlestick untuk masuk. Perlu diingat ini merupakan saat paling tepat untuk membeli saham karena harga saham berada pada suport. Tetapi anda tetap harus memperhatikan candlestick. Apabila candlesticknya bagus langsung lakukan buy dan sesuaikan dengan plan anda.
		      		</p>
		      		<p>
		      			<strong>Wave 3</strong>
		      		</p>
		      		<p>
		      			Wave ini merupakan wave bullish terkuat dan terpanjang. Itulah mengapa kita harus sudah harus membeli saham tersebut. 
		      		</p>
		      		<div class="alert alert-warning" role="alert">
					  	Jangan pernah melakukan sell dengan niatan untuk mengambil keuntungan pantulan. Pada wave ini anda harus bersabar karena anda akan mendapatkan lebih banyak keuntungan dari pada keluar masuk saham.
					</div>
		      		<p>
		      			<strong>Wave 4</strong>
		      		</p>
		      		<p>
		      			Wave ini merupakan wave dengan trend bullish namun mulai melemah. Dan dengan ini kita tau bahwa tren akan segera berakhir.
		      		</p>
		      		<p>
		      			<strong>Wave 5</strong>
		      		</p>
		      		<p>
		      			Masih trend bullish namun merupakan tanda paling kuat bahwa tren akan berakhir.
		      		</p>
		      		<p>
		      			<strong>Wave A, B, C</strong>
		      		</p>
		      		<p>
		      			Wave ini merupakan bearish trend. Jangan pernah tertipu ketika terjadi pullback pada wave ini karena itu hanyalah tipuan atau yang biasa disebut bull trap.
		      		</p>
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_5_content" role="tabpanel" aria-labelledby="course_1_modul_5">
		      		bisa
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_6_content" role="tabpanel" aria-labelledby="course_1_modul_6">
		      		mati
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_7_content" role="tabpanel" aria-labelledby="course_1_modul_7">
		      		orang
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_8_content" role="tabpanel" aria-labelledby="course_1_modul_8">
		      		
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_9_content" role="tabpanel" aria-labelledby="course_1_modul_9">
		      		
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_10_content" role="tabpanel" aria-labelledby="course_1_modul_10">
		      		
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_11_content" role="tabpanel" aria-labelledby="course_1_modul_11">
		      		
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_12_content" role="tabpanel" aria-labelledby="course_1_modul_12">
		      		
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_13_content" role="tabpanel" aria-labelledby="course_1_modul_13">
		      		
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_14_content" role="tabpanel" aria-labelledby="course_1_modul_14">
		      		
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_15_content" role="tabpanel" aria-labelledby="course_1_modul_15">
		      		
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_16_content" role="tabpanel" aria-labelledby="course_1_modul_16">
		      		
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_17_content" role="tabpanel" aria-labelledby="course_1_modul_17">
		      		
		      	</div>
		      	<div class="tab-pane" id="course_1_modul_18_content" role="tabpanel" aria-labelledby="course_1_modul_18">
		      		
		      	</div>
	    	</div>
	  	</div>
	</div>
</div>


@endsection