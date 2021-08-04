<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.1.4.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/uikit.min.js'?>"></script>

    <script type="text/javascript" src="<?php echo base_url().'assets/js/uikit-icons.min.js'?>"></script>

  <script type="text/javascript" src="<?php echo base_url().'assets/js/dropify.min.js'?>"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        $('.dropify').dropify({
            messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
        });
    });
     
</script>

    <!--<script type="text/javascript" src="<?php echo base_url().'assets/js/filepond-plugin-image-preview.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/filepond-plugin-image-exif-orientation.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/filepond.min.js'?>"></script>

    <script>

FilePond.registerPlugin(
	FilePondPluginImageExifOrientation,
  FilePondPluginImagePreview
);
FilePond.setOptions({
	server: {
        process: {
            url: './assets/images/photos',
            method: 'POST',
            headers: {
                'x-customheader': 'Hello World'
            },
            withCredentials: false,
            onload: function(response) {
                return response.key;
            },
            onerror: function(response) {
                return response.data;
            }
        },
        fetch: './fetch/'
    }

});

FilePond.create(
	document.querySelector('#foto')
);
  </script>-->


</body>
</html>