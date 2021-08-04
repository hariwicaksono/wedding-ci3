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
        
        

        <div class="uk-card uk-card-default uk-padding">
         
    
    <?php if($this->session->flashdata('msg')): ?>
    <p><?php echo $this->session->flashdata('msg'); ?></p>
<?php endif; ?>

        <form class="uk-form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url().'confirm/ui/'.$hasil->id;?>">
               <legend class="uk-legend text-grey-900"><strong>Ubah Foto -  The Wedding Akbar &amp; Risa</strong></legend>
                    
                        <div class="uk-form-controls">
                            <input name="id" value="<?php echo $hasil->id;?>" type="hidden">
                        </div>
                   

<div class="uk-margin" id="uploadFoto">
       
            <label class="uk-form-label text-grey-900" ><strong>Pilih foto:</strong></label>
            <div class="uk-form-controls">
            <input type="hidden" name="old_foto" value="<?=$hasil->foto?>">
            <input class="dropify" data-height="200" type="file" id="foto" name="foto">
            
            </div>


    </div>
 
              
 
                <div>
                    
                     <button type="submit" class="uk-button uk-button-primary uk-width-1-1">KIRIM <span uk-icon="icon: check"></span></button>
                    
                </div>
</form>

       

</div>

</div>
</div>

<?php $this->load->view('orang/footer');?>