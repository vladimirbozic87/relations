<script type="text/javascript" src="<?php echo e(URL::asset('js/app.js')); ?>"></script>


<h3>Ajax Form</h3>

<p><input type="text" id="idPosts"></p>

<p><input type="button" value="Submit" id="submitAjax"></p>

   <script>
      var param = $('#idPosts').val();
      var url = "<?php echo e(route('ajaxResults', ['param' => 1])); ?>";
   </script>

<hr>

<div id="ajaxContent"></div>

<script type="text/javascript" src="<?php echo e(URL::asset('js/ajax.js')); ?>"></script>