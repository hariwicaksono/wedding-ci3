<?php $this->load->view('header');?>
	<body>
		<!-- Top header  -->
<div class="uk-background-cover uk-background-top-center uk-position-relative bg-blue-700" style="background-image: url(<?php echo base_url().'assets/images/layout_web_3.jpg'?>);height: 1080px"> 
	
    <div class="uk-position-top uk-container uk-container-expand">
        
    <?php $this->load->view('navbar');?>


<div class="naik-keatas" uk-grid>
	<div class="uk-width-1-1">
     <h1 class="uk-text-center uk-margin-remove merri"><strong>The Wedding</strong></h1>
     <h1 class="uk-text-center uk-heading-primary uk-margin-remove dancing"><strong>Akbar &amp; Risa</strong></h1>
     <h4 class="uk-text-center uk-margin-remove"><strong>AUDITORIUM LPP YOGYAKARTA, 24 DESEMBER 2018</strong></h4>
    </div>
</div>
<br>
<div class="uk-container uk-container-medium">
<?php
 
		if(count($results)>0)
		{
			foreach ($results as $data) {
        echo "<h3 class='uk-text-center uk-margin-remove'><strong>SELAMAT DATANG BAPAK/IBU:</strong></h3>";
			echo "<h1 class='uk-text-center uk-text-bold uk-margin-remove-top'>".$data->nama."</h1>";
			echo "<div class='uk-grid-match uk-grid-collapse uk-child-width-expand@m' uk-grid>";

            echo "<div>";
                echo "<div class='uk-flex uk-flex-center'>";

               if (isset($data->foto) && ! empty($data->foto)) { 
                echo "<div class='uk-frame'><div class='thumbnail'><img src='".site_url()."assets/images/photos/".$data->foto."'></div></div>";
            } else {
            echo "<div class='uk-frame'><div class='thumbnail'><img src='".site_url()."assets/img/ava.jpg'></div></div>";

            } 
                 
                echo "</div>";
            echo "</div>";
            echo "<div>";
                echo "<div class='uk-flex uk-flex-center'>";
                    echo "<div class='uk-frame'><div class='thumbnail'><img src='".site_url()."assets/img/Akbar_risa_1.jpg'></div></div>";

                echo "</div>";
            echo "</div>";
        echo "</div>";
			
			echo "<h3 class='uk-margin-remove-top uk-text-center'><strong><q>".$data->ucapan."</q></strong></h3>";
      echo "<h3 class='uk-margin-remove-top uk-text-center'><strong>".$data->vip."</strong></h3>";
			}
		}
 
		else
		{
			echo "<div class='uk-flex uk-flex-center'>";
                    echo "<div class='uk-frame'><img src='".site_url()."assets/images/Akbar_Risa_2.jpeg' width='800'></div>";

                echo "</div>";
		}
 
		?>

</div>
<hr>
<article class="uk-article uk-text-center">  

   <!-- <p class="uk-text-lead">"Ya Allah, kami memohon ridha dan rahmat-Mu untuk membimbing kami menuju jalan yang Engkau ridhai, menuju Sunnah Rasul-Mu yaitu membentuk keluarga yang Sakinah, Mawadah, Warahmah"
</p>-->

    <p class="uk-text-emphasis uk-text-bold">Yogyakarta, 24 Desember 2018. Auditorium LPP Yogyakarta. Jl. Urip Sumoharjo No.100, Klitren, Gondokusuman, Yogyakarta.</p>

</article>
</div>

</div>

<?php $this->load->view('footer');?>