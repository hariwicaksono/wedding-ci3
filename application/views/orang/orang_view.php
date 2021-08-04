<?php $this->load->view('orang/header');?>
<body>
    <div class="uk-background-cover uk-background-top-center uk-position-relative bg-blue-700" style="background-image: url(<?php echo base_url().'assets/images/layout_web_3.jpg'?>);height: 1080px"> 

    <div class="uk-container uk-container-small">
	 <nav class="uk-navbar-container uk-navbar-transparent uk-background-secondary uk-light" uk-navbar>
		 <div class="uk-navbar-left">
		
		<ul class="uk-navbar-nav">
            <li class="uk-active"><a href="<?php echo base_url().'confirm/u/'.$hasil->id;?>">Ubah Data</a></li>
            <li class="uk-active"><a href="<?php echo base_url().'confirm/v/'.$hasil->id;?>">Profil Saya</a></li>
			<li class="uk-active"><a href="<?php echo base_url().'confirm/ui/'.$hasil->id;?>">Ganti Foto</a></li>
    
        </ul>
		</div>
    <div class="uk-navbar-right">
 <div class="uk-navbar-item">
<?php if (isset($hasil->foto) && ! empty($hasil->foto)) { ?>
             <a href="<?php echo base_url().'confirm/ui/'.$hasil->id;?>"><img class="uk-border-rounded" src="<?=base_url()?>assets/images/photos/<?=$hasil->foto?>" width="50"></a>
            <?php } else { ?>
            <a href="<?php echo base_url().'confirm/ui/'.$hasil->id;?>"><img class="uk-border-rounded" src="<?=base_url()?>assets/img/ava.jpg" width="60"></a>
            <?php } ?>
        </div>

    </div>
</nav>

        <div class="uk-margin-small-top">
        


       <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">QR Code Anda</h3>
            <p><img src="<?=base_url()?>assets/images/qrcode/<?php echo $hasil->qr_code;?>?<?=random_string('alnum', 8);?>"></p>
            <h3 class="uk-card-title">Nama Anda</h3>
            <p><?php echo $hasil->nama;?></p>
            <h3 class="uk-card-title">Konfirmasi</h3>
            <p><?php echo $hasil->konfirmasi2;?></p>
            <h3 class="uk-card-title">Ucapan/Doa</h3>
            <p><?php echo $hasil->ucapan?></p>
        </div>
    </div>
    <div class="uk-card-media-right uk-cover-container">
        <?php if (isset($hasil->foto) && ! empty($hasil->foto)) { ?>
            <img src="<?=base_url()?>assets/images/photos/<?=$hasil->foto?>" uk-cover>
            <?php } else { ?>
            <img src="<?=base_url()?>assets/img/ava.jpg" uk-cover>
            <?php } ?>
        
        <canvas width="400" height="400"></canvas>
    </div>
</div>
    
        
        
</div>

</div>
</div>

<?php $this->load->view('orang/footer');?>